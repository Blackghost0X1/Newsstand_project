<?php


session_start();

require_once("../../Models/Category.php");
require_once("../../Models/Author.php");
require_once("../../Models/Body.php");
require_once("../../Models/User.php");
require_once("../../Models/EndUser.php");

require_once("../../Models/Comment.php");


require_once("../../Models/Content.php");
require_once("../../Models/Article.php");

require_once("../../Controllers/ContentController.php");
require_once("../../Controllers/UserController.php");
require_once("../../Controllers/Database.php");

$user = new EndUser;
$user->userID = 2;
$_SESSION["user"] = $user;
if (isset($_GET["articleId"]) && isset($_GET["lang"])) {
  $contentController = new ContentController;
  $article = $contentController->getArticle($_GET["articleId"]);
  $userController = new UserController;


  if ($article != false) {
    if (isset($_POST["postedComment"])) {
      if (isset($_SESSION["user"])) {
        $comment = new Comment;
        $comment->user = $_SESSION["user"];

        $comment->content = $_POST["postedComment"];
        if ($contentController->postComment($comment, $article) == false)
          $_SESSION["message"] = "You have the same comment \"" . $comment->content . "\"";
      } else
        header("Location: login.php");
    }
    if(isset($_POST["delete"]))
    {
      $contentController->deleteComment($_POST["comment_id"]);
    }
    if (isset($_POST["favorite"])) {
      if (isset($_SESSION["user"])) {

        $userController->switchSavedContent($article, $_SESSION["user"], "favorite");
      } else
        header("Location: login.php");
    }
    if (isset($_POST["readLater"])) {
      if (isset($_SESSION["user"])) {
        $userController->switchSavedContent($article, $_SESSION["user"], "readLater");
      } else
        header("Location: login.php");
    }
    if (isset($_POST["like"])) {
      if (isset($_SESSION["user"])) {

        $userController->switchReact($article, $_SESSION["user"], 1);
      } else
        header("Location: login.php");
    }
    if (isset($_POST["dislike"])) {
      if (isset($_SESSION["user"])) {
        $userController->switchReact($article, $_SESSION["user"], 2);
      } else
        header("Location: login.php");
    }
    $article->comments = $contentController->getArticleComments($article->contentID);
    $article->author = $contentController->getArticleAuthor($article->contentID);
    $langs = $contentController->getArticleLangs($article->contentID);
    $article->body = $contentController->getArticleBody($article->contentID, $_GET["lang"]);
    $categories = $contentController->getContentCats($article->contentID);
    $relatedArticles = $contentController->getRelatedArticles($categories, $article);
  } else
    header("Location: 404.php");
} else
  header("Location: 404.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Article -<?php echo $article->title;?></title>
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

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

 
</head>

<body class="blog-details-page">

  <?php require_once("header.php"); ?>

  <main class="main">


    <?php if (isset($_SESSION["message"]))
    {
      ?>
  <div class="container mt-4">
  <div class="alert alert-warning alert-dismissible fade show rounded-3 shadow-sm" role="alert">
    <strong>Notice:</strong> <?php echo $_SESSION["message"]; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
</div>

<?php
    }
    unset($_SESSION['message']);
    ?>

    <div class="container">
      <div class="row">


        <div class="col-lg-8">

          <!-- Blog Details Section -->
          <section id="blog-details" class="blog-details section">
            <div class="container" data-aos="fade-up">

              <article class="article">

                <div class="hero-img" data-aos="zoom-in">
                  <img src="assets/img/blog/blog-post-3.webp" alt="Featured blog image" class="img-fluid" loading="lazy">
                </div>
                <!-- Make sure Bootstrap CSS & Bootstrap Icons are included in the <head> -->
                <!-- Example: 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
-->

                <div class="container py-3 d-flex flex-wrap justify-content-between align-items-center">

                  <!-- Reactions -->
                  <form action="article-sample.php?articleId=<?php echo $article->contentID . "&lang=" . $article->body->language; ?>"
                    method="post" class="d-flex align-items-center gap-2">
                    <button name="like" class="btn btn-outline-primary" title="Like">
                      <i class="bi bi-hand-thumbs-up"></i>
                      <?php
                      if (isset($_SESSION["user"]) && $userController->isReacted($article, $_SESSION["user"], 1) != false) {
                      ?>
                        <i class="bi bi-check"></i>

                      <?php
                      }
                      ?>
                    </button>
                    <button name="dislike" class="btn btn-outline-secondary" title="Dislike">
                      <i class="bi bi-hand-thumbs-down"></i>
                      <?php
                      if (isset($_SESSION["user"]) && $userController->isReacted($article, $_SESSION["user"], 2) != false) {
                      ?>
                        <i class="bi bi-check"></i>

                      <?php
                      }
                      ?>
                    </button>
                  </form>

                  <?php
                  if ($article->body->audioPath != NULL) {
                  ?>

                    <div class="d-flex align-items-center">
                      <audio controls>
                        <source src="<?php echo $article->body->audioPath; ?>" type="audio/mpeg">
                        Your browser does not support the audio element.
                      </audio>
                    </div>
                  <?php
                  }
                  ?>

                  <!-- Language Selection -->

                  <form action="article-sample.php?" method="get" class="d-flex align-items-center">
                    <input type="hidden" name="articleId" value="<?php echo $article->contentID; ?>">
                    <label for="language-select" class="me-2 mb-0">Language:</label>
                    <select name="lang" id="language-select" class="form-select form-select-sm" style="width: auto;" onchange="this.form.submit()">
                      <?php
                      foreach ($langs as $lang) {
                      ?>
                        <option value="<?php echo $lang; ?>" <?php if ($_GET["lang"] == $lang) echo "selected"; ?>> <?php echo ucfirst($lang); ?></option>

                      <?php
                      }
                      ?>
                    </select>
                  </form>

                  <!-- Favorite & Read Later -->
                  <form action="article-sample.php?articleId=<?php echo $article->contentID . "&lang=" . $article->body->language; ?>"
                    class="d-flex align-items-center gap-2" method="post">

                    <button name="favorite" class="btn btn-outline-warning" title="Add to Favorites" type="submit">
                      <i class="bi bi-star"></i>

                      <?php
                      if (
                        isset($_SESSION["user"]) &&
                        $userController->isSavedContent($article, $_SESSION["user"], "favorite") != false
                      ) {
                      ?>
                        <i class="bi bi-check"></i>

                      <?php
                      }
                      ?>
                    </button>

                    <button name="readLater" class="btn btn-outline-info" title="Read Later" type="submit">
                      <i class="bi bi-bookmark"></i>
                      <?php
                      if (
                        isset($_SESSION["user"]) &&
                        $userController->isSavedContent($article, $_SESSION["user"], "readLater") != false
                      ) {
                      ?>

                        <i class="bi bi-check"></i>

                      <?php
                      }
                      ?>
                    </button>
                  </form>




                  <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                    <div class="content-header">
                      <h1 class="title"><?php echo $article->title; ?></h1>

                      <div class="author-info">
                        <div class="author-details">
                          <img src="assets/img/person/person-f-8.webp" alt="Author" class="author-img">
                          <div class="info">
                            <h4><?php echo $article->author->firstName . " " . $article->author->lastName; ?></h4>
                          </div>
                        </div>
                        <div class="post-meta">
                          <span class="date"><i class="bi bi-calendar3"></i> <?php echo $article->publishDate; ?></span>
                          <span class="divider">•</span>
                          <span class="comments"><i class="bi bi-chat-text"></i> <?php echo count($article->comments); ?> Comments</span>
                        </div>
                      </div>
                    </div>

                    <div class="content">
                      <p class="lead">
                        <?php echo $article->body->content; ?>
                      </p>

                    </div>




                    <div class="share-section">
                      <h4>Share Article</h4>
                      <div class="social-links">
                        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="copy-link" title="Copy Link"><i class="bi bi-link-45deg"></i></a>
                      </div>
                    </div>



              </article>

            </div>
          </section><!-- /Blog Details Section -->

          <!-- Blog Author Section -->
          <section id="blog-author" class="blog-author section">

            <div class="container" data-aos="fade-up">
              <div class="author-box">
                <div class="row align-items-center">
                  <div class="col-lg-3 col-md-4 text-center">
                    <img src="assets/img/person/person-f-12.webp" class="author-img rounded-circle" alt="" loading="lazy">


                  </div>

                  <div class="col-lg-9 col-md-8">
                    <div class="author-content">
                      <h3 class="author-name"><?php echo $article->author->firstName . " " . $article->author->lastName; ?></h3>
                      <div class="author-bio mt-3">
                        <p> <?php echo $article->author->bio; ?> </p>
                      </div>

                      <div class="author-website mt-3">
                        <a href="#" class="website-link">
                          <i class="bi bi-globe"></i>
                          <span><?php echo $article->author->email; ?></span>
                        </a>
                        <a href="#" class="more-posts">
                          Read More from <?php echo $article->author->firstName; ?> <i class="bi bi-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </section><!-- /Blog Author Section -->

          <!-- Blog Comments Section -->
          <section id="blog-comment-form" class="blog-comment-form section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

              <form method="post" role="form">
                <div class="section-header">
                  <h3>Share Your Thoughts</h3>
                </div>
                 
                <div class="col-12 form-group">
                  <label for="comment">Your Comment *</label>
                  <textarea class="form-control" name="postedComment" id="comment" rows="5" placeholder="Write your thoughts here..." required=""></textarea>
                </div>
                <div class="col-12 text-center">
                  <button type="submit" class="btn-submit">Post Comment</button>
                </div>
            </div>

            </form>

        </div>
        <div class="col-lg-4 sidebar">

          <div class="widgets-container" data-aos="fade-up" data-aos-delay="200">


            <?php
            if (count($categories) > 0) {
            ?>
              <!-- Categories Widget -->
              <div class="categories-widget widget-item">

                <h3 class="widget-title">Categories of this article</h3>
                <ul class="mt-3">

                  <?php
                  foreach ($categories as $cat) {
                  ?>
                    <li>
                      <p><?php echo ucfirst($cat->catName); ?></p>
                    </li>
                  <?php
                  }
                  ?>
                </ul>

              </div><!--/Categories Widget -->
            <?php
            }
            ?>
            <?php
            if (count($relatedArticles) > 0) {
            ?>
              <div class="recent-posts-widget widget-item">

                <h3 class="widget-title">Related Articles</h3>
                <?php
                for ($i = 0; $i < count($relatedArticles); $i++) {
                ?>
                  <div class="post-item">
                    <img src="assets/img/blog/blog-post-square-1.webp" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="article-sample.php?articleId=<?php echo $relatedArticles[$i]->contentID; ?>&lang=english">
                          <?php echo $relatedArticles[$i]->title; ?>
                        </a></h4>
                      <time datetime="2020-01-01">
                        <?php echo $relatedArticles[$i]->publishDate; ?>
                      </time>
                    </div>
                  </div><!-- End recent post item-->
                <?php
                }
                ?>

              </div><!--/Recent Posts Widget -->
            <?php
            }
            ?>




          </div>
        </div>

        </section>

        <section id="blog-comments" class="blog-comments section">

          <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="blog-comments-3">
              <div class="section-header">
                <h3>Comments <span class="comment-count"><?php echo count($article->comments); ?></span></h3>
              </div>

              <div class="comments-wrapper">
                <?php
                foreach ($article->comments as $comment) {
                ?>
                  <article class="comment-card">
                    <div class="comment-header">
                      <div class="user-info">
                        <img src="assets/img/person/person-f-9.webp" alt="User avatar" loading="lazy">
                        <div class="meta">
                          <h4 class="name"><?php echo $comment->user->firstName . " " . $comment->user->lastName; ?></h4>
                          <span class="date"><i class="bi bi-calendar3"></i> <?php echo $comment->postTime ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="comment-content">
                      <p><?php echo $comment->content; ?></p>
                    </div>
                    <?php 
                   if(isset($_SESSION["user"]) && $_SESSION["user"]->userID == $comment->user->userID) 
                   {
                    ?>
                    
                      <form method="post" action="article-sample.php?articleId=<?php echo $article->contentID . "&lang=" . $article->body->language; ?>">
                       <button class="btn btn-danger btn-sm delete-btn" name="delete">
                       <i class="bi bi-trash"></i> 
                        <input type="hidden" name="comment_id" value="<?php echo $comment->comment_id;?>">

                       </button>
                    </form>
                  
                    <?php } ?>

                  </article>
                <?php
                }
                ?>



              </div>
            </div>

          </div>

        </section><!-- /Blog Comments Section -->

        <!-- Blog Comment Form Section -->

      </div>



    </div>
    </div>

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Blogy</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href="#">Molestiae accusamus iure</a></li>
            <li><a href="#">Excepturi dignissimos</a></li>
            <li><a href="#">Suscipit distinctio</a></li>
            <li><a href="#">Dilecta</a></li>
            <li><a href="#">Sit quas consectetur</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href="#">Ipsam</a></li>
            <li><a href="#">Laudantium dolorum</a></li>
            <li><a href="#">Dinera</a></li>
            <li><a href="#">Trodelas</a></li>
            <li><a href="#">Flexo</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Blogy</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>