<?php
session_start();
session_unset();
session_destroy();
header("Location: index.php?home=true"); // Redirect to home after logout
exit();
?>