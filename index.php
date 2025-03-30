<?php include 'partials/header.php'?>

<?php 
if(isset($_GET['login'])){
    include ('login.php');
}
?>
<?php 
if(isset($_GET['signup'])){
    include ('signup.php');
}
?>