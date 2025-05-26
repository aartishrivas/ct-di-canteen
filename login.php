<?php
// login.php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  // Fetch user from database
  $stmt = $conn->prepare("SELECT password FROM register WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows > 0) {
    $stmt->bind_result($hashedPassword);
    $stmt->fetch();

    // Verify password
    if (password_verify($password, $hashedPassword)) {

      echo "<script>
  alert('Login successful!');
  window.location = 'index.php';
</script>";
    } else {
      echo "<script>
  alert('Invalid username or password.')
</script>";
    }
  } else {
    echo "<script>
  alert('User not found.')
</script>";
  }

  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CT ਦੀ CANTEEN</title>
  <link rel="stylesheet" href="login.css" />

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
  <section class="login hidden">
    <div class="container">
      <form class="login-part" method="post" action="login.php">
        <div class="logo">
          <img src="/canteen_img/logo.jpg" alt="" />
        </div>
        <div class="title">CT ਦੀ CANTEEN</div>
        <div class="fields">
          <div class="username">
            <svg class="svg-icon" viewBox="0 0 1 1">
              <i class="fa-solid fa-user"></i>
            </svg>
            <input
              type="username"
              class="user-input"
              placeholder="Username"
              name="username" />
          </div>
          <div class="password">
            <svg class="svg-icon" viewBox="0 0 1 1">
              <i class="fa-solid fa-lock"></i>
            </svg>
            <input
              type="password"
              class="pass-input"
              placeholder="Password"
              name="password" />
          </div>
        </div>
        <button class="login-button">Login</button>
        <div class="sign-up-links">
          <a href="/register.php">if you arenot registered </a> go here to
          <a href="register.php">register</a>
        </div>
      </form>
    </div>
  </section>
</body>

</html>