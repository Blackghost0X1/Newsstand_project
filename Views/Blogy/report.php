<?php
require_once "../../Models/Content.php";
require_once "../../Models/User.php";
require_once "../../Models/EndUser.php";

require_once "../../Models/Article.php";
require_once "../../Models/Author.php";
require_once "../../Models/Category.php";
require_once "../../Controllers/UserController.php";
require_once "../../Controllers/Database.php";
require_once "../../Controllers/AuthorController.php";
require_once "../../Controllers/ContentController.php";



session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$message = "";
$cont = new Content;
$cont->contentID = 1;
$content_type = "article";
$cont->title = "welcome";
$_POST["content"] = $cont;
$_POST["content_type"] = $content_type;

if (isset($_POST['reason'])) {
    $userController = new UserController;
    if ($userController->isReported($cont, $_SESSION["user"])) {
        $message = "You have already reported this content";
    } else {
        
            $userController->reportContent($cont, $_SESSION["user"], $_POST["reason"]);
        
    }
}





?>


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
      from {
        opacity: 0;
        transform: translateY(-10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
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
        <a href="index.html" class="logo d-flex align-items-end">
          <h1 class="sitename">Blogy</h1><span>.</span>
        </a>

        <div class="d-flex align-items-center">
          <div class="social-links">
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>

          <form class="search-form ms-4">
            <input type="text" placeholder="Search..." class="form-control">
            <button name="submit" type="submit" class="btn"><i class="bi bi-search"></i></button>
          </form>
        </div>
      </div>
    </div>

    <div class="nav-wrap">
      <div class="container d-flex justify-content-center position-relative">
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="category.html">Category</a></li>
            <li><a href="blog-details.html">Blog Details</a></li>
            <li><a href="author-profile.html">Author Profile</a></li>
            <li class="dropdown"><a href="#"><span>Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="about.html">About</a></li>
                <li><a href="category.html">Category</a></li>
                <li><a href="blog-details.html">Blog Details</a></li>
                <li><a href="author-profile.html">Author Profile</a></li>
                <li><a href="search-results.html">Search Results</a></li>
                <li><a href="404.html">404 Not Found Page</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="rate-system.html">Rate System</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header>

  <main id="main">
    <section class="report-section">
      <div class="container">
        <div class="section-title text-center">
          <h2>Report Content</h2>
          <p>Help us maintain a safe and respectful community</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="report-form">
              <div class="content-info mb-4 p-4 bg-light rounded">
                <h4 class="mb-3">Content Information</h4>
                <div class="info-item mb-3">
                  <strong>Content Title:</strong>
                  <span class="ms-2" id="contentTitle"><?php echo $_POST['content']->title; ?></span>
                </div>
                <div class="info-item">
                  <strong>Content Type:</strong>
                  <span class="ms-2" id="contentType"><?php echo $_POST['content_type']; ?></span>
                </div>
              </div>
              <?php if (!empty($message)) {?>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle me-2"></i>
                            <?php echo $message; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
        <?php 
      }
        else{ ?>
              <form id="reportForm" method="post" action="report.php">
                <input type="hidden" name="content" value="<?php echo $_POST['content']->contentID; ?>">
                <input type="hidden" name="content_type" value="<?php echo $_POST['content_type']; ?>">
                
                <div class="form-group">
                  <label for="reportDescription" class="mb-2">Why are you reporting this content?</label>
                  <textarea class="form-control" id="reportDescription" name="reason" required
                      placeholder="Please explain why you're reporting this content. Be specific about what concerns you."></textarea>
                  <small class="form-text text-muted mt-2">Your detailed explanation helps us better understand and address the issue.</small>
                </div>

                <div class="text-center mt-5">
                  <button type="submit" name="submit" class="btn-submit">
                    <i class="bi bi-send"></i> Submit Report
                  </button>
                </div>
              </form>
   
              <div class="success-message" id="successMessage">
                <i class="bi bi-check-circle-fill me-2"></i>
                Thank you for your report. We will review it shortly.
              </div>
              <?php     }?>
            </div>
          </div>
        </div>
      </div>
    </section>
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
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Blogy</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
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

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('reportForm');
      const successMessage = document.querySelector('.success-message');
      const steps = document.querySelectorAll('.step');
      let currentStep = 0;

      // Form validation
      form.addEventListener('submit', function(e) {
        e.preventDefault();

        let isValid = true;
        const formGroups = form.querySelectorAll('.form-group');

        formGroups.forEach(group => {
          const input = group.querySelector('input, select, textarea');
          const feedback = group.querySelector('.form-feedback');

          if (!input.value.trim()) {
            isValid = false;
            feedback.textContent = 'This field is required';
            input.classList.add('is-invalid');
          } else {
            feedback.textContent = '';
            input.classList.remove('is-invalid');
          }
        });

        if (isValid) {
          const reportData = {
            contentType: document.getElementById('contentType').value,
            contentTitle: document.getElementById('contentTitle').value,
            reason: document.getElementById('reportReason').value,
            description: document.getElementById('reportDescription').value,
            severity: document.getElementById('reportSeverity').value,
            date: new Date().toISOString()
          };

          // Here you would typically send the report to your backend
          console.log('Report submitted:', reportData);

          // Show success message
          successMessage.classList.add('show');
          form.reset();

          // Reset form after 3 seconds
          setTimeout(() => {
            successMessage.classList.remove('show');
          }, 3000);
        }
      });

      // Step indicator
      function updateSteps() {
        steps.forEach((step, index) => {
          if (index < currentStep) {
            step.classList.add('completed');
            step.classList.remove('active');
          } else if (index === currentStep) {
            step.classList.add('active');
            step.classList.remove('completed');
          } else {
            step.classList.remove('active', 'completed');
          }
        });
      }

      // Update steps based on form interaction
      form.addEventListener('input', function(e) {
        const inputs = form.querySelectorAll('input, select, textarea');
        const filledInputs = Array.from(inputs).filter(input => input.value.trim() !== '');
        currentStep = Math.min(2, Math.floor(filledInputs.length / 2));
        updateSteps();
      });

      // Initialize AOS
      if (typeof AOS !== 'undefined') {
        AOS.init({
          duration: 1000,
          easing: 'ease-in-out',
          once: true
        });
      }
    });
  </script>
</body>

</html>