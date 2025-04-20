
    <div class="container mx-auto px-4 py-12 max-w-4xl pt-40">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Company Policies</h1>
            <p class="text-lg text-gray-600">Everything you need to know about shopping with us</p>
        </header>

        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <!-- Navigation Tabs -->
            <div class="flex flex-wrap border-b border-gray-200">
                <button onclick="showSection('policy')" class="tab-button active px-6 py-3 font-medium text-sm">Privacy Policy</button>
                <button onclick="showSection('shipping')" class="tab-button px-6 py-3 font-medium text-sm">Shipping & Returns</button>
                <button onclick="showSection('terms')" class="tab-button px-6 py-3 font-medium text-sm">Terms & Conditions</button>
                <button onclick="showSection('payment')" class="tab-button px-6 py-3 font-medium text-sm">Payment Methods</button>
                <button onclick="showSection('faq')" class="tab-button px-6 py-3 font-medium text-sm">FAQ</button>
            </div>

            <!-- Content Sections -->
            <div class="p-8">
                <!-- Privacy Policy -->
                <div id="policy" class="policy-section">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Privacy Policy</h2>
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700 mb-2">Information Collection</h3>
                            <p class="text-gray-600">We collect personal information when you register, place an order, or subscribe to our newsletter. This may include your name, email address, mailing address, phone number, and payment information.</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700 mb-2">Use of Information</h3>
                            <p class="text-gray-600">Your information is used to process transactions, improve our services, and communicate with you. We do not sell or share your information with third parties except as necessary to provide our services.</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700 mb-2">Data Security</h3>
                            <p class="text-gray-600">We implement security measures to protect your personal information. All sensitive/credit information is transmitted via Secure Socket Layer (SSL) technology and encrypted in our payment gateway providers database.</p>
                        </div>
                    </div>
                </div>

                <!-- Shipping & Returns -->
                <div id="shipping" class="policy-section hidden">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Shipping & Returns</h2>
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700 mb-2">Shipping Policy</h3>
                            <p class="text-gray-600">We offer worldwide shipping. Most orders are processed within 1-2 business days and delivered within 3-7 business days for domestic orders, and 7-21 business days for international orders.</p>
                            <ul class="list-disc pl-5 mt-2 text-gray-600 space-y-1">
                                <li>Standard Shipping: $5.99 (3-7 business days)</li>
                                <li>Express Shipping: $12.99 (1-3 business days)</li>
                                <li>International Shipping: Calculated at checkout</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700 mb-2">Returns & Exchanges</h3>
                            <p class="text-gray-600">We accept returns within 30 days of purchase. Items must be unused, in original packaging with tags attached. To initiate a return, please contact our customer service.</p>
                            <ul class="list-disc pl-5 mt-2 text-gray-600 space-y-1">
                                <li>Refunds processed within 5-10 business days</li>
                                <li>Exchanges available for defective or incorrect items</li>
                                <li>Customer pays return shipping unless item is defective</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Terms & Conditions -->
                <div id="terms" class="policy-section hidden">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Terms & Conditions</h2>
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700 mb-2">General Terms</h3>
                            <p class="text-gray-600">By accessing and using our website, you accept and agree to be bound by these Terms and Conditions. All products are subject to availability and we reserve the right to limit quantities.</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700 mb-2">Product Information</h3>
                            <p class="text-gray-600">We make every effort to display our products as accurately as possible. However, we cannot guarantee that your monitor's display will be accurate. Product prices are subject to change without notice.</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700 mb-2">Limitation of Liability</h3>
                            <p class="text-gray-600">We shall not be liable for any special or consequential damages resulting from the use of, or inability to use, the products purchased from us.</p>
                        </div>
                    </div>
                </div>

                <!-- Payment Methods -->
                <div id="payment" class="policy-section hidden">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Payment Methods</h2>
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700 mb-2">Accepted Payment Options</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
                                <div class="bg-gray-100 p-4 rounded-lg flex items-center justify-center">
                                    <span class="font-medium text-gray-700">Credit Cards</span>
                                </div>
                                <div class="bg-gray-100 p-4 rounded-lg flex items-center justify-center">
                                    <span class="font-medium text-gray-700">PayPal</span>
                                </div>
                                <div class="bg-gray-100 p-4 rounded-lg flex items-center justify-center">
                                    <span class="font-medium text-gray-700">Apple Pay</span>
                                </div>
                                <div class="bg-gray-100 p-4 rounded-lg flex items-center justify-center">
                                    <span class="font-medium text-gray-700">Google Pay</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700 mb-2">Security</h3>
                            <p class="text-gray-600">All payment transactions are processed through secure gateways. We do not store your credit card details on our servers. Your payment information is encrypted during transmission.</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700 mb-2">Currency</h3>
                            <p class="text-gray-600">All transactions are processed in USD. For international orders, your bank may apply conversion fees based on their exchange rates.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ -->
                <div id="faq" class="policy-section hidden">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Frequently Asked Questions</h2>
                    <div class="space-y-4">
                        <div class="border-b border-gray-200 pb-4">
                            <button class="faq-question flex justify-between items-center w-full text-left font-medium text-gray-700">
                                <span>How do I track my order?</span>
                                <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="faq-answer mt-2 text-gray-600 hidden">
                                Once your order ships, you'll receive a confirmation email with tracking information. You can also track your order by logging into your account on our website.
                            </div>
                        </div>
                        <div class="border-b border-gray-200 pb-4">
                            <button class="faq-question flex justify-between items-center w-full text-left font-medium text-gray-700">
                                <span>What is your return policy?</span>
                                <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="faq-answer mt-2 text-gray-600 hidden">
                                We accept returns within 30 days of purchase. Items must be unused and in original condition with all tags attached. Please contact our customer service to initiate a return.
                            </div>
                        </div>
                        <div class="border-b border-gray-200 pb-4">
                            <button class="faq-question flex justify-between items-center w-full text-left font-medium text-gray-700">
                                <span>Do you offer international shipping?</span>
                                <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="faq-answer mt-2 text-gray-600 hidden">
                                Yes, we ship to most countries worldwide. International shipping costs and delivery times vary by destination. You'll see the exact shipping cost during checkout.
                            </div>
                        </div>
                        <div class="border-b border-gray-200 pb-4">
                            <button class="faq-question flex justify-between items-center w-full text-left font-medium text-gray-700">
                                <span>How can I contact customer service?</span>
                                <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div class="faq-answer mt-2 text-gray-600 hidden">
                                You can reach our customer service team by email at support@example.com or by phone at (555) 123-4567. Our support hours are Monday-Friday, 9am-5pm EST.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tab functionality
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.policy-section').forEach(section => {
                section.classList.add('hidden');
            });
            
            // Show selected section
            document.getElementById(sectionId).classList.remove('hidden');
            
            // Update active tab
            document.querySelectorAll('.tab-button').forEach(button => {
                button.classList.remove('active', 'text-blue-600', 'border-b-2', 'border-blue-600');
            });
            
            event.currentTarget.classList.add('active', 'text-blue-600', 'border-b-2', 'border-blue-600');
        }

        // FAQ accordion functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const icon = question.querySelector('svg');
                
                answer.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });

        // Initialize first tab as active
        document.querySelector('.tab-button').classList.add('active', 'text-blue-600', 'border-b-2', 'border-blue-600');
    </script>

    <style>
        .tab-button.active {
            color: #2563eb;
            border-bottom: 2px solid #2563eb;
        }
    </style>
