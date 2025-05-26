<?php
// register.php

// Your MySQL connection using $conn
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['register_user'])) {
    // User registration
    $user_username = $_POST['username'] ?? '';
    $user_password = $_POST['password'] ?? '';

    // Check if username exists in 'register' table
    $checkStmt = $conn->prepare("SELECT username FROM register WHERE username = ?");
    $checkStmt->bind_param("s", $user_username);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
      echo "<script>alert('Username already exists. Please choose another.');</script>";
    } else {
      $hashedPassword = password_hash($user_password, PASSWORD_BCRYPT);
      $insertStmt = $conn->prepare("INSERT INTO register (username, password) VALUES (?, ?)");
      $insertStmt->bind_param("ss", $user_username, $hashedPassword);

      if ($insertStmt->execute()) {
        echo "<script>alert('User registration successful!');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
      } else {
        echo "<script>alert('Registration failed. Please try again.');</script>";
      }
      $insertStmt->close();
    }
    $checkStmt->close();
  } elseif (isset($_POST['register_admin'])) {
    // Fixed admin credentials
    $admin_username = 'aarti';
    $admin_password_plain = '7696';

    // Check if the submitted username and password match fixed ones
    $submitted_username = $_POST['username'] ?? '';
    $submitted_password = $_POST['password'] ?? '';

    if ($submitted_username !== $admin_username || $submitted_password !== $admin_password_plain) {
      echo "<script>alert('Incorrect admin username and password.');</script>";
    } else {
      // Check if admin already exists in 'admins' table
      $checkStmt = $conn->prepare("SELECT username FROM admin WHERE username = ?");
      $checkStmt->bind_param("s", $admin_username);
      $checkStmt->execute();
      $checkStmt->store_result();

      if ($checkStmt->num_rows > 0) {
        // Admin exists, redirect to dashboard
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $admin_username;
        echo "<script>alert('Admin already registered. Redirecting to dashboard.');</script>";
        echo "<script>window.location.href = 'admin.php';</script>";
        exit;
      } else {
        // Insert admin with hashed password
        $hashedPassword = password_hash($admin_password_plain, PASSWORD_BCRYPT);
        $insertStmt = $conn->prepare("INSERT INTO admin (username, password) VALUES (?, ?)");
        $insertStmt->bind_param("ss", $admin_username, $hashedPassword);

        if ($insertStmt->execute()) {
          $_SESSION['admin_logged_in'] = true;
          $_SESSION['admin_username'] = $admin_username;
          echo "<script>alert('Admin registered successfully! Redirecting to dashboard.');</script>";
          echo "<script>window.location.href = 'admin_dashboard.php';</script>";
          exit;
        } else {
          echo "<script>alert('Admin registration failed. Please try again.');</script>";
        }
        $insertStmt->close();
      }
      $checkStmt->close();
    }
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CT ਦੀ CANTEEN</title>
  <link rel="stylesheet" href="login.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
  <div class="container">
    <form class="register-part" method="post" action="#">
      <div class="logo">
        <img src="/canteen_img/logo.jpg" alt="Logo" />
      </div>
      <div class="title">CT ਦੀ CANTEEN</div>
      <div class="fields">
        <div class="username">
          <svg class="svg-icon" viewBox="0 0 20 20">
            <i class="fa-solid fa-user"></i>
          </svg>
          <input type="text" class="user-input" placeholder="Username" name="username" required />
        </div>
        <div class="password">
          <svg class="svg-icon" viewBox="0 0 20 20">
            <i class="fa-solid fa-lock"></i>
          </svg>
          <input type="password" class="pass-input" placeholder="Password" name="password" required />
        </div>
      </div>
      <button type="submit" name="register_user" class="register-button">Register</button>
      <button type="submit" name="register_admin" class="register-button admin-btn">Register As Admin</button>
      <div class="sign-up-links">
        <a href="/logout.php">If you are already registered, go to</a>
        <a href="/login.php">login</a>
      </div>
    </form>
  </div>
</body>

</html>