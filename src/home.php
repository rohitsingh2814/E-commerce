<!-- 🌟 Navbar -->
<?php include('Admin/db.php') ?>

<main class="bg-gray-200">

  <nav class="bg-gradient-to-r from-gray-200 via-gray-300 to-gray-400 border-b border-gray-300 shadow-md pt-3 px-6">
    <div class="max-w-screen-xl mx-auto">
      <ul class="flex space-x-6 p-4 text-black font-medium justify-center">
        <li><a href="#" class="hover:text-blue-900">Shop All</a></li>
        <li><a href="#" class="hover:text-blue-900">Computers</a></li>
        <li><a href="#" class="hover:text-blue-900">Tablets</a></li>
        <li><a href="#" class="hover:text-blue-900">Drones & Cameras</a></li>
        <li><a href="#" class="hover:text-blue-900">Audio</a></li>
        <li><a href="#" class="hover:text-blue-900">Mobile</a></li>
        <li><a href="#" class="hover:text-blue-900">T.V & Home Cinema</a></li>
        <li><a href="#" class="hover:text-blue-900">Wearable Tech</a></li>
        <li><a href="#" class="hover:text-blue-900 text-red-600 font-bold">Sale</a></li>
      </ul>
    </div>
  </nav>

  <!-- 🌟 Carousel -->
  <div id="carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel Wrapper -->
    <div class="relative h-64 md:h-96 overflow-hidden">
      <!-- Slide 1 -->
      <div class="hidden duration-[1000ms] ease-in-out" data-carousel-item>
        <img src="images/home1.avif" class="w-full  object-cover" alt="TechShop">
        <div class="absolute inset-0 flex flex-col justify-center items-center  text-black p-6 text-center">
          <h2 class="text-5xl font-bold">Welcome to TechShop</h2>
          <p class="text-lg">Your One-Stop Destination for the Latest Gadgets</p>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="hidden duration-[1000ms] ease-in-out" data-carousel-item>
        <img src="images/hom2.gif" class="w-full h-full object-cover" alt="Latest Gadgets">
        <div class="absolute inset-0 flex flex-col justify-center items-center  text-white p-6 text-center">
          <h2 class="text-5xl font-bold">Fastest Devilery!</h2>
          <p class="text-lg">Upgrade Your Tech Game Today</p>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="hidden duration-[1000ms] ease-in-out" data-carousel-item>
        <img src="images/home3.gif" class="w-full h-full object-cover" alt="Best Deals">
        <div class="absolute inset-0 flex flex-col justify-center items-center  text-black p-6 text-center">
          <h2 class="text-5xl font-bold">Biggest Tech Deals of the Year</h2>
          <p class="text-lg">Hurry! Limited Stock Available</p>
        </div>
      </div>
    </div>

    <!-- Slider Indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3">
      <button class="w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition" data-carousel-slide-to="0"></button>
      <button class="w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition" data-carousel-slide-to="1"></button>
      <button class="w-3 h-3 rounded-full bg-white opacity-50 hover:opacity-100 transition" data-carousel-slide-to="2"></button>
    </div>
  </div>

  <!-- 🌟 parmo  card-->
  <div class="flex space-x-4 mt-6 px-4">
    <!-- Smartphone Card -->
    <div class="bg-red-600 text-white p-8 w-1/2 h-80 bg-cover bg-center"
      style="background-image: url('images/promo2.avif');">
      <h3 class="text-lg font-medium">Holiday Deals</h3>
      <h2 class="text-5xl font-bold mt-2">Up to<br>30% off</h2>
      <p class="mt-4 text-sm">Selected Smartphone Brands</p>
      <a href="smartphones.html" class="inline-block mt-6">
        <div class="px-6 py-2 bg-white text-blue-400 rounded-full font-semibold hover:bg-gray-500 transition duration-200">
          Shop
        </div>
      </a>
    </div>

    <!-- Headphones Card -->
    <div class="bg-purple-700 text-white p-8  w-1/2 h-80 bg-cover bg-center"
      style="background-image: url('images/promo1.avif');">
      <h3 class="text-lg font-medium">Just In</h3>
      <h2 class="text-5xl font-bold mt-2">Take Your<br>Sound Anywhere</h2>
      <p class="mt-4 text-sm">Top Headphone Brands</p>
      <a href="index.php?product=true" class="inline-block mt-6">
        <div class="px-6 py-2 bg-white text-blue-400 rounded-full font-semibold hover:bg-gray-500 transition duration-200">
          Shop
        </div>
      </a>
    </div>
  </div>

  <!-- 🌟 information -->

  <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center bg-white p-8 shadow-lg m-6">
    <!-- Curb-side Pickup -->
    <div class="flex flex-col items-center space-y-2">
      <i class="fas fa-motorcycle text-purple-600 text-3xl"></i>
      <p class="font-semibold">Curb-side pickup</p>
    </div>

    <!-- Free Shipping -->
    <div class="flex flex-col items-center space-y-2">
      <i class="fas fa-box text-purple-600 text-3xl"></i>
      <p class="font-semibold">Free shipping on orders over $50</p>
    </div>

    <!-- Low Prices Guaranteed -->
    <div class="flex flex-col items-center space-y-2">
      <i class="fas fa-tags text-purple-600 text-3xl"></i>
      <p class="font-semibold">Low prices guaranteed</p>
    </div>

    <!-- Available 24/7 -->
    <div class="flex flex-col items-center space-y-2">
      <i class="fas fa-clock text-purple-600 text-3xl"></i>
      <p class="font-semibold">Available to you 24/7</p>
    </div>
  </div>



  <div class="bg-white m-6 p-8  shadow-md">
    <h2 class="text-3xl font-bold text-center mb-6">Best Sellers</h2>

    <div class="relative">

      <div id="carousel" class="flex overflow-x-scroll scroll-smooth gap-4 px-10 py-4 scrollbar-hide">


      <?php
