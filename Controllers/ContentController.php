<?php
class ContentController
{
    public $db;
   
    private function getRows($query)
    {
        $this->db = new Database;
        if ($this->db->openConnection()) {
            $res = $this->db->select($query);
            return $res;
        } else {
            //  echo "Error in Database Connection";
            return false;
        }
    }
    public function getContentCats($contentID)
    {
        $query = "select categories.* from categories, content_categories 
where categories.category_id=content_categories.category_id
and content_id=" . $contentID;

        $res = $this->getRows($query);
        $cats = array();
        if ($res != false) {
            $i = 0;
            foreach ($res as $cat) {
                $cats[$i] = new Category;
                $cats[$i]->categoryID = $cat["category_id"];
                $cats[$i]->catName = $cat["type"];
                $i++;
            }
        }
        return $cats;
    }
    public function getMorningArticles()
    {

        $query = "select * from contents,articles,authors
            where content_id=article_id 
            and articles.author_id = authors.author_id
            and article_id in (select content_id from content_categories, categories where 
            content_categories.category_id=categories.category_id 
            and type = 'morning') 
            order by publish_date desc LIMIT 10";

        $result = $this->getRows($query);
        $articles = array();
        $i = 0;
        foreach ($result as $row) {
            $articles[$i] = new Article;
            $articles[$i]->contentID = $row["article_id"];
            $articles[$i]->title = $row["title"];
            $articles[$i]->publishDate = $row["publish_date"];
            $articles[$i]->author = new Author;
            $articles[$i]->author->author_id = $row["author_id"];
            $articles[$i]->author->firstName = $row["first_name"];
            $articles[$i]->author->lastName = $row["last_name"];
            $articles[$i]->description = $row["description"];
            $articles[$i]->coverImage = $row["cover_img"];
        }
        return $articles;
    }
    public function getArticlesByAuthor($author_id)
    {

        $query = "select contents.*, articles.*, categories.type as cat
         from contents,articles, content_categories, categories
            where contents.content_id=article_id
            and content_categories.content_id = article_id
            and content_categories.category_id = categories.category_id 
            and articles.author_id = " . $author_id . "
            order by total_reads desc";

        $result = $this->getRows($query);
        $articles = array();
        $i = 0;
        foreach ($result as $row) {
            $articles[$i] = new Article;
            $articles[$i]->contentID = $row["article_id"];
            $articles[$i]->title = $row["title"];
            $articles[$i]->publishDate = $row["publish_date"];
            $articles[$i]->description = $row["description"];
            $articles[$i]->categories = array();
            $articles[$i]->categories[0] = new Category;
            $articles[$i]->categories[0]->catName = $row["cat"];
            $articles[$i]->coverImage = $row["cover_img"];
            $i++;
        }
        return $articles;
    }
    
    public function getBestOfCategories()
    {
        $query = "select 
        distinct categories.type as cat, contents.*, articles.* 
        from categories, contents, articles, content_categories
        where contents.content_id=article_id 
        and categories.category_id = content_categories.category_id 
        and content_categories.content_id = contents.content_id
        and categories.type != 'morning'
        order by total_reads desc
        limit 20";

        $result = $this->getRows($query);
        $articles = array();
        $i = 0;
        $seenArticles = array();
        $seenCategories = array();
        foreach ($result as $row) {
            if (!isset($seenArticles[$row["article_id"]]) && !isset($seenCategories[$row["cat"]])) {
                $articles[$i] = new Article;
                $articles[$i]->contentID = $row["article_id"];
                $articles[$i]->title = $row["title"];
                $articles[$i]->publishDate = $row["publish_date"];
                $articles[$i]->coverImage = $row["cover_img"];
                $articles[$i]->categories = array();
                $articles[$i]->categories[0]=new Category;
                $articles[$i]->categories[0]->catName = $row["cat"];
                $seenArticles[$row["article_id"]] = true;
                $seenCategories[$row["cat"]] = true;
                $i++;
            }
        }
        return $articles;
    }

    public function searchMagazines($key, $orderBy = "total_downloads desc", $category_id =  Null)
    {
            $key = "%" . trim($key) . "%";
            $query = " select categories.type as cat, contents.*,  magazines.* , content_categories.* , categories.*
       from contents, magazines, content_categories, categories
       where contents.content_id=magazine_id 
       and contents.content_id = content_categories.content_id
       and categories.category_id = content_categories.category_id";

            if ($category_id  != null) {
                $query = $query . " and content_categories.category_id =" . $category_id;
            }
            $query = $query . " and (lower(title) like lower('" . $key . "') or 
            lower(description) like lower('" . $key . "'))
             order by " . $orderBy;

             $magazines = array();
            $result = $this->getRows($query);
            if ($result != false) {
                $seenMagazines = array();
                $i = 0;
                foreach ($result as $row) {
                    if (!isset($seenMagazines[$row["magazine_id"]])) {
                        $magazines[$i] = new MagazineIssue;
                        $magazines[$i]->contentID = $row["magazine_id"];
                        $magazines[$i]->title = $row["title"];
                        $magazines[$i]->header = $row["header"];
                        $magazines[$i]->description = $row["description"];
                        $magazines[$i]->categories = array();
                        $cat = new Category;
                        $cat->categoryID = $row["category_id"];
                        $cat->catName = $row["cat"];
                        $magazines[$i]->categories[] = $cat;
                        $seenMagazines[$row["magazine_id"]] = true;
                        $i++;
                    }
                }
            }
            return $magazines;
        }
    

    public function searchArticles($key, $orderBy = "total_reads desc", $category_id=Null)
    {
        $key = trim($key);
        $key = "%" . $key . "%";

        $query1 = "select 2 as priority, categories.type as cat, categories.category_id as cat_id, authors.*, contents.*, articles.* 
        from contents, authors, articles, bodies, content_categories, categories
        where contents.content_id=articles.article_id
        and authors.author_id=articles.author_id 
        and contents.content_id=content_categories.content_id
        and categories.category_id =content_categories.category_id
        and bodies.article_id=articles.article_id
        and (lower(bodies.body) like lower('" . $key . "') or lower(description) like lower('" . $key . "') )";
        
        $query2 = "select 1 as priority, categories.type as cat, categories.category_id as cat_id, authors.*, contents.*, articles.* 
        from contents, authors, articles, bodies, content_categories, categories
        where contents.content_id=articles.article_id
        and authors.author_id=articles.author_id 
        and contents.content_id=content_categories.content_id
        and categories.category_id =content_categories.category_id
        and bodies.article_id=articles.article_id
        and lower(title) like lower('" . $key . "')";

        if($category_id != null){
            $query1 = $query1." and content_categories.category_id =".$category_id;
            $query2 = $query2." and content_categories.category_id =".$category_id;
        }
        $query=$query1." union all ".$query2." order by priority asc, " . $orderBy;

       
        $articles=array();
        $result=$this->getRows($query);
        if($result != false)
        {
            $seenArticles = array();
            $i = 0;
            foreach ($result as $row) {
                if (!isset($seenArticles[$row["article_id"]])) {
                    $articles[$i] = new Article;
                    $articles[$i]->contentID = $row["article_id"];
                    $articles[$i]->title = $row["title"];
                    $articles[$i]->publishDate = $row["publish_date"];
                    $articles[$i]->coverImage = $row["cover_img"];
                    $articles[$i]->description = $row["description"];
                    $articles[$i]->categories = array();
                    $articles[$i]->author= new Author;
                    $articles[$i]->author->firstName= $row["first_name"];
                    $articles[$i]->author->lastName= $row["last_name"];
                    //$articles[$i]->author->img= $row["img"];
                    $cat = new Category;
                    $cat->categoryID = $row["cat_id"];
                    $cat->catName = $row["cat"];
                    $articles[$i]->categories[] = $cat;
                    $seenArticles[$row["article_id"]] = true;
                    $i++;
                }
            }
        }
        return $articles;
        }
    
    public function getArticle($articleId)
    {
        $query = "select * from contents, articles
        where contents.content_id=articles.article_id
        and articles.article_id=" . $articleId;
        $res = $this->getRows($query);
        if ($res != false) {
            $article = new Article;
            $article->contentID = $res[0]["article_id"];
            $article->title = $res[0]["title"];
            $article->publishDate = $res[0]["publish_date"];
            $article->description = $res[0]["description"];
            $article->coverImage = $res[0]["cover_img"];
            $article->totalReads = $res[0]["total_reads"];
            $query = "update articles set total_reads =total_reads + 1 where article_id=" . $article->contentID;
            $this->db->update($query);
            return $article;
        } else
            return false;
    }
    public function getArticleBody($articleId, $language = "english")
    {
        $query = "select * from bodies 
        where language='" . $language .
            "' and article_id=" . $articleId;

        $res = $this->getRows($query);
        $body = new Body;
        $body->language = $language;
        if ($res != false) {
            $body->audioPath = $res[0]["audio_path"];
            $body->content = $res[0]["body"];
        } else {
            $body->content = "Content is not available now";
        }
        return $body;
    }
    public function getArticleComments($articleId)
    {
        $query = "select * from comments, users
        where comments.user_id = users.user_id
        and content_id =" . $articleId . " order by creation_time desc";

        $res = $this->getRows($query);
        $comments = array();
        if ($res != false) {
            $i = 0;
            foreach ($res as $comment) {
                $comments[$i] = new Comment;
                $comments[$i]->comment_id = $comment["comment_id"];
                $comments[$i]->user = new EndUser;
                $comments[$i]->user->userID = $comment["user_id"];
                $comments[$i]->user->firstName = $comment["first_name"];
                $comments[$i]->user->lastName = $comment["last_name"];
                $comments[$i]->postTime = $comment["creation_time"];
                $comments[$i]->content = $comment["content"];
                $i++;
            }
        }
        return $comments;
    }
    public function getArticleAuthor($articleId)
    {

        $query = "select authors.* from authors, articles
    where authors.author_id=articles.author_id
    and article_id=" . $articleId;
        $res = $this->getRows($query);
        if ($res != false) {
            $author = new Author;
            $author->author_id = $res[0]["author_id"];
            $author->firstName = $res[0]["first_name"];
            $author->lastName = $res[0]["last_name"];
            $author->email = $res[0]["email"];
            $author->bio = $res[0]["bio"];
            return $author;
        }
        return false;
    }
    public function getArticleLangs($articleId)
    {
        $query = "select language from bodies where article_id=" . $articleId;
        $res = $this->getRows($query);
        $langs = array();
        if ($res != false) {
            $i = 0;
            foreach ($res as $lang) {
                $langs[$i] = $lang["language"];
                $i++;
            }
        } else
            $langs[0] = "english";
        return $langs;
    }
    public function isDuplicateComment($comment, $content)
    {
        $query = "select * from comments 
    where content='" . trim($comment->content) . "' 
    and user_id=" . $comment->user->userID . "
    and content_id=" . $content->contentID;

        if (count($this->getRows($query)) > 0)
            return true;
        return false;
    }

    public function postComment($comment, $content)
    {
        $this->db = new Database;

        if ($this->db->openConnection() && !$this->isDuplicateComment($comment, $content)) {
            $query = "insert into comments (comment_id, content, creation_time, user_id, content_id)
   values (Null,'" . trim($comment->content) . "', NOW(), " . $comment->user->userID . ", " . $content->contentID . ")";
            return $this->db->insert($query);
        } else
            return false;
    }
    public function getRelatedArticles($categories, $article)
    {
        $relatedArticles = array();
        $i = 0;
        foreach ($categories as $category) {
            $query = "select contents.*, articles.* 
        from contents, articles, content_categories
        where (contents.content_id=articles.article_id
        and contents.content_id=content_categories.content_id
        and article_id !=" . $article->contentID .
                " and category_id=" . $category->categoryID .
                ") order by total_reads desc limit 3";

            $result = $this->getRows($query);
            foreach ($result as $row) {
                if (isset($seenArticles[$row["content_id"]])) {
                    continue;
                }
                $seenArticles[$row["content_id"]] = true;
                $relatedArticles[$i] = new Article;
                $relatedArticles[$i]->contentID = $row["content_id"];
                $relatedArticles[$i]->coverImage = $row["cover_img"];
                $relatedArticles[$i]->title = $row["title"];
                $relatedArticles[$i]->publishDate = $row["publish_date"];
                $i++;
            }
        }
        return $relatedArticles;
    }
    public function deleteComment($comment_id)
    {
        if ($this->db == null) {
            $this->db = new Database;
            $this->db->openConnection();
        }
        $query = "delete from comments where comment_id=" . $comment_id;
        return $this->db->delete($query);
    }
    public function getCategories(){
        
        $query="select * from categories";
        $res=$this->getRows($query);
        $categories= array(); $i=0;
        if($res != false){
            foreach($res as $row)
            {
                $categories[$i]=new Category;
                $categories[$i]->catName=$row["type"];
                $categories[$i]->categoryID=$row["category_id"];
                $i++;              

            }
        }
        return $categories;
    }
}
