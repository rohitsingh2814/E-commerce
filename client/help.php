<?php
// Start session if not started
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}


// Check if user is not logged in
if (!isset($_SESSION['username'])) {
  // Redirect to login
  header('Location: index.php?login=true');
  exit();
}

?>


<?php
$showAlert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {


  include '../partials/database.php';
  $username = $_POST["name"];
  $email = $_POST["email"];
  $problem = $_POST["problem"];
  $sql = "INSERT INTO queryt ( name, email, content) VALUES ('$username', '$email', '$problem')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "<script>alert('your Query is submitted');
    window.location.href = '../index.php?help=true';
    </script>";
  }
}


?>