include('Admin/db.php');

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
  $id = $row['id'];
  $name = $row['name'];
  $image = $row['image'];

  echo '
<a href="product.php?id=' . $id . '" class="min-w-[200px] max-w-[220px] bg-white p-4 shadow rounded relative border hover:shadow-lg transition">
  <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">SALE</span>
  <img src="Admin/uploads/' . $image . '" alt="' . $name . '" class="w-full h-32 object-contain mb-4 transform transition-transform duration-300 hover:scale-110">
  <h3 class="text-sm font-semibold">' . $name . '</h3>
  <p class="text-purple-700 line-through text-sm">$85.00</p>
  <p class="text-purple-600 font-bold">$70.00</p>
</a>';
}
?>



      </div>



    </div>

    <div class="text-center mt-6">
      <a href="?product=true">
        <button class="bg-purple-600 text-white px-6 py-2 rounded-full hover:bg-purple-700 transition">View All</button>
      </a>
    </div>
  </div>

  <!-- 🌟 todaysdeals -->
  <section class="relative h-80 mt-10 m-6 p-8  shadow-md">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0 bg-cover bg-center" style="background-image: url('images/todaysdeal.png');"></div>

    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-30 z-0"></div>

    <!-- Text Content -->
    <div class="relative z-10 flex items-center h-full px-10 bg-">
      <div class="max-w-md  text-white ">
        <span class="bg-red-500 text-white text-xs px-2 py-1 rounded inline-block mb-2">Today's Special</span>
        <h2 class="text-3xl font-bold mb-2">Best Arial View in Town</h2>
        <div class="flex items-baseline space-x-2">
          <span class="text-purple-400 text-5xl font-bold">30%</span>
          <span class="text-white text-4xl font-semibold">OFF</span>
        </div>
        <p class="mt-4 text-md font-semibold">on professional camera drones</p>
        <p class="text-sm text-white mt-2">Limited quantities. <br> See product detail pages for availability.</p>

      </div>
    </div>
  </section>

  <?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  if (isset($_POST['send'])) {
    $email = $_POST['email1'];

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $mail = new PHPMailer(true);

    try {
      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'gauravkumarsat132005@gmail.com';
      $mail->Password   = 'chgx vofc knka pddn';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;

      $mail->setFrom('gauravkumarsat132005@gmail.com', 'subs');
      $mail->addAddress('gauravkkr345@gmail.com', 'shopme');

      $mail->isHTML(true);
      $mail->Subject = 'Subscription';
      $mail->Body    = 'Register me To TechShop ' . $email;

      $mail->send();

      // ✅ Fixed header with NO space after location
      header('Location: home.php?success=1');
      exit();
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  }
  ?>

  <div class="relative z-10 w-full bg-black justify-center flex items-center h-full px-10 bg-">
    <div class=" p-3 m-4 rounded shadow-md text-center">
      <h3 class="text-xl font-bold mb-4 text-white">Subscribe to our Sailing Newsletter</h3>
      <form id="subscribeForm" action="home.php" method="POST">
        <input type="email" name="email1" placeholder="Enter your email" required>
        <button type="submit" id="subscribeBtn" name="send" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Subscribe</button>
      </form>
    </div>
  </div>





  <!-- 🌟 help cenetr -->
  <section class="flex flex-col md:flex-row m-10 mx-4 md:mx-6 shadow-md">
    <!-- Left Text Section -->
    <div class="w-full md:w-1/2 bg-black text-white flex items-center justify-center p-6 md:p-10">
      <div class="max-w-md">
        <h2 class="text-2xl md:text-3xl font-bold mb-4">Need Help? Check<br>Out Our Help Center</h2>
        <p class="mb-6 text-gray-300 text-sm md:text-base">
          I'm a paragraph. Click here to add your own text and edit me. Let your users get to know you.
        </p>
        <a href="index.php?help=true">
          <button class="px-6 py-2 border border-purple-400 text-purple-400 rounded-full hover:bg-purple-400 hover:text-white transition-all">
            Go to Help Center
          </button>
        </a>
      </div>
    </div>

    <!-- Right Image Section -->
    <div class="w-full md:w-1/2">
      <img src="images/help.png" alt="Laptop with headphones"
        class="w-full h-64 md:h-full object-cover" />
    </div>

  </section>

</main>