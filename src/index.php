<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechShop</title>
  <?php include 'partials/commonfiles.php'; ?>
</head>

<body>
<?php 

include_once 'header.php';
if(isset($_GET['login'])&&!isset($_SESSION['username'])){
    include ('login.php');
}
elseif(isset($_GET['signup'])&&!isset($_SESSION['username'])){
    include ('signup.php');
}
elseif(isset($_GET['home'])){
    include ('home.php');
}
elseif(isset($_GET['wishlist'])){
    include ('wishlist.php');
}
elseif(isset($_GET['cart'])){
    include ('cart.php');
}
elseif(isset($_GET['product'])){
    include ('product.php');
}elseif(isset($_GET['help'])){
    include ('help.php');
}
else{
    include ('home.php'); 
}

include_once 'footer.php';
?>
</body>
</html>