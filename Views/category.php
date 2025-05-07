<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Categories - Blogy</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root {
      --primary-color: #2c3e50;
      --accent-color: #3498db;
      --light-bg: #f8f9fa;
      --text-color: #333;
      --border-radius: 10px;
      --box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
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
      background: white;
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
      color: var(--primary-color);
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
      background: white;
      margin-bottom: 2rem;
    }

    .page-title h1 {
      font-size: 2.5rem;
      color: var(--primary-color);
      margin-bottom: 1rem;
    }

    /* Category Grid */
    .category-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      padding: 1rem;
    }

    .category-card {
      background: white;
      border-radius: var(--border-radius);
      overflow: hidden;
      box-shadow: var(--box-shadow);
      transition: transform 0.3s;
      position: relative;
    }

    .category-card:hover {
      transform: translateY(-5px);
    }

    .category-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .category-content {
      padding: 1.5rem;
    }

    .category-title {
      font-size: 1.5rem;
      color: var(--primary-color);
      margin-bottom: 1rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .category-description {
      color: var(--text-color);
      margin-bottom: 1.5rem;
    }

    .category-stats {
      display: flex;
      justify-content: space-between;
      margin-bottom: 1.5rem;
      padding-bottom: 1rem;
      border-bottom: 1px solid #eee;
    }

    .stat-item {
      text-align: center;
    }

    .stat-number {
      font-size: 1.25rem;
      font-weight: 600;
      color: var(--primary-color);
    }

    .stat-label {
      font-size: 0.875rem;
      color: #666;
    }

    .category-actions {
      display: flex;
      gap: 1rem;
    }

    .action-btn {
      flex: 1;
      padding: 0.75rem;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 500;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      transition: background-color 0.3s;
    }

    .view-articles {
      background: var(--accent-color);
      color: white;
    }

    .view-articles:hover {
      background: #2980b9;
    }

    .view-magazines {
      background: #2ecc71;
      color: white;
    }

    .view-magazines:hover {
      background: #27ae60;
    }

    /* Footer */
    .footer {
      background: var(--primary-color);
      color: white;
      padding: 3rem 0;
      margin-top: 3rem;
    }

    .footer-content {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
    }

    .footer-section h3 {
      margin-bottom: 1rem;
    }

    .footer-links {
      list-style: none;
    }

    .footer-links li {
      margin-bottom: 0.5rem;
    }

    .footer-links a {
      color: white;
      text-decoration: none;
      opacity: 0.8;
      transition: opacity 0.3s;
    }

    .footer-links a:hover {
      opacity: 1;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .category-grid {
        grid-template-columns: 1fr;
      }

      .nav {
        display: none;
      }
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header class="header">
    <div class="container header-content">
      <a href="index.php" class="logo">Blogy</a>
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
    </div>
  </header>

  <!-- Page Title -->
  <section class="page-title">
    <div class="container">
      <h1>Categories</h1>
      <p>Explore our content by category</p>
    </div>
  </section>

  <!-- Category Grid -->
  <section class="category-grid">
    <div class="container">
      <!-- Technology Category -->
      <div class="category-card">
        <img src="assets/img/tech-category.jpg" alt="Technology" class="category-image">
        <div class="category-content">
          <h2 class="category-title">
            <i class="bi bi-laptop"></i>
            Technology
          </h2>
          <p class="category-description">
            Latest news and insights from the world of technology, including AI, software development, and digital innovation.
          </p>
          <div class="category-stats">
            <div class="stat-item">
              <div class="stat-number"><?php echo rand(50, 200); ?></div>
              <div class="stat-label">Articles</div>
            </div>
            <div class="stat-item">
              <div class="stat-number"><?php echo rand(10, 50); ?></div>
              <div class="stat-label">Magazines</div>
            </div>
            <div class="stat-item">
              <div class="stat-number"><?php echo rand(1000, 5000); ?></div>
              <div class="stat-label">Readers</div>
            </div>
          </div>
          <div class="category-actions">
            <button class="action-btn view-articles">
              <i class="bi bi-file-text"></i>
              View Articles
            </button>
            <button class="action-btn view-magazines">
              <i class="bi bi-book"></i>
              View Magazines
            </button>
          </div>
        </div>
      </div>

      <!-- Business Category -->
      <div class="category-card">
        <img src="assets/img/business-category.jpg" alt="Business" class="category-image">
        <div class="category-content">
          <h2 class="category-title">
            <i class="bi bi-briefcase"></i>
            Business
          </h2>
          <p class="category-description">
            Business news, market analysis, and insights for entrepreneurs and professionals.
          </p>
          <div class="category-stats">
            <div class="stat-item">
              <div class="stat-number"><?php echo rand(50, 200); ?></div>
              <div class="stat-label">Articles</div>
            </div>
            <div class="stat-item">
              <div class="stat-number"><?php echo rand(10, 50); ?></div>
              <div class="stat-label">Magazines</div>
            </div>
            <div class="stat-item">
              <div class="stat-number"><?php echo rand(1000, 5000); ?></div>
              <div class="stat-label">Readers</div>
            </div>
          </div>
          <div class="category-actions">
            <button class="action-btn view-articles">
              <i class="bi bi-file-text"></i>
              View Articles
            </button>
            <button class="action-btn view-magazines">
              <i class="bi bi-book"></i>
              View Magazines
            </button>
          </div>
        </div>
      </div>

      <!-- Lifestyle Category -->
      <div class="category-card">
        <img src="assets/img/lifestyle-category.jpg" alt="Lifestyle" class="category-image">
        <div class="category-content">
          <h2 class="category-title">
            <i class="bi bi-heart"></i>
            Lifestyle
          </h2>
          <p class="category-description">
            Tips and trends for living your best life, from health and wellness to travel and entertainment.
          </p>
          <div class="category-stats">
            <div class="stat-item">
              <div class="stat-number"><?php echo rand(50, 200); ?></div>
              <div class="stat-label">Articles</div>
            </div>
            <div class="stat-item">
              <div class="stat-number"><?php echo rand(10, 50); ?></div>
              <div class="stat-label">Magazines</div>
            </div>
            <div class="stat-item">
              <div class="stat-number"><?php echo rand(1000, 5000); ?></div>
              <div class="stat-label">Readers</div>
            </div>
          </div>
          <div class="category-actions">
            <button class="action-btn view-articles">
              <i class="bi bi-file-text"></i>
              View Articles
            </button>
            <button class="action-btn view-magazines">
              <i class="bi bi-book"></i>
              View Magazines
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container footer-content">
      <div class="footer-section">
        <h3>About Us</h3>
        <ul class="footer-links">
          <li><a href="about.php">Our Story</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="#">Careers</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Categories</h3>
        <ul class="footer-links">
          <li><a href="#">Technology</a></li>
          <li><a href="#">Business</a></li>
          <li><a href="#">Lifestyle</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Connect</h3>
        <ul class="footer-links">
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Instagram</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <script>
    // Add any JavaScript functionality here
    document.querySelectorAll('.action-btn').forEach(button => {
      button.addEventListener('click', () => {
        const action = button.classList.contains('view-articles') ? 'articles' : 'magazines';
        const category = button.closest('.category-card').querySelector('.category-title').textContent.trim();
        console.log(`Viewing ${action} for ${category}`);
        // Add your navigation logic here
      });
    });
  </script>
</body>
</html> 