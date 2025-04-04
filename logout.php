<?php
session_start();
session_destroy(); // Destroy session

// Ensure no output before this line
header("Location: index.php?home=true");
exit(); // Always use exit() after header()
?>