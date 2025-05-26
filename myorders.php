<?php
session_start();

// Ensure user is logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php"); // Redirect to login page if not logged in
  exit;
}

$user_id = $_SESSION['user_id']; // Get user ID from session

// Database connection
require 'db.php';  // Adjust path as needed

// Fetch orders for the current user
$sql = "SELECT * FROM order_detail WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Orders</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f4f4f4;
    }

    .container {
      width: 80%;
      margin: auto;
      overflow: hidden;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background-color: white;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #007bff;
      color: white;
      text-transform: uppercase;
    }

    tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>My Orders</h1>
    <table>
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Order Date</th>
          <th>Items</th>
          <th>Total Amount</th>
          <th>Status</th>
          <!-- Add more columns as needed -->
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['order_date']) . "</td>";
            echo "<td>" . htmlspecialchars($row['items']) . "</td>";
            echo "<td>$" . number_format($row['total_price'], 2) . "</td>";
            echo "<td>" . htmlspecialchars($row['status']) . "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='5'>No orders found.</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>

<?php
$stmt->close();
$conn->close();
?>