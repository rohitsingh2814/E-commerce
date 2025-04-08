<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_GET['logout'])) {
    session_start();
    session_destroy(); 
    header("Location:/E-commerce");
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
?>