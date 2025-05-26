<?php
session_start(); // Start the session for user management
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CT ਦੀ CANTEEN</title>
  <link rel="stylesheet" href="style.css">
  <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
  <header>
    <div class="container">
      <nav>
        <div class="logo">
          <img src="/canteen_img/logo.jpg" alt="">
          <a href="#">CT ਦੀ CANTEEN</a>
        </div>
        <ul class="nav-links">
          <li><a href="#">Home</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></li>
          <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>
          <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></a></i></li>
        </ul>
      </nav>
    </div>
  </header>
  <section class="hero-banner">
    <div class="container">
      <div class="text-content">
        <h1>Order your favorite food online and enjoy fast delivery.</h1>
        <button class="btn"><a href="menu.html">Order Now</button></a>
      </div>
    </div>
  </section>

  <section class="Our-menu">
    <div class="container">
      <h2>Our Menu</h2>
      <div class="image-gallery">
        <a href="menu.php">
          <img
            src="https://th.bing.com/th?id=OIP.wSuyQCcpGi9Zo9G_IgWiRAHaGw&w=261&h=238&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2.jpg"
            alt="Pasta" widht="50" height="50">
          <h3 class="center">pasta</h3>
        </a>
        <a href="menu.php">
          <img src="https://www.fabhotels.com/blog/wp-content/uploads/2018/08/1000x650-9.jpg" alt="Burger"
            widht="50" height="50">
          <h3 class="center"> burger</h3>
        </a>
        <a href="menu.php">
          <img src="https://th.bing.com/th/id/OIP.9EjUR9O0r3rkOPSSEuEecAHaE8?rs=1&pid=ImgDetMain.jpg"
            alt="sandwich" widht="50" height="50">
          <h3 class="center">sandwich</h3>
        </a>
        <a href="menu.php">
          <img
            src="https://th.bing.com/th/id/OIP._tgM80_g7K1ymkC1gpvxZAHaE8?w=284&h=190&c=7&r=0&o=5&dpr=1.3&pid=1.7.jpg"
            alt="momos" widht="50" height="50">
          <h3 class="center">momos</h3>
        </a>
        <a href="menu.php">
          <img
            src="https://th.bing.com/th/id/OIP._tgM80_g7K1ymkC1gpvxZAHaE8?w=284&h=190&c=7&r=0&o=5&dpr=1.3&pid=1.7.jpg"
            alt="momos" widht="50" height="50">
          <h3 class="center">momos</h3>
        </a>
        <a href="menu.php">
          <img src="https://th.bing.com/th/id/OIP.fGqnj5iqdXPtxhCtvsH2bwHaFE?rs=1&pid=ImgDetMain.jpg" alt="briyani"
            widht="50" height="50">
          <h3 class="center">briyani</h3>
        </a>
        <a href="menu.php">
          <img src="https://th.bing.com/th/id/OIP.WZzAMKDjzhhyAf9D2dhpEQHaE7?rs=1&pid=ImgDetMain.jpg" alt="pizza"
            widht="50" height="50">
          <h3 class="center">pizza</h3>
        </a>
        <a href="menu.php">
          <img src="https://wallpapers.com/images/hd/mouthwatering-strawberry-dessert-2f5lt5ugta41n14f.jpg"
            alt="Dessert" widht="50" height="50">
          <h3 class="center">desserts</h3>
        </a>
        <a href="menu.php">
          <img src="https://th.bing.com/th/id/OIP.yhZTGdREPuh9q10FYPKDcQHaHN?rs=1&pid=ImgDetMain.jpg" alt="thali"
            widht="50" height="50">
          <h3 class="center"> thali </h3>
        </a>
        <a href="menu.php">
          <img src="https://th.bing.com/th/id/OIP.WoTH2H1IG4lln6pcfyrCXAHaE7?rs=1&pid=ImgDetMain.jpg" alt="drinks"
            widht="50" height="50">
          <h3 class="center">drinks</h3>
        </a>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-4 col-xs-12">
          <div class="single_footer">
            <h4>Services</h4>
            <ul>
              <li><a href="#">fast delivery</a></li>
              <li><a href="#"> online payment</a></li>
              <li><a href="#">feedback and review</a></li>

            </ul>
          </div>

          <a href="https://www.google.com/maps/place/CT+Group+of+Institutions,+Greater+Kailash,+GT+Road,+Maqsudan,+Jalandhar,+Punjab,+144008"
            target="_blank">View CT ਦੀ CANTEEN on Google Maps</a>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="single_footer single_footer_address">
            <h4>Page Link</h4>
            <ul>
              <li><a href="contact.php">feedback</a></li>
              <li><a href="contact.php">contact Us</a></li>
              <li><a href="about.php">about Us</a></li>

            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="single_footer single_footer_address">
            <h4>Subscribe today</h4>
            <div class="signup_form">
              <form action="#" class="subscribe">
                <input type="text" class="subscribe__input" placeholder="Enter Email Address">
                <button type="button" class="subscribe__btn"><i class="fas fa-paper-plane"></i></button>
              </form>
            </div>
          </div>
          <div class="social_profile">
            <ul>
              <li><a href="https://www.facebook.com/share/1BrN4zxZXX/"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://x.com/CanteenCt2392?t=h2vZPYnONQkGgNUzYvwP9w&s=09"><i
                    class="fab fa-twitter"></i></a></li>
              <li><a href="https://www.google.com/"><i class="fab fa-google-plus-g"></i></a></li>
              <li><a href="https://www.instagram.com/ctdicanteen.1?igsh=M2VqZDIxeDdmZjJx"><i
                    class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="copyright-wrapper  col-sm-12 col-xs-12">
        <p class="copyright">Copyright © 2025 <a href="#">CT ਦੀ CANTEEN</a>.</p>
      </div>
    </div>
  </footer>

  <script src="/script.js"></script>
</body>

</html>