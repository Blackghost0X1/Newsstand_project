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
$magazine_orderBy="num_of_download desc";
$article_orderBy="total_reads desc";

$category_id=null;
if(isset($_POST["category_id"]))
{
$category_id=$_POST["category_id"];
}
$categories=$contentController->getCategories();
$magazines = $contentController->searchMagazines("%", $magazine_orderBy, $category_id);
$articles =  $contentController->searchArticles("%", $article_orderBy, $category_id);




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Articles - Blogy</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    :root {
      --primary-color: #ffffff;
      --accent-color: #f75815;
      --light-bg: #f9f9f9;
      --text-color: #212529;
      --secondary-text: #6c757d;
      --border-radius: 8px;
      --box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
      --card-bg: #ffffff;
      --hover-color: #f75815;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      line-height: 1.6;
      color: var(--text-color);
      background: var(--light-bg);
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Header Styles */
    .header {
      background: var(--primary-color);
      padding: 1rem 0;
      box-shadow: var(--box-shadow);
    }

    .header-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--accent-color);
      text-decoration: none;
    }

    /* Navigation */
    .nav {
      display: flex;
      gap: 2rem;
    }

    .nav-link {
      color: var(--text-color);
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    .nav-link:hover, .nav-link.active {
      color: var(--accent-color);
    }

    /* Page Title */
    .page-title {
      text-align: center;
      padding: 3rem 0;
      background: var(--primary-color);
      margin-bottom: 2rem;
    }

    .page-title h1 {
      font-size: 2.5rem;
      color: var(--text-color);
      margin-bottom: 1rem;
    }

    /* Filter Buttons */
    .filter-section {
      text-align: center;
      margin-bottom: 2rem;
      padding: 1rem;
      background: var(--primary-color);
      border-radius: var(--border-radius);
      box-shadow: var(--box-shadow);
    }

    .filter-btn {
      padding: 0.5rem 1.5rem;
      margin: 0.5rem;
      border: 2px solid var(--accent-color);
      background: transparent;
      color: var(--text-color);
      border-radius: 25px;
      cursor: pointer;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .filter-btn:hover, .filter-btn.active {
      background: var(--accent-color);
      color: white;
    }

    /* Article Cards */
    .article-card {
      background: var(--card-bg);
      border-radius: var(--border-radius);
      box-shadow: var(--box-shadow);
      transition: transform 0.3s ease;
      margin-bottom: 1rem;
      display: flex;
      flex-direction: column;
      height: 100%;
    }

    .article-card:hover {
      transform: translateY(-5px);
    }

    .article-content {
      padding: 1.5rem;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .article-content h3 {
      font-size: 1.5rem;
      margin-bottom: 1rem;
      color: var(--text-color);
    }

    .article-excerpt {
      color: var(--secondary-text);
      margin-bottom: 1rem;
    }

    .article-tag {
      background: var(--primary-color);
      color: var(--text-color);
      padding: 0.3rem 0.8rem;
      border-radius: 20px;
      font-size: 0.9rem;
      margin-right: 0.5rem;
      display: inline-block;
    }

    /* Article Grid */
    .article-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      padding: 1rem;
    }

    .article-image {
      width: 100%;
      height: 240px;
      overflow: hidden;
    }

    .article-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .article-meta {
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
      gap: 0.5rem;
    }

    .author-image {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      object-fit: cover;
    }

    .author {
      font-weight: 500;
      color: #666;
    }

    .date {
      color: #888;
      font-size: 0.9rem;
    }

    .article-tags {
      display: flex;
      gap: 0.5rem;
      margin-bottom: 1rem;
      flex-wrap: wrap;
    }

    .read-more {
      background: var(--accent-color);
      color: white;
      border: none;
      padding: 0.8rem 1.5rem;
      border-radius: 25px;
      cursor: pointer;
      font-weight: 500;
      transition: background-color 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }

    .read-more:hover {
      background: var(--hover-color);
      color: white;
    }

    .article-actions {
      margin-top: auto;
      padding-top: 1rem;
    }

    /* Footer */
    .footer {
      background: var(--primary-color);
      color: var(--text-color);
      padding: 4rem 0 2rem;
      margin-top: 4rem;
      border-top: 1px solid rgba(0, 0, 0, 0.1);
    }

    .footer-content {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 3rem;
      margin-bottom: 3rem;
    }

    .footer-section h3 {
      margin-bottom: 1.5rem;
      color: var(--text-color);
      font-size: 1.25rem;
      font-weight: 600;
    }

    .footer-links {
      list-style: none;
    }

    .footer-links li {
      margin-bottom: 0.75rem;
    }

    .footer-links a {
      color: var(--secondary-text);
      text-decoration: none;
      transition: all 0.3s ease;
      display: inline-block;
    }

    .footer-links a:hover {
      color: var(--accent-color);
      transform: translateX(5px);
    }

    .footer-bottom {
      text-align: center;
      padding-top: 2rem;
      border-top: 1px solid rgba(0, 0, 0, 0.1);
      color: var(--secondary-text);
      font-size: 0.9rem;
    }
  </style>
</head>

<body>

<?php require_once("header.php"); ?>

  <div class="page-title">
    <div class="container">
      <h1>Our Articles</h1>
      <p>Discover our collection of premium articles</p>
    </div>
  </div>

  <main class="container">
    <!-- Filter Section -->
    <form action="articles.php?" method="post" class="filter-section">
      <button class="filter-btn <?php if (isset($_POST["all"]))
      echo "active";?>" type="submit" name="all" >All</button>
      <?php 
      foreach($categories as $cat)
      {
        ?>
      <button class="filter-btn <?php if (isset($_POST["category_id"]) && $_POST["category_id"] == $cat->categoryID)
      echo "active";?>" type="submit" name="category_id" value="<?php echo $cat->categoryID;?>"><?php echo ucfirst($cat->catName);?></button>
 <?php } ?>
  </form>

    <!-- Article Grid -->
    <div class="article-grid">
      <!-- Technology Articles -->
       <?php 
       foreach($articles as $art) { ?>
      <article class="article-card" data-category="technology" data-article-id="ai-revolution">
        <div class="article-image">
          <img src="<?php echo $art->coverImage;?>" alt="AI Technology">
        </div>
        <div class="article-content">
          <h3><?php echo $art->title;?> </h3>
          <div class="article-meta">
            <span class="author"><?php echo $art->author->firstName." ".$art->author->lastName;?></span>
            <span class="date"><?php echo $art->publishDate;?></span>
          </div>
          <p class="article-excerpt"><?php echo $art->description;?></p>
          <div class="article-tags">
            <span class="article-tag"><?php $art->categories[0]->catName;?></span>
            
          </div>
          <div class="article-actions">
            <a href="article-sample.php?articleId=<?php echo $art->contentID;?>&lang=english" class="read-more">
              <i class="bi bi-book"></i>
              Read More
            </a>
          </div>
        </div>
      </article>
      <?php }   ?>

   
    </div>
  </main>

  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-section">
          <h3>About Blogy</h3>
          <p>Your source for premium articles and digital content.</p>
        </div>
        <div class="footer-section">
          <h3>Quick Links</h3>
          <ul class="footer-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="article.php">Articles</a></li>
            <li><a href="magazine.php">Magazines</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h3>Contact Us</h3>
          <ul class="footer-links">
            <li>Email: info@blogy.com</li>
            <li>Phone: (123) 456-7890</li>
            <li>Address: 123 Magazine St, City</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script>
    // Simplified JavaScript for article listing page
    document.addEventListener('DOMContentLoaded', function() {
        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
      const articleCards = document.querySelectorAll('.article-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                button.classList.add('active');

                const filter = button.getAttribute('data-filter');

                // Show/hide articles based on filter
                articleCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'block';
      } else {
                        card.style.display = 'none';
                    }
                });
      });
    });
  });
  </script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html> 