<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $conn->real_escape_string($_POST['product_name']);
    $desc = $conn->real_escape_string($_POST['product_desc']);
    
    $image = $_FILES['product_image']['name'];
    $temp = $_FILES['product_image']['tmp_name'];
    $target = "uploads/" . basename($image);

    if (move_uploaded_file($temp, $target)) {
        $stmt = $conn->prepare("INSERT INTO products (name, description, image) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $desc, $image);
        $stmt->execute();
        $stmt->close();
        header("Location: index.php");
    } else {
        echo "Image upload failed.";
    }
}
?>
