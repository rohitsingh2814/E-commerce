<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'update') {
    include '../partials/database.php';
    session_start();

    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;
    $user_email = $_SESSION['user_email'] ?? '';

    if ($product_id <= 0 || $quantity < 1 || empty($user_email)) {
        header("Location: ../cart.php?error=invalid_update_request");
        exit();
    }

    $query = "UPDATE cart SET quantity = ? WHERE product_id = ? AND user_email = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "iis", $quantity, $product_id, $user_email);
        if (mysqli_stmt_execute($stmt)) {
            header("Location: ../index.php?cart=true");
        } else {
            echo "Update failed: " . mysqli_error($conn); exit();
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "SQL Error: " . mysqli_error($conn); exit();
    }

    mysqli_close($conn);
    exit();
}
?>
