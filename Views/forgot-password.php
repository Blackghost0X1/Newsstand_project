<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Forgot Password - Newsstand</title>
  <meta name="description" content="Reset your Newsstand password">
  <meta name="keywords" content="reset password, forgot password, newsstand">

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
    .success-message {
      display: none;
      padding: 1rem;
      margin-bottom: 1rem;
      border-radius: 0.25rem;
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
    }

    .error-message {
      display: none;
      padding: 1rem;
      margin-bottom: 1rem;
      border-radius: 0.25rem;
      background-color: #f8d7da;
      color: #721c24;
      border: 1px solid #f5c6cb;
    }

    .form-wrapper {
      background: #fff;
      padding: 2rem;
      border-radius: 0.5rem;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .input-group-text {
      background-color: #f8f9fa;
      border-right: none;
    }

    .form-control {
      border-left: none;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #ced4da;
    }

    .btn-primary {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
    }

    .btn-primary:hover {
      background-color: var(--primary-dark);
      border-color: var(--primary-dark);
    }
  </style>
</head>

<body class="forgot-password-page">
  <?php
  // Start session
  session_start();

  // Initialize variables
  $errors = [];
  $success = false;
  $email = '';

  // Handle form submission
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate email
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    if (!$email) {
      $errors['email'] = 'Please enter a valid email address';
    } else {
      // Here you would typically:
      // 1. Check if the email exists in your database
      // 2. Generate a secure reset token
      // 3. Store the token in the database with an expiration time
      // 4. Send a reset link email to the user
      
      // For now, we'll just show a success message
      $success = true;
    }
  }
  ?>

  <header id="header" class="header position-relative">
    <div class="container-fluid container-xl position-relative">
      <div class="top-row d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-end">
          <h1 class="sitename">Newsstand</h1><span>.</span>
        </a>
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
            <li class="breadcrumb-item active current">Forgot Password</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>Reset Your Password</h1>
        <p>Enter your email to receive a password reset link</p>
      </div>
    </div>

    <!-- Forgot Password Section -->
    <section id="forgot-password" class="forgot-password section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="form-wrapper" data-aos="fade-up" data-aos-delay="400">
              <?php if ($success): ?>
              <div class="success-message" style="display: block;">
                <i class="bi bi-check-circle-fill me-2"></i>
                If an account exists with this email, you will receive a password reset link shortly.
              </div>
              <?php endif; ?>

              <?php if (isset($errors['email'])): ?>
              <div class="error-message" style="display: block;">
                <i class="bi bi-exclamation-circle-fill me-2"></i>
                <?php echo htmlspecialchars($errors['email']); ?>
              </div>
              <?php endif; ?>

              <form method="POST" action="forgot-password.php" class="needs-validation" novalidate>
                <div class="mb-3">
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" 
                           class="form-control <?php echo isset($errors['email']) ? 'is-invalid' : ''; ?>" 
                           id="email" 
                           name="email" 
                           placeholder="Email address" 
                           value="<?php echo htmlspecialchars($email); ?>"
                           required>
                    <div class="invalid-feedback">
                      Please enter a valid email address.
                    </div>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-lg w-100">Send Reset Link</button>
                </div>

                <div class="text-center mt-3">
                  <a href="login.php" class="text-decoration-none">Back to Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer" class="footer">
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

  <!-- Form Validation Script -->
  <script>
    // Form validation
    (function () {
      'use strict'
      const forms = document.querySelectorAll('.needs-validation')
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>
</body>

</html> 