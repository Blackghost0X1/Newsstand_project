<?php
require_once("../../Controllers/ContentController.php");
require_once("../../Controllers/Database.php");
require_once("../../Models/Category.php");
require_once("../../Models/Author.php");

require_once("../../Models/Content.php");
require_once("../../Models/Article.php");

$contentController = new ContentController;

$error="";
$magazines=array();
$articles=array();
$magazine_orderBy="num_of_download desc";
$article_orderBy="total_reads desc";
$category_id=null;
$categories=$contentController->getCategories();
if(isset($_POST["sort"]))
{
  if ($_POST["sort"] != "total_reads")
  {
    if($_POST["sort"] == "author_header")
    {
    $magazine_orderBy="header_id";
    $article_orderBy="author_id";
   }
   
   else
   $magazine_orderBy=$article_orderBy=$_POST["sort"];
}
}
if (isset($_POST["category"]))
{
  if($_POST["category"] != "all")
  {
    $category_id=$_POST["category"];
  }
}
if (isset($_GET["searchTerm"])) {
  if (!empty($_GET["searchTerm"])) {
    $searchTerm=$_GET["searchTerm"];
    $magazines = $contentController->searchMagazines($searchTerm, $magazine_orderBy, $category_id);
    $articles =  $contentController->searchArticles($searchTerm, $article_orderBy, $category_id);
  } 
  else
    $error = "you have not entered any searh term";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Search Results - Blogy Bootstrap Template</title>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="search-results-page">
<?php
require_once("header.php"); ?>

  <main class="main">
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="#">Category</a></li>
            <li class="breadcrumb-item active current">Search Results</li>
          </ol>
        </nav>
      </div>
      <div class="title-wrapper">
        <h1>Search Results</h1>
        <?php if(!empty($error))
        { ?>
           <p><strong><?php echo $error;?> </strong></p>
        <?php } 
        else { ?>
          <p>We found <strong><?php echo count($magazines)+count($articles);?> </strong> results for your search term <strong>search term: <?php echo $_GET["searchTerm"];?></strong></p>

<?php } ?>
      </div>
    </div>
    <?php
if(empty($error)){

?>
    <div class="container mb-4">
      <form class="row g-3" method="Post" action="search-results.php?searchTerm=<?php echo $_GET["searchTerm"];?>">
        
        <div class="col-md-3">
          <label for="filterCategory" class="form-label">Sort by</label>
          <select name="sort" class="form-select" id="sortBy">
            <option value="total_reads" selected>Most reading</option>
            <option value="publish_date desc">Most recent</option>
            <option value="category_id">Category</option>
            <option value="author_header">Author/Header</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="filterCategory" class="form-label">Category</label>
          <select name="category" class="form-select" id="filterCategory">
            <option value="all" selected>All</option>
            <?php foreach($categories as $cat){ ?>
            <option value="<?php echo $cat->categoryID;?>"><?php echo ucfirst($cat->catName);?> </option>
            <?php } ?>  
          </select>
        </div>
        <div class="col-md-4 d-flex align-items-end">
          <button type="submit" class="btn btn-primary w-50">Apply Filters</button>
        </div>
      </form>
    </div>

    <section id="search-results-posts" class="search-results-posts section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Articles Section -->
        <h3 class="mb-4">Magazine (<?php echo count($magazines);?>)</h3>
        <div class="row gy-4">
         <?php foreach($magazines as $mag){
          if ($magCounter % 3 == 0 && $magCounter != 0) {
            echo '</div><div class="row gy-4">'; // Close and open new row every 3 items
        }
?>
          <div class="col-lg-4">
            <article>
              <div class="post-img">
                <img src="assets/img/blog/blog-post-1.webp" alt="" class="img-fluid">
              </div>
              <p class="post-category"><?php echo $mag->categories[0]->catName;?></p>
              <h2 class="title">
                <a href="blog-details.html"><?php echo $mag->title;?></a>
              </h2>
              <div class="d-flex align-items-center">
                <img src="assets/img/person/person-f-12.webp" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author"><?php echo $mag->header;?></p>
                  <p class="post-date">
                    <time datetime="2022-01-01"><?php echo $mag->publishDate;?></time>
                  </p>
                </div>
              </div>
            </article>
          </div>
          <?php }  ?>
        </div>

        <!-- Magazines Section -->
        <h3 class="mb-4">Articles (<?php echo count($articles); ?>)</h3>
        <div class="row gy-4">
<?php  $artCounter = 0;
foreach($articles as $art){ 
   if ($artCounter % 3 == 0 && $artCounter != 0) {
    echo '</div><div class="row gy-4">'; // Close and open new row every 3 items
}
  ?>   
         <div class="col-lg-4">
            <article>
              <div class="post-img">
                <img src="assets/img/blog/blog-post-2.webp" alt="" class="img-fluid">
              </div>
              <p class="post-category"><?php echo $art->categories[0]->catName;?> </p>
              <h2 class="title">
                <a href="blog-details.html"><?php echo $art->title;?></a>
              </h2>
              <div class="d-flex align-items-center">
                <img src="assets/img/person/person-f-13.webp" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author"><?php echo $art->author->firstName." ".$art->author->lastName;?></p>
                  <p class="post-date">
                    <time datetime="2022-01-01"><?php echo $art->publishDate;?></time>
                  </p>
                </div>
              </div>
            </article>
          </div>
          <?php
 $artCounter++;
 } ?> 
        </div>
        

      </div>
    </section>

    <?php } ?>  
  </main>

  <footer id="footer" class="footer">
    <div class="container text-center mt-4">
      <p>© <strong class="sitename">Blogy</strong>. All Rights Reserved</p>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>