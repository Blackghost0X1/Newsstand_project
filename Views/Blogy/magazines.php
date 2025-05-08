<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Magazines - Blogy</title>
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

  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Add html2pdf library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

  <style>
    :root {
      --primary-color: #ffffff;
      --accent-color: #f75815;
      --light-bg: #f9f9f9;
      --text-color: #212529;
      --secondary-text: #6c757d;
      --border-radius: 8px;
      --box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
      --card-bg: #ffffff;
      --hover-color: #f75815;
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
      background: var(--primary-color);
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
      color: var(--accent-color);
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
      background: var(--primary-color);
      margin-bottom: 2rem;
    }

    .page-title h1 {
      font-size: 2.5rem;
      color: var(--text-color);
      margin-bottom: 1rem;
    }

    /* Filter Buttons */
    .filter-section {
      text-align: center;
      margin-bottom: 2rem;
      padding: 1.5rem;
      background: var(--primary-color);
      border-radius: var(--border-radius);
      box-shadow: var(--box-shadow);
      border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .filter-btn {
      padding: 0.75rem 1.75rem;
      margin: 0.5rem;
      border: 2px solid var(--accent-color);
      background: transparent;
      color: var(--text-color);
      border-radius: 25px;
      cursor: pointer;
      font-weight: 500;
      transition: all 0.3s ease;
      font-size: 0.95rem;
    }

    .filter-btn:hover, .filter-btn.active {
      background: var(--accent-color);
      color: white;
      transform: translateY(-2px);
    }

    /* Download PDF Button */
    .download-pdf {
      display: inline-block;
      padding: 0.5rem 1.5rem;
      background: #28a745;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: background 0.3s;
      margin-left: 1rem;
      border: none;
      cursor: pointer;
    }

    .download-pdf:hover {
      background: #218838;
    }

    .download-pdf i {
      margin-right: 5px;
    }

    /* PDF Content Styles */
    .pdf-content {
      padding: 20px;
      display: none;
    }

    .pdf-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .pdf-magazine-item {
      margin-bottom: 20px;
      padding-bottom: 20px;
      border-bottom: 1px solid #eee;
    }

    .pdf-magazine-title {
      font-size: 18px;
      color: #2c3e50;
      margin-bottom: 10px;
    }

    .pdf-magazine-price {
      font-weight: 600;
      color: #2c3e50;
    }

    /* Magazine Grid */
    .magazine-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      padding: 1rem;
    }

    .magazine-card {
      background: var(--card-bg);
      border-radius: var(--border-radius);
      overflow: hidden;
      box-shadow: var(--box-shadow);
      transition: all 0.3s ease;
      position: relative;
      border: 1px solid rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
    }

    .magazine-card:hover {
      transform: translateY(-5px);
    }

    .magazine-image {
      width: 100%;
      height: 200px;
      overflow: hidden;
    }

    .magazine-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .magazine-card:hover .magazine-image img {
      transform: scale(1.05);
    }

    .magazine-content {
      padding: 1.5rem;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }

    .magazine-title {
      font-size: 1.25rem;
      color: var(--text-color);
      margin-bottom: 0.75rem;
      font-weight: 600;
    }

    .magazine-meta {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1rem;
      color: var(--secondary-text);
      font-size: 0.9rem;
    }

    .magazine-description {
      color: var(--secondary-text);
      margin-bottom: 1rem;
      flex-grow: 1;
    }

    .magazine-tags {
      display: flex;
      gap: 0.5rem;
      margin-bottom: 1rem;
    }

    .magazine-tag {
      background: var(--light-bg);
      color: var(--accent-color);
      padding: 0.25rem 0.75rem;
      border-radius: 15px;
      font-size: 0.8rem;
      font-weight: 500;
    }

    .read-more {
      display: inline-block;
      padding: 0.75rem 1.5rem;
      background: var(--accent-color);
      color: white;
      text-decoration: none;
      border-radius: 25px;
      font-weight: 500;
      transition: all 0.3s ease;
      text-align: center;
    }

    .read-more:hover {
      background: var(--hover-color);
      transform: translateY(-2px);
    }

    /* Magazine Actions */
    .magazine-actions {
      display: flex;
      gap: 1rem;
      margin-top: 1rem;
    }

    .purchase-btn {
      background: var(--accent-color);
      color: white;
      border: none;
      padding: 0.8rem 1.5rem;
      border-radius: 25px;
      cursor: pointer;
      font-weight: 500;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
    }

    .purchase-btn:hover {
      background: var(--hover-color);
      transform: translateY(-2px);
    }

    .purchase-btn i {
      font-size: 1.1rem;
    }

    /* Favorite Button */
    .favorite-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      background: rgba(255, 255, 255, 0.9);
      border: none;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s ease;
      z-index: 1;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .favorite-btn:hover {
      transform: scale(1.1);
      background: white;
    }

    .favorite-btn i {
      color: var(--accent-color);
      font-size: 1.2rem;
      transition: all 0.3s ease;
    }

    .favorite-btn.active i {
      color: var(--accent-color);
    }

    /* Hide magazines by default */
    .magazine-card {
      display: none;
    }

    /* Show magazines when their category is active */
    .magazine-card[data-category="sports"],
    .magazine-card[data-category="technology"],
    .magazine-card[data-category="lifestyle"],
    .magazine-card[data-category="business"],
    .magazine-card[data-category="food"] {
      display: block;
    }

    /* Footer */
    .footer {
      background: var(--primary-color);
      color: var(--text-color);
      padding: 4rem 0 2rem;
      margin-top: 4rem;
      border-top: 1px solid rgba(0, 0, 0, 0.1);
    }

    .footer-content {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 3rem;
      margin-bottom: 3rem;
    }

    .footer-section h3 {
      margin-bottom: 1.5rem;
      color: var(--text-color);
      font-size: 1.25rem;
      font-weight: 600;
    }

    .footer-links {
      list-style: none;
    }

    .footer-links li {
      margin-bottom: 0.75rem;
    }

    .footer-links a {
      color: var(--secondary-text);
      text-decoration: none;
      transition: all 0.3s ease;
      display: inline-block;
    }

    .footer-links a:hover {
      color: var(--accent-color);
      transform: translateX(5px);
    }

    .footer-bottom {
      text-align: center;
      padding-top: 2rem;
      border-top: 1px solid rgba(0, 0, 0, 0.1);
      color: var(--secondary-text);
      font-size: 0.9rem;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .magazine-grid {
        grid-template-columns: 1fr;
      }

      .nav {
        display: none;
      }

      .filter-section {
        padding: 1rem;
      }

      .filter-btn {
        padding: 0.6rem 1.25rem;
        font-size: 0.9rem;
      }

      .footer-content {
        grid-template-columns: 1fr;
        gap: 2rem;
      }
    }

    /* Download Button Styles */
    .download-btn {
      background: var(--accent-color);
      color: white;
      border: none;
      padding: 0.75rem;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 500;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      transition: background-color 0.3s;
    }

    .download-btn:hover {
      background: #2980b9;
    }

    .download-btn i {
      font-size: 1.1rem;
    }

    /* PDF Content Styles */
    .pdf-content {
      padding: 20px;
      display: none;
    }

    .pdf-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .pdf-magazine-content {
      margin-bottom: 20px;
    }

    .pdf-magazine-title {
      font-size: 24px;
      color: #2c3e50;
      margin-bottom: 15px;
    }

    .pdf-magazine-description {
      font-size: 16px;
      color: #666;
      margin-bottom: 15px;
      line-height: 1.6;
    }

    .pdf-magazine-price {
      font-size: 18px;
      font-weight: 600;
      color: #2c3e50;
      margin-bottom: 10px;
    }

    .pdf-magazine-category {
      font-size: 14px;
      color: #666;
      text-transform: capitalize;
    }

    /* Navigation Button Styles */
    .nav-btn {
      display: none;
    }

    /* Update magazine actions to accommodate new button */
    .magazine-actions {
      display: flex;
      gap: 1rem;
      padding: 1rem;
      border-top: 1px solid #eee;
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

    .download-btn {
      background: var(--accent-color);
      color: white;
    }

    .download-btn:hover {
      background: #2980b9;
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
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header>

  <div class="page-title">
    <div class="container">
      <h1>Our Magazines</h1>
      <p>Discover our collection of premium magazines</p>
      <div style="margin-top: 1rem;">
        <a href="articles.php" class="back-to-magazines">Browse Articles</a>
      </div>
    </div>
  </div>

  <!-- Hidden PDF Content -->
  <div id="pdf-content" class="pdf-content">
    <div class="pdf-header">
      <h1>Our Magazines</h1>
      <p>Generated on: <span id="generation-date"></span></p>
    </div>
    <div id="pdf-magazines-list">
      <!-- PDF content will be generated here -->
    </div>
  </div>

  <main class="container">
    <!-- Filter Section -->
    <div class="filter-section">
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="sports">Sports</button>
      <button class="filter-btn" data-filter="technology">Technology</button>
      <button class="filter-btn" data-filter="lifestyle">Lifestyle</button>
      <button class="filter-btn" data-filter="business">Business</button>
      <button class="filter-btn" data-filter="food">Food</button>
    </div>

    <!-- Magazine Grid -->
    <div class="magazine-grid">
      <!-- Sports Magazines -->
      <article class="magazine-card" data-category="sports">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1461896836934-ffe607ba8211?w=800" alt="Sports Weekly">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Sports Weekly</h3>
          <div class="magazine-meta">
            <span>By Sports Team</span>
            <span>March 15, 2024</span>
            </div>
          <p class="magazine-description">Comprehensive coverage of all major sports events and athletes. Get in-depth analysis of the latest matches, exclusive interviews with top athletes, training tips, and behind-the-scenes stories from the world of sports.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Sports</span>
            <span class="magazine-tag">Athletics</span>
          </div>
          <a href="magazine-details.html?id=sports-weekly" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="sports">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1579952363873-27f3bade9f55?w=800" alt="Football Focus">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Football Focus</h3>
          <div class="magazine-meta">
            <span>By Football Team</span>
            <span>March 14, 2024</span>
            </div>
          <p class="magazine-description">In-depth analysis of football leagues, teams, and players worldwide. Features tactical breakdowns, player profiles, transfer news, and expert predictions.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Football</span>
            <span class="magazine-tag">Sports</span>
          </div>
          <a href="magazine-details.html?id=football-focus" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="sports">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1519861531473-9200262188bf?w=800" alt="Basketball Today">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Basketball Today</h3>
          <div class="magazine-meta">
            <span>By Basketball Team</span>
            <span>March 13, 2024</span>
            </div>
          <p class="magazine-description">Latest news, stats, and stories from the world of basketball. Comprehensive coverage of NBA, EuroLeague, and international competitions.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Basketball</span>
            <span class="magazine-tag">Sports</span>
          </div>
          <a href="magazine-details.html?id=basketball-today" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="sports">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1595435934249-5df7ed86e1c0?w=800" alt="Tennis World">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Tennis World</h3>
          <div class="magazine-meta">
            <span>By Tennis Team</span>
            <span>March 12, 2024</span>
            </div>
          <p class="magazine-description">Coverage of major tournaments and tennis stars. Detailed analysis of Grand Slam events, ATP and WTA tours, and rising stars.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Tennis</span>
            <span class="magazine-tag">Sports</span>
          </div>
          <a href="magazine-details.html?id=tennis-world" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="sports">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=800" alt="Fitness & Training">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Fitness & Training</h3>
          <div class="magazine-meta">
            <span>By Fitness Team</span>
            <span>March 11, 2024</span>
            </div>
          <p class="magazine-description">Expert advice on fitness, training, and sports performance. Comprehensive guides on strength training, cardio workouts, and nutrition plans.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Fitness</span>
            <span class="magazine-tag">Sports</span>
          </div>
          <a href="magazine-details.html?id=fitness-training" class="read-more">Read More</a>
        </div>
      </article>

      <!-- Technology Magazines -->
      <article class="magazine-card" data-category="technology">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800" alt="Tech Insights">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Tech Insights</h3>
          <div class="magazine-meta">
            <span>By Tech Team</span>
            <span>March 10, 2024</span>
            </div>
          <p class="magazine-description">Latest trends in technology, AI, and digital transformation. In-depth analysis of emerging technologies, startup innovations, and industry disruptions.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Technology</span>
            <span class="magazine-tag">AI</span>
          </div>
          <a href="magazine-details.html?id=tech-insights" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="technology">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=800" alt="Digital World">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Digital World</h3>
          <div class="magazine-meta">
            <span>By Digital Team</span>
            <span>March 9, 2024</span>
            </div>
          <p class="magazine-description">Exploring the digital landscape and emerging technologies. Comprehensive coverage of digital marketing, e-commerce, and social media trends.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Digital</span>
            <span class="magazine-tag">Technology</span>
          </div>
          <a href="magazine-details.html?id=digital-world" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="technology">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=800" alt="AI & Robotics">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">AI & Robotics</h3>
          <div class="magazine-meta">
            <span>By AI Team</span>
            <span>March 8, 2024</span>
            </div>
          <p class="magazine-description">Cutting-edge developments in artificial intelligence and robotics. Detailed coverage of machine learning, neural networks, and automation technologies.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">AI</span>
            <span class="magazine-tag">Robotics</span>
          </div>
          <a href="magazine-details.html?id=ai-robotics" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="technology">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=800" alt="Code & Development">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Code & Development</h3>
          <div class="magazine-meta">
            <span>By Development Team</span>
            <span>March 7, 2024</span>
            </div>
          <p class="magazine-description">Programming languages, frameworks, and development practices. Comprehensive guides on web development, mobile apps, and software engineering.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Development</span>
            <span class="magazine-tag">Programming</span>
          </div>
          <a href="magazine-details.html?id=code-development" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="technology">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=800" alt="Future Tech">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Future Tech</h3>
          <div class="magazine-meta">
            <span>By Tech Team</span>
            <span>March 6, 2024</span>
            </div>
          <p class="magazine-description">Exploring tomorrow's technologies and innovations. In-depth analysis of emerging tech trends, from quantum computing to space exploration.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Technology</span>
            <span class="magazine-tag">Future</span>
          </div>
          <a href="magazine-details.html?id=future-tech" class="read-more">Read More</a>
        </div>
      </article>

      <!-- Lifestyle Magazines -->
      <article class="magazine-card" data-category="lifestyle">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?w=800" alt="Modern Living">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Modern Living</h3>
          <div class="magazine-meta">
            <span>By Lifestyle Team</span>
            <span>March 5, 2024</span>
            </div>
          <p class="magazine-description">Explore the latest trends in fashion, home, and wellness. Comprehensive guides on interior design, personal style, and healthy living.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Lifestyle</span>
            <span class="magazine-tag">Fashion</span>
          </div>
          <a href="magazine-details.html?id=modern-living" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="lifestyle">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=800" alt="Fashion Forward">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Fashion Forward</h3>
          <div class="magazine-meta">
            <span>By Fashion Team</span>
            <span>March 4, 2024</span>
            </div>
          <p class="magazine-description">Latest trends, styles, and fashion industry insights. Comprehensive coverage of runway shows, designer collections, and street style.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Fashion</span>
            <span class="magazine-tag">Lifestyle</span>
          </div>
          <a href="magazine-details.html?id=fashion-forward" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="lifestyle">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?w=800" alt="Travel & Adventure">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Travel & Adventure</h3>
          <div class="magazine-meta">
            <span>By Travel Team</span>
            <span>March 3, 2024</span>
            </div>
          <p class="magazine-description">Discover amazing destinations and travel experiences. Comprehensive guides to world destinations, from hidden gems to popular hotspots.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Travel</span>
            <span class="magazine-tag">Adventure</span>
          </div>
          <a href="magazine-details.html?id=travel-adventure" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="lifestyle">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1511988617509-a57c8a288659?w=800" alt="Health & Wellness">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Health & Wellness</h3>
          <div class="magazine-meta">
            <span>By Wellness Team</span>
            <span>March 2, 2024</span>
            </div>
          <p class="magazine-description">Tips for healthy living and mental wellbeing. Comprehensive coverage of nutrition, fitness, and mental health.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Wellness</span>
            <span class="magazine-tag">Health</span>
          </div>
          <a href="magazine-details.html?id=health-wellness" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="lifestyle">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=800" alt="Home & Design">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Home & Design</h3>
          <div class="magazine-meta">
            <span>By Design Team</span>
            <span>March 1, 2024</span>
            </div>
          <p class="magazine-description">Interior design trends and home improvement ideas. Comprehensive guides on decorating, renovation, and organization.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Design</span>
            <span class="magazine-tag">Home</span>
          </div>
          <a href="magazine-details.html?id=home-design" class="read-more">Read More</a>
        </div>
      </article>

      <!-- Business Magazines -->
      <article class="magazine-card" data-category="business">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800" alt="Business Weekly">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Business Weekly</h3>
          <div class="magazine-meta">
            <span>By Business Team</span>
            <span>February 28, 2024</span>
            </div>
          <p class="magazine-description">Insights into global markets, entrepreneurship, and leadership. Comprehensive analysis of business trends, economic developments, and industry news.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Business</span>
            <span class="magazine-tag">Finance</span>
          </div>
          <a href="magazine-details.html?id=business-weekly" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="business">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800" alt="Market Trends">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Market Trends</h3>
          <div class="magazine-meta">
            <span>By Market Team</span>
            <span>February 27, 2024</span>
            </div>
          <p class="magazine-description">Analysis of market movements and investment opportunities. In-depth coverage of stock markets, commodities, and economic indicators.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Market</span>
            <span class="magazine-tag">Finance</span>
          </div>
          <a href="magazine-details.html?id=market-trends" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="business">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800" alt="Entrepreneur">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Entrepreneur</h3>
          <div class="magazine-meta">
            <span>By Entrepreneur Team</span>
            <span>February 26, 2024</span>
            </div>
          <p class="magazine-description">Stories and strategies for business success and innovation. Comprehensive coverage of startup culture, business growth, and leadership.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Entrepreneurship</span>
            <span class="magazine-tag">Business</span>
          </div>
          <a href="magazine-details.html?id=entrepreneur" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="business">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800" alt="Finance Today">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Finance Today</h3>
          <div class="magazine-meta">
            <span>By Finance Team</span>
            <span>February 25, 2024</span>
            </div>
          <p class="magazine-description">Financial news, investment strategies, and market analysis. Comprehensive coverage of personal finance, investment opportunities, and economic trends.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Finance</span>
            <span class="magazine-tag">Investment</span>
          </div>
          <a href="magazine-details.html?id=finance-today" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="business">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?w=800" alt="Global Business">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Global Business</h3>
          <div class="magazine-meta">
            <span>By Global Business Team</span>
            <span>February 24, 2024</span>
            </div>
          <p class="magazine-description">International business trends and global market insights. Comprehensive analysis of international trade, economic policies, and business opportunities.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">International</span>
            <span class="magazine-tag">Business</span>
          </div>
          <a href="magazine-details.html?id=global-business" class="read-more">Read More</a>
        </div>
      </article>

      <!-- Food Magazines -->
      <article class="magazine-card" data-category="food">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=800" alt="Culinary Delights">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Culinary Delights</h3>
          <div class="magazine-meta">
            <span>By Culinary Team</span>
            <span>February 23, 2024</span>
            </div>
          <p class="magazine-description">Discover world cuisines, recipes, and culinary adventures. Comprehensive guides to international cooking techniques and ingredients.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Food</span>
            <span class="magazine-tag">Cooking</span>
          </div>
          <a href="magazine-details.html?id=culinary-delights" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="food">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?w=800" alt="Gourmet Cooking">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Gourmet Cooking</h3>
          <div class="magazine-meta">
            <span>By Gourmet Team</span>
            <span>February 22, 2024</span>
            </div>
          <p class="magazine-description">Advanced cooking techniques and gourmet recipes. In-depth guides on professional cooking methods and presentation.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Cooking</span>
            <span class="magazine-tag">Gourmet</span>
          </div>
          <a href="magazine-details.html?id=gourmet-cooking" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="food">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1495521821757-a1efb6729352?w=800" alt="Healthy Eating">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Healthy Eating</h3>
          <div class="magazine-meta">
            <span>By Nutrition Team</span>
            <span>February 21, 2024</span>
            </div>
          <p class="magazine-description">Nutritious recipes and wellness-focused cooking. Comprehensive guides on healthy ingredients, meal planning, and dietary needs.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Nutrition</span>
            <span class="magazine-tag">Cooking</span>
          </div>
          <a href="magazine-details.html?id=healthy-eating" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="food">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1512621776951-a57c8a288659?w=800" alt="World Cuisine">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">World Cuisine</h3>
          <div class="magazine-meta">
            <span>By Culinary Team</span>
            <span>February 20, 2024</span>
            </div>
          <p class="magazine-description">Explore international flavors and cooking traditions. Comprehensive guides to world cuisines, from street food to fine dining.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Food</span>
            <span class="magazine-tag">Cooking</span>
          </div>
          <a href="magazine-details.html?id=world-cuisine" class="read-more">Read More</a>
        </div>
      </article>

      <article class="magazine-card" data-category="food">
        <div class="magazine-image">
          <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?w=800" alt="Baking & Desserts">
        </div>
        <div class="magazine-content">
          <h3 class="magazine-title">Baking & Desserts</h3>
          <div class="magazine-meta">
            <span>By Pastry Team</span>
            <span>February 19, 2024</span>
            </div>
          <p class="magazine-description">Sweet treats and baking techniques for all skill levels. Comprehensive guides on baking fundamentals, pastry making, and dessert decoration.</p>
          <div class="magazine-tags">
            <span class="magazine-tag">Baking</span>
            <span class="magazine-tag">Desserts</span>
          </div>
          <a href="magazine-details.html?id=baking-desserts" class="read-more">Read More</a>
        </div>
      </article>
    </div>
  </main>

  <!-- Add Google Translate Element -->
  <div id="google_translate_element" style="text-align: center; margin: 20px 0;"></div>

  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-section">
          <h3>About Blogy</h3>
          <p>Your source for premium magazines and digital content.</p>
        </div>
        <div class="footer-section">
          <h3>Quick Links</h3>
          <ul class="footer-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="magazine.php">Magazines</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h3>Contact Us</h3>
          <ul class="footer-links">
            <li>Email: info@blogy.com</li>
            <li>Phone: (123) 456-7890</li>
            <li>Address: 123 Magazine St, City</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Add category system -->
  <script src="category.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const filterButtons = document.querySelectorAll('.filter-btn');
      const magazineCards = document.querySelectorAll('.magazine-card');

      // Function to filter magazines
      function filterMagazines(category) {
        // Update active button
        filterButtons.forEach(btn => {
          btn.classList.remove('active');
          if (btn.getAttribute('data-filter') === category) {
            btn.classList.add('active');
          }
        });

        // Show/hide magazines based on category
        magazineCards.forEach(card => {
          if (category === 'all' || card.getAttribute('data-category') === category) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      }

      // Initialize with 'all' filter
      filterMagazines('all');
    });

    function toggleFavorite(button) {
      button.classList.toggle('active');
      const icon = button.querySelector('i');
      const magazineCard = button.closest('.magazine-card');
      const magazineTitle = magazineCard.querySelector('.magazine-title').textContent;
      const magazineImage = magazineCard.querySelector('.magazine-image').src;
      const magazinePrice = magazineCard.querySelector('.magazine-price').textContent;

      if (button.classList.contains('active')) {
        icon.classList.remove('bi-heart');
        icon.classList.add('bi-heart-fill');
        
        // Store the favorited magazine in localStorage
        const favoriteMagazine = {
          title: magazineTitle,
          image: magazineImage,
          price: magazinePrice
        };
        
        // Get existing favorites or initialize empty array
        let favorites = JSON.parse(localStorage.getItem('favorites') || '[]');
        favorites.push(favoriteMagazine);
        localStorage.setItem('favorites', JSON.stringify(favorites));
        
        // Redirect to favorites page
        window.location.href = 'favorites.php';
      } else {
        icon.classList.remove('bi-heart-fill');
        icon.classList.add('bi-heart');
        
        // Remove from favorites
        let favorites = JSON.parse(localStorage.getItem('favorites') || '[]');
        favorites = favorites.filter(mag => mag.title !== magazineTitle);
        localStorage.setItem('favorites', JSON.stringify(favorites));
      }
    }

    function downloadAsPDF() {
      const magazineCards = document.querySelectorAll('.magazine-card');
      const pdfContent = document.getElementById('pdf-content');
      const pdfMagazinesList = document.getElementById('pdf-magazines-list');
      const generationDate = document.getElementById('generation-date');

      // Set generation date
      generationDate.textContent = new Date().toLocaleDateString();

      // Generate PDF content
      const pdfHTML = Array.from(magazineCards).map(card => {
        const title = card.querySelector('.magazine-title').textContent;
        const description = card.querySelector('.magazine-description').textContent;
        const price = card.querySelector('.magazine-price').textContent;
        const category = card.getAttribute('data-category');
        
        return `
          <div class="pdf-magazine-item">
            <h3 class="pdf-magazine-title">${title}</h3>
            <p class="pdf-magazine-description">${description}</p>
            <p class="pdf-magazine-price">${price}</p>
            <p>Category: ${category.charAt(0).toUpperCase() + category.slice(1)}</p>
          </div>
        `;
      }).join('');

      pdfMagazinesList.innerHTML = pdfHTML;

      // Configure PDF options
      const opt = {
        margin: 1,
        filename: 'magazines-catalog.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
      };

      // Generate and download PDF
      html2pdf().set(opt).from(pdfContent).save();
    }

    // Wait for the DOM to be fully loaded
    window.addEventListener('load', function() {
      console.log('Page loaded, initializing...'); // Debug log

      // Get all necessary elements
      const magazineCards = document.querySelectorAll('.magazine-card');

      console.log('Found elements:', { // Debug log
        magazineCards: magazineCards.length
      });
    });
  </script>

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