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


  include 'partials/database.php';
  $username = $_POST["name"];
  $email = $_POST["email"];
  $problem = $_POST["problem"];
  $sql = "INSERT INTO `queryt` ( `name`, `email`, `content`) VALUES ('$username', '$email', '$problem')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    $showAlert = true;
  }
}


?>


<?php if ($showAlert): ?>
  <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
    <span class="block sm:inline">Your query has been registered, explore more products!</span>
  </div>
<?php endif; ?>

<form method="POST">
  <?php include 'form.php'; ?>
</form>

<?php include 'footer.php'; ?>