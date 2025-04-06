<?php include_once 'header.php';
if(isset($_GET['login'])){
    include ('login.php');
}
elseif(isset($_GET['signup'])){
    include ('signup.php');
}
elseif(isset($_GET['logout'])){
    include ('logout.php');
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
else{
    include ('home.php'); 
}

include_once 'footer.php';
?>



<!-- dajhrhf -->