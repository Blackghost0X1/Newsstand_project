<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>My Favorites - Blogy</title>
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
    .empty-state {
      opacity: 0.6;
    }
    .favorite-btn {
      color: rgb(208, 110, 6);
      border: none;
      background: none;
      cursor: pointer;
      transition: color 0.3s;
    }
    .favorite-btn:hover {
      color: rgb(180, 95, 5);
    }
    .btn-outline-primary {
      color: rgb(208, 110, 6);
      border-color: rgb(208, 110, 6);
    }
    .btn-outline-primary:hover {
      background-color: rgb(208, 110, 6);
      border-color: rgb(208, 110, 6);
      color: white;
    }
    .badge {
      background-color: rgb(208, 110, 6) !important;
    }
    .card {
      transition: transform 0.3s;
      border: none;
      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .page-title {
      background-color: #f8f9fa;
      padding: 40px 0;
      margin-bottom: 40px;
    }
    .page-title h1 {
      color: rgb(208, 110, 6);
      font-size: 2.5rem;
      margin-bottom: 10px;
    }
    .breadcrumb-item a {
      color: rgb(208, 110, 6);
      text-decoration: none;
    }
    .breadcrumb-item.active {
      color: #6c757d;
    }
    .card-title {
      color: rgb(208, 110, 6);
      font-size: 1.25rem;
      margin-bottom: 15px;
      font-weight: 600;
    }
    .card-text {
      color: #6c757d;
    }
    .btn-outline-danger {
      color: #dc3545;
      border-color: #dc3545;
    }
    .btn-outline-danger:hover {
      background-color: #dc3545;
      color: white;
    }
    .article-card {
      position: relative;
      margin-bottom: 30px;
    }
    .article-image {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 10px 10px 0 0;
    }
    .article-content {
      padding: 20px;
      background: white;
    }
    .article-title {
      font-size: 1.2rem;
      margin-bottom: 15px;
      color: rgb(208, 110, 6);
      font-weight: 600;
    }
    .article-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 15px;
    }
    .remove-btn {
      background: none;
      border: none;
      color: rgb(208, 110, 6);
      cursor: pointer;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      gap: 5px;
      transition: color 0.3s;
    }
    .remove-btn:hover {
      color: rgb(180, 95, 5);
    }
  </style>
</head>

<body class="favorites-page">

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
            <li><a href="favorites.php" class="active">Favourite</a></li>
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
            <li class="breadcrumb-item active current">My Favorites</li>
          </ol>
        </nav>
      </div>

      <div class="title-wrapper">
        <h1>My Favorites</h1>
        <p>Your saved articles and bookmarks</p>
      </div>
    </div>

    <!-- Favorites Content -->
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-8">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h2><i class="bi bi-bookmark-fill" style="color: rgb(208, 110, 6);"></i> Saved Articles</h2>
            <button id="clear-favorites" class="btn btn-outline-danger">Clear All</button>
          </div>
          
          <div id="favorites-container" class="row">
            <!-- Favorites will be loaded here -->
          </div>
          
          <div id="no-favorites" class="text-center py-5 empty-state">
            <i class="bi bi-bookmark" style="font-size: 3rem; color: rgb(208, 110, 6);"></i>
            <h4 class="mt-3">No favorites yet</h4>
            <p>Click the <i class="bi bi-bookmark"></i> icon on articles to save them here</p>
            <a href="article.php" class="btn btn-outline-primary mt-3">Browse Articles</a>
            <a href="magazine.php" class="btn btn-outline-primary mt-3">Browse Magazine</a>
          </div>
        </div>

        <div class="col-lg-4 sidebar">
          <div class="widgets-container" data-aos="fade-up" data-aos-delay="200">
            <!-- Recent Posts Widget -->
            <div class="recent-posts-widget widget-item">
              <h3 class="widget-title">Recent Posts</h3>
              <div class="post-item">
                <img src="assets/img/blog/blog-post-square-1.webp" alt="" class="flex-shrink-0">
                <div>
                  <h4><a href="blog-details.php">The Future of Technology</a></h4>
                  <time datetime="2024-01-01"><?php echo date('M d, Y'); ?></time>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Blogy</span></strong>. All Rights Reserved
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

  <script>
    // Favorites functionality
    document.addEventListener('DOMContentLoaded', function() {
      const favoritesContainer = document.getElementById('favorites-container');
      const noFavorites = document.getElementById('no-favorites');
      const clearFavoritesBtn = document.getElementById('clear-favorites');

      // Load favorites from localStorage
      function loadFavorites() {
        const favorites = JSON.parse(localStorage.getItem('favorites')) || [];
        
        if (favorites.length === 0) {
          favoritesContainer.style.display = 'none';
          noFavorites.style.display = 'block';
        } else {
          favoritesContainer.style.display = 'flex';
          noFavorites.style.display = 'none';
          
          favoritesContainer.innerHTML = favorites.map(favorite => `
            <div class="col-md-6 article-card">
              <div class="card">
                <img src="${favorite.image}" class="article-image" alt="${favorite.title}">
                <div class="article-content">
                  <h3 class="article-title">${favorite.title}</h3>
                  <p class="card-text">${favorite.excerpt}</p>
                  <div class="article-actions">
                    <a href="${favorite.link}" class="btn btn-outline-primary">Read More</a>
                    <button class="remove-btn" data-id="${favorite.id}">
                      <i class="bi bi-trash"></i> Remove
                    </button>
                  </div>
                </div>
              </div>
            </div>
          `).join('');
        }
      }

      // Clear all favorites
      clearFavoritesBtn.addEventListener('click', function() {
        if (confirm('Are you sure you want to clear all favorites?')) {
          localStorage.removeItem('favorites');
          loadFavorites();
        }
      });

      // Remove individual favorite
      favoritesContainer.addEventListener('click', function(e) {
        if (e.target.closest('.remove-btn')) {
          const button = e.target.closest('.remove-btn');
          const id = button.dataset.id;
          const favorites = JSON.parse(localStorage.getItem('favorites')) || [];
          const updatedFavorites = favorites.filter(fav => fav.id !== id);
          localStorage.setItem('favorites', JSON.stringify(updatedFavorites));
          loadFavorites();
        }
      });

      // Initial load
      loadFavorites();
    });
  </script>
</body>
</html> 