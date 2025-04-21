<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// Redirect if not logged in
if (!isset($_SESSION['user_email'])) {
  header("Location: login.php");
  exit();
}

include '../partials/database.php';

// Function to get cart items
function getCartItems($conn) {
  $sql = "SELECT c.quantity, p.product_id, p.product_name, p.product_desc, p.product_price, p.product_image
          FROM cart c
          JOIN product p ON c.product_id = p.product_id
          WHERE c.user_email = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $_SESSION['user_email']);
  $stmt->execute();
  return $stmt->get_result();
}

// Function to get user address
function getUserAddress($conn) {
  $address_sql = "SELECT address_line1, address_line2, city, state, postal_code, country 
                  FROM users WHERE email = ?";
  $address_stmt = $conn->prepare($address_sql);
  $address_stmt->bind_param("s", $_SESSION['user_email']);
  $address_stmt->execute();
  return $address_stmt->get_result()->fetch_assoc();
}

// Handle address form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_address'])) {
  $address_line1 = $_POST['address_line1'];
  $address_line2 = $_POST['address_line2'] ?? '';
  $city = $_POST['city'];
  $state = $_POST['state'];
  $postal_code = $_POST['postal_code'];
  $country = $_POST['country'];
  
  $update_sql = "UPDATE users SET 
                address_line1 = ?, 
                address_line2 = ?, 
                city = ?, 
                state = ?, 
                postal_code = ?, 
                country = ? 
                WHERE email = ?";
  $update_stmt = $conn->prepare($update_sql);
  $update_stmt->bind_param("sssssss", 
    $address_line1, 
    $address_line2, 
    $city, 
    $state, 
    $postal_code, 
    $country, 
    $_SESSION['user_email']
  );
  
  if ($update_stmt->execute()) {
    $_SESSION['success_message'] = "Address updated successfully!";
  } else {
    $_SESSION['error_message'] = "Failed to update address. Please try again.";
  }
  header("Location: ../checkout.php");
  exit();
}

// Handle place order
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['place_order'])) {
  // Validate payment method selected
  if (empty($_POST['payment_method'])) {
    $_SESSION['error_message'] = "Please select a payment method";
    header("Location: ../checkout.php");
    exit();
  }

  // Start transaction
  $conn->begin_transaction();
  
  try {
    // Get cart items and calculate total
    $result = getCartItems($conn);
    $subtotal = 0;
    $cart_items = [];
    
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $item_total = $row['product_price'] * $row['quantity'];
        $subtotal += $item_total;
        $cart_items[] = $row;
      }
    }
    
    $total = $subtotal + 5; // $5 shipping

    // 1. Create order
    $order_sql = "INSERT INTO orders (user_email, total_amount, payment_method, status) 
                  VALUES (?, ?, ?, 'Processing')";
    $order_stmt = $conn->prepare($order_sql);
    $order_stmt->bind_param("sds", $_SESSION['user_email'], $total, $_POST['payment_method']);
    $order_stmt->execute();
    $order_id = $conn->insert_id;
    
    // 2. Add order items
    $order_item_sql = "INSERT INTO order_items (order_id, product_id, quantity, price) 
                       VALUES (?, ?, ?, ?)";
    $order_item_stmt = $conn->prepare($order_item_sql);
    
    foreach ($cart_items as $item) {
      $order_item_stmt->bind_param("iiid", $order_id, $item['product_id'], $item['quantity'], $item['product_price']);
      $order_item_stmt->execute();
    }
    
    // 3. Clear cart
    $clear_cart_sql = "DELETE FROM cart WHERE user_email = ?";
    $clear_cart_stmt = $conn->prepare($clear_cart_sql);
    $clear_cart_stmt->bind_param("s", $_SESSION['user_email']);
    $clear_cart_stmt->execute();
    
    // Commit transaction
    $conn->commit();
    
    // Set success flag for the animation
    $_SESSION['order_success'] = true;
    header("Location: ../index.php?checkout.php=true");
    exit();
  } catch (Exception $e) {
    // Rollback on error
    $conn->rollback();
    $_SESSION['error_message'] = "Order failed: " . $e->getMessage();
    header("Location: ../index.php?checkout.php=true");
    exit();
  }
}
?>