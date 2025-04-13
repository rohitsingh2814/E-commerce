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

// ✅ Now safe to include header
include 'header.php';
?>


