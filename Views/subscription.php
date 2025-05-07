<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription - Blogy</title>

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
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--light-bg);
            color: var(--text-color);
        }

        .subscription-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
        }

        .subscription-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .subscription-header h1 {
            color: var(--text-color);
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .subscription-header p {
            color: var(--secondary-text);
            font-size: 1.1rem;
        }

        .subscription-plans {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .subscription-plan {
            background: var(--primary-color);
            border-radius: var(--border-radius);
            padding: 2rem;
            box-shadow: var(--box-shadow);
            transition: all 0.3s ease;
            text-align: center;
            border: 2px solid transparent;
        }

        .subscription-plan:hover {
            transform: translateY(-5px);
            border-color: var(--accent-color);
        }

        .subscription-plan.popular {
            border-color: var(--accent-color);
            position: relative;
        }

        .popular-badge {
            position: absolute;
            top: -15px;
            right: 20px;
            background: var(--accent-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .plan-icon {
            font-size: 2.5rem;
            color: var(--accent-color);
            margin-bottom: 1rem;
        }

        .plan-name {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-color);
        }

        .plan-price {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--accent-color);
            margin-bottom: 1.5rem;
        }

        .plan-price span {
            font-size: 1rem;
            color: var(--secondary-text);
        }

        .plan-features {
            list-style: none;
            padding: 0;
            margin-bottom: 2rem;
        }

        .plan-features li {
            margin-bottom: 0.8rem;
            color: var(--text-color);
        }

        .plan-features li i {
            color: var(--accent-color);
            margin-right: 0.5rem;
        }

        .btn-subscribe {
            background: var(--accent-color);
            color: white;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: var(--border-radius);
            font-weight: 500;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn-subscribe:hover {
            background: #e64a0a;
            transform: translateY(-2px);
        }

        .subscription-benefits {
            background: var(--primary-color);
            border-radius: var(--border-radius);
            padding: 2rem;
            box-shadow: var(--box-shadow);
            margin-top: 3rem;
        }

        .benefits-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .benefits-header h2 {
            color: var(--text-color);
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .benefit-item {
            text-align: center;
            padding: 1.5rem;
        }

        .benefit-icon {
            font-size: 2rem;
            color: var(--accent-color);
            margin-bottom: 1rem;
        }

        .benefit-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-color);
        }

        .benefit-description {
            color: var(--secondary-text);
        }

        @media (max-width: 768px) {
            .subscription-container {
                margin: 1rem;
                padding: 1rem;
            }

            .subscription-plans {
                grid-template-columns: 1fr;
            }

            .benefits-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Header and Navigation Styles */
        .header {
            background: var(--primary-color);
            box-shadow: var(--box-shadow);
            position: relative;
            z-index: 1000;
        }

        .top-row {
            padding: 1rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .logo {
            text-decoration: none;
            color: var(--accent-color);
        }

        .sitename {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-links a {
            color: var(--text-color);
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: var(--accent-color);
        }

        .search-form {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-form .form-control {
            border: 1px solid rgba(0, 0, 0, 0.1);
            padding-right: 40px;
            border-radius: 20px;
        }

        .search-form .btn {
            position: absolute;
            right: 5px;
            background: none;
            border: none;
            color: var(--text-color);
        }

        .nav-wrap {
            background: var(--primary-color);
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .navmenu {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .navmenu ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .navmenu li {
            position: relative;
            padding: 0 1rem;
        }

        .navmenu a {
            color: var(--text-color);
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 0;
            display: block;
            transition: color 0.3s ease;
        }

        .navmenu a:hover {
            color: var(--accent-color);
        }

        .dropdown > a {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .dropdown > ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: var(--primary-color);
            min-width: 200px;
            box-shadow: var(--box-shadow);
            border-radius: var(--border-radius);
            padding: 0.5rem 0;
            z-index: 1000;
        }

        .dropdown:hover > ul {
            display: block;
        }

        .dropdown ul li {
            padding: 0;
        }

        .dropdown ul a {
            padding: 0.5rem 1rem;
            white-space: nowrap;
        }

        .dropdown ul .dropdown > ul {
            left: 100%;
            top: 0;
        }

        .mobile-nav-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-color);
        }

        @media (max-width: 991px) {
            .mobile-nav-toggle {
                display: block;
            }

            .navmenu ul {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: var(--primary-color);
                padding: 1rem;
                box-shadow: var(--box-shadow);
            }

            .navmenu.active ul {
                display: block;
            }

            .navmenu li {
                padding: 0.5rem 0;
            }

            .dropdown > ul {
                position: static;
                box-shadow: none;
                padding-left: 1rem;
            }

            .dropdown ul .dropdown > ul {
                left: 0;
            }
        }
    </style>
</head>
<body>
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
              <li><a href="subscription.php" class="active">Subscribtion</a></li>
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
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
        </div>
      </div>
    </header>

    <div class="subscription-container">
        <div class="subscription-header">
            <h1>Choose Your Subscription Plan</h1>
            <p>Get unlimited access to premium content and exclusive features</p>
        </div>

        <?php if (isset($subscriptionSuccess)): ?>
        <div class="alert alert-success" role="alert">
            Thank you for subscribing! Your subscription has been activated.
        </div>
        <?php endif; ?>

        <div class="subscription-plans">
            <div class="subscription-plan">
                <i class="bi bi-newspaper plan-icon"></i>
                <h3 class="plan-name">Basic</h3>
                <div class="plan-price">$9.99<span>/month</span></div>
                <ul class="plan-features">
                    <li><i class="bi bi-check"></i> Access to all articles</li>
                    <li><i class="bi bi-check"></i> Basic magazine access</li>
                    <li><i class="bi bi-check"></i> Email notifications</li>
                    <li><i class="bi bi-check"></i> Standard support</li>
                </ul>
                <form method="POST" action="subscription.php">
                    <input type="hidden" name="plan" value="basic">
                    <button type="submit" class="btn-subscribe">Subscribe Now</button>
                </form>
            </div>

            <div class="subscription-plan popular">
                <div class="popular-badge">Most Popular</div>
                <i class="bi bi-star plan-icon"></i>
                <h3 class="plan-name">Premium</h3>
                <div class="plan-price">$19.99<span>/month</span></div>
                <ul class="plan-features">
                    <li><i class="bi bi-check"></i> All Basic features</li>
                    <li><i class="bi bi-check"></i> Premium magazine access</li>
                    <li><i class="bi bi-check"></i> Early access to new content</li>
                    <li><i class="bi bi-check"></i> Priority support</li>
                    <li><i class="bi bi-check"></i> Ad-free experience</li>
                </ul>
                <form method="POST" action="subscription.php">
                    <input type="hidden" name="plan" value="premium">
                    <button type="submit" class="btn-subscribe">Subscribe Now</button>
                </form>
            </div>

            <div class="subscription-plan">
                <i class="bi bi-award plan-icon"></i>
                <h3 class="plan-name">Enterprise</h3>
                <div class="plan-price">$49.99<span>/month</span></div>
                <ul class="plan-features">
                    <li><i class="bi bi-check"></i> All Premium features</li>
                    <li><i class="bi bi-check"></i> Custom content solutions</li>
                    <li><i class="bi bi-check"></i> Team collaboration tools</li>
                    <li><i class="bi bi-check"></i> Advanced analytics</li>
                    <li><i class="bi bi-check"></i> Dedicated support</li>
                </ul>
                <form method="POST" action="subscription.php">
                    <input type="hidden" name="plan" value="enterprise">
                    <button type="submit" class="btn-subscribe">Subscribe Now</button>
                </form>
            </div>
        </div>

        <div class="subscription-benefits">
            <div class="benefits-header">
                <h2>Why Subscribe?</h2>
                <p>Get access to exclusive benefits and features</p>
            </div>

            <div class="benefits-grid">
                <div class="benefit-item">
                    <i class="bi bi-book benefit-icon"></i>
                    <h3 class="benefit-title">Premium Content</h3>
                    <p class="benefit-description">Access to exclusive articles and premium content not available to free users.</p>
                </div>

                <div class="benefit-item">
                    <i class="bi bi-bell benefit-icon"></i>
                    <h3 class="benefit-title">Early Access</h3>
                    <p class="benefit-description">Be the first to read new articles and get early access to special features.</p>
                </div>

                <div class="benefit-item">
                    <i class="bi bi-chat-dots benefit-icon"></i>
                    <h3 class="benefit-title">Community Access</h3>
                    <p class="benefit-description">Join our exclusive community and engage with other premium members.</p>
                </div>

                <div class="benefit-item">
                    <i class="bi bi-headset benefit-icon"></i>
                    <h3 class="benefit-title">Priority Support</h3>
                    <p class="benefit-description">Get priority access to our support team for any questions or issues.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>
</html> 