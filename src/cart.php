<?php
session_start();

if (!isset($_SESSION['username'])) {
  header('Location: index.php?login=true');
  exit(); // Always call exit() after a header redirect
}
?>

<h1>Welcome</h1>