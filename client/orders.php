<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location: login.php");
    exit();
}

include 'partials/database.php';

// Get all orders for the current user
$sql = "SELECT o.order_id, o.order_date, o.total_amount, o.payment_method, o.status, 
               COUNT(oi.order_item_id) as item_count
        FROM orders o
        LEFT JOIN order_items oi ON o.order_id = oi.order_id
        WHERE o.user_email = ?
        GROUP BY o.order_id
        ORDER BY o.order_date DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_SESSION['user_email']);
$stmt->execute();
$orders = $stmt->get_result();
?>


   

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">My Orders</h1>

        <?php if ($orders->num_rows > 0): ?>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <ul class="divide-y divide-gray-200">
                    <?php while ($order = $orders->fetch_assoc()): ?>
                        <li class="p-6 hover:bg-gray-50 transition">
                            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center">
                                <div class="mb-4 sm:mb-0">
                                    <div class="flex items-center">
                                        <h3 class="text-lg font-medium text-gray-900">
                                            Order #<?= htmlspecialchars($order['order_id']) ?>
                                        </h3>
                                        <span class="ml-3 px-2 py-1 text-xs font-semibold rounded-full 
                                            <?= $order['status'] === 'Processing' ? 'bg-yellow-100 text-yellow-800' : 
                                               ($order['status'] === 'Shipped' ? 'bg-blue-100 text-blue-800' : 
                                               'bg-green-100 text-green-800') ?>">
                                            <?= htmlspecialchars($order['status']) ?>
                                        </span>
                                    </div>
                                    <p class="text-sm text-gray-500 mt-1">
                                        <?= date('F j, Y, g:i a', strtotime($order['order_date'])) ?>
                                    </p>
                                    <p class="text-sm text-gray-500 mt-1">
                                        <?= $order['item_count'] ?> item<?= $order['item_count'] != 1 ? 's' : '' ?>
                                    </p>
                                </div>
                                
                                <div class="text-right">
                                    <p class="text-lg font-semibold text-gray-900">
                                        $<?= number_format($order['total_amount'], 2) ?>
                                    </p>
                                    <p class="text-sm text-gray-500">
                                        <?= htmlspecialchars($order['payment_method']) ?>
                                    </p>
                                    <a href="index.php?order_id=<?= $order['order_id'] ?>" 
                                       class="mt-2 inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-800">
                                        View Details
                                        <i class="fas fa-chevron-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        <?php else: ?>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg p-8 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
                <h3 class="mt-4 text-lg font-medium text-gray-900">No orders yet</h3>
                <p class="mt-1 text-gray-500">You haven't placed any orders yet.</p>
                <a href="index.php" class="mt-6 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Start Shopping
                </a>
            </div>
        <?php endif; ?>
    </div>

    