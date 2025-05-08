<header id="header" class="header position-relative">
    <div class="container-fluid container-xl position-relative">

      <div class="top-row d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-end">
         
          <h1 class="sitename">Blogy</h1><span>.</span>
        </a>

        <div class="d-flex align-items-center">
          <div class="social-links">
            <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://x.com/" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.instagram.com/" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
<?php
        require_once("search.php");
        ?>
        </div>
      </div>

    </div>

    <div class="nav-wrap">
      <div class="container d-flex justify-content-center position-relative">
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="index.php">Subscribtion</a></li>
            <li><a href="blog-details.html">Articles</a></li>
            <li><a href="author-profile.html">Magazines</a></li>
            <li><a href="rate-system.php">Rate the website</a></li>
            <li class="dropdown"><a href="#"><span>MY Acoount</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <?php if (isset($_SESSION["user"]))
                {?>

              <li><a href="account.php">My profile</a></li>
                    <li><a href="article.html">Saved Content</a></li>
                    <li><a href="report.php">Report Content</a></li>
                    <li><a href="logout.php"><i class="bi bi-box-arrow-right"></i> Log out</a></li>
                <?php } else
                { ?>
                  <li><a href="rate-system.html">Log in</a></li>
                  <?php  } ?>

                    </ul>
              </li>
                
              </ul>
              
                      
        </nav>
      </div>
    </div>

  </header>