
<!-- 🌟 Navbar -->
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
    <a href="headphones.html" class="inline-block mt-6">
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
        
    
        <a href="product.php" class="min-w-[200px] max-w-[220px] bg-white p-4 shadow rounded relative border hover:shadow-lg transition">
          <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">SALE</span>
          <img src="https://plus.unsplash.com/premium_photo-1681139760927-4c510ce6d8f0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aXBhZHxlbnwwfHwwfHx8MA%3D%3D" alt="Tablet" class="w-full h-32 object-contain mb-4 transform transition-transform duration-300 hover:scale-110">
          <h3 class="text-sm font-semibold">JP - Space Tablet 10.4" Wi-Fi 32GB</h3>
          <p class="text-purple-700 line-through text-sm">$85.00</p>
          <p class="text-purple-600 font-bold">$70.00</p>
        </a>

        <!-- Product Card 2 -->
        <a href="product.php" class="min-w-[200px] max-w-[220px] bg-white p-4 shadow rounded relative border hover:shadow-lg transition">
          <span class="absolute top-2 left-2 pb-15 bg-red-500 text-white text-xs px-2 py-1 rounded">SALE</span>
          <img src="https://images.pexels.com/photos/1092644/pexels-photo-1092644.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Tablet 2" class="w-full h-32 object-contain mb-4 transform transition-transform duration-300 hover:scale-110" width="30">
          <h3 class="text-sm font-semibold">Ocean Pro 11 - 12.3" Touch Screen</h3>
          <p class="text-purple-700 line-through text-sm">$85.00</p>
          <p class="text-purple-600 font-bold">$70.00</p>
        </a>

        <!-- Product Card 3 -->
        <a href="product.php" class="min-w-[200px] max-w-[220px] bg-white p-4 shadow rounded relative border hover:shadow-lg transition">
          <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">SALE</span>
          <img src="https://images.unsplash.com/photo-1615986200762-a1ed9610d3b1?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHNtYXJ0JTIwVFZ8ZW58MHx8MHx8fDA%3D" alt="Smart TV" class="w-full h-32 object-contain mb-4 transform transition-transform duration-300 hover:scale-110">
          <h3 class="text-sm font-semibold">Shel 50" Class LED 4K UHD Smart TV</h3>
          <p class="text-purple-600 font-bold">$85.00</p>
        </a>

        <!-- Product Card 4 -->
        <a href="product.php" class="min-w-[200px] max-w-[220px] bg-white p-4 shadow rounded relative border hover:shadow-lg transition">
          <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">SALE</span>
          <img src="https://media.istockphoto.com/id/1150952747/photo/close-up-of-legs-and-feet-of-football-player-in-blue-socks-and-shoes-running-and-dribbling.webp?a=1&b=1&s=612x612&w=0&k=20&c=6egpjg660pyymHJliYMbhEj36NcEPDhBWEYDlU4qEwE=" alt="Fitband" class="w-full h-32 object-contain mb-4 transform transition-transform duration-300 hover:scale-110">
          <h3 class="text-sm font-semibold">Fitboot Inspire Fitness Tracker</h3>
          <p class="text-purple-700 line-through text-sm">$85.00</p>
          <p class="text-purple-600 font-bold">$70.00</p>
        </a>

        <!-- Product Card 5 -->
        <a href="product.php" class="min-w-[200px] max-w-[220px] bg-white p-4 shadow rounded relative border hover:shadow-lg transition">
          <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">SALE</span>
          <img src="https://images.unsplash.com/photo-1730818876478-71b9f7ef1163?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHNtYXJ0JTIwcGhvbmUlMjB6JTIwcGl4ZWx8ZW58MHx8MHx8fDA%3D" alt="Phone" class="w-full h-32 object-contain mb-4 transform transition-transform duration-300 hover:scale-110">
          <h3 class="text-sm font-semibold">Smartphone Z Pixel Max 128GB</h3>
          <p class="text-purple-700 line-through text-sm">$85.00</p>
          <p class="text-purple-600 font-bold">$70.00</p>
        </a>

        <!-- Product Card 6 -->
        <a href="product.php" class="min-w-[200px] max-w-[220px] bg-white p-4 shadow rounded relative border hover:shadow-lg transition">
          <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">SALE</span>
          <img src="https://images.unsplash.com/photo-1601944177325-f8867652837f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8c21hcnQlMjBUVnxlbnwwfHwwfHx8MA%3D%3D" alt="Nano TV" class="w-full h-32 object-contain mb-4 transform transition-transform duration-300 hover:scale-110">
          <h3 class="text-sm font-semibold">65" Class Nano LED 4K UHD Smart TV</h3>
          <p class="text-purple-700 line-through text-sm">$85.00</p>
          <p class="text-purple-600 font-bold">$70.00</p>
        </a>

        <a href="product.php" class="min-w-[200px] max-w-[220px] bg-white p-4 shadow rounded relative border hover:shadow-lg transition">
          <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">SALE</span>
          <img src="https://images.unsplash.com/photo-1601944179066-29786cb9d32a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8c21hcnQlMjBUVnxlbnwwfHwwfHx8MA%3D%3D" alt="Nano TV" class="w-full h-32 object-contain mb-4 transform transition-transform duration-300 hover:scale-110">
          <h3 class="text-sm font-semibold">65" Class Nano LED 4K UHD Smart TV</h3>
          <p class="text-purple-700 line-through text-sm">$85.00</p>
          <p class="text-purple-600 font-bold">$70.00</p>
        </a>

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
      <div class="max-w-md text-white ">
        <span class="bg-red-500 text-white text-xs px-2 py-1 rounded inline-block mb-2">Today's Special</span>
        <h2 class="text-3xl font-bold mb-2">Best Arial View in Town</h2>
        <div class="flex items-baseline space-x-2">
          <span class="text-purple-400 text-5xl font-bold">30%</span>
          <span class="text-white text-4xl font-semibold">OFF</span>
        </div>
        <p class="mt-4 text-md font-semibold">on professional camera drones</p>
        <p class="text-sm text-white mt-2">Limited quantities. <br> See product detail pages for availability.</p>
        <button class="bg-purple-600 hover:bg-purple-700 text-white mt-6 px-6 py-2 rounded shadow-md">
          Shop
        </button>
      </div>
    </div>
  </section>

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