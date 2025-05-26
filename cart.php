<?php
session_start();
require 'db.php'; // Include database connection

// Handle cart actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $price = (float)$_POST['price'];
  $image = mysqli_real_escape_string($conn, $_POST['image']);
  $action = $_POST['action'];

  // Add Item
  if ($action === 'add') {
    $result = mysqli_query($conn, "SELECT * FROM cart WHERE name='$name'");
    if (mysqli_num_rows($result) > 0) {
      mysqli_query($conn, "UPDATE cart SET quantity=quantity+1 WHERE name='$name'");
    } else {
      mysqli_query($conn, "INSERT INTO cart (name, price, image, quantity) VALUES ('$name', $price, '$image', 1)");
    }
  }

  // Increase Quantity
  elseif ($action === 'increase') {
    mysqli_query($conn, "UPDATE cart SET quantity=quantity+1 WHERE name='$name'");
  }

  // Decrease Quantity
  elseif ($action === 'decrease') {
    $result = mysqli_query($conn, "SELECT quantity FROM cart WHERE name='$name'");
    $item = mysqli_fetch_assoc($result);
    if ($item && $item['quantity'] > 1) {
      mysqli_query($conn, "UPDATE cart SET quantity=quantity-1 WHERE name='$name'");
    }
  }

  // Remove Item
  elseif ($action === 'remove') {
    mysqli_query($conn, "DELETE FROM cart WHERE name='$name'");
  }

  header('Location: cart.php');
  exit();
}

// Fetch all items from the database to display in the cart
$cartItems = [];
$result = mysqli_query($conn, "SELECT * FROM cart");
while ($row = mysqli_fetch_assoc($result)) {
  $cartItems[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Shopping Cart</title>
  <style>
    table {
      width: 80%;
      margin: 20px auto;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: center;
    }

    img {
      width: 70px;
      height: 70px;
      object-fit: cover;
    }

    .quantity-control {
      display: flex;
      gap: 10px;
      justify-content: center;
    }

    .quantity-btn {
      padding: 5px 10px;
      cursor: pointer;
    }

    .checkout-btn {
      background-color: green;
      /* Changed to green */
      color: white;
      padding: 12px 30px;
      /* Increased padding for better visibility */
      border: none;
      /* Removed border */
      border-radius: 5px;
      /* Rounded corners */
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      text-decoration: none;
      text-align:center;
      /* For <a> tags */
      transition: background-color 0.3s ease;
      display: inline-block;
      /* Allows margin/padding */
      margin: 0 auto;
      /* Center alignment */
    }

    .checkout-btn:hover {
      background-color: #218838;
      /* Darker green on hover */
    }

    /* Container for centering */
    .checkout-container {
      text-align: center;
      /* Horizontal centering */
      margin: 25px 0;
      /* Vertical spacing */
    }
  </style>
</head>

<body>
  <h1 style="text-align:center">Shopping Cart</h1>

  <?php if (!empty($cartItems)): ?>
    <table>
      <thead>
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($cartItems as $item): ?>
          <tr>
            <td><img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>"></td>
            <td><?= htmlspecialchars($item['name']) ?></td>
            <td>₹<?= htmlspecialchars($item['price']) ?></td>
            <td>
              <div class="quantity-control">
                <form method="POST">
                  <input type="hidden" name="action" value="decrease">
                  <input type="hidden" name="name" value="<?= htmlspecialchars($item['name']) ?>">
                  <button type="submit" class="quantity-btn">−</button>
                </form>
                <?= htmlspecialchars($item['quantity']) ?>
                <form method="POST">
                  <input type="hidden" name="action" value="increase">
                  <input type="hidden" name="name" value="<?= htmlspecialchars($item['name']) ?>">
                  <button type="submit" class="quantity-btn">+</button>
                </form>
              </div>
            </td>
            <td>₹<?= htmlspecialchars($item['price'] * $item['quantity']) ?></td>
            <td>
              <form method="POST">
                <input type="hidden" name="action" value="remove">
                <input type="hidden" name="name" value="<?= htmlspecialchars($item['name']) ?>">
                <button type="submit" class="remove-btn">Remove</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <h2 style="text-align:center">Total Amount: ₹<?= array_reduce($cartItems, function ($sum, $item) 
    {
      return $sum + ($item['price'] * $item['quantity']);
    }, 0); ?>
    </h2>

    <a href="pay.php" class="checkout-btn">Proceed to Checkout</a>

  <?php else: ?>
    <p style="text-align:center">Your cart is empty!</p>
  <?php endif; ?>
</body>
  </html>