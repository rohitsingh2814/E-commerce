
    <!-- 🌟 Navbar -->
    <nav class="bg-gradient-to-r from-gray-200 via-gray-300 to-gray-400 border-b border-gray-300 shadow-md">
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
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="images/c1.jpg" class="w-full h-full object-cover" alt="TechShop">
                <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white p-6 text-center">
                    <h2 class="text-3xl font-bold">Welcome to TechShop</h2>
                    <p class="text-lg">Your One-Stop Destination for the Latest Gadgets</p>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="images/image.png" class="w-full h-full object-cover" alt="Latest Gadgets">
                <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white p-6 text-center">
                    <h2 class="text-3xl font-bold">Explore the New Arrivals</h2>
                    <p class="text-lg">Upgrade Your Tech Game Today</p>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="images/home3.jpg" class="w-full h-full object-cover" alt="Best Deals">
                <div class="absolute inset-0 flex flex-col justify-center items-center bg-black bg-opacity-50 text-white p-6 text-center">
                    <h2 class="text-3xl font-bold">Biggest Tech Deals of the Year</h2>
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

    <!-- 🌟 Services Section -->
    <div class="flex justify-center items-center m-20 p-10 border border-gray-300 shadow-lg rounded-lg">

        <div class="w-full max-w-6xl bg-white p-8 rounded-lg shadow-lg">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <!-- Curb-side pickup -->
                <div class="flex flex-col items-center">
                    <i class="fas fa-motorcycle text-4xl text-purple-600"></i>
                    <p class="mt-3 text-lg font-semibold text-gray-800">Curb-side Pickup</p>
                </div>
                <!-- Free shipping -->
                <div class="flex flex-col items-center">
                    <i class="fas fa-box text-4xl text-purple-600"></i>
                    <p class="mt-3 text-lg font-semibold text-gray-800">Free Shipping Over $50</p>
                </div>
                <!-- Low prices guaranteed -->
                <div class="flex flex-col items-center">
                    <i class="fas fa-percent text-4xl text-purple-600"></i>
                    <p class="mt-3 text-lg font-semibold text-gray-800">Low Prices Guaranteed</p>
                </div>
                <!-- Available 24/7 -->
                <div class="flex flex-col items-center">
                    <i class="fas fa-sync text-4xl text-purple-600"></i>
                    <p class="mt-3 text-lg font-semibold text-gray-800">Available 24/7</p>
                </div>
            </div>
        </div>
    </div>



