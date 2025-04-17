<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_GET['logout'])) {
    session_start();
    session_destroy(); 
    header("Location:../index.php?home=true");
    exit();
  } 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    include '../partials/database.php';
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Prevent SQL injection (Important!)
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $user = $result->fetch_assoc();
        $_SESSION['username'] = $user['username'];
        header('Location: ../index.php?home=true');
        exit(); // Stop execution immediately after redirect
    } else {
        echo '<script>
          alert("Invalid Crentails or You are not registred");
          window.location.href = "../index.php?login=true";
        </script>';
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    include '../partials/database.php';
    $product_id = $_POST['product_id'] ?? '';
    $quantity = intval($_POST['quantity']) ?? 1;

    // Optional: sanitize/check product_id exists
    if (!$product_id || $quantity < 1) {
        die("Invalid request");
    }

    // Insert into `cart` table
    $query = "INSERT INTO cart (product_id, quantity) VALUES (?, ?) 
              ON DUPLICATE KEY UPDATE quantity = quantity + VALUES(quantity)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "si", $product_id, $quantity);
    mysqli_stmt_execute($stmt);
   
    header("Location: ../index.php?product_id= $product_id");
    exit();
}

?>