<?php
session_start(); // Start the session for user management
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CT ਦੀ CANTEEN"</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
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
          <li><a href="#">Menu</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></li>
          <li><a href="login.php"><i class="fa-solid fa-user"></a></i></li>
          <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></a></i></li>
        </ul>
      </nav>
    </div>
  </header>
  <section class="Our-menu">
    <div class="container">
      <h2>Our Menu</h2>
      <div class="image-gallery">
        <a href="#pasta">
          <img
            src="https://th.bing.com/th?id=OIP.wSuyQCcpGi9Zo9G_IgWiRAHaGw&w=261&h=238&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2.jpg"
            alt="Pasta" widht="50" height="50">
          <h3 class="center">pasta</h3>
        </a>
        <a href="#burger">
          <img src="/canteen_img/burger.jpg" alt="Burger"
            widht="50" height="50">
          <h3 class="center"> burger</h3>
        </a>
        <a href="#sandwich">
          <img src="https://th.bing.com/th/id/OIP.9EjUR9O0r3rkOPSSEuEecAHaE8?rs=1&pid=ImgDetMain.jpg"
            alt="sandwich" widht="50" height="50">
          <h3 class="center">sandwich</h3>
        </a>
        <a href="#momos">
          <img src="/canteen_img/momos.jpeg"
            alt="momos" widht="50" height="50">
          <h3 class="center">Momos</h3>
        </a>
        <a href="#noodles">
          <img src="https://www.indianhealthyrecipes.com/wp-content/uploads/2021/07/hakka-noodles-recipe.jpg"
            alt="noodles" widht="50" height="50">
          <h3 class="center">Noodles</h3>
        </a>
        <a href="#briyani">
          <img src="https://th.bing.com/th/id/OIP.fGqnj5iqdXPtxhCtvsH2bwHaFE?rs=1&pid=ImgDetMain.jpg" alt="briyani"
            widht="50" height="50">
          <h3 class="center">briyani</h3>
        </a>
        <a href="#pizza">
          <img src="https://th.bing.com/th/id/OIP.WZzAMKDjzhhyAf9D2dhpEQHaE7?rs=1&pid=ImgDetMain.jpg" alt="pizza"
            widht="50" height="50">
          <h3 class="center">pizza</h3>
        </a>
        <a href="#desserts">
          <img src="canteen_img\dessert.jpg" alt="Dessert" widht="50" height="50">
          <h3 class="center">desserts</h3>
        </a>
        <a href="#thali">
          <img src="https://th.bing.com/th/id/OIP.yhZTGdREPuh9q10FYPKDcQHaHN?rs=1&pid=ImgDetMain.jpg" alt="thali"
            widht="50" height="50">
          <h3 class="center"> thali </h3>
        </a>
        <a href="#drinks">
          <img src="https://th.bing.com/th/id/OIP.WoTH2H1IG4lln6pcfyrCXAHaE7?rs=1&pid=ImgDetMain.jpg" alt="drinks"
            widht="50" height="50">
          <h3 class="center">drinks</h3>
        </a>
      </div>
    </div>
  </section>


  <section id="pasta">
    <div class="container">
      <div class="image-gallery">
        <div class="menu-item">
          <img src="https://www.yellowblissroad.com/wp-content/uploads/2017/05/Easy-Vegetable-Pasta-Salad-2.jpg"
            alt="Vegetable Pasta">
          <h2>Vegetable Pasta</h2>
          <p>Fresh & vibrant</p>
          <span class="price">₹280</span>
          <span>4.3⭐</span>
          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="Vegetable Pasta">
            <input type="hidden" name="price" value="280">
            <input type="hidden" name="image" value="https://www.yellowblissroad.com/wp-content/uploads/2017/05/Easy-Vegetable-Pasta-Salad-2.jpg">
            <button type="submit">Add to Cart</button>
          </form>


        </div>
        <div class="menu-item">
          <img src="https://italianfoodforever.com/wp-content/uploads/2021/07/pepperpasta8.jpg"
            alt="Onion Capsicum Pasta" height="50" , width="50">
          <h2>Onion Capsicum Pasta</h2>
          <p>Zesty & crisp</p>
          <span class="price">₹300</span>
          <span>4.2⭐</span>
          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="Onion Capsicum Pasta">
            <input type="hidden" name="price" value="300">
            <input type="hidden" name="image" value="https://italianfoodforever.com/wp-content/uploads/2021/07/pepperpasta8.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
        <div class="menu-item">
          <img
            src="https://th.bing.com/th/id/R.8b7ff9ac0907f126e0f54ab315fbe23d?rik=VStu62U%2fL9sI%2bw&riu=http%3a%2f%2fwww.adashofsanity.com%2fwp-content%2fuploads%2f2014%2f03%2fFour-Cheese-Chicken-Bake-3.jpg&ehk=fYYip%2f8fNuLSf9WkEMsNQIX6F%2f%2fCebAoTrQzh2XtO8w%3d&risl=&pid=ImgRaw&r=0.jpg"
            alt="Cheese Pasta" height="50" , width="50">
          <h2>Cheese Pasta</h2>
          <p>Cheesy delight</p>
          <span class="price">₹350</span>
          <span>4.3⭐</span>
          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="cheese Pasta">
            <input type="hidden" name="price" value="350">
            <input type="hidden" name="image" value="https://th.bing.com/th/id/R.8b7ff9ac0907f126e0f54ab315fbe23d?rik=VStu62U%2fL9sI%2bw&riu=http%3a%2f%2fwww.adashofsanity.com%2fwp-content%2fuploads%2f2014%2f03%2fFour-Cheese-Chicken-Bake-3.jpg&ehk=fYYip%2f8fNuLSf9WkEMsNQIX6F%2f%2fCebAoTrQzh2XtO8w%3d&risl=&pid=ImgRaw&r=0.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img src="https://www.acouplecooks.com/wp-content/uploads/2023/01/Red-Sauce-Pasta-008-784x980.jpg"
            alt="Red Sauce Pasta" height="50" , width="50">
          <h2>Red Sauce Pasta</h2>
          <p>Rich & tangy</p>
          <span class="price">₹320</span>
          <span>4.4⭐</span>
          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="red sauce Pasta">
            <input type="hidden" name="price" value="320">
            <input type="hidden" name="image" value="https://www.acouplecooks.com/wp-content/uploads/2023/01/Red-Sauce-Pasta-008-784x980.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img src='/canteen_img/white souce pasta.jpg' alt="" height="50" , width="50">
          <h2>White Sauce Pasta</h2>
          <p> creamy & smooth</p>
          <span class="price">₹360</span>
          <span>4.5⭐</span>>
          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="white sauce Pasta">
            <input type="hidden" name="price" value="360">
            <input type="hidden" name="image" value="https://www.pepperdelight.com/wp-content/uploads/2016/01/ChickenPasta1.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img src="/canteen_img/pinkpasta.jpeg"
            alt=" pinksauce pasta" height="50" , width="50">
          <h2>pink sauce Pasta</h2>
          <p> creamy </p>
          <span class="price">₹300</span>
          <span>4.1⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="pink sauce Pasta">
            <input type="hidden" name="price" value="300">
            <input type="hidden" name="image" value="/canteen_img/pinkpasta.jpeg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
      </div>
  </section>
  <section id="burger">
    <div class="container">
      <div class="image-gallery">
        <div class="menu-item">
          <img
            src="https://th.bing.com/th/id/OIP.y5CYrhnDFf6FbzCw7pCVWgHaE8?w=254&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7.jpg"
            alt="Classic Burger" width="50" height="50">
          <h2>Classic Burger</h2>
          <p>Juicy beef patty.</p>
          <span class="price">₹150</span>
          <span>4.3⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="white sauce Pasta">
            <input type="hidden" name="price" value="150">
            <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.y5CYrhnDFf6FbzCw7pCVWgHaE8?w=254&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img src="https://i.redd.it/0cmys6v6g4g31.jpg" alt="Cheese Burger" width="50" height="50">
          <h2>Cheese Burger</h2>
          <p>Classic burger.</p>
          <span class="price">₹180</span>
          <span>4.4⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="Cheese Burger">
            <input type="hidden" name="price" value="180">
            <input type="hidden" name="image" value="https://i.redd.it/0cmys6v6g4g31.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img src="https://eightforestlane.com/wp-content/uploads/2024/02/Spicy-Chicken-Burger_SQ-1-500x500.jpg"
            alt="Spicy Chicken Burger" width="50" height="50">
          <h2>Spicy Chicken Burger</h2>
          <p>Crispy chicken .</p>
          <span class="price">₹200</span>
          <span>4.3⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="spicy chicken burger">
            <input type="hidden" name="price" value="200">
            <input type="hidden" name="image" value="https://eightforestlane.com/wp-content/uploads/2024/02/Spicy-Chicken-Burger_SQ-1-500x500.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img
            src="https://th.bing.com/th/id/OIP.BFXTXw0InfmOmJkzlSW6FgHaE8?w=290&h=193&c=7&r=0&o=5&dpr=1.3&pid=1.7.jpg"
            alt="Veggie Burger" width="50" height="50">
          <h2>Veggie Burger</h2>
          <p>veggie patty.</p>
          <span class="price">₹130</span>
          <span>4.5⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="veggie burger">
            <input type="hidden" name="price" value="1300">
            <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.BFXTXw0InfmOmJkzlSW6FgHaE8?w=290&h=193&c=7&r=0&o=5&dpr=1.3&pid=1.7.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img
            src="https://www.kitchensanctuary.com/wp-content/uploads/2021/05/Double-Cheeseburger-wide-FS-and-foodporn-55.jpg"
            alt="Double Patty Burger" width="50" height="50">
          <h2>Double Patty Burger</h2>
          <p>Two juicy beef patties.</p>
          <span class="price">₹250</span>
          <span>4.1⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="Double patty burger">
            <input type="hidden" name="price" value="250">
            <input type="hidden" name="image" value="https://www.kitchensanctuary.com/wp-content/uploads/2021/05/Double-Cheeseburger-wide-FS-and-foodporn-55.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img src="https://mcdonaldsblog.in/wp-content/uploads/2016/06/mcspicy-paneer-1-1.jpg"
            alt="Paneer Tikka Burger" width="50" height="50">
          <h2>Paneer Tikka Burger</h2>
          <p>Grilled paneer.</p>
          <span class="price">₹190</span>
          <span>4.2⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="paneer tikka burger">
            <input type="hidden" name="price" value="190">
            <input type="hidden" name="image" value="https://mcdonaldsblog.in/wp-content/uploads/2016/06/mcspicy-paneer-1-1.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
      </div>
  </section>

  <section id="sandwich" aria-label="Sandwich Menu">
    <div class="container">
      <div class="image-gallery">
        <div class="menu-item">
          <img src="https://natashaskitchen.com/wp-content/uploads/2021/08/Grilled-Cheese-Sandwich-SQ.jpg"
            alt="Grilled Cheese Sandwich" width="50" height="50">
          <h2>Grilled Cheese Sandwich</h2>
          <p>Cheesy, Toasted</p>
          <span class="price">₹120</span> <span>4.3⭐</span>
          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="name" value="grilled cheese sandwich">
            <input type="hidden" name="price" value="120">
            <input type="hidden" name="image" value="https://natashaskitchen.com/wp-content/uploads/2021/08/Grilled-Cheese-Sandwich-SQ.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img src="https://i.redd.it/fufa8l1aiox01.jpg" alt="Turkey Sandwich" width="50" height="50">
          <h2>Turkey Sandwich</h2>
          <p>Smoked, Fresh</p>
          <span class="price">₹180</span>
          <span>4.1⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="name" value="turkey sandwich">
            <input type="hidden" name="price" value="180">
            <input type="hidden" name="image" value="https://i.redd.it/fufa8l1aiox01.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img
            src="https://th.bing.com/th/id/OIP.QzyDq72XJJ2EKbGkW7ichwHaE8?w=247&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7.jpg"
            alt="onion capsicum" width="50" height="50">
          <h2>onion capsicum sandwich</h2>
          <p>tasty</p>
          <span class="price">₹220</span>
          <span>4.3⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="name" value="onio capsicum sandwich">
            <input type="hidden" name="price" value="220">
            <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.QzyDq72XJJ2EKbGkW7ichwHaE8?w=247&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img src="https://th.bing.com/th/id/OIP.hnaN1mKhHGleJHX3pMWHkQHaLH?rs=1&pid=ImgDetMain.jpg"
            alt="Chicken Salad Sandwich" width="50" height="50">
          <h2>Chicken Salad Sandwich</h2>
          <p>Creamy, Croissant</p>
          <span class="price">₹170</span>
          <span>3.1⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="name" value="chicken salad sandwich">
            <input type="hidden" name="price" value="170">
            <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.hnaN1mKhHGleJHX3pMWHkQHaLH?rs=1&pid=ImgDetMain.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img src="https://th.bing.com/th/id/OIP.QMTTuG6iJQ2geeezUvqlKgHaLH?rs=1&pid=ImgDetMain.jpg"
            alt=" paneer chilly Sandwich" width="50" height="50">
          <h2>paneer Chilli Sandwich</h2>
          <p>Layered, Classic</p>
          <span class="price">₹200</span>
          <span>4.5⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="name" value="paneer chilly sandwich">
            <input type="hidden" name="price" value="200">
            <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.QMTTuG6iJQ2geeezUvqlKgHaLH?rs=1&pid=ImgDetMain.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img src="https://th.bing.com/th/id/OIP.QMTTuG6iJQ2geeezUvqlKgHaLH?rs=1&pid=ImgDetMain.jpg"
            alt="Veggie Sandwich" width="50" height="50">
          <h2>Veggie Sandwich</h2>
          <p>Fresh, Healthy</p>
          <span class="price">₹140</span>
          <span>4.4⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="name" value="veggie sandwich">
            <input type="hidden" name="price" value="140">
            <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.QMTTuG6iJQ2geeezUvqlKgHaLH?rs=1&pid=ImgDetMain.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
      </div>
  </section>
  <section id="momos" aria-label="Momos Menu">
    <div class="container">
      <div class="image-gallery">
        <div class="menu-item">
          <img
            src="https://th.bing.com/th/id/OIP._tgM80_g7K1ymkC1gpvxZAHaE8?w=284&h=190&c=7&r=0&o=5&dpr=1.3&pid=1.7.jpg"
            alt="Steamed Veg Momos" width="50" height="50">
          <h2>Steamed Veg Momos</h2>
          <p>Soft, Healthy</p>
          <span class="price">₹100</span>
          <span>4.5⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="streamed veg moms">
            <input type="hidden" name="price" value="100">
            <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP._tgM80_g7K1ymkC1gpvxZAHaE8?w=284&h=190&c=7&r=0&o=5&dpr=1.3&pid=1.7.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img
            src="https://img-global.cpcdn.com/recipes/5bcb750fbcfa4c9e/680x482cq70/chicken-fried-momo-recipe-main-photo.jpg"
            alt="Fried Chicken Momos" width="50" height="50">
          <h2>Fried Chicken Momos</h2>
          <p>Crispy, Spicy</p>
          <span class="price">₹150</span>
          <span>4.4⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="fried chicken momos">
            <input type="hidden" name="price" value="150">
            <input type="hidden" name="image" value="https://img-global.cpcdn.com/recipes/5bcb750fbcfa4c9e/680x482cq70/chicken-fried-momo-recipe-main-photo.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img src="https://th.bing.com/th/id/OIP.ezeRvyn8qjKNvRfbqC5oFAHaE6?rs=1&pid=ImgDetMain.jpg"
            alt="Pan-Fried Momos" width="50" height="50">
          <h2>Pan-Fried Momos</h2>
          <p>Golden, Flavorful</p>
          <span class="price">₹130</span>
          <span>4.2⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="pan fried moms">
            <input type="hidden" name="price" value="130">
            <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.ezeRvyn8qjKNvRfbqC5oFAHaE6?rs=1&pid=ImgDetMain.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img
            src="https://th.bing.com/th/id/OIP.lO4qG_UL9BlENd2Viw-ODQHaJ4?w=147&h=196&c=7&r=0&o=5&dpr=1.3&pid=1.7.jpg"
            alt="Tandoori Momos" width="50" height="50">
          <h2>Tandoori Momos</h2>
          <p>Smoky, Spicy</p>
          <span class="price">₹160</span>
          <span>4.5⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="tandoori moms">
            <input type="hidden" name="price" value="160">
            <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.lO4qG_UL9BlENd2Viw-ODQHaJ4?w=147&h=196&c=7&r=0&o=5&dpr=1.3&pid=1.7.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img
            src="https://th.bing.com/th/id/OIP.fBCh4u8g8YiL4iqriLZcsgHaFj?w=242&h=182&c=7&r=0&o=5&dpr=1.3&pid=1.7.jpg"
            alt="Chicken Momos" width="50" height="50">
          <h2>Chicken Momos</h2>
          <p>Juicy, Tender</p>
          <span class="price">₹140</span>
          <span>3.5⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="chicken momos">
            <input type="hidden" name="price" value="140">
            <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.fBCh4u8g8YiL4iqriLZcsgHaFj?w=242&h=182&c=7&r=0&o=5&dpr=1.3&pid=1.7.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>



        <div class="menu-item">
          <img src="https://th.bing.com/th/id/OIP.pqR5CPoBQ4kvfZ3gw-rkZAHaEK?rs=1&pid=ImgDetMain.jpg"
            alt="Chocolate Momos" width="50" height="50">
          <h2>Chocolate Momos</h2>
          <p>Sweet, Gooey</p>
          <span class="price">₹120</span>
          <span>3.4⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="chocolate momos">
            <input type="hidden" name="price" value="120">
            <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.pqR5CPoBQ4kvfZ3gw-rkZAHaEK?rs=1&pid=ImgDetMain.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
      </div>
  </section>

  <section id="noodles" aria-label="Noodles Menu">
    <div class="container">
      <div class="image-gallery">
        <div class="menu-item">
          <img src="https://www.indianhealthyrecipes.com/wp-content/uploads/2021/07/hakka-noodles-recipe.jpg"
            alt="Hakka Noodles" width="50" height="50">
          <h2>Hakka Noodles</h2>
          <p>Spicy, Stir-fried</p>
          <span class="price">₹120</span>
          <div class="rating">
            <span>4.3⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="name" value="hakka noodles">
              <input type="hidden" name="price" value="120">
              <input type="hidden" name="image" value="https://www.indianhealthyrecipes.com/wp-content/uploads/2021/07/hakka-noodles-recipe.jpg">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
        </div>

        <div class="menu-item">
          <img src="https://www.cookingcarnival.com/wp-content/uploads/2018/01/IMG_7161.jpg" alt="Schezwan Noodles"
            width="50" height="50">
          <h2>Schezwan Noodles</h2>
          <p>Spicy, Tangy</p>
          <span class="price">₹140</span>
          <div class="rating">
            <span>4.2⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="name" value="schezwan noodles">
              <input type="hidden" name="price" value="140">
              <input type="hidden" name="image" value="https://www.cookingcarnival.com/wp-content/uploads/2018/01/IMG_7161.jpg">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
        </div>

        <div class="menu-item">
          <img src="https://www.onceuponachef.com/images/2023/06/Chicken-Chow-Mein-Hero-7-scaled.jpg"
            alt="Chow Mein" width="50" height="50">
          <h2>Chow Mein</h2>
          <p>Crispy, Flavorful</p>
          <span class="price">₹130</span>
          <div class="rating">
            <span>4.4⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="name" value="chow mein">
              <input type="hidden" name="price" value="130">
              <input type="hidden" name="image" value="https://www.onceuponachef.com/images/2023/06/Chicken-Chow-Mein-Hero-7-scaled.jpg">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
        </div>

        <div class="menu-item">
          <img src="https://th.bing.com/th/id/OIP.NeV2zZtatoX6J3HIlgW3qgHaLH?rs=1&pid=ImgDetMain.jpg"
            alt="Veg  Noodles" width="50" height="50">
          <h2>Veg Noodles</h2>
          <p>Healthy, Colorful</p>
          <span class="price">₹110</span>
          <div class="rating">
            <span>4.2⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="name" value="veg noodles">
              <input type="hidden" name="price" value="110">
              <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.NeV2zZtatoX6J3HIlgW3qgHaLH?rs=1&pid=ImgDetMain.jpg">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
        </div>

        <div class="menu-item">
          <img src="https://www.eatingonadime.com/wp-content/uploads/2014/02/Homemade-Egg-Noodles-21.jpg"
            alt="Egg Noodles" width="50" height="50">
          <h2>Egg Noodles</h2>
          <p>Rich, Flavorful</p>
          <span class="price">₹150</span>
          <div class="rating">
            <span>4.3⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="name" value="egg noodles">
              <input type="hidden" name="price" value="150">
              <input type="hidden" name="image" value="https://www.eatingonadime.com/wp-content/uploads/2014/02/Homemade-Egg-Noodles-21.jpg">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
        </div>

        <div class="menu-item">
          <img src="https://www.whiskaffair.com/wp-content/uploads/2020/02/Chilli-Garlic-Noodles-2-1.jpg"
            alt="Chilli Garlic Noodles" width="50" height="50">
          <h2>Chilli Garlic Noodles</h2>
          <p>Spicy, Garlicky</p>
          <span class="price">₹140</span>
          <div class="rating">
            <span>4.3⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="name" value="chilli garlic noodles">
              <input type="hidden" name="price" value="140">
              <input type="hidden" name="image" value="https://www.whiskaffair.com/wp-content/uploads/2020/02/Chilli-Garlic-Noodles-2-1.jpg">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="briyani">
    <div class="container">
      <div class="image-gallery">
        <div class="menu-item">
          <img src="https://th.bing.com/th/id/OIP.rUprSy-Tu_ru7GftGXSI-wHaE8?rs=1&pid=ImgDetMain.jpg"
            alt="Hyderabadi Biryani" width="50" height="50">
          <h2>Hyderabadi Biryani</h2>
          <p>Fragrant & Flavorful</p>
          <span class="price">₹800</span>
          <span>4.5⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="hyderabadi briyani">
            <input type="hidden" name="price" value="800">
            <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.rUprSy-Tu_ru7GftGXSI-wHaE8?rs=1&pid=ImgDetMain.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img src="https://th.bing.com/th/id/OIP.FI3j1vCt5yaRfwYyz8CrxgHaFQ?rs=1&pid=ImgDetMain.jpg"
            alt="Lucknowi Biryani" width="50" height="50">
          <h2>Lucknowi Biryani</h2>
          <p>Dum-cooked Delight</p>
          <span class="price">₹850</span>
          <span>4.5⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="lucknowi briyani">
            <input type="hidden" name="price" value="850">
            <input type="hidden" name="image" value="">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img src="https://ts2.mm.bing.net/th?id=OIP.yebdqKj73yc4-clcEoP6WQAAAA&pid=15.1.jpg"
            alt="Kolkata Biryani" width="50" height="50">
          <h2>Kolkata Biryani</h2>
          <p>Potato & Egg</p>
          <span class="price">₹700</span>
          <span>4.3⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="kolkata biryani">
            <input type="hidden" name="price" value="700">
            <input type="hidden" name="image" value="https://ts2.mm.bing.net/th?id=OIP.yebdqKj73yc4-clcEoP6WQAAAA&pid=15.1.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img
            src="https://th.bing.com/th/id/OIP.3pFzCZqXvcuUSjHOOQeyaAHaEK?w=305&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7.jpg"
            alt="Sindhi Biryani" width="50" height="50">
          <h2>Sindhi Biryani</h2>
          <p>Spicy & Flavorful</p>
          <span class="price">₹750</span>
          <span>4.2⭐</span>
          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="sindhi biryani">
            <input type="hidden" name="price" value="750">
            <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.3pFzCZqXvcuUSjHOOQeyaAHaEK?w=305&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
        <div class="menu-item">
          <img
            src="/canteen_img/vegatablebiryani.jpeg"
            alt="vegatable Biryani" width="50" height="50">
          <h2>vegatable Biryani</h2>
          <p>mixed vegetable</p>
          <span class="price">₹600</span>
          <span>4.4⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="vegetable ">
            <input type="hidden" name="price" value="600">
            <input type="hidden" name="image" value="/canteen_img/vegatablebiryani.jpeg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>

        <div class="menu-item">
          <img
            src="/canteen_img/pulaoo.jpeg"
            alt="pulaoo" width="50" height="50">
          <h2>pulaoo</h2>
          <p>vegetable</p>
          <span class="price">₹400</span>
          <span>4.3⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="pulaoo">
            <input type="hidden" name="price" value="400">
            <input type="hidden" name="image" value="/canteen_img/pulaoo.jpeg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
  </section>
  <section id="pizza">
    <div class="container">
      <div class="image-gallery">
        <div class="menu-item">
          <a href="margherita pizza">
            <img src="https://cdn.loveandlemons.com/wp-content/uploads/2019/09/margherita-pizza.jpg"
              alt="Margherita Pizza" width="50" height="50">
          </a>
          <div class="pizza-name">Margherita Pizza</div>
          <p>Fresh & cheesy</p>
          <span class="price">₹300</span>
          <span>4.3⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="margherita pizza">
            <input type="hidden" name="price" value="300">
            <input type="hidden" name="image" value="https://cdn.loveandlemons.com/wp-content/uploads/2019/09/margherita-pizza.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
        <div class="menu-item">
          <a href="onion capsicum pizza">
            <img
              src="https://img-global.cpcdn.com/recipes/b9f66edab296598d/751x532cq70/capsicum-onion-pizza-recipe-main-photo.jpg"
              alt="onion capsium Pizza" width="50" heiht="50">
          </a>
          <h2>onion capsicum Pizza</h2>
          <p>Zesty & crisp</p>
          <span class="price">₹90</span>
          <span>4.1⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="onion capsicum pizza ">
            <input type="hidden" name="price" value="90">
            <input type="hidden" name="image" value="https://img-global.cpcdn.com/recipes/b9f66edab296598d/751x532cq70/capsicum-onion-pizza-recipe-main-photo.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
        <div class="menu-item">
          <a href="bbq chicken  pizza">
            <img src="https://th.bing.com/th/id/OIP.53RA9Mil91sXSDF4yvTh5gHaLH?rs=1&pid=ImgDetMain.jpg"
              alt="BBQ Chicken Pizza" width="50" height="50">
          </a>
          <h2>BBQ Chicken Pizza</h2>
          <p>Smoky & juicy</p>
          <span class="price">₹400</span>
          <span>4.3⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="BBQ Chicken pizza ">
            <input type="hidden" name="price" value="400">
            <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.53RA9Mil91sXSDF4yvTh5gHaLH?rs=1&pid=ImgDetMain.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
        <div class="menu-item">
          <a href="veggies pizza">
            <img src="https://th.bing.com/th/id/OIP.b1046Cdp-GRRQh0y3pUkKwHaLG?rs=1&pid=ImgDetMain.jpg"
              alt="Veggie Pizza" width="50" height="50">
          </a>
          <h2>Veggie Pizza</h2>
          <p>Colorful & fresh</p>
          <span class="price">₹280</span>
          <span>4.5⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="veg pizza ">
            <input type="hidden" name="price" value="280">
            <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.b1046Cdp-GRRQh0y3pUkKwHaLG?rs=1&pid=ImgDetMain.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
        <div class="menu-item">
          <a href="hawaiian pizza">
            <img
              src="https://cookingformysoul.com/wp-content/uploads/2021/04/easy-homemade-hawaiian-pizza-min-768x1152.jpg"
              alt="Hawaiian Pizza" width="50" height="50">
          </a>
          <h2>Hawaiian Pizza</h2>
          <p>Sweet & savory</p>
          <span class="price">₹320</span>
          <span>4.2⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="Hawaiian pizza ">
            <input type="hidden" name="price" value="320">
            <input type="hidden" name="image" value="https://cookingformysoul.com/wp-content/uploads/2021/04/easy-homemade-hawaiian-pizza-min-768x1152.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
        <div class="menu-item">
          <a href="# cheese pizza">
            <img src="https://www.cheesehouse.com/wp-content/uploads/2020/10/pizza-2.jpg" alt="Cheese Pizza"
              width="50" height="50">
          </a>
          <h2>Cheese Pizza</h2>
          <p>Loaded with cheese</p>
          <span class="price">₹450</span>
          <span>4.1⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="Cheese pizza">
            <input type="hidden" name="price" value="450">
            <input type="hidden" name="image" value="https://www.cheesehouse.com/wp-content/uploads/2020/10/pizza-2.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
        <div class="menu-item">
          <a href="#Spicy Chicken Pizza ">
            <img
              src="https://c8.alamy.com/comp/EBK0EE/italian-spicy-chicken-pizza-with-red-chillies-red-onion-and-mozzarella-EBK0EE.jpg"
              alt="Spicy Chicken Pizza" width="50" height="50">
          </a>
          <h2>Spicy Chicken Pizza</h2>
          <p>Hot & chessy</p>
          <span class="price">₹380</span>
          <span>4.4⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="Spicy chicken pizza ">
            <input type="hidden" name="price" value="380">
            <input type="hidden" name="image" value="https://c8.alamy.com/comp/EBK0EE/italian-spicy-chicken-pizza-with-red-chillies-red-onion-and-mozzarella-EBK0EE.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
        <div class="menu-item">
          <a href="#corn pizza">
            <img
              src="https://1.bp.blogspot.com/-BPd-fsELcy8/YLTwVqMeE8I/AAAAAAAAHr0/oSpOMClppX4ILTqQ_PjWbYEoy6bBd7hPQCLcBGAsYHQ/s1080/SweetCornPizza.jpg"
              alt="corn Pizza" width="50" height="50">
          </a>
          <h2>corn Pizza</h2>
          <h2>Sweet & cheesy</h2>
          <span class="price">₹500</span>
          <span>4.3⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="corn pizza ">
            <input type="hidden" name="price" value="500">
            <input type="hidden" name="image" value="https://1.bp.blogspot.com/-BPd-fsELcy8/YLTwVqMeE8I/AAAAAAAAHr0/oSpOMClppX4ILTqQ_PjWbYEoy6bBd7hPQCLcBGAsYHQ/s1080/SweetCornPizza.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
        <div class="menu-item">
          <a href="#valcano pizza">
            <img
              src="/canteen_img/valcano pizza.jpeg"
              alt="valcano Pizza" width="50" height="50">
          </a>
          <h2>valcano Pizza</h2>
          <h2>chessy</h2>
          <span class="price">₹500</span>
          <span>4.4⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="valcano pizza">
            <input type="hidden" name="price" value="500">
            <input type="hidden" name="image" value="/canteen_img/valcano pizza.jpeg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
      </div>
  </section>
  <section id="desserts">
    <div class="container">
      <div class="image-gallery">
        <div class="menu-item">
          <img src="https://www.cookingclassy.com/wp-content/uploads/2019/10/chocolate-cake-3.jpg"
            alt="Chocolate Cake" width="50" height="50">
          <h2>Chocolate Cake</h2>
          <p>Rich & Moist</p>
          <span class="price">₹ 150</span>
          <span>4.5⭐</span>
          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="chocolate cake">
            <input type="hidden" name="price" value="150">
            <input type="hidden" name="image" value="https://www.cookingclassy.com/wp-content/uploads/2019/10/chocolate-cake-3.jpg"">
            <button type=" submit">Add to Cart</button>
          </form>
        </div>
        <div class="menu-item">
          <img
            src="https://www.simplyrecipes.com/thmb/yFqFfLR03QG0cuAi5WgUSYPrh8Y=/5762x0/filters:no_upscale():max_bytes(150000):strip_icc()/Simply-Recipes-Perfect-Cheesecake-LEAD-6-97a8cb3a60c24903b883c1d5fb5a69d3.jpg"
            alt="Cheesecake" width="50" height="50">
          <h2>cakes</h2>
          <p>Creamy Delight</p>
          <span class="price">₹ 120</span>
          <span>3.4⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="cakes">
            <input type="hidden" name="price" value="120">
            <input type="hidden" name="image" value="https://www.simplyrecipes.com/thmb/yFqFfLR03QG0cuAi5WgUSYPrh8Y=/5762x0/filters:no_upscale():max_bytes(150000):strip_icc()/Simply-Recipes-Perfect-Cheesecake-LEAD-6-97a8cb3a60c24903b883c1d5fb5a69d3.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
        <div class="menu-item">
          <img src="https://th.bing.com/th/id/OIP.zqKZyrPJcCtSGS4EZABeUgAAAA?rs=1&pid=ImgDetMain.jpg"
            alt="Ice Cream" width="50" height="50">
          <h2>Ice Cream</h2>
          <p>Chilled Treat</p>
          <span class="price">₹ 80</span>
          <span>4.5⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="ice creams ">
            <input type="hidden" name="price" value="80">
            <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.zqKZyrPJcCtSGS4EZABeUgAAAA?rs=1&pid=ImgDetMain.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
        <div class="menu-item">
          <img
            src="canteen_img\hotdog.jpg"
            alt="hotdog" width="50" height="50">
          <h2>HOT Dog</h2>
          <p>fabulos</p>
          <span class="price">₹ 180</span>
          <span>4.5⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="name" value="hotdog">
            <input type="hidden" name="price" value="180">
            <input type="hidden" name="image" value="/canteen_img/hotdog.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
        <div class="menu-item">
          <img
            src="https://www.parisunlocked.com/wp-content/uploads/2020/10/arnaud-delmontel-st-honores-1024x1024.jpg"
            alt="pasteries" width="50" height="50">
          <h2>pasteries</h2>
          <p>fabulos pasteries</p>
          <span class="price">₹ 180</span>
          <span>4.5⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="name" value="pasteries ">
            <input type="hidden" name="price" value="180">
            <input type="hidden" name="image" value="https://www.parisunlocked.com/wp-content/uploads/2020/10/arnaud-delmontel-st-honores-1024x1024.jpg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
        <div class="menu-item">
          <img
            src="/canteen_img/patties.jpeg"
            alt="patties" width="50" height="50">
          <h2> aloo patties</h2>
          <p>fabulos patties</p>
          <span class="price">₹ 50</span>
          <span>4.4⭐</span>

          <!-- add to cart -->
          <form method="POST" action="cart.php">
            <input type="hidden" name="name" value="Aloo patties ">
            <input type="hidden" name="price" value="50">
            <input type="hidden" name="image" value="/canteen_img/patties.jpeg">
            <button type="submit">Add to Cart</button>
          </form>
        </div>
      </div>
  </section>
  <section id="thali">
    <div class="container">
      <div class="menu">
        <div class="image-gallery">
          <div class="menu-item">
            <img src="https://www.nehascookbook.com/wp-content/uploads/2022/09/Punjabi-thali-WS-1.jpg"
              alt="Punjabi Thali" width="50" height="50">
            <h2>Punjabi Thali</h2>
            <p>Hearty</p>
            <span class="price">₹ 250</span>
            <span>4.5⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="action" value="add">
              <input type="hidden" name="name" value="Punjabi Thali ">
              <input type="hidden" name="price" value="250">
              <input type="hidden" name="image" value="https://www.nehascookbook.com/wp-content/uploads/2022/09/Punjabi-thali-WS-1.jpg">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
          <div class="menu-item">
            <img
              src="https://www.archanaskitchen.com/images/archanaskitchen/0-Affiliate-Articles/RESTAURANT_STYLE_SOUTH_INDIAN_THALI_original.jpg"
              alt="South Indian Thali" width="50" height="50">
            <h2>South Indian Thali</h2>
            <p>Flavorful</p>
            <span class="price">₹ 220</span>
            <span>4.3⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="action" value="add">
              <input type="hidden" name="name" value="South ndian Thali ">
              <input type="hidden" name="price" value="220">
              <input type="hidden" name="image" value="https://www.archanaskitchen.com/images/archanaskitchen/0-Affiliate-Articles/RESTAURANT_STYLE_SOUTH_INDIAN_THALI_original.jpg">
              <input type="hidden" name="action" value="add">
            </form>
          </div>
          <div class="menu-item">
            <img src="https://www.nehascookbook.com/wp-content/uploads/2022/10/Shrad-thali-WS.jpg"
              alt="Gujarati Thali" width="50" height="50">
            <h2>Gujarati Thali</h2>
            <p>Sweet</p>
            <span class="price">₹ 230</span>
            <span>4.2⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="action" value="add">
              <input type="hidden" name="name" value="Gujrati thali ">
              <input type="hidden" name="price" value="230">
              <input type="hidden" name="image" value="https://www.nehascookbook.com/wp-content/uploads/2022/10/Shrad-thali-WS.jpg">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
        </div>
  </section>
  <section id="drinks">
    <div class="container">
      <div class="menu">
        <div class="image-gallery">
          <div class="menu-item">
            <img src="https://www.flavorquotient.com/wp-content/uploads/2023/05/Mango-Lassi-FQ-6-1036.jpg"
              alt="Mango Lassi" width="50" height="50">
            <h2>Mango Lassi</h2>
            <p>Refreshing</p>
            <span class="price">₹ 100</span>
            <span>4.5⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="action" value="add">
              <input type="hidden" name="name" value="Mango Lassi">
              <input type="hidden" name="price" value="100">
              <input type="hidden" name="image" value="https://www.flavorquotient.com/wp-content/uploads/2023/05/Mango-Lassi-FQ-6-1036.jpg">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
          <div class="menu-item">
            <img
              src="https://carameltintedlife.com/wp-content/uploads/2020/08/How-to-Make-Masala-Chai-1-of-1-6.jpg"
              alt="Masala Chai" width="50" height="50">
            <h2>Masala Chai</h2>
            <p>Spiced</p>
            <span class="price">₹ 50</span>
            <span>4.2⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="action" value="add">
              <input type="hidden" name="name" value="vegetable ">
              <input type="hidden" name="price" value="50">
              <input type="hidden" name="image" value="https://carameltintedlife.com/wp-content/uploads/2020/08/How-to-Make-Masala-Chai-1-of-1-6.jpg">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
          <div class="menu-item">
            <img src="https://th.bing.com/th/id/OIP.8DPrqSoH6pTC0yt3x-WaBQHaE8?rs=1&pid=ImgDetMain.jpg"
              alt="Coconut Water" width="50" height="50">
            <h2>Coconut Water</h2>
            <p>Hydrating</p>
            <span class="price">₹ 60</span>
            <span>4.3⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="action" value="add">
              <input type="hidden" name="name" value="Coconut water ">
              <input type="hidden" name="price" value="60">
              <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.8DPrqSoH6pTC0yt3x-WaBQHaE8?rs=1&pid=ImgDetMain.jpg">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
          <div class="menu-item">
            <img src="https://masalaandchai.com/wp-content/uploads/2022/01/Sweet-Rose-Lassi.jpg" alt="Rose Lassi"
              width="50" height="50">
            <h2>Rose Lassi</h2>
            <p>Floral</p>
            <span class="price">₹ 120</span>
            <span>4.1⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="action" value="add">
              <input type="hidden" name="name" value="Rose Lassi">
              <input type="hidden" name="price" value="120">
              <input type="hidden" name="image" value="https://masalaandchai.com/wp-content/uploads/2022/01/Sweet-Rose-Lassi.jpg">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
          <div class="menu-item">
            <img
              src="https://th.bing.com/th/id/R.799fddcfeebb2b2da77df8bfe120fdf9?rik=2gt1B9RWulzCog&riu=http%3a%2f%2ffortheloveofthesouth.files.wordpress.com%2f2012%2f04%2fhomemadelemonade.jpg&ehk=HZos%2fGI6gyytagnBVqTYnQww2bkjyWRnzEBqSRnh1U4%3d&risl=&pid=ImgRaw&r=0.jpg"
              alt="Lemonade" width="50" height="50">
            <h2>Lemonade</h2>
            <p>Refreshing</p>
            <span class="price">₹ 70</span>
            <span>4.2⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="action" value="add">
              <input type="hidden" name="name" value="lemonade ">
              <input type="hidden" name="price" value="70">
              <input type="hidden" name="image" value="https://th.bing.com/th/id/R.799fddcfeebb2b2da77df8bfe120fdf9?rik=2gt1B9RWulzCog&riu=http%3a%2f%2ffortheloveofthesouth.files.wordpress.com%2f2012%2f04%2fhomemadelemonade.jpg&ehk=HZos%2fGI6gyytagnBVqTYnQww2bkjyWRnzEBqSRnh1U4%3d&risl=&pid=ImgRaw&r=0.jpg">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
          <div class="menu-item">
            <img
              src="https://th.bing.com/th/id/R.3c67e53d682589dcb8ce02dd3ac1e20c?rik=LeUqj%2bnBd3%2f0WA&riu=http%3a%2f%2fwallup.net%2fwp-content%2fuploads%2f2017%2f11%2f17%2f239445-coffee-coffee_beans-cup.jpg&ehk=%2bEd%2bhMjaHGMrExklwM9MNbALfkaDNqvDmS67gs%2bf2OA%3d&risl=&pid=ImgRaw&r=0.jpg"
              alt="Iced Tea" width="50" height="50">
            <h2> hot coffe</h2>
            <p>mind refreshing</p>
            <span class="price">₹ 80</span>
            <span>4.3⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="action" value="add">
              <input type="hidden" name="name" value="hot cofee ">
              <input type="hidden" name="price" value="80">
              <input type="hidden" name="image" value="https://th.bing.com/th/id/R.3c67e53d682589dcb8ce02dd3ac1e20c?rik=LeUqj%2bnBd3%2f0WA&riu=http%3a%2f%2fwallup.net%2fwp-content%2fuploads%2f2017%2f11%2f17%2f239445-coffee-coffee_beans-cup.jpg&ehk=%2bEd%2bhMjaHGMrExklwM9MNbALfkaDNqvDmS67gs%2bf2OA%3d&risl=&pid=ImgRaw&r=0.jpg">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
          <div class="menu-item">
            <img
              src="https://th.bing.com/th/id/OIP.9v-RlufW99iWDe1vMHIyqgHaGK?w=767&h=639&rs=1&pid=ImgDetMain.jpg"
              alt="Fruit Punch" width="50" height="50">
            <h2>Fruit Punch</h2>
            <p>Fruity</p>
            <span class="price">₹ 90</span>
            <span>4.2⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="action" value="add">
              <input type="hidden" name="name" value="Fruit punch">
              <input type="hidden" name="price" value="90">
              <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.9v-RlufW99iWDe1vMHIyqgHaGK?w=767&h=639&rs=1&pid=ImgDetMain.jpg">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
          <div class="menu-item">
            <img src="https://th.bing.com/th/id/OIP.awzDrZu8VfZNt5Uy8x5B5QHaLT?rs=1&pid=ImgDetMain.jpg"
              alt="cold cofee" width="50" height="50">
            <h2>cold cofee</h2>
            <p>Healthy</p>
            <span class="price">₹ 50</span>
            <span>4.3⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="action" value="add">
              <input type="hidden" name="name" value="cold cofee ">
              <input type="hidden" name="price" value="50">
              <input type="hidden" name="image" value="https://th.bing.com/th/id/OIP.awzDrZu8VfZNt5Uy8x5B5QHaLT?rs=1&pid=ImgDetMain.jpg">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
          <div class="menu-item">
            <img src="/canteen_img/mojito.jpeg"
              alt="mojito" width="50" height="50">
            <h2>refreshing summer drink</h2>
            <p>Healthy</p>
            <span class="price">₹ 30</span>
            <span>4.4⭐</span>

            <!-- add to cart -->
            <form method="POST" action="cart.php">
              <input type="hidden" name="action" value="add">
              <input type="hidden" name="name" value="mojito ">
              <input type="hidden" name="price" value="30">
              <input type="hidden" name="image" value="/canteen_img/mojito.jpeg">
              <button type="submit">Add to Cart</button>
            </form>
          </div>
        </div>
  </section>
  </div>

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
              <li><a href="#">feedback</a></li>
              <li><a href="contact.html">contact Us</a></li>
              <li><a href="about.html">about Us</a></li>

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
</body>

</html>