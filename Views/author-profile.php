<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Author Profile - Blogy</title>
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

  <style>
    .author-profile {
      background: var(--primary-color);
      border-radius: var(--border-radius);
      box-shadow: var(--box-shadow);
      padding: 2rem;
      margin: 2rem 0;
    }

    .author-header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .author-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 1rem;
      border: 4px solid var(--accent-color);
    }

    .author-name {
      font-size: 2rem;
      color: var(--text-color);
      margin-bottom: 0.5rem;
    }

    .author-title {
      color: var(--accent-color);
      font-size: 1.1rem;
      margin-bottom: 1rem;
    }

    .author-bio {
      max-width: 800px;
      margin: 0 auto;
      color: var(--secondary-text);
      line-height: 1.8;
    }

    .author-stats {
      display: flex;
      justify-content: center;
      gap: 2rem;
      margin: 2rem 0;
    }

    .stat-item {
      text-align: center;
    }

    .stat-number {
      font-size: 1.5rem;
      font-weight: 600;
      color: var(--accent-color);
    }

    .stat-label {
      color: var(--secondary-text);
      font-size: 0.9rem;
    }

    .author-social {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin: 1rem 0;
    }

    .social-link {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: var(--light-bg);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--text-color);
      transition: all 0.3s ease;
    }

    .social-link:hover {
      background: var(--accent-color);
      color: white;
      transform: translateY(-3px);
    }

    .author-articles {
      margin-top: 3rem;
    }

    .article-card {
      background: var(--light-bg);
      border-radius: var(--border-radius);
      overflow: hidden;
      margin-bottom: 2rem;
      transition: transform 0.3s ease;
    }

    .article-card:hover {
      transform: translateY(-5px);
    }

    .article-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .article-content {
      padding: 1.5rem;
    }

    .article-title {
      font-size: 1.25rem;
      color: var(--text-color);
      margin-bottom: 1rem;
    }

    .article-excerpt {
      color: var(--secondary-text);
      margin-bottom: 1rem;
    }

    .article-meta {
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: var(--secondary-text);
      font-size: 0.9rem;
    }

    .read-more {
      color: var(--accent-color);
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .read-more:hover {
      color: var(--hover-color);
    }
  </style>
</head>

<body class="author-profile-page">

  <header id="header" class="header position-relative">
    <div class="container-fluid container-xl position-relative">
      <div class="top-row d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-end">
          <h1 class="sitename">Blogy</h1><span>.</span>
        </a>

        <div class="d-flex align-items-center">
          <div class="social-links">
            <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://x.com/" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.instagram.com/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="login.php"><i class="bi bi-person"></i> Login</a>
          </div>

          <form class="search-form ms-4" method="get" action="search-results.php">
            <input type="text" placeholder="Search..." class="form-control">
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
            <li><a href="subscription.php">Subscribtion</a></li>
            <li><a href="blog-details.php">Blog Details</a></li>
            <li><a href="author-profile.php" class="active">Author Profile</a></li>
            <li><a href="favorites.php">Favourite</a></li>
            <li class="dropdown"><a href="#"><span>Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="about.php">About</a></li>
                <li><a href="blog-details.php">Blog Details</a></li>
                <li><a href="search-results.php">Search Results</a></li>
                <li><a href="account.php">MY Acoount</a></li>

                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="magazine.php">Magazine</a></li>
                    <li><a href="article.php">Article</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="report.php">Report System </a></li>
                    <li><a href="rate-system.php">Rate System</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header>

  <main class="main">
    <!-- Page Title -->
    <div class="page-title">
      <div class="breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><i class="bi bi-house"></i> Home</a></li>
            <li class="breadcrumb-item active current">Author Profile</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Author Profile</h1>
        <p>Learn more about our talented authors and their work</p>
      </div>
    </div>

    <!-- Author Profile Section -->
    <section class="author-profile">
      <div class="container">
        <?php
        // Get author ID from URL
        $authorId = isset($_GET['id']) ? intval($_GET['id']) : 1;

        // In a real application, you would fetch the author data from a database
        // For now, we'll use sample data
        $author = [
            'id' => $authorId,
            'name' => 'John Doe',
            'title' => 'Senior Technology Writer',
            'image' => 'assets/img/person/person-m-1.webp',
            'bio' => 'John is a seasoned technology writer with over 10 years of experience in the industry. He specializes in artificial intelligence, web development, and emerging technologies. His articles have been featured in numerous publications and he has a passion for making complex technical concepts accessible to all readers.',
            'articles' => 45,
            'followers' => 1234,
            'following' => 567,
            'social' => [
                'twitter' => '#',
                'linkedin' => '#',
                'github' => '#',
                'medium' => '#'
            ]
        ];
        ?>

        <div class="author-header">
          <img src="<?php echo htmlspecialchars($author['image']); ?>" alt="<?php echo htmlspecialchars($author['name']); ?>" class="author-image">
          <h1 class="author-name"><?php echo htmlspecialchars($author['name']); ?></h1>
          <div class="author-title"><?php echo htmlspecialchars($author['title']); ?></div>
          <p class="author-bio"><?php echo htmlspecialchars($author['bio']); ?></p>
        </div>

        <div class="author-stats">
          <div class="stat-item">
            <div class="stat-number"><?php echo $author['articles']; ?></div>
            <div class="stat-label">Articles</div>
          </div>
          <div class="stat-item">
            <div class="stat-number"><?php echo $author['followers']; ?></div>
            <div class="stat-label">Followers</div>
          </div>
          <div class="stat-item">
            <div class="stat-number"><?php echo $author['following']; ?></div>
            <div class="stat-label">Following</div>
          </div>
        </div>

        <div class="author-social">
          <a href="<?php echo htmlspecialchars($author['social']['twitter']); ?>" class="social-link" target="_blank">
            <i class="bi bi-twitter"></i>
          </a>
          <a href="<?php echo htmlspecialchars($author['social']['linkedin']); ?>" class="social-link" target="_blank">
            <i class="bi bi-linkedin"></i>
          </a>
          <a href="<?php echo htmlspecialchars($author['social']['github']); ?>" class="social-link" target="_blank">
            <i class="bi bi-github"></i>
          </a>
          <a href="<?php echo htmlspecialchars($author['social']['medium']); ?>" class="social-link" target="_blank">
            <i class="bi bi-medium"></i>
          </a>
        </div>

        <div class="author-articles">
          <h2 class="mb-4">Latest Articles</h2>
          <div class="row">
            <?php
            // Sample articles data
            $articles = [
                [
                    'title' => 'The Future of Web Development',
                    'excerpt' => 'Exploring the latest trends and technologies shaping the future of web development...',
                    'image' => 'assets/img/blog/blog-post-1.webp',
                    'date' => '2024-01-15',
                    'category' => 'Technology'
                ],
                [
                    'title' => 'Understanding AI and Machine Learning',
                    'excerpt' => 'A comprehensive guide to artificial intelligence and its applications in modern technology...',
                    'image' => 'assets/img/blog/blog-post-2.webp',
                    'date' => '2024-01-10',
                    'category' => 'AI'
                ],
                [
                    'title' => 'Best Practices for Modern Web Design',
                    'excerpt' => 'Learn about the essential principles and practices for creating effective web designs...',
                    'image' => 'assets/img/blog/blog-post-3.webp',
                    'date' => '2024-01-05',
                    'category' => 'Design'
                ]
            ];

            foreach ($articles as $article): ?>
              <div class="col-md-4">
                <div class="article-card">
                  <img src="<?php echo htmlspecialchars($article['image']); ?>" alt="<?php echo htmlspecialchars($article['title']); ?>" class="article-image">
                  <div class="article-content">
                    <h3 class="article-title"><?php echo htmlspecialchars($article['title']); ?></h3>
                    <p class="article-excerpt"><?php echo htmlspecialchars($article['excerpt']); ?></p>
                    <div class="article-meta">
                      <span><?php echo date('M d, Y', strtotime($article['date'])); ?></span>
                      <a href="blog-details.php" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
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
            <span class="sitename">Blogy</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="terms.php">Terms of service</a></li>
            <li><a href="privacy.php">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="article.php">Articles</a></li>
            <li><a href="magazine.php">Magazines</a></li>
            <li><a href="category.php">Categories</a></li>
            <li><a href="author-profile.php">Authors</a></li>
            <li><a href="search-results.php">Search</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Categories</h4>
          <ul>
            <li><a href="category.php?cat=technology">Technology</a></li>
            <li><a href="category.php?cat=business">Business</a></li>
            <li><a href="category.php?cat=lifestyle">Lifestyle</a></li>
            <li><a href="category.php?cat=health">Health</a></li>
            <li><a href="category.php?cat=entertainment">Entertainment</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="favorites.php">Favorites</a></li>
            <li><a href="rate-system.php">Rate System</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Sign Up</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Blogy</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html> 