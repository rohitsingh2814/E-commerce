<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}

include 'partials/database.php';

$order_id = $_GET['order_id'] ?? 0;

// Verify order belongs to current user
$order_sql = "SELECT o.* FROM orders o 
              WHERE o.order_id = ? AND o.user_email = ?";
$order_stmt = $conn->prepare($order_sql);
$order_stmt->bind_param("is", $order_id, $_SESSION['user_email']);
$order_stmt->execute();
$order_result = $order_stmt->get_result();

if ($order_result->num_rows === 0) {
    header("Location: index.php?orders=true");
    exit();
}

$order = $order_result->fetch_assoc();

// Get order items
$items_sql = "SELECT oi.*, p.product_name, p.product_image 
              FROM order_items oi
              JOIN product p ON oi.product_id = p.product_id
              WHERE oi.order_id = ?";
$items_stmt = $conn->prepare($items_sql);
$items_stmt->bind_param("i", $order_id);
$items_stmt->execute();
$items = $items_stmt->get_result();
?>


<body class="bg-gray-50">
   

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 pt-40">
        <div class="mb-6">
            <a href="index.php?orders=true" class="inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-800">
                <i class="fas fa-chevron-left mr-1"></i>
                Back to Orders
            </a>
            <h1 class="text-2xl font-bold text-gray-900 mt-2">Order #<?= htmlspecialchars($order['order_id']) ?></h1>
            <p class="text-sm text-gray-500 mt-1">
                Placed on <?= date('F j, Y, g:i a', strtotime($order['order_date'])) ?>
            </p>
        </div>

        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6 border-b border-gray-200">
                <div class="flex flex-col sm:flex-row sm:justify-between">
                    <div class="mb-4 sm:mb-0">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Order Summary
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">
                            Status: 
                            <span class="px-2 py-1 text-xs font-semibold rounded-full 
                                <?= $order['status'] === 'Processing' ? 'bg-yellow-100 text-yellow-800' : 
                                   ($order['status'] === 'Shipped' ? 'bg-blue-100 text-blue-800' : 
                                   'bg-green-100 text-green-800') ?>">
                                <?= htmlspecialchars($order['status']) ?>
                            </span>
                        </p>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-semibold text-gray-900">
                            Total: $<?= number_format($order['total_amount'], 2) ?>
                        </p>
                        <p class="text-sm text-gray-500">
                            Paid with <?= htmlspecialchars($order['payment_method']) ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="px-4 py-5 sm:p-6">
                <h4 class="text-md font-medium text-gray-900 mb-4">Items</h4>
                <ul class="divide-y divide-gray-200">
                    <?php while ($item = $items->fetch_assoc()): ?>
                        <li class="py-4 flex">
                            <div class="flex-shrink-0">
                                <img src="Admin/productimge/<?= htmlspecialchars($item['product_image']) ?>" 
                                     alt="<?= htmlspecialchars($item['product_name']) ?>"
                                     class="w-20 h-20 object-contain rounded-md bg-white border border-gray-200 p-1">
                            </div>
                            <div class="ml-4 flex-1">
                                <div class="flex justify-between">
                                    <h5 class="text-sm font-medium text-gray-900">
                                        <?= htmlspecialchars($item['product_name']) ?>
                                    </h5>
                                    <p class="text-sm font-medium text-gray-900">
                                        $<?= number_format($item['price'], 2) ?>
                                    </p>
                                </div>
                                <p class="text-sm text-gray-500 mt-1">
                                    Quantity: <?= $item['quantity'] ?>
                                </p>
                                <p class="text-sm text-gray-900 mt-2">
                                    Subtotal: $<?= number_format($item['price'] * $item['quantity'], 2) ?>
                                </p>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>

            <div class="px-4 py-4 sm:px-6 border-t border-gray-200 bg-gray-50">
                <div class="flex justify-between">
                    <p class="text-sm text-gray-500">
                        Subtotal
                    </p>
                    <p class="text-sm text-gray-900">
                        $<?= number_format($order['total_amount'] - 5, 2) ?>
                    </p>
                </div>
                <div class="flex justify-between mt-2">
                    <p class="text-sm text-gray-500">
                        Shipping
                    </p>
                    <p class="text-sm text-gray-900">
                        $5.00
                    </p>
                </div>
                <div class="flex justify-between mt-4 pt-4 border-t border-gray-200">
                    <p class="text-base font-medium text-gray-900">
                        Total
                    </p>
                    <p class="text-base font-medium text-gray-900">
                        $<?= number_format($order['total_amount'], 2) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

  
