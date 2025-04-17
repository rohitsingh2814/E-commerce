<?php
include 'partials/database.php';
// Join cart with product
$sql = "SELECT c.quantity, p.product_id, p.product_name, p.product_desc, p.product_price, p.product_image
        FROM cart c
        JOIN product p ON c.product_id = p.product_id";

$result = $conn->query($sql);
$subtotal = 0;
?>

<div class="max-w-6xl mx-auto min-h-screen mt-20 pt-20 px-6 bg-gray-200">
  <h2 class="text-3xl font-bold mb-8">Shopping Cart</h2>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pt-20">

    <!-- Cart Items -->
    <div class="md:col-span-2 space-y-6">
      <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
          <?php $item_total = $row['product_price'] * $row['quantity']; ?>
          <?php $subtotal += $item_total; ?>

          <div class="flex items-center gap-4 bg-white p-4 rounded-xl shadow hover:shadow-md transition">
            <img src="Admin/productimge/<?= htmlspecialchars($row['product_image']) ?>" alt="Product" class="w-20 h-20 object-cover rounded-lg" />

            <div class="flex-1">
              <h3 class="text-lg font-semibold"><?= htmlspecialchars($row['product_name']) ?></h3>
              <p class="text-gray-500 text-sm"><?= htmlspecialchars($row['product_desc']) ?></p>
              <div class="mt-2 flex items-center gap-2">
                <label class="text-sm">Qty:</label>
                <input type="number" min="1" value="<?= $row['quantity'] ?>"
                  class="w-20 border border-gray-300 rounded-lg px-2 py-1 text-center focus:outline-none focus:ring-2 focus:ring-blue-500" />
              </div>
            </div>

            <div class="text-right">
              <p class="text-lg font-semibold text-gray-800">$<?= number_format($item_total, 2) ?></p>
              <form action="server/request.php" method="POST">
                <input type="hidden" name="product_id" value="<?= htmlspecialchars($row['product_id']) ?>">
                <button type="submit" class="text-red-600 hover:underline text-sm mt-1">Remove</button>
              </form>
            </div>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p class="text-gray-600">Your cart is empty.</p>
      <?php endif; ?>
    </div>

    <!-- Summary -->
    <div class="bg-white p-6 rounded-xl shadow-md">
      <h3 class="text-2xl font-semibold mb-4">Order Summary</h3>
      <div class="flex justify-between mb-2 text-sm text-gray-600">
        <span>Subtotal</span>
        <span>$<?= number_format($subtotal, 2) ?></span>
      </div>
      <div class="flex justify-between mb-2 text-sm text-gray-600">
        <span>Shipping</span>
        <span>$5.00</span>
      </div>
      <div class="flex justify-between mb-4 font-semibold text-lg">
        <span>Total</span>
        <span>$<?= number_format($subtotal + 5, 2) ?></span>
      </div>
      <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-medium text-lg">
        Proceed to Checkout
      </button>
    </div>

  </div>
</div>



<?php $conn->close(); ?>
