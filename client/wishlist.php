<?php
// Start session and check login
if (session_status() === PHP_SESSION_NONE) session_start();


include 'partials/database.php';

// Get wishlist items for current user
$sql = "SELECT p.product_id, p.product_name, p.product_price, p.product_image 
        FROM wishlist w
        JOIN product p ON w.product_id = p.product_id
        WHERE w.user_email = ?
        ORDER BY w.added_at DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_SESSION['user_email']);
$stmt->execute();
$result = $stmt->get_result();
$wishlist_items = $result->fetch_all(MYSQLI_ASSOC);
?>


<!-- Main Content -->
<div class="max-w-4xl mx-auto pt-24 pb-12 px-4">
    <h1 class="text-3xl font-bold text-center mb-8">Your Wishlist</h1>

    <!-- Wishlist Items -->
    <div class="space-y-6">
        <?php if (!empty($wishlist_items)): ?>
            <?php foreach ($wishlist_items as $item): ?>
                <div class="bg-white rounded-lg shadow-md p-6 flex flex-col md:flex-row items-center gap-6 mx-auto max-w-2xl">
                    <!-- Product Image -->
                    <img src="Admin/productimge/<?= htmlspecialchars($item['product_image']) ?>"
                        alt="<?= htmlspecialchars($item['product_name']) ?>"
                        class="w-32 h-32 object-contain rounded-lg border border-gray-200">

                    <!-- Product Info -->
                    <div class="flex-1 text-center md:text-left">
                        <h3 class="text-xl font-semibold"><?= htmlspecialchars($item['product_name']) ?></h3>
                        <p class="text-lg text-gray-800 mt-2">$<?= number_format($item['product_price'], 2) ?></p>
                    </div>

                    <!-- Remove Button -->
                    <form action="server/request.php" method="POST" class="flex-shrink-0">
                        <input type="hidden" name="product_id" value="<?= htmlspecialchars($item['product_id']) ?>">
                        <input type="hidden" name="action" value="remove_from_wishlist">
                        <input type="hidden" name="source" value="wishlist_page"> <!-- Add this line -->
                        <button type="submit" class="px-4 py-2 bg-red-100 text-red-600 rounded-lg hover:bg-red-200 transition flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Remove
                        </button>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <!-- Empty Wishlist State -->
            <div class="bg-white rounded-lg shadow-sm p-8 text-center max-w-md mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
                <h3 class="mt-4 text-xl font-medium text-gray-900">Your wishlist is empty</h3>
                <p class="mt-2 text-gray-500">Save items you love for later</p>
                <a href="index.php" class="mt-6 inline-block px-6 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition">
                    Continue Shopping
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>


<?php $conn->close(); ?>