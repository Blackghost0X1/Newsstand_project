<?php

class AuthorController
{
    protected $db;

    private function initializeDB()
    {
        if ($this->db == null) {
            $this->db = new Database;
            return $this->db->openConnection();
        }
        return true;
    }
    public function getAuthor($authorId)
    { 
        $author = null;
        if ($this->initializeDB()) {
            $query = "SELECT * FROM authors WHERE author_id =". $authorId;
           $res=$this->db->select($query);
           $author= new Author;
           $author->firstName=$res[0]['first_name'];
           $author->lastName=$res[0]['last_name'];
           $author->email=$res[0]['email'];
           $author->author_id=$res[0]['author_id'];
           $author->img=$res[0]['_img'];
           $author->bio=$res[0]['bio'];

           return $author;
        }
        return false;
    }
    public function countArticles($authorId)
    {
        if ($this->initializeDB()) {
            $query = "SELECT COUNT(*) as count FROM articles where author_id=".$authorId;
             $res=$this->db->select($query);
            return $res[0]['count'];
        }
        return 0;
    }


}
?>