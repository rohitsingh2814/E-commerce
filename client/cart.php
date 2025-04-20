
<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}



include 'partials/database.php';

// Get cart items for current user
$sql = "SELECT c.quantity, p.product_id, p.product_name, p.product_desc, p.product_price, p.product_image
        FROM cart c
        JOIN product p ON c.product_id = p.product_id
        WHERE c.user_email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_SESSION['user_email']);
$stmt->execute();
$result = $stmt->get_result();

$subtotal = 0;
$cart_items = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $item_total = $row['product_price'] * $row['quantity'];
    $subtotal += $item_total;
    $cart_items[] = $row;
  }
}
?>


<div class="max-w-4xl mx-auto pt-24 pb-12 px-4 sm:px-6">
  <h1 class="text-3xl font-bold text-gray-900 mb-8 text-center">Your Shopping Cart</h1>


  <div class="space-y-6">
    <?php if (!empty($cart_items)): ?>
      <?php foreach ($cart_items as $item): ?>
        <?php $item_total = $item['product_price'] * $item['quantity']; ?>
        
        <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition p-6 flex flex-col sm:flex-row gap-6 mx-auto max-w-3xl">
          <!-- Product Image -->
           <a href="./index.php?product_id=<?= $item['product_id'] ?>">
          <div class="flex-shrink-0">
            <img src="Admin/productimge/<?= htmlspecialchars($item['product_image']) ?>"
              alt="<?= htmlspecialchars($item['product_name']) ?>"
              class="w-32 h-32 object-contain rounded-md bg-white border border-gray-200 p-2">
          </div>
      </a>
          <!-- Product Details -->
          <div class="flex-1 mt-5">
            <div class="flex justify-between">
              <h3 class="text-lg font-semibold text-gray-900"><?= htmlspecialchars($item['product_name']) ?></h3>
              <p class="text-lg font-semibold text-gray-900">$<?= number_format($item_total, 2) ?></p>
            </div>
            <p class="text-gray-600 text-sm mt-1"><?= htmlspecialchars($item['product_desc']) ?></p>

            <!-- Quantity Controls -->
            <div class="mt-6 flex items-center justify-between">
              <form action="server/update.php" method="POST" class="flex items-center gap-2">
                <input type="hidden" name="product_id" value="<?= htmlspecialchars($item['product_id']) ?>">
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="source" value="update">

                <div class="flex items-center border border-gray-300 rounded-md overflow-hidden">
                  <button type="button" class="qty-btn bg-gray-100 hover:bg-gray-200 px-3 py-1 text-lg font-medium text-gray-700 transition-colors" data-change="-1">
                  -
                  </button>

                  <input type="number" name="quantity" min="1" value="<?= $item['quantity'] ?>"
                    class="qty-input w-12 text-center border-x border-gray-300 py-1 focus:outline-none focus:ring-1 focus:ring-blue-500">

                  <button type="button" class="qty-btn bg-gray-100 hover:bg-gray-200 px-3 py-1 text-lg font-medium text-gray-700 transition-colors" data-change="1">
                    +
                  </button>
                </div>

                <button type="submit" name="remove" class="ml-4 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                  Update
                </button>
              </form>




              <!-- Remove Button -->
              <form action="server/request.php" method="POST">
                <input type="hidden" name="product_id" value="<?= htmlspecialchars($item['product_id']) ?>">
                <input type="hidden" name="action" value="remove">
                <button type="submit" class="text-red-600 hover:text-red-800 text-sm flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
                  Remove
                </button>
              </form>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <!-- Empty Cart State - Centered -->
      <div class="bg-white rounded-lg shadow-sm p-8 text-center max-w-md mx-auto mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        <h3 class="mt-4 text-lg font-medium text-gray-900">Your cart is empty</h3>
        <p class="mt-1 text-gray-500">Start shopping to add items to your cart</p>
        <a href="index.php" class="mt-6 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
          Continue Shopping
        </a>
      </div>
    <?php endif; ?>
  </div>

  <!-- Order Summary - Below Products -->
  <?php if (!empty($cart_items)): ?>
    <div class="mt-5 max-w-md mx-auto">
      <div class="bg-white rounded-lg shadow-sm p-6">
        <h2 class="text-lg font-medium text-gray-900 mb-6 text-center">Order Summary</h2>

        <div class="space-y-4">
          <div class="flex justify-between">
            <span class="text-gray-600">Subtotal (<?= count($cart_items) ?> items)</span>
            <span class="font-medium">$<?= number_format($subtotal, 2) ?></span>
          </div>

          <div class="flex justify-between">
            <span class="text-gray-600">Shipping</span>
            <span class="font-medium">$5.00</span>
          </div>

          <div class="border-t border-gray-200 pt-4 mt-4">
            <div class="flex justify-between">
              <span class="text-base font-medium text-gray-900">Total</span>
              <span class="text-base font-medium text-gray-900">$<?= number_format($subtotal + 5, 2) ?></span>
            </div>
          </div>

          <button class="w-full mt-6 bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-md font-medium transition">
            Proceed to Checkout
          </button>

          <div class="mt-4 flex justify-center">
            <a href="index.php" class="text-sm text-blue-600 hover:text-blue-500 hover:underline">
              Continue Shopping
            </a>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>

<?php $conn->close(); ?>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const qtyForms = document.querySelectorAll("form");

    qtyForms.forEach(form => {
      const qtyBtns = form.querySelectorAll(".qty-btn");
      const qtyInput = form.querySelector(".qty-input");

      qtyBtns.forEach(btn => {
        btn.addEventListener("click", function() {
          const change = parseInt(this.dataset.change, 10);
          let currentValue = parseInt(qtyInput.value, 10) || 1;
          let newValue = currentValue + change;

          if (newValue < 1) newValue = 1;

          qtyInput.value = newValue;
        });
      });
    });
  });
</script>