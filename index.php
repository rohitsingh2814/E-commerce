<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechShop</title>
  <?php include './partials/commonfiles.php'; ?>
</head>

<body class="bg-gray-200">
<?php 

include_once './client/header.php';
if(isset($_GET['login'])&&!isset($_SESSION['username'])){
    include ('./client/login.php');
}
elseif(isset($_GET['signup'])&&!isset($_SESSION['username'])){
    include ('./client/signup.php');
}
elseif(isset($_GET['home'])){
    include ('./client/home.php');
}
elseif(isset($_GET['wishlist'])){
    include ('./client/wishlist.php');
}
elseif(isset($_GET['cart'])){
    include ('./client/cart.php');
}
elseif(isset($_GET['product_id'])){
    include ('./client/product.php');
}
elseif(isset($_GET['viewall'])){
    include ('./client/viewall.php');
}
elseif(isset($_GET['help'])){
    include ('./client/from.php');
}
else{
    include ('./client/home.php'); 
}
include_once './client/footer.php';
?>
  </body>
</html>