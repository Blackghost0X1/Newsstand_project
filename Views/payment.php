<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment - Blogy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
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

    .payment-container {
      max-width: 800px;
      margin: 2rem auto;
      padding: 2rem;
      background: var(--primary-color);
      border-radius: var(--border-radius);
      box-shadow: var(--box-shadow);
    }

    .payment-header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .payment-header h1 {
      color: var(--text-color);
      font-size: 2rem;
      margin-bottom: 1rem;
    }

    .payment-header p {
      color: var(--secondary-text);
    }

    .payment-methods {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1rem;
      margin-bottom: 2rem;
    }

    .payment-method {
      padding: 1rem;
      border: 2px solid #ddd;
      border-radius: var(--border-radius);
      cursor: pointer;
      transition: all 0.3s ease;
      text-align: center;
    }

    .payment-method:hover {
      border-color: var(--accent-color);
      transform: translateY(-2px);
    }

    .payment-method.active {
      border-color: var(--accent-color);
      background: rgba(247, 88, 21, 0.05);
    }

    .payment-method i {
      font-size: 2rem;
      color: var(--accent-color);
      margin-bottom: 0.5rem;
    }

    .payment-form {
      margin-top: 2rem;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-label {
      color: var(--text-color);
      font-weight: 500;
      margin-bottom: 0.5rem;
    }

    .form-control {
      border: 2px solid #ddd;
      border-radius: var(--border-radius);
      padding: 0.75rem;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: var(--accent-color);
      box-shadow: 0 0 0 0.2rem rgba(247, 88, 21, 0.25);
    }

    .btn-pay {
      background: var(--accent-color);
      color: white;
      border: none;
      padding: 1rem 2rem;
      border-radius: var(--border-radius);
      font-weight: 500;
      width: 100%;
      transition: all 0.3s ease;
    }

    .btn-pay:hover {
      background: #e64a0a;
      transform: translateY(-2px);
    }

    .payment-summary {
      background: var(--light-bg);
      padding: 1.5rem;
      border-radius: var(--border-radius);
      margin-bottom: 2rem;
    }

    .summary-item {
      display: flex;
      justify-content: space-between;
      margin-bottom: 1rem;
      color: var(--text-color);
    }

    .summary-total {
      font-weight: 600;
      font-size: 1.2rem;
      color: var(--accent-color);
      border-top: 2px solid #ddd;
      padding-top: 1rem;
      margin-top: 1rem;
    }

    .secure-payment {
      text-align: center;
      color: var(--secondary-text);
      margin-top: 2rem;
    }

    .secure-payment i {
      color: #28a745;
      margin-right: 0.5rem;
    }

    .error-message {
      color: #dc3545;
      font-size: 0.875rem;
      margin-top: 0.25rem;
    }

    .success-message {
      display: none;
      text-align: center;
      padding: 1rem;
      background: #d4edda;
      color: #155724;
      border-radius: var(--border-radius);
      margin-bottom: 1rem;
    }

    @media (max-width: 768px) {
      .payment-container {
        margin: 1rem;
        padding: 1rem;
      }

      .payment-methods {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>
  <?php
  // Start session
  session_start();

  // Initialize variables
  $errors = [];
  $success = false;
  $paymentMethod = 'credit_card'; // Default payment method

  // Handle form submission
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate payment method
    $paymentMethod = $_POST['payment_method'] ?? 'credit_card';
    if (!in_array($paymentMethod, ['credit_card', 'paypal', 'bank_transfer'])) {
      $errors['payment_method'] = 'Invalid payment method';
    }

    // Validate card details if credit card is selected
    if ($paymentMethod === 'credit_card') {
      $cardNumber = trim($_POST['card_number'] ?? '');
      $expiryDate = trim($_POST['expiry_date'] ?? '');
      $cvv = trim($_POST['cvv'] ?? '');
      $cardholderName = trim($_POST['cardholder_name'] ?? '');

      // Validate card number (basic validation)
      if (empty($cardNumber)) {
        $errors['card_number'] = 'Card number is required';
      } elseif (!preg_match('/^\d{16}$/', str_replace(' ', '', $cardNumber))) {
        $errors['card_number'] = 'Invalid card number';
      }

      // Validate expiry date
      if (empty($expiryDate)) {
        $errors['expiry_date'] = 'Expiry date is required';
      } elseif (!preg_match('/^(0[1-9]|1[0-2])\/([0-9]{2})$/', $expiryDate)) {
        $errors['expiry_date'] = 'Invalid expiry date format (MM/YY)';
      }

      // Validate CVV
      if (empty($cvv)) {
        $errors['cvv'] = 'CVV is required';
      } elseif (!preg_match('/^\d{3,4}$/', $cvv)) {
        $errors['cvv'] = 'Invalid CVV';
      }

      // Validate cardholder name
      if (empty($cardholderName)) {
        $errors['cardholder_name'] = 'Cardholder name is required';
      }
    }

    // If no errors, process the payment
    if (empty($errors)) {
      // Here you would typically:
      // 1. Process the payment through a payment gateway
      // 2. Update the database
      // 3. Send confirmation email
      
      // For now, we'll just show a success message
      $success = true;
    }
  }
  ?>

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

  <div class="payment-container">
    <div class="payment-header">
      <h1>Complete Your Purchase</h1>
      <p>Choose your preferred payment method and enter your details</p>
    </div>

    <?php if ($success): ?>
    <div class="success-message" style="display: block;">
      <i class="bi bi-check-circle-fill"></i>
      Payment processed successfully! Thank you for your purchase.
    </div>
    <?php endif; ?>

    <form method="POST" action="payment.php" class="payment-form" novalidate>
      <div class="payment-methods">
        <div class="payment-method <?php echo ($paymentMethod === 'credit_card') ? 'active' : ''; ?>" data-method="credit_card">
          <i class="bi bi-credit-card"></i>
          <h4>Credit Card</h4>
        </div>
        <div class="payment-method <?php echo ($paymentMethod === 'paypal') ? 'active' : ''; ?>" data-method="paypal">
          <i class="bi bi-paypal"></i>
          <h4>PayPal</h4>
        </div>
        <div class="payment-method <?php echo ($paymentMethod === 'bank_transfer') ? 'active' : ''; ?>" data-method="bank_transfer">
          <i class="bi bi-bank"></i>
          <h4>Bank Transfer</h4>
        </div>
      </div>

      <input type="hidden" name="payment_method" id="payment_method" value="<?php echo htmlspecialchars($paymentMethod); ?>">

      <div class="payment-summary">
        <div class="summary-item">
          <span>Magazine Subscription</span>
          <span>$9.99</span>
        </div>
        <div class="summary-item">
          <span>Tax</span>
          <span>$1.00</span>
        </div>
        <div class="summary-total">
          <span>Total</span>
          <span>$10.99</span>
        </div>
      </div>

      <div id="credit-card-form" class="<?php echo ($paymentMethod === 'credit_card') ? '' : 'd-none'; ?>">
        <div class="form-group">
          <label class="form-label">Card Number</label>
          <input type="text" 
                 class="form-control <?php echo isset($errors['card_number']) ? 'is-invalid' : ''; ?>" 
                 name="card_number" 
                 placeholder="1234 5678 9012 3456"
                 value="<?php echo htmlspecialchars($_POST['card_number'] ?? ''); ?>">
          <?php if (isset($errors['card_number'])): ?>
          <div class="error-message"><?php echo htmlspecialchars($errors['card_number']); ?></div>
          <?php endif; ?>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="form-label">Expiry Date</label>
              <input type="text" 
                     class="form-control <?php echo isset($errors['expiry_date']) ? 'is-invalid' : ''; ?>" 
                     name="expiry_date" 
                     placeholder="MM/YY"
                     value="<?php echo htmlspecialchars($_POST['expiry_date'] ?? ''); ?>">
              <?php if (isset($errors['expiry_date'])): ?>
              <div class="error-message"><?php echo htmlspecialchars($errors['expiry_date']); ?></div>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="form-label">CVV</label>
              <input type="text" 
                     class="form-control <?php echo isset($errors['cvv']) ? 'is-invalid' : ''; ?>" 
                     name="cvv" 
                     placeholder="123"
                     value="<?php echo htmlspecialchars($_POST['cvv'] ?? ''); ?>">
              <?php if (isset($errors['cvv'])): ?>
              <div class="error-message"><?php echo htmlspecialchars($errors['cvv']); ?></div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="form-label">Cardholder Name</label>
          <input type="text" 
                 class="form-control <?php echo isset($errors['cardholder_name']) ? 'is-invalid' : ''; ?>" 
                 name="cardholder_name" 
                 placeholder="John Doe"
                 value="<?php echo htmlspecialchars($_POST['cardholder_name'] ?? ''); ?>">
          <?php if (isset($errors['cardholder_name'])): ?>
          <div class="error-message"><?php echo htmlspecialchars($errors['cardholder_name']); ?></div>
          <?php endif; ?>
        </div>
      </div>

      <button type="submit" class="btn btn-pay">
        <i class="bi bi-lock"></i> Pay Now
      </button>
    </form>

    <div class="secure-payment">
      <i class="bi bi-shield-check"></i>
      Your payment is secure and encrypted
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Add active class to selected payment method
    document.querySelectorAll('.payment-method').forEach(method => {
      method.addEventListener('click', () => {
        document.querySelectorAll('.payment-method').forEach(m => m.classList.remove('active'));
        method.classList.add('active');
        
        // Update hidden input value
        document.getElementById('payment_method').value = method.dataset.method;
        
        // Show/hide credit card form
        const creditCardForm = document.getElementById('credit-card-form');
        if (method.dataset.method === 'credit_card') {
          creditCardForm.classList.remove('d-none');
        } else {
          creditCardForm.classList.add('d-none');
        }
      });
    });

    // Format card number input
    const cardNumberInput = document.querySelector('input[name="card_number"]');
    if (cardNumberInput) {
      cardNumberInput.addEventListener('input', (e) => {
        let value = e.target.value.replace(/\D/g, '');
        value = value.replace(/(\d{4})/g, '$1 ').trim();
        e.target.value = value;
      });
    }

    // Format expiry date input
    const expiryDateInput = document.querySelector('input[name="expiry_date"]');
    if (expiryDateInput) {
      expiryDateInput.addEventListener('input', (e) => {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length >= 2) {
          value = value.slice(0, 2) + '/' + value.slice(2, 4);
        }
        e.target.value = value;
      });
    }
  </script>
</body>
</html> 