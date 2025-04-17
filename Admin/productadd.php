<?php
include('../partials/database.php');

// Handle POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $product_price = $_POST['product_price'];
    $product_info = $_POST['product_info'];
    $product_category = $_POST['product_category'];

    // Handle image upload
    $target_dir = "productimge/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $image_name = basename($_FILES["product_image"]["name"]);
    $target_file = $target_dir . $image_name;
    move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);

    // Insert into database
    $sql = "INSERT INTO product (product_id, product_name, product_desc, product_price, product_info, product_category, product_image)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ississs", $product_id, $product_name, $product_desc, $product_price, $product_info, $product_category, $image_name);

    if ($stmt->execute()) {
        echo "<script>alert('Product added successfully!')
         window.location.href = 'admin.php';
         </script>";
        
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

?>