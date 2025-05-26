<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
  header("Location: register.php"); // Redirect to login if not logged in
  exit;
}

require 'db.php';

// --- INVENTORY HANDLERS ---
if (isset($_POST['add_inventory'])) {
  $item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
  $quantity = (int)$_POST['quantity'];
  $sold_out = (int)$_POST['sold_out'];
  $sold_left = (int)$_POST['sold_left'];

  mysqli_query($conn, "INSERT INTO inventory (item_name, quantity, sold_out, sold_left) VALUES ('$item_name', $quantity, $sold_out, $sold_left)");
}

if (isset($_POST['update_inventory'])) {
  $id = (int)$_POST['id'];
  $quantity = (int)$_POST['quantity'];
  $sold_out = (int)$_POST['sold_out'];
  $sold_left = (int)$_POST['sold_left'];

  mysqli_query($conn, "UPDATE inventory SET quantity=$quantity, sold_out=$sold_out, sold_left=$sold_left WHERE id=$id");
}

if (isset($_GET['delete_inventory'])) {
  $id = (int)$_GET['delete_inventory'];
  mysqli_query($conn, "DELETE FROM inventory WHERE id=$id");
}

// --- ORDER HANDLERS ---
if (isset($_GET['complete_order'])) {
  $order_id = (int)$_GET['complete_order'];
  mysqli_query($conn, "UPDATE order_detail SET status='Completed' WHERE id=$order_id");
}

if (isset($_GET['delete_order'])) {
  $order_id = (int)$_GET['delete_order'];
  mysqli_query($conn, "DELETE FROM order_detail WHERE id=$order_id");
}

// --- FEEDBACK HANDLERS ---
if (isset($_GET['delete_feedback'])) {
  $feedback_id = (int)$_GET['delete_feedback'];
  mysqli_query($conn, "DELETE FROM contact WHERE id=$feedback_id");
}

