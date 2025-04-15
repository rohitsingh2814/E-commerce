<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Upload Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Upload New Product</h2>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="product_name" placeholder="Product Name" required><br>
    <textarea name="product_desc" placeholder="Product Description" required></textarea><br>
    <input type="file" name="product_image" accept="image/*" required><br>
    <button type="submit" name="submit">Upload</button>
</form>

<hr>

<h2>Product List</h2>
<div class="products">
<?php
$result = $conn->query("SELECT * FROM products ORDER BY id DESC");
while ($row = $result->fetch_assoc()) {
    echo "<div class='product'>
            <img src='uploads/{$row['image']}' width='150'><br>
            <strong>{$row['name']}</strong><br>
            <p>{$row['description']}</p>
          </div>";
}
?>
</div>
</body>
</html>
