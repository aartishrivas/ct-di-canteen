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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <style>
    /* Center Alignment Styles */
    body {
      height: 100%;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      /* Add default font */
    }

    .qr-code {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
      background-color: #f8f9fa;
      /* Light background color */
      padding: 20px;
    }

    .container {
      width: 100%;
      max-width: 400px;
      margin: 0 auto;
      background-color: blue;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(15, 11, 11, 0.1);
    }

    .wrapper h1 {
      margin-bottom: 20px;
      color: #333;
      font-size: 2rem;
    }

    .img-wrap {
      width: 100%;
      max-width: 300px;
      margin: 0 auto;
      padding: 15px;
      background-color: #fff;
      border-radius: 10px;
    }

    .img-wrap img {
      width: 100%;
      height: auto;
      display: block;
      border-radius: 8px;
    }

    /* Optional: Add animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .container {
      animation: fadeIn 0.5s ease-in-out;
    }
  </style>
</head>

<body>
  <section class="qr-code">
    <div class="container">
      <div class="row">
        <div class="wrapper">
          <h1>SCAN ME</h1>
          <div class="img-wrap">
            <img src="canteen_img\pay.jpg" alt="qr-code" />
            <a href="/index.php">enjoy your food</a>

          </div>
        </div>
      </div>
    </div>
  </section>
  <script src=" /script.js"></script>

</body>

</html>