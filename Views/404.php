<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>404 - Newsstand</title>
  <meta name="description" content="Page not found - Newsstand">
  <meta name="keywords" content="404, page not found, error, newsstand">

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

  <style>
    .error-404 {
      padding: 4rem 0;
      text-align: center;
    }
    .error-icon {
      font-size: 4rem;
      color: var(--primary-color);
    }
    .error-code {
      font-size: 6rem;
      font-weight: bold;
      color: var(--primary-color);
      line-height: 1;
    }
    .error-title {
      font-size: 2rem;
      margin-bottom: 1rem;
    }
    .error-text {
      color: var(--secondary-color);
      max-width: 600px;
      margin: 0 auto;
    }
    .search-box {
      max-width: 500px;
      margin: 0 auto;
    }
    .search-form .input-group {
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      border-radius: 50px;
      overflow: hidden;
    }
    .search-form .form-control {
      border: none;
      padding: 1rem 1.5rem;
    }
    .search-form .search-btn {
      padding: 0 1.5rem;
      background: var(--primary-color);
      color: #fff;
      border: none;
    }
    .search-form .search-btn:hover {
      background: var(--primary-dark);
    }
    .error-action {
      margin-top: 2rem;
    }
    .error-action .btn {
      padding: 0.75rem 2rem;
      border-radius: 50px;
    }
  </style>
</head>

<body class="page-404">

  <header id="header" class="header position-relative">
    <div class="container-fluid container-xl position-relative">
      <div class="top-row d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-end">
          <h1 class="sitename">Newsstand</h1><span>.</span>
        </a>

        <div class="d-flex align-items-center">
          <div class="social-links">
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>

          <form class="search-form ms-4" action="search-results.php" method="GET">
            <input type="text" name="q" placeholder="Search..." class="form-control">
            <button type="submit" class="btn"><i class="bi bi-search"></i></button>
          </form>
        </div>
      </div>
    </div>

    <div class="nav-wrap">
      <div class="container d-flex justify-content-center position-relative">
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="category.php">Category</a></li>
            <li><a href="blog-details.php">Blog Details</a></li>
            <li><a href="author-profile.php">Author Profile</a></li>
            <li class="dropdown"><a href="#"><span>Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="about.php">About</a></li>
                <li><a href="category.php">Category</a></li>
                <li><a href="blog-details.php">Blog Details</a></li>
                <li><a href="author-profile.php">Author Profile</a></li>
                <li><a href="search-results.php">Search Results</a></li>
                <li><a href="404.php" class="active">404 Not Found Page</a></li>
              </ul>
            </li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header>

  <main class="main">
    <!-- Error 404 Section -->
    <section id="error-404" class="error-404 section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="text-center">
          <div class="error-icon mb-4" data-aos="zoom-in" data-aos-delay="200">
            <i class="bi bi-exclamation-circle"></i>
          </div>

          <h1 class="error-code mb-4" data-aos="fade-up" data-aos-delay="300">404</h1>

          <h2 class="error-title mb-3" data-aos="fade-up" data-aos-delay="400">Oops! Page Not Found</h2>

          <p class="error-text mb-4" data-aos="fade-up" data-aos-delay="500">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
            <?php if ($requested_url): ?>
            <br>
            <small class="text-muted">Requested URL: <?php echo htmlspecialchars($requested_url); ?></small>
            <?php endif; ?>
          </p>

          <div class="search-box mb-4" data-aos="fade-up" data-aos-delay="600">
            <form action="search-results.php" method="GET" class="search-form">
              <div class="input-group">
                <input type="text" 
                       name="q" 
                       class="form-control" 
                       placeholder="Search for pages..." 
                       aria-label="Search"
                       required>
                <button class="btn search-btn" type="submit">
                  <i class="bi bi-search"></i>
                </button>
              </div>
            </form>
          </div>

          <div class="error-action" data-aos="fade-up" data-aos-delay="700">
            <a href="index.php" class="btn btn-primary">Back to Home</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer" class="footer">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.php" class="logo d-flex align-items-center">
            <span class="sitename">Newsstand</span>
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
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="terms.php">Terms of service</a></li>
            <li><a href="privacy.php">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="services.php#web-design">Web Design</a></li>
            <li><a href="services.php#web-development">Web Development</a></li>
            <li><a href="services.php#product-management">Product Management</a></li>
            <li><a href="services.php#marketing">Marketing</a></li>
            <li><a href="services.php#graphic-design">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Categories</h4>
          <ul>
            <li><a href="category.php?cat=technology">Technology</a></li>
            <li><a href="category.php?cat=business">Business</a></li>
            <li><a href="category.php?cat=lifestyle">Lifestyle</a></li>
            <li><a href="category.php?cat=sports">Sports</a></li>
            <li><a href="category.php?cat=entertainment">Entertainment</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="authors.php">Authors</a></li>
            <li><a href="subscribe.php">Subscribe</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Newsstand</strong> <span>All Rights Reserved</span></p>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

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