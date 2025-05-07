<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Report Content - Blogy</title>
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

  <!-- Custom Report Page Styles -->
  <style>
    :root {
      --primary-color: #ff6b00;
      --primary-dark: #cc5500;
      --primary-rgb: 255, 107, 0;
      --secondary-color: #ff8c42;
      --light-color: #fff5eb;
      --dark-color: #331800;
    }

    .report-section {
      padding: 100px 0;
      background: linear-gradient(135deg, var(--light-color) 0%, #ffe8d6 100%);
      min-height: calc(100vh - 200px);
    }

    .report-form {
      background: #fff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(255, 107, 0, 0.1);
      transition: transform 0.3s ease;
      margin-top: 30px;
    }

    .report-form:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(255, 107, 0, 0.15);
    }

    .form-group {
      margin-bottom: 25px;
      position: relative;
    }

    .form-group label {
      font-weight: 600;
      color: var(--dark-color);
      margin-bottom: 10px;
      display: block;
      transition: all 0.3s ease;
    }

    .form-control {
      height: 50px;
      padding: 12px 15px;
      border: 2px solid #ffe8d6;
      border-radius: 8px;
      transition: all 0.3s ease;
      font-size: 15px;
    }

    .form-control:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 0.2rem rgba(255, 107, 0, 0.15);
    }

    textarea.form-control {
      height: auto;
      min-height: 150px;
      resize: vertical;
    }

    .btn-submit {
      background: var(--primary-color);
      color: #fff;
      padding: 12px 35px;
      border-radius: 8px;
      font-weight: 600;
      transition: all 0.3s ease;
      border: none;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 16px;
    }

    .btn-submit:hover {
      background: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(255, 107, 0, 0.3);
    }

    .btn-submit i {
      margin-right: 8px;
    }

    .form-feedback {
      position: absolute;
      bottom: -20px;
      left: 0;
      font-size: 0.875rem;
      color: #ff3333;
    }

    .success-message {
      display: none;
      padding: 20px;
      background: #fff3e6;
      color: #663300;
      border-radius: 8px;
      margin-top: 20px;
      text-align: center;
      font-size: 16px;
      border: 1px solid #ffe8d6;
    }

    .success-message.show {
      display: block;
      animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .report-steps {
      display: flex;
      justify-content: space-between;
      margin-bottom: 40px;
      position: relative;
      max-width: 300px;
      margin: 0 auto 40px;
    }

    .report-steps::before {
      content: '';
      position: absolute;
      top: 20px;
      left: 0;
      right: 0;
      height: 2px;
      background: #ffe8d6;
      z-index: 1;
    }

    .step {
      position: relative;
      z-index: 2;
      background: #fff;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 2px solid #ffe8d6;
      transition: all 0.3s ease;
      font-weight: 600;
    }

    .step.active {
      border-color: var(--primary-color);
      background: var(--primary-color);
      color: #fff;
    }

    .step.completed {
      border-color: var(--primary-color);
      background: var(--primary-color);
      color: #fff;
    }

    .section-title {
      margin-bottom: 40px;
    }

    .section-title h2 {
      font-size: 32px;
      font-weight: 700;
      color: var(--dark-color);
      margin-bottom: 15px;
    }

    .section-title p {
      font-size: 16px;
      color: #996633;
    }

    /* Fix for form validation */
    .is-invalid {
      border-color: #ff3333 !important;
    }

    .is-invalid:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 51, 51, 0.25) !important;
    }

    /* Fix for select dropdown */
    select.form-control {
      appearance: none;
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ff6b00' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right 0.75rem center;
      background-size: 16px 12px;
      padding-right: 2.5rem;
    }

    @media (max-width: 768px) {
      .report-section {
        padding: 60px 0;
      }
      
      .report-form {
        padding: 25px;
      }
      
      .report-steps {
        max-width: 250px;
      }
      
      .section-title h2 {
        font-size: 28px;
      }
    }
  </style>
</head>

<body class="report-page">
  <header id="header" class="header position-relative">
    <div class="container-fluid container-xl position-relative">
      <div class="top-row d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-end">
          <h1 class="sitename">Blogy</h1><span>.</span>
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
            <li><a href="subscription.php">Subscribtion</a></li>
            <li><a href="blog-details.php">Blog Details</a></li>
            <li><a href="author-profile.php">Author Profile</a></li>
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
        </nav>
      </div>
    </div>
  </header>

  <main class="main">
    <section class="report-section">
      <div class="container">
        <div class="section-title text-center" data-aos="fade-up">
          <h2>Report Content</h2>
          <p>Help us maintain a safe and respectful community</p>
        </div>

        <div class="report-steps">
          <div class="step active">1</div>
          <div class="step">2</div>
          <div class="step">3</div>
        </div>

        <?php if ($success): ?>
        <div class="success-message show">
          <i class="bi bi-check-circle-fill me-2"></i>
          Thank you for your report. Our team will review it shortly.
        </div>
        <?php endif; ?>

        <div class="report-form" data-aos="fade-up">
          <form method="POST" action="report.php" novalidate>
            <div class="form-group">
              <label for="content_type">Content Type</label>
              <select class="form-control <?php echo isset($errors['content_type']) ? 'is-invalid' : ''; ?>" id="content_type" name="content_type" required>
                <option value="">Select content type</option>
                <option value="article" <?php echo ($contentType === 'article') ? 'selected' : ''; ?>>Article</option>
                <option value="comment" <?php echo ($contentType === 'comment') ? 'selected' : ''; ?>>Comment</option>
                <option value="user" <?php echo ($contentType === 'user') ? 'selected' : ''; ?>>User Profile</option>
              </select>
              <?php if (isset($errors['content_type'])): ?>
              <div class="form-feedback"><?php echo htmlspecialchars($errors['content_type']); ?></div>
              <?php endif; ?>
            </div>

            <div class="form-group">
              <label for="content_id">Content ID</label>
              <input type="text" class="form-control <?php echo isset($errors['content_id']) ? 'is-invalid' : ''; ?>" id="content_id" name="content_id" value="<?php echo htmlspecialchars($contentId ?? ''); ?>" required>
              <?php if (isset($errors['content_id'])): ?>
              <div class="form-feedback"><?php echo htmlspecialchars($errors['content_id']); ?></div>
              <?php endif; ?>
            </div>

            <div class="form-group">
              <label for="reason">Reason for Report</label>
              <select class="form-control <?php echo isset($errors['reason']) ? 'is-invalid' : ''; ?>" id="reason" name="reason" required>
                <option value="">Select a reason</option>
                <option value="spam" <?php echo ($reason === 'spam') ? 'selected' : ''; ?>>Spam</option>
                <option value="inappropriate" <?php echo ($reason === 'inappropriate') ? 'selected' : ''; ?>>Inappropriate Content</option>
                <option value="harassment" <?php echo ($reason === 'harassment') ? 'selected' : ''; ?>>Harassment</option>
                <option value="copyright" <?php echo ($reason === 'copyright') ? 'selected' : ''; ?>>Copyright Violation</option>
                <option value="other" <?php echo ($reason === 'other') ? 'selected' : ''; ?>>Other</option>
              </select>
              <?php if (isset($errors['reason'])): ?>
              <div class="form-feedback"><?php echo htmlspecialchars($errors['reason']); ?></div>
              <?php endif; ?>
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control <?php echo isset($errors['description']) ? 'is-invalid' : ''; ?>" id="description" name="description" required><?php echo htmlspecialchars($description ?? ''); ?></textarea>
              <?php if (isset($errors['description'])): ?>
              <div class="form-feedback"><?php echo htmlspecialchars($errors['description']); ?></div>
              <?php endif; ?>
            </div>

            <button type="submit" class="btn-submit">
              <i class="bi bi-flag-fill"></i>
              Submit Report
            </button>
          </form>
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