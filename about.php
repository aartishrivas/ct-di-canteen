<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CT ਦੀ CANTEEN</title>
  <link rel="stylesheet" href="style.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <style>
    .about-details {
      display: flex;
      justify-content: space-between;
      margin: 80px 0px;
    }

    .about-details .about-details-text h2 {
      color: #fff;
      font-size: 45px;
    }

    .about-details-text {
      max-width: 50%;
    }

    .about-details-text p {
      margin-top: 50px;
      letter-spacing: 1.3px;
      line-height: 1.2;
    }

    .about-details .img-wrapper {
      border-radius: 50px;
      max-width: 600px;
      width: 100%;
    }

    .about-details .img-wrapper img {
      border-radius: 50px;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .about-section .reverse {
      flex-direction: row-reverse;
    }
  </style>
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
          <li><a href="index.php">Home</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="login.php"><i class="fa-solid fa-user"></i></a> </li>
          <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></a></i></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="about-section">
    <div class="container">
      <div class="about-details">
        <div class="about-details-text">
          <h2>Our Mission</h2>
          <p>
            At CT DI Canteen System, our mission is to revolutionize the way
            food services are managed in educational institutions and
            workplaces. We understand that a well-functioning canteen is
            essential for the well-being and satisfaction of students and
            staff alike. Our goal is to provide a comprehensive platform that
            simplifies the ordering process, enhances food quality, and
            ensures timely service. By leveraging technology, we aim to create
            a seamless experience that allows users to focus on what truly
            matters—enjoying their meals and fostering a sense of community.
          </p>
        </div>
        <div class="img-wrapper">
          <img src="/canteen_img/mission - Copy.jpeg" alt="" />
        </div>
      </div>
      <div class="about-details reverse">
        <div class="about-details-text">
          <h2>Our Vision</h2>
          <p>
            We envision a future where canteen services are not only efficient
            but also promote healthy eating habits and sustainability. The CT
            DI Canteen System is designed to adapt to the evolving needs of
            our users, ensuring that everyone has access to nutritious meals
            that cater to diverse dietary preferences. We believe that by
            integrating technology into food service management, we can reduce
            food waste, optimize inventory, and create a more sustainable food
            ecosystem. Our vision is to be a leader in canteen management
            solutions, setting the standard for quality and innovation in the
            industry.
          </p>
        </div>
        <div class="img-wrapper">
          <img src="canteen_img\vision.jpeg" alt="" />
        </div>
      </div>
      <div class="about-details">
        <div class="about-details-text">
          <h2>Our Values</h2>
          <p>
            At the core of CT DI Canteen System are our values, which guide
            our operations and interactions with users. We prioritize
            efficiency, ensuring that our platform streamlines the ordering
            and payment processes, saving time for both staff and customers.
            Quality is paramount; we are committed to providing fresh, healthy
            food options that meet the highest standards. Innovation drives us
            to continuously improve our system, incorporating user feedback
            and the latest technology to enhance the canteen experience.
            Lastly, we value community, fostering a sense of belonging and
            connection among users while promoting healthy eating habits and
            sustainability.
          </p>
        </div>
        <div class="img-wrapper">
          <img src="canteen_img\value.jpg" alt="" />
        </div>
      </div>
      <div class="about-details reverse">
        <div class="about-details-text">
          <h2>Our Story</h2>
          <p>
            The CT DI Canteen System was founded in [year] by a group of
            passionate individuals who recognized the challenges faced by
            traditional canteen operations. Our founders, [founder's name(s)],
            set out to create a solution that would not only simplify food
            service management but also enhance the overall dining experience.
            Over the years, we have evolved our platform to include features
            such as online ordering, real-time inventory tracking, and
            user-friendly interfaces, all designed to meet the needs of our
            diverse user base. Today, we proudly serve numerous institutions,
            helping them create efficient and enjoyable dining environments.
          </p>
        </div>
        <div class="img-wrapper">
          <img src="canteen_img\story.jpg" alt="" />
        </div>
      </div>

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
              <li><a href="pay.php"> online payment</a></li>
              <li><a href="contact.php">feedback and review</a></li>
            </ul>
          </div>

          <a
            href="https://www.google.com/maps/place/CT+Group+of+Institutions,+Greater+Kailash,+GT+Road,+Maqsudan,+Jalandhar,+Punjab,+144008"
            target="_blank">View CT ਦੀ CANTEEN on Google Maps</a>
        </div>
        <!--- END COL -->
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
        <!--- END COL -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="single_footer single_footer_address">
            <h4>Subscribe today</h4>
            <div class="signup_form">
              <form action="#" class="subscribe">
                <input
                  type="text"
                  class="subscribe__input"
                  placeholder="Enter Email Address" />
                <button type="button" class="subscribe__btn">
                  <i class="fas fa-paper-plane"></i>
                </button>
              </form>
            </div>
          </div>
          <div class="social_profile">
            <ul>
              <li>
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="https://www.google.com/"><i class="fab fa-google-plus-g"></i></a>
              </li>
              <li>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <!--- END COL -->
      </div>
      <!--- END ROW -->
    </div>
    <div class="row">
      <div class="copyright-wrapper col-sm-12 col-xs-12">
        <p class="copyright">
          Copyright © 2025 <a href="#">CT ਦੀ CANTEEN</a>.
        </p>
      </div>
      <!--- END COL -->
    </div>
    <!--- END CONTAINER -->
  </footer>
</body>

</html>