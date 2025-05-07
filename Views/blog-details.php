<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Article Details - Blogy</title>

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
    }

    .navbar {
      background: var(--primary-color);
      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--accent-color) !important;
    }

    .nav-link {
      color: var(--text-color) !important;
      font-weight: 500;
    }

    .nav-link:hover, .nav-link.active {
      color: var(--accent-color) !important;
    }

    .article-details {
      background: var(--primary-color);
      border-radius: var(--border-radius);
      box-shadow: var(--box-shadow);
      padding: 2rem;
      margin: 2rem 0;
    }

    .article-title {
      font-size: 2.5rem;
      color: var(--text-color);
      margin-bottom: 1rem;
    }

    .author-image {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      object-fit: cover;
    }

    .article-image {
      width: 100%;
      max-height: 500px;
      object-fit: cover;
      border-radius: var(--border-radius);
      margin-bottom: 2rem;
    }

    .article-content {
      font-size: 1.1rem;
      line-height: 1.8;
      color: var(--text-color);
    }

    .article-content h4 {
      color: var(--accent-color);
      margin: 2rem 0 1rem;
    }

    .article-content p {
      margin-bottom: 1.5rem;
    }

    .article-content ul {
      margin-bottom: 1.5rem;
      padding-left: 1.5rem;
    }

    .article-content li {
      margin-bottom: 0.5rem;
    }

    .article-tag {
      background: var(--light-bg);
      color: var(--text-color);
      padding: 0.5rem 1rem;
      border-radius: 20px;
      font-size: 0.9rem;
      margin-right: 0.5rem;
      margin-bottom: 0.5rem;
    }

    .action-btn {
      background: var(--accent-color);
      color: white;
      border: none;
      padding: 0.8rem 1.5rem;
      border-radius: var(--border-radius);
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .action-btn:hover {
      background: #e64a0a;
      transform: translateY(-2px);
    }

    .footer {
      background: var(--primary-color);
      color: var(--text-color);
      padding: 3rem 0;
      margin-top: 3rem;
    }

    .footer-links a {
      color: var(--secondary-text);
      text-decoration: none;
    }

    .footer-links a:hover {
      color: var(--accent-color);
    }

    .translation-container {
      margin: 2rem 0;
      padding: 1rem;
      background: var(--light-bg);
      border-radius: var(--border-radius);
    }

    .language-select {
      width: 100%;
      padding: 0.8rem;
      border: 2px solid var(--accent-color);
      border-radius: var(--border-radius);
      margin-bottom: 1rem;
      background: var(--primary-color);
      color: var(--text-color);
    }

    .listen-btn {
      background: var(--accent-color);
      color: white;
      border: none;
      padding: 0.8rem 1.5rem;
      border-radius: var(--border-radius);
      cursor: pointer;
    }

    .listen-btn:hover {
      background: #e64a0a;
    }

    .translation-loading {
      text-align: center;
      margin: 1rem 0;
      display: none;
    }

    .translation-loading.active {
      display: block;
    }

    .blog-tags {
      margin-top: 2rem;
      display: flex;
      gap: 0.5rem;
      flex-wrap: wrap;
    }

    .blog-tag {
      background: var(--light-bg);
      color: var(--text-color);
      padding: 0.5rem 1rem;
      border-radius: 20px;
      font-size: 0.9rem;
    }

    .blog-actions {
      margin-top: 2rem;
      display: flex;
      gap: 1rem;
    }

    .comments-section {
      background: var(--primary-color);
      border-radius: var(--border-radius);
      box-shadow: var(--box-shadow);
      padding: 2rem;
      margin: 2rem 0;
      border: 1px solid rgba(0, 0, 0, 0.1);
    }

    .comment-item {
      background: var(--light-bg);
      border-radius: var(--border-radius);
      padding: 1.5rem;
      margin-bottom: 1.5rem;
      border-left: 4px solid var(--accent-color);
      transition: transform 0.3s ease;
    }

    .comment-item:hover {
      transform: translateX(5px);
    }

    .comment-form {
      background: var(--light-bg);
      border-radius: var(--border-radius);
      padding: 2rem;
      margin-top: 2rem;
    }

    .comment-form h5 {
      color: var(--accent-color);
      margin-bottom: 1.5rem;
      font-weight: 600;
    }

    .comment-form .form-control {
      border: 2px solid rgba(0, 0, 0, 0.1);
      border-radius: var(--border-radius);
      padding: 0.8rem;
      margin-bottom: 1rem;
      transition: border-color 0.3s ease;
    }

    .comment-form .form-control:focus {
      border-color: var(--accent-color);
      box-shadow: none;
    }

    .comment-form textarea {
      min-height: 120px;
      resize: vertical;
    }

    .comment-form .btn-primary {
      background: var(--accent-color);
      border: none;
      padding: 0.8rem 2rem;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .comment-form .btn-primary:hover {
      background: #e64a0a;
      transform: translateY(-2px);
    }

    .comments-section h4 {
      color: var(--accent-color);
      font-weight: 600;
      margin-bottom: 1.5rem;
      padding-bottom: 0.5rem;
      border-bottom: 2px solid var(--accent-color);
    }

    .comment-actions {
      display: flex;
      gap: 0.5rem;
      margin-top: 0.5rem;
    }

    .comment-actions button {
      padding: 0.25rem 0.5rem;
      font-size: 0.8rem;
      border-radius: 4px;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .edit-btn {
      background: #f0ad4e;
      color: white;
    }

    .edit-btn:hover {
      background: #ec971f;
    }

    .delete-btn {
      background: #d9534f;
      color: white;
    }

    .delete-btn:hover {
      background: #c9302c;
    }

    .edit-comment-form {
      display: none;
      margin-top: 1rem;
      padding: 1rem;
      background: var(--light-bg);
      border-radius: var(--border-radius);
    }

    .edit-comment-form.active {
      display: block;
    }

    @media (max-width: 768px) {
      .article-details {
        margin: 1rem;
        padding: 1rem;
      }

      .article-image {
        height: 300px;
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
  <!-- Navigation -->
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
            <li><a href="blog-details.php" class="active">Blog Details</a></li>
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

  <!-- Main Content -->
  <main class="container">
    <?php
    // Get article ID from URL
    $articleId = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // In a real application, you would fetch the article from a database
    // For now, we'll use a sample article
    $article = [
        'id' => $articleId,
        'title' => 'Sample Article Title',
        'author' => 'John Doe',
        'authorImage' => 'assets/img/author.jpg',
        'date' => date('F j, Y'),
        'image' => 'assets/img/article.jpg',
        'content' => 'This is a sample article content. In a real application, this would be fetched from a database.',
        'tags' => ['Technology', 'Web Development', 'PHP'],
        'category' => 'Technology'
    ];
    ?>

    <div class="article-details">
      <div class="text-center mb-4">
        <h1 class="article-title"><?php echo htmlspecialchars($article['title']); ?></h1>
        <div class="d-flex align-items-center justify-content-center gap-3 mb-3">
          <img class="author-image" src="<?php echo htmlspecialchars($article['authorImage']); ?>" alt="Author">
          <span class="author"><?php echo htmlspecialchars($article['author']); ?></span>
          <span class="text-muted"><?php echo htmlspecialchars($article['date']); ?></span>
        </div>
      </div>
      <img class="article-image" src="<?php echo htmlspecialchars($article['image']); ?>" alt="Article Image">
      
      <!-- Translation Controls -->
      <div class="translation-container">
        <select class="language-select" id="languageSelect">
          <option value="">Select Language</option>
          <option value="ar">العربية (Arabic)</option>
          <option value="zh">中文 (Chinese)</option>
          <option value="nl">Nederlands (Dutch)</option>
          <option value="en">English</option>
          <option value="fr">Français (French)</option>
          <option value="de">Deutsch (German)</option>
          <option value="hi">हिन्दी (Hindi)</option>
          <option value="id">Bahasa Indonesia (Indonesian)</option>
          <option value="it">Italiano (Italian)</option>
          <option value="ja">日本語 (Japanese)</option>
          <option value="ko">한국어 (Korean)</option>
          <option value="pt">Português (Portuguese)</option>
          <option value="ru">Русский (Russian)</option>
          <option value="es">Español (Spanish)</option>
          <option value="tr">Türkçe (Turkish)</option>
          <option value="vi">Tiếng Việt (Vietnamese)</option>
        </select>
        <button class="listen-btn" onclick="listenToText()">
          <i class="bi bi-volume-up"></i> Listen
        </button>
        <div class="translation-loading">
          <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <p>Translating content...</p>
        </div>
      </div>

      <div class="article-content">
        <?php echo nl2br(htmlspecialchars($article['content'])); ?>
      </div>

      <div class="d-flex flex-wrap mt-4">
        <?php foreach ($article['tags'] as $tag): ?>
          <span class="article-tag"><?php echo htmlspecialchars($tag); ?></span>
        <?php endforeach; ?>
      </div>

      <!-- Share Section -->
      <div class="share-section mt-4 mb-4">
        <h4 class="mb-3">Share this article</h4>
        <div class="share-buttons d-flex gap-2">
          <button class="btn btn-primary" onclick="shareOnFacebook()">
            <i class="bi bi-facebook"></i> Facebook
          </button>
          <button class="btn btn-info text-white" onclick="shareOnTwitter()">
            <i class="bi bi-twitter"></i> Twitter
          </button>
          <button class="btn btn-success" onclick="shareOnLinkedIn()">
            <i class="bi bi-linkedin"></i> LinkedIn
          </button>
          <button class="btn btn-danger" onclick="shareOnWhatsApp()">
            <i class="bi bi-whatsapp"></i> WhatsApp
          </button>
        </div>
      </div>

      <!-- Comments Section -->
      <div class="comments-section">
        <h4><i class="bi bi-chat-dots"></i> Comments</h4>
        <div id="commentsList" class="mb-4">
          <?php
          // In a real application, you would fetch comments from a database
          $comments = [
              [
                  'name' => 'Jane Smith',
                  'email' => 'jane@example.com',
                  'text' => 'Great article! Very informative.',
                  'date' => date('Y-m-d H:i:s')
              ],
              [
                  'name' => 'Mike Johnson',
                  'email' => 'mike@example.com',
                  'text' => 'Thanks for sharing this knowledge.',
                  'date' => date('Y-m-d H:i:s', strtotime('-1 day'))
              ]
          ];

          foreach ($comments as $comment): ?>
            <div class="comment-item">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="mb-0"><?php echo htmlspecialchars($comment['name']); ?></h5>
                <small class="text-muted"><?php echo date('F j, Y', strtotime($comment['date'])); ?></small>
              </div>
              <p class="mb-0"><?php echo htmlspecialchars($comment['text']); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
        
        <!-- Comment Form -->
        <div class="comment-form">
          <h5><i class="bi bi-pencil-square"></i> Leave a Comment</h5>
          <form id="commentForm" action="blog-details.php?id=<?php echo $articleId; ?>" method="POST">
            <div class="mb-3">
              <input type="text" class="form-control" name="name" placeholder="Your Name" required>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required>
            </div>
            <div class="mb-3">
              <textarea class="form-control" name="comment" rows="4" placeholder="Share your thoughts..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">
              <i class="bi bi-send"></i> Post Comment
            </button>
          </form>
        </div>
      </div>

      <div class="d-flex gap-3 mt-4">
        <a href="article.php" class="action-btn">
          <i class="bi bi-arrow-left"></i> Back to Articles
        </a>
        <button class="action-btn" onclick="downloadArticle()">
          <i class="bi bi-file-pdf"></i> Download PDF
        </button>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <h3>About Blogy</h3>
          <p>Your source for premium articles and digital content.</p>
        </div>
        <div class="col-md-4 mb-4">
          <h3>Quick Links</h3>
          <ul class="list-unstyled footer-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="article.php">Articles</a></li>
            <li><a href="magazine.php">Magazines</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-4">
          <h3>Contact Us</h3>
          <ul class="list-unstyled footer-links">
            <li>Email: info@blogy.com</li>
            <li>Phone: (123) 456-7890</li>
            <li>Address: 123 Magazine St, City</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    // Store original content
    let originalContent = {
      title: '<?php echo addslashes($article['title']); ?>',
      content: '<?php echo addslashes($article['content']); ?>'
    };

    // Add event listener for language selection
    document.getElementById('languageSelect').addEventListener('change', translateContent);

    function translateContent() {
      const languageSelect = document.getElementById('languageSelect');
      const selectedLanguage = languageSelect.value;
      const loadingDiv = document.querySelector('.translation-loading');
      
      if (!selectedLanguage) {
        // Restore original content if no language selected
        document.querySelector('.article-title').textContent = originalContent.title;
        document.querySelector('.article-content').innerHTML = originalContent.content.replace(/\n/g, '<br>');
        return;
      }

      loadingDiv.classList.add('active');

      // Function to translate text using Google Translate API
      function translateText(text, targetLang) {
        return new Promise((resolve, reject) => {
          const url = `https://translate.googleapis.com/translate_a/single?client=gtx&sl=en&tl=${targetLang}&dt=t&q=${encodeURIComponent(text)}`;
          
          fetch(url)
            .then(response => response.json())
            .then(data => {
              const translatedText = data[0].map(item => item[0]).join('');
              resolve(translatedText);
            })
            .catch(error => {
              console.error('Translation error:', error);
              reject(text); // Return original text if translation fails
            });
        });
      }

      // Translate title and content
      Promise.all([
        translateText(originalContent.title, selectedLanguage),
        translateText(originalContent.content, selectedLanguage)
      ])
        .then(([translatedTitle, translatedContent]) => {
          document.querySelector('.article-title').textContent = translatedTitle;
          document.querySelector('.article-content').innerHTML = translatedContent.replace(/\n/g, '<br>');
        })
        .catch(error => {
          console.error('Translation failed:', error);
          alert('Translation failed. Please try again.');
        })
        .finally(() => {
          loadingDiv.classList.remove('active');
        });
    }

    function listenToText() {
      const articleContent = document.querySelector('.article-content').textContent;
      const title = document.querySelector('.article-title').textContent;
      const selectedLanguage = document.getElementById('languageSelect').value || 'en';
      
      // Stop any ongoing speech
      window.speechSynthesis.cancel();
      
      const textToSpeak = `${title}. ${articleContent}`;
      
      const utterance = new SpeechSynthesisUtterance(textToSpeak);
      utterance.lang = selectedLanguage;
      
      // Get available voices
      const voices = window.speechSynthesis.getVoices();
      
      // Find a voice that matches the selected language
      const voice = voices.find(v => v.lang.startsWith(selectedLanguage)) || voices[0];
      
      if (voice) {
        utterance.voice = voice;
      }
      
      // Set some properties for better speech
      utterance.rate = 1.0; // Normal speed
      utterance.pitch = 1.0; // Normal pitch
      utterance.volume = 1.0; // Full volume
      
      // Speak the text
      window.speechSynthesis.speak(utterance);
    }

    // Initialize voices when they are loaded
    if (window.speechSynthesis) {
      // Load voices immediately if they're already available
      if (window.speechSynthesis.getVoices().length > 0) {
        // Voices are already loaded
      } else {
        // Wait for voices to be loaded
        window.speechSynthesis.onvoiceschanged = function() {
          // Voices are now loaded
        };
      }
    }

    function shareOnFacebook() {
      const url = encodeURIComponent(window.location.href);
      window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, '_blank');
    }

    function shareOnTwitter() {
      const text = encodeURIComponent(document.querySelector('.article-title').textContent);
      const url = encodeURIComponent(window.location.href);
      window.open(`https://twitter.com/intent/tweet?text=${text}&url=${url}`, '_blank');
    }

    function shareOnLinkedIn() {
      const url = encodeURIComponent(window.location.href);
      window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${url}`, '_blank');
    }

    function shareOnWhatsApp() {
      const text = encodeURIComponent(document.querySelector('.article-title').textContent);
      const url = encodeURIComponent(window.location.href);
      window.open(`https://wa.me/?text=${text}%20${url}`, '_blank');
    }

    function downloadArticle() {
      // Get current content (including any translations)
      const currentTitle = document.querySelector('.article-title').textContent;
      const currentContent = document.querySelector('.article-content').textContent;
      const author = document.querySelector('.author').textContent;
      const date = document.querySelector('.text-muted').textContent;
      const articleImage = document.querySelector('.article-image').src;
      
      // Create a container for the PDF content
      const container = document.createElement('div');
      container.style.padding = '20px';
      container.style.backgroundColor = 'white';
      container.style.width = '800px';
      container.style.margin = '0 auto';
      container.style.fontFamily = 'Arial, sans-serif';
      container.style.position = 'absolute';
      container.style.left = '-9999px';
      
      // Format content with proper line breaks
      const formattedContent = currentContent
        .split('\n')
        .map(paragraph => `<p style="margin-bottom: 15px;">${paragraph}</p>`)
        .join('');

      // Add the content to the container with proper styling
      container.innerHTML = `
        <div style="text-align: center; margin-bottom: 30px;">
          <img src="${articleImage}" style="max-width: 300px; height: auto; margin-bottom: 20px;">
          <h1 style="color: #2c3e50; margin-bottom: 20px; font-size: 24px;">${currentTitle}</h1>
          <div style="color: #666; margin-bottom: 30px;">
            <p style="margin: 5px 0;">Author: ${author}</p>
            <p style="margin: 5px 0;">Date: ${date}</p>
          </div>
        </div>
        <div style="line-height: 1.6; color: #333;">
          <div style="margin-bottom: 20px; font-size: 16px;">
            ${formattedContent}
          </div>
        </div>
      `;
      
      // Add the container to the document temporarily
      document.body.appendChild(container);
      
      // Use html2pdf.js to generate PDF
      const element = container;
      const opt = {
        margin: 10,
        filename: `${currentTitle.toLowerCase().replace(/\s+/g, '-')}.pdf`,
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
      };

      // Remove the container after PDF generation
      html2pdf().set(opt).from(element).save().then(() => {
        document.body.removeChild(container);
      });
    }
  </script>

  <!-- html2pdf.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
</body>
</html> 