// Fetch data for display
$inventory_result = mysqli_query($conn, "SELECT * FROM inventory ORDER BY id DESC");
$orders_result = mysqli_query($conn, "SELECT * FROM order_detail ORDER BY id DESC");
$feedback_result = mysqli_query($conn, "SELECT * FROM contact ORDER BY id DESC");

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #f9f9f9;
    }

    header {
      background: #2980b9;
      color: white;
      padding: 15px;
      text-align: center;
    }

    .container {
      max-width: 1100px;
      margin: 20px auto;
      padding: 0 20px;
    }

    .nav-buttons {
      margin-bottom: 20px;
      text-align: center;
    }

    .nav-buttons button {
      background: #3498db;
      border: none;
      color: white;
      padding: 12px 25px;
      margin: 0 5px;
      cursor: pointer;
      border-radius: 6px;
      font-size: 18px;
      display: inline-block;
    }

    .nav-buttons button.active {
      background: #2c3e50;
    }

    section {
      background: white;
      padding: 20px;
      border-radius: 6px;
      box-shadow: 0 0 10px #ccc;
      display: none;
    }

    section.active {
      display: block;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
    }

    th,
    td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
    }

    th {
      background: #2980b9;
      color: white;
    }

    form.inline {
      display: inline-block;
    }

    input[type="text"],
    input[type="number"] {
      padding: 6px;
      width: 120px;
      margin-right: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    button.small-btn {
      padding: 6px 12px;
      font-size: 14px;
      margin-left: 5px;
      cursor: pointer;
      border: none;
      border-radius: 4px;
      color: white;
    }

    .btn-update {
      background: #27ae60;
    }

    .btn-delete {
      background: #e74c3c;
    }
  </style>
  <script>
    function showSection(id) {
      document.querySelectorAll('section').forEach(s => s.classList.remove('active'));
      document.getElementById(id).classList.add('active');

      document.querySelectorAll('.nav-buttons button').forEach(btn => btn.classList.remove('active'));
      document.querySelector(`button[data-target="${id}"]`).classList.add('active');
    }

    window.onload = function() {
      showSection('inventory-section'); // Show inventory by default
    };
  </script>
</head>

<body>

  <header>
    <h1>Admin Dashboard</h1>
  </header>

  <div class="container">

    <div class="nav-buttons">
      <button data-target="inventory-section" onclick="showSection('inventory-section')">Inventory</button>
      <button data-target="orders-section" onclick="showSection('orders-section')">Order Details</button>
      <button data-target="feedback-section" onclick="showSection('feedback-section')">Customer Feedback</button>
    </div>

    <!-- Inventory Section -->
    <section id="inventory-section">
      <h2>Inventory Management</h2>
      <form method="post" style="margin-bottom: 20px;">
        <input type="text" name="item_name" placeholder="Item Name" required />
        <input type="number" name="quantity" placeholder="Quantity" min="0" required />
        <input type="number" name="sold_out" placeholder="Sold Out" min="0" required />
        <input type="number" name="sold_left" placeholder="Sold Left" min="0" required />
        <button type="submit" name="add_inventory" class="small-btn btn-update">Add Item</button>
      </form>

      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Sold Out</th>
            <th>Sold Left</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php if (mysqli_num_rows($inventory_result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($inventory_result)): ?>
              <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['item_name']) ?></td>
                <td><?= $row['quantity'] ?></td>
                <td><?= $row['sold_out'] ?></td>
                <td><?= $row['sold_left'] ?></td>
                <td>
                  <form method="post" class="inline">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>" />
                    <input type="number" name="quantity" value="<?= $row['quantity'] ?>" min="0" required />
                    <input type="number" name="sold_out" value="<?= $row['sold_out'] ?>" min="0" required />
                    <input type="number" name="sold_left" value="<?= $row['sold_left'] ?>" min="0" required />
                    <button type="submit" name="update_inventory" class="small-btn btn-update">Update</button>
                  </form>
                  <a href="?delete_inventory=<?= $row['id'] ?>" onclick="return confirm('Delete this item?');" class="small-btn btn-delete" style="text-decoration:none;">Delete</a>
                </td>
              </tr>
            <?php endwhile; ?>
          <?php else: ?>
            <tr>
              <td colspan="6">No inventory items found.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </section>

    <!-- Orders Section -->
    <section id="orders-section">
      <h2>Order Details</h2>
      <?php if (mysqli_num_rows($orders_result) > 0): ?>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Customer Name</th>
              <th>Items</th>
              <th>Status</th>
              <th>Total Price</th>
              <th>Quantity</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($order = mysqli_fetch_assoc($orders_result)): ?>
              <tr>
                <td><?= $order['id'] ?></td>
                <td><?= htmlspecialchars($order['customer_name']) ?></td>
                <td><?= htmlspecialchars($order['items']) ?></td>
                <td><?= htmlspecialchars($order['status']) ?></td>
                <td>₹<?= number_format($order['total_price'], 2) ?></td>
                <td><?= $order['quantity'] ?></td>
                <td>
                  <?php if ($order['status'] === 'Pending'): ?>
                    <a href="?complete_order=<?= $order['id'] ?>" onclick="return confirm('Mark order as completed?');" class="small-btn btn-update" style="text-decoration:none;">Complete</a>
                  <?php endif; ?>
                  <a href="?delete_order=<?= $order['id'] ?>" onclick="return confirm('Delete this order?');" class="small-btn btn-delete" style="text-decoration:none;">Delete</a>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      <?php else: ?>
        <p>No orders found.</p>
      <?php endif; ?>
    </section>

    <!-- Feedback Section -->
    <section id="feedback-section">
      <h2>Customer Feedback</h2>
      <?php if (mysqli_num_rows($feedback_result) > 0): ?>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Full Name</th>
              <th>Email Address</th>
              <th>Subject</th>
              <th>Message</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($feedback = mysqli_fetch_assoc($feedback_result)): ?>
              <tr>
                <td><?= $feedback['id'] ?></td>
                <td><?= htmlspecialchars($feedback['full name']) ?></td>
                <td><?= htmlspecialchars($feedback['email_address']) ?></td>
                <td><?= htmlspecialchars($feedback['subject']) ?></td>
                <td><?= htmlspecialchars($feedback['message']) ?></td>
                <td>
                  <a href="?delete_feedback=<?= $feedback['id'] ?>" onclick="return confirm('Delete this feedback?');" class="small-btn btn-delete" style="text-decoration:none;">Delete</a>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      <?php else: ?>
        <p>No feedback found.</p>
      <?php endif; ?>
    </section>

  </div>

</body>

</html>
