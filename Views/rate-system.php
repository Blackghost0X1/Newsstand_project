<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Rate System - Blogy</title>
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
        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
        }
        .rating input {
            display: none;
        }
        .rating label {
            cursor: pointer;
            font-size: 2rem;
            color: #ddd;
            padding: 0 0.1em;
            transition: color 0.2s ease-in-out;
        }
        .rating input:checked ~ label,
        .rating label:hover,
        .rating label:hover ~ label {
            color: #ffd700;
        }
        .feedback-form {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .thank-you-message {
            display: none;
            text-align: center;
            padding: 2rem;
            background: var(--light-background);
            border-radius: 10px;
            margin-top: 1rem;
        }
        .section-badge {
            display: inline-block;
            padding: 0.5rem 1rem;
            background: var(--primary-color);
            color: #fff;
            border-radius: 50px;
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }
        .error-message {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
    </style>
</head>
<body class="rate-system-page">
    <?php
    // Start session
    session_start();

    // Initialize variables
    $errors = [];
    $success = false;
    $rating = '';
    $feedback = '';

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validate rating
        $rating = trim($_POST['rating'] ?? '');
        if (empty($rating)) {
            $errors['rating'] = 'Please select a rating';
        } elseif (!in_array($rating, ['1', '2', '3', '4', '5'])) {
            $errors['rating'] = 'Invalid rating value';
        }

        // Validate feedback
        $feedback = trim($_POST['feedback'] ?? '');
        if (empty($feedback)) {
            $errors['feedback'] = 'Please provide your feedback';
        } elseif (strlen($feedback) < 10) {
            $errors['feedback'] = 'Feedback must be at least 10 characters long';
        }

        // If no errors, process the rating
        if (empty($errors)) {
            // Here you would typically:
            // 1. Save the rating to a database
            // 2. Calculate average rating
            // 3. Send notification to admin
            
            // For now, we'll just show a success message
            $success = true;
        }
    }
    ?>

    <!-- Header Section -->
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

    <!-- Main Content -->
    <main class="main">
        <!-- Page Title -->
        <div class="page-title">
            <div class="breadcrumbs">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="bi bi-house"></i> Home</a></li>
                        <li class="breadcrumb-item active current">Rate System</li>
                    </ol>
                </nav>
            </div>

            <div class="title-wrapper">
                <h1>Rate Our System</h1>
                <p>We value your feedback! Please take a moment to rate your experience with our system.</p>
            </div>
        </div>

        <section class="section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="feedback-form">
                    <span class="section-badge"><i class="bi bi-star"></i> Your Feedback</span>
                    
                    <?php if ($success): ?>
                    <div class="thank-you-message" style="display: block;">
                        <i class="bi bi-check-circle-fill text-success mb-3" style="font-size: 3rem;"></i>
                        <h3>Thank You!</h3>
                        <p>Your feedback has been submitted successfully.</p>
                    </div>
                    <?php else: ?>
                    <form method="POST" action="rate-system.php" novalidate>
                        <div class="mb-4">
                            <label class="form-label">Your Rating</label>
                            <div class="rating">
                                <input type="radio" name="rating" value="5" id="5" <?php echo ($rating === '5') ? 'checked' : ''; ?>>
                                <label for="5"><i class="bi bi-star-fill"></i></label>
                                <input type="radio" name="rating" value="4" id="4" <?php echo ($rating === '4') ? 'checked' : ''; ?>>
                                <label for="4"><i class="bi bi-star-fill"></i></label>
                                <input type="radio" name="rating" value="3" id="3" <?php echo ($rating === '3') ? 'checked' : ''; ?>>
                                <label for="3"><i class="bi bi-star-fill"></i></label>
                                <input type="radio" name="rating" value="2" id="2" <?php echo ($rating === '2') ? 'checked' : ''; ?>>
                                <label for="2"><i class="bi bi-star-fill"></i></label>
                                <input type="radio" name="rating" value="1" id="1" <?php echo ($rating === '1') ? 'checked' : ''; ?>>
                                <label for="1"><i class="bi bi-star-fill"></i></label>
                            </div>
                            <?php if (isset($errors['rating'])): ?>
                            <div class="error-message"><?php echo htmlspecialchars($errors['rating']); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="mb-4">
                            <label for="feedback" class="form-label">Additional Feedback</label>
                            <textarea class="form-control <?php echo isset($errors['feedback']) ? 'is-invalid' : ''; ?>" 
                                      id="feedback" 
                                      name="feedback" 
                                      rows="4" 
                                      placeholder="Tell us what you think..."><?php echo htmlspecialchars($feedback); ?></textarea>
                            <?php if (isset($errors['feedback'])): ?>
                            <div class="error-message"><?php echo htmlspecialchars($errors['feedback']); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit Rating</button>
                        </div>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
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