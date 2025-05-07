<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Articles - Blogy</title>
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
      padding: 1rem;
      background: var(--primary-color);
      border-radius: var(--border-radius);
      box-shadow: var(--box-shadow);
    }

    .filter-btn {
      padding: 0.5rem 1.5rem;
      margin: 0.5rem;
      border: 2px solid var(--accent-color);
      background: transparent;
      color: var(--text-color);
      border-radius: 25px;
      cursor: pointer;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .filter-btn:hover, .filter-btn.active {
      background: var(--accent-color);
      color: white;
    }

    /* Article Cards */
    .article-card {
      background: var(--card-bg);
      border-radius: var(--border-radius);
      box-shadow: var(--box-shadow);
      transition: transform 0.3s ease;
      margin-bottom: 1rem;
      display: flex;
      flex-direction: column;
      height: 100%;
    }

    .article-card:hover {
      transform: translateY(-5px);
    }

    .article-content {
      padding: 1.5rem;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .article-content h3 {
      font-size: 1.5rem;
      margin-bottom: 1rem;
      color: var(--text-color);
    }

    .article-excerpt {
      color: var(--secondary-text);
      margin-bottom: 1rem;
    }

    .article-tag {
      background: var(--primary-color);
      color: var(--text-color);
      padding: 0.3rem 0.8rem;
      border-radius: 20px;
      font-size: 0.9rem;
      margin-right: 0.5rem;
      display: inline-block;
    }

    /* Article Grid */
    .article-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
      padding: 1rem;
    }

    .article-image {
      width: 100%;
      height: 240px;
      overflow: hidden;
    }

    .article-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .article-meta {
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
      gap: 0.5rem;
    }

    .author-image {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      object-fit: cover;
    }

    .author {
      font-weight: 500;
      color: #666;
    }

    .date {
      color: #888;
      font-size: 0.9rem;
    }

    .article-tags {
      display: flex;
      gap: 0.5rem;
      margin-bottom: 1rem;
      flex-wrap: wrap;
    }

    .read-more {
      background: var(--accent-color);
      color: white;
      border: none;
      padding: 0.8rem 1.5rem;
      border-radius: 25px;
      cursor: pointer;
      font-weight: 500;
      transition: background-color 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }

    .read-more:hover {
      background: var(--hover-color);
      color: white;
    }

    .article-actions {
      margin-top: auto;
      padding-top: 1rem;
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
      <h1>Our Articles</h1>
      <p>Discover our collection of premium articles</p>
    </div>
  </div>

  <main class="container">
    <!-- Filter Section -->
    <div class="filter-section">
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="technology">Technology</button>
      <button class="filter-btn" data-filter="lifestyle">Lifestyle</button>
      <button class="filter-btn" data-filter="business">Business</button>
      <button class="filter-btn" data-filter="science">Science</button>
      <button class="filter-btn" data-filter="food">Food</button>
    </div>

    <!-- Article Grid -->
    <div class="article-grid">
      <!-- Technology Articles -->
      <article class="article-card" data-category="technology" data-article-id="ai-revolution">
        <div class="article-image">
          <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=800" alt="AI Technology">
        </div>
        <div class="article-content">
          <h3>The AI Revolution: What's Next?</h3>
          <div class="article-meta">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100" alt="Sarah Johnson" class="author-image">
            <span class="author">Sarah Johnson</span>
            <span class="date">Mar 15, 2024</span>
          </div>
          <p class="article-excerpt">Artificial Intelligence is transforming our world at an unprecedented pace. This comprehensive analysis explores the current state of AI and its future implications...</p>
          <div class="article-tags">
            <span class="article-tag">AI</span>
            <span class="article-tag">Technology</span>
            <span class="article-tag">Future</span>
          </div>
          <div class="article-actions">
            <a href="article-details.html?id=ai-revolution" class="read-more">
              <i class="bi bi-book"></i>
              Read More
            </a>
          </div>
        </div>
      </article>

      <article class="article-card" data-category="technology" data-article-id="blockchain-future">
        <div class="article-image">
          <img src="https://images.unsplash.com/photo-1639762681057-408e52192e55?w=800" alt="Blockchain Technology">
        </div>
        <div class="article-content">
          <h3>Blockchain: Beyond Cryptocurrency</h3>
          <div class="article-meta">
            <img src="https://images.unsplash.com/photo-1500648767791-0a1dd7228f2d?w=100" alt="David Brown" class="author-image">
            <span class="author">David Brown</span>
            <span class="date">Mar 14, 2024</span>
          </div>
          <p class="article-excerpt">Explore how blockchain technology is revolutionizing industries beyond finance, from supply chain management to digital identity verification.</p>
          <div class="article-tags">
            <span class="article-tag">Blockchain</span>
            <span class="article-tag">Technology</span>
            <span class="article-tag">Innovation</span>
          </div>
          <div class="article-actions">
            <a href="article-details.html?id=blockchain-future" class="read-more">
              <i class="bi bi-book"></i>
              Read More
            </a>
          </div>
        </div>
      </article>

      <article class="article-card" data-category="lifestyle" data-article-id="modern-living">
        <div class="article-image">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800" alt="Modern Living">
        </div>
        <div class="article-content">
          <h3>Modern Living: Finding Balance</h3>
          <div class="article-meta">
            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100" alt="David Brown" class="author-image">
            <span class="author">David Brown</span>
            <span class="date">Mar 13, 2024</span>
          </div>
          <p class="article-excerpt">In today's fast-paced world, finding balance between work, personal life, and digital engagement is crucial. Learn practical strategies for managing modern life effectively.</p>
          <div class="article-tags">
            <span class="article-tag">Lifestyle</span>
            <span class="article-tag">Wellness</span>
            <span class="article-tag">Balance</span>
          </div>
          <div class="article-actions">
            <a href="article-details.html?id=modern-living" class="read-more">
              <i class="bi bi-book"></i>
              Read More
            </a>
          </div>
        </div>
      </article>

      <article class="article-card" data-category="business" data-article-id="digital-transformation">
        <div class="article-image">
          <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=800" alt="Digital Transformation">
        </div>
        <div class="article-content">
          <h3>Digital Transformation in 2024</h3>
          <div class="article-meta">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100" alt="Sarah Johnson" class="author-image">
            <span class="author">Sarah Johnson</span>
            <span class="date">Mar 12, 2024</span>
          </div>
          <p class="article-excerpt">The digital landscape continues to evolve rapidly. Learn about cloud computing, blockchain technology, and IoT innovations that are driving business transformation.</p>
          <div class="article-tags">
            <span class="article-tag">Digital</span>
            <span class="article-tag">Business</span>
            <span class="article-tag">Innovation</span>
          </div>
          <div class="article-actions">
            <a href="article-details.html?id=digital-transformation" class="read-more">
              <i class="bi bi-book"></i>
              Read More
            </a>
          </div>
        </div>
      </article>

      <article class="article-card" data-category="science" data-article-id="space-exploration">
        <div class="article-image">
          <img src="https://images.unsplash.com/photo-1614728894747-a83421e2b9c9?w=800" alt="Space Exploration">
        </div>
        <div class="article-content">
          <h3>New Frontiers in Space</h3>
          <div class="article-meta">
            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=100" alt="Emma Davis" class="author-image">
            <span class="author">Emma Davis</span>
            <span class="date">Mar 11, 2024</span>
          </div>
          <p class="article-excerpt">Space exploration enters a new era as private companies join national space agencies. Explore recent breakthroughs and upcoming missions in space technology.</p>
          <div class="article-tags">
            <span class="article-tag">Space</span>
            <span class="article-tag">Science</span>
            <span class="article-tag">Exploration</span>
          </div>
          <div class="article-actions">
            <a href="article-details.html?id=space-exploration" class="read-more">
              <i class="bi bi-book"></i>
              Read More
            </a>
          </div>
        </div>
      </article>

      <article class="article-card" data-category="food" data-article-id="culinary-trends">
        <div class="article-image">
          <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=800" alt="Culinary Trends">
        </div>
        <div class="article-content">
          <h3>Culinary Trends 2024</h3>
          <div class="article-meta">
            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100" alt="David Brown" class="author-image">
            <span class="author">David Brown</span>
            <span class="date">Mar 10, 2024</span>
          </div>
          <p class="article-excerpt">Discover the latest trends in the culinary world, from sustainable cooking practices to innovative fusion cuisines that are shaping the future of dining.</p>
          <div class="article-tags">
            <span class="article-tag">Food</span>
            <span class="article-tag">Culinary</span>
            <span class="article-tag">Trends</span>
          </div>
          <div class="article-actions">
            <a href="article-details.html?id=culinary-trends" class="read-more">
              <i class="bi bi-book"></i>
              Read More
            </a>
          </div>
        </div>
      </article>
    </div>
  </main>

  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-section">
          <h3>About Blogy</h3>
          <p>Your source for premium articles and digital content.</p>
        </div>
        <div class="footer-section">
          <h3>Quick Links</h3>
          <ul class="footer-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="article.php">Articles</a></li>
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

  <script>
    // Simplified JavaScript for article listing page
    document.addEventListener('DOMContentLoaded', function() {
        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
      const articleCards = document.querySelectorAll('.article-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                button.classList.add('active');

                const filter = button.getAttribute('data-filter');

                // Show/hide articles based on filter
                articleCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'block';
      } else {
                        card.style.display = 'none';
                    }
                });
      });
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