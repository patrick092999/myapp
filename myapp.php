<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PATS VAPOR - Your Premium Vape Shop</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5; /* Light gray background */
        }
        /* Custom scrollbar for better aesthetics */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #e2e8f0;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: #6b7280;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #4b5563;
        }
    </style>
</head>
<body class="text-gray-800">

    <!-- Age Verification Modal -->
    <div id="ageVerificationModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 p-4">
        <div class="bg-gradient-to-br from-gray-900 to-gray-700 p-8 rounded-xl shadow-2xl text-center max-w-md w-full border border-gray-600">
            <h2 class="text-3xl font-bold text-white mb-4">Are you 21 or older?</h2>
            <p class="text-gray-300 mb-6">By entering this site, you confirm that you are of legal smoking age in your jurisdiction.</p>
            <div class="flex justify-center space-x-4">
                <button id="confirmAgeBtn" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-8 rounded-full shadow-lg transition duration-300 ease-in-out transform hover:scale-105">Yes, I am 21+</button>
                <button id="denyAgeBtn" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-8 rounded-full shadow-lg transition duration-300 ease-in-out transform hover:scale-105">No, Exit Site</button>
            </div>
            <p class="text-gray-400 text-xs mt-6">Vaping products are intended for adults of legal smoking age only.</p>
        </div>
    </div>

    <!-- Header -->
    <header class="bg-gray-900 text-white shadow-lg py-4 px-6 md:px-12 flex justify-between items-center fixed w-full z-40">
        <div class="flex items-center">
            <a href="#" class="text-3xl font-bold text-green-400 hover:text-green-300 transition duration-300">PAT VAPOR</a>
        </div>
        <nav class="hidden md:flex space-x-8">
            <a href="#" class="hover:text-green-400 transition duration-300">Home</a>
            <a href="#shop" class="hover:text-green-400 transition duration-300">Shop</a>
            <a href="#about" class="hover:text-green-400 transition duration-300">About Us</a>
            <a href="#contact" class="hover:text-green-400 transition duration-300">Contact</a>
        </nav>
        <div class="flex items-center space-x-4">
            <!-- Cart Icon (using SVG for simplicity) -->
            <a href="#" class="relative hover:text-green-400 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="absolute -top-2 -right-2 bg-red-600 text-white text-xs rounded-full px-1 py-0.5">0</span>
            </a>
            <!-- User Icon (using SVG for simplicity) -->
            <a href="#" class="hover:text-green-400 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </a>
            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" class="md:hidden text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobileMenuOverlay" class="fixed inset-0 bg-gray-900 bg-opacity-95 z-30 hidden md:hidden flex flex-col items-center justify-center space-y-8 transition-opacity duration-300 ease-in-out opacity-0">
        <button id="closeMobileMenuBtn" class="absolute top-6 right-6 text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <a href="#" class="text-white text-3xl font-semibold hover:text-green-400 transition duration-300" onclick="hideMobileMenu()">Home</a>
        <a href="#shop" class="text-white text-3xl font-semibold hover:text-green-400 transition duration-300" onclick="hideMobileMenu()">Shop</a>
        <a href="#about" class="text-white text-3xl font-semibold hover:text-green-400 transition duration-300" onclick="hideMobileMenu()">About Us</a>
        <a href="#contact" class="text-white text-3xl font-semibold hover:text-green-400 transition duration-300" onclick="hideMobileMenu()">Contact</a>
    </div>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-screen flex items-center justify-center text-white text-center pt-16" style="background-image: url('https://placehold.co/1920x1080/1a202c/e2e8f0?text=PAT+VAPOR+HERO');">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="relative z-10 p-6 max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6 drop-shadow-lg">
                Discover Your Perfect Vape Experience
            </h1>
            <p class="text-lg md:text-xl mb-10 max-w-2xl mx-auto drop-shadow-md">
                Explore our curated selection of premium vape kits, e-liquids, and accessories. Quality and satisfaction guaranteed.
            </p>
            <a href="#shop" class="bg-green-600 hover:bg-green-700 text-white font-bold py-4 px-10 rounded-full text-xl shadow-xl transition duration-300 ease-in-out transform hover:scale-105">
                Shop Now
            </a>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section id="shop" class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 md:px-12">
            <h2 class="text-4xl font-bold text-center mb-12 text-gray-900">Featured Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">

                <!-- Product Card 1 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-200">
                    <img src="https://placehold.co/600x400/334155/cbd5e1?text=Vape+Kit+Pro" alt="Vape Kit Pro" class="w-full h-48 object-cover rounded-t-xl">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-gray-900">Vape Kit Pro</h3>
                        <p class="text-gray-600 mb-4">Powerful and sleek, perfect for advanced vapers.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-green-600">$79.99</span>
                            <button class="bg-gray-800 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-full transition duration-300 ease-in-out">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-200">
                    <img src="https://placehold.co/600x400/334155/cbd5e1?text=Berry+Blast+E-Liquid" alt="Berry Blast E-Liquid" class="w-full h-48 object-cover rounded-t-xl">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-gray-900">Berry Blast E-Liquid</h3>
                        <p class="text-gray-600 mb-4">Sweet and tangy berry mix for a refreshing vape.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-green-600">$19.99</span>
                            <button class="bg-gray-800 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-full transition duration-300 ease-in-out">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-200">
                    <img src="https://placehold.co/600x400/334155/cbd5e1?text=Ceramic+Coil+Pack" alt="Ceramic Coil Pack" class="w-full h-48 object-cover rounded-t-xl">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-gray-900">Ceramic Coil Pack</h3>
                        <p class="text-gray-600 mb-4">Long-lasting coils for pure flavor delivery.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-green-600">$12.50</span>
                            <button class="bg-gray-800 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-full transition duration-300 ease-in-out">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-200">
                    <img src="https://placehold.co/600x400/334155/cbd5e1?text=Compact+Pod+System" alt="Compact Pod System" class="w-full h-48 object-cover rounded-t-xl">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-gray-900">Compact Pod System</h3>
                        <p class="text-gray-600 mb-4">Discreet and easy-to-use, perfect for on-the-go.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-green-600">$34.99</span>
                            <button class="bg-gray-800 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-full transition duration-300 ease-in-out">Add to Cart</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center mt-12">
                <a href="#" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-full text-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">View All Products</a>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-16 bg-gray-800 text-white">
        <div class="container mx-auto px-6 md:px-12 flex flex-col md:flex-row items-center justify-center gap-12">
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-4xl font-bold mb-6 text-green-400">About PAT VAPOR</h2>
                <p class="text-lg leading-relaxed mb-6">
                    At PAT VAPOR, we are passionate about providing the highest quality vaping products to our community. We believe in offering a diverse selection of premium vape kits, delicious e-liquids, and essential accessories, all while prioritizing customer satisfaction and safety.
                </p>
                <p class="text-lg leading-relaxed mb-6">
                    Our mission is to create a welcoming environment where both new and experienced vapers can find exactly what they need, coupled with expert advice and exceptional service.
                </p>
                <a href="#" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-full text-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">Learn More</a>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="https://placehold.co/500x350/2d3748/a0aec0?text=Our+Team" alt="PAT VAPOR Team" class="rounded-xl shadow-lg border border-gray-700 max-w-full h-auto">
            </div>
        </div>
    </section>

    <!-- Newsletter/Call to Action Section -->
    <section class="py-16 bg-gray-900 text-white text-center">
        <div class="container mx-auto px-6 md:px-12">
            <h2 class="text-4xl font-bold mb-6 text-green-400">Stay Updated!</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">
                Join our newsletter for exclusive deals, new product announcements, and vaping tips delivered straight to your inbox.
            </p>
            <form class="flex flex-col sm:flex-row justify-center items-center gap-4 max-w-xl mx-auto">
                <input type="email" placeholder="Enter your email address" class="flex-grow p-4 rounded-full border-2 border-gray-600 bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:border-green-500 transition duration-300" required>
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-4 px-8 rounded-full shadow-lg transition duration-300 ease-in-out transform hover:scale-105 w-full sm:w-auto">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-900 text-gray-400 py-12 px-6 md:px-12">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-2xl font-bold text-white mb-4">PAT VAPOR</h3>
                <p class="text-sm">Your trusted source for premium vaping products. Quality, safety, and customer satisfaction are our top priorities.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold text-white mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-green-400 transition duration-300">Home</a></li>
                    <li><a href="#shop" class="hover:text-green-400 transition duration-300">Shop</a></li>
                    <li><a href="#about" class="hover:text-green-400 transition duration-300">About Us</a></li>
                    <li><a href="#contact" class="hover:text-green-400 transition duration-300">Contact</a></li>
                    <li><a href="#" class="hover:text-green-400 transition duration-300">FAQ</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-semibold text-white mb-4">Contact Us</h3>
                <p class="text-sm">Email: <a href="mailto:info@patvapor.com" class="hover:text-green-400 transition duration-300">info@patvapor.com</a></p>
                <p class="text-sm">Phone: <a href="tel:+1234567890" class="hover:text-green-400 transition duration-300">+1 (234) 567-890</a></p>
                <p class="text-sm mt-4">Follow Us:</p>
                <div class="flex space-x-4 mt-2">
                    <!-- Social Media Icons (using SVG for simplicity) -->
                    <a href="#" class="hover:text-green-400 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.04C6.5 2.04 2 6.54 2 12.04c0 4.42 2.86 8.17 6.84 9.53.5.09.68-.22.68-.48 0-.24-.01-.9-.01-1.77-2.78.6-3.37-1.34-3.37-1.34-.45-1.14-1.1-1.44-1.1-1.44-.9-.62.07-.61.07-.61 1 .07 1.53 1.03 1.53 1.03.89 1.53 2.34 1.09 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.65 0 0 .84-.27 2.75 1.02.79-.22 1.63-.33 2.47-.33.84 0 1.68.11 2.47.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.38.2 2.4.1 2.65.64.7 1.03 1.59 1.03 2.68 0 3.84-2.33 4.68-4.56 4.93.36.31.68.92.68 1.85 0 1.34-.01 2.42-.01 2.75 0 .26.18.57.69.48C21.14 20.21 24 16.46 24 12.04 24 6.54 19.5 2.04 14 2.04z"/></svg>
                    </a>
                    <a href="#" class="hover:text-green-400 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M22.46 6c-.77.34-1.6.57-2.46.69.88-.53 1.56-1.37 1.88-2.37-.83.49-1.75.85-2.72 1.04C18.3 3.5 17.26 3 16.12 3c-2.35 0-4.26 1.91-4.26 4.26 0 .33.04.65.12.95C7.71 8.55 4.09 6.5 1.68 3.44c-.37.63-.58 1.37-.58 2.16 0 1.47.75 2.77 1.88 3.53-.69-.02-1.34-.21-1.91-.5v.05c0 2.06 1.47 3.79 3.42 4.18-.36.1-.74.15-1.13.15-.28 0-.55-.03-.81-.08.54 1.7 2.11 2.93 3.97 2.97C15.02 18.24 10.2 19 8 19c-.43 0-.85-.02-1.27-.06C10.74 20.35 13.9 21 17.34 21c4.01 0 6.19-3.32 6.19-6.19 0-.2-.01-.4-.02-.6z"/></svg>
                    </a>
                    <a href="#" class="hover:text-green-400 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.77 1.69 4.918 4.918.058 1.265.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.148 3.252-1.69 4.77-4.918 4.918-1.265.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-3.252-.148-4.77-1.69-4.918-4.918-.058-1.265-.07-1.646-.07-4.85s.012-3.584.07-4.85c.148 3.252 1.69-4.77 4.918-4.918 1.265-.058 1.646-.07 4.85-.07zm0 2.163c-3.204 0-3.584.012-4.85.07-2.69.122-3.95 1.4-4.072 4.072-.058 1.265-.07 1.646-.07 4.85s.012 3.584.07 4.85c.122 2.69 1.4 3.95 4.072 4.072 1.265.058 1.646.07 4.85.07s3.584-.012 4.85-.07c2.69-.122 3.95-1.4 4.072-4.072.058-1.265.07-1.646.07-4.85s-.012-3.584-.07-4.85c-.122-2.69-1.4-3.95-4.072-4.072-1.265-.058-1.646-.07-4.85-.07zm0 3.627a4.11 4.11 0 100 8.22 4.11 4.11 0 000-8.22zm0 2.163a1.947 1.947 0 110 3.894 1.947 1.947 0 010-3.894z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center text-sm text-gray-500 mt-8">
            &copy; 2024 PAT VAPOR. All rights reserved.
            <p class="mt-2">
                <a href="#" class="hover:text-green-400 transition duration-300">Terms & Conditions</a> |
                <a href="#" class="hover:text-green-400 transition duration-300">Privacy Policy</a>
            </p>
        </div>
    </footer>

    <script>
        // Age Verification Logic
        document.addEventListener('DOMContentLoaded', function() {
            const ageVerificationModal = document.getElementById('ageVerificationModal');
            const confirmAgeBtn = document.getElementById('confirmAgeBtn');
            const denyAgeBtn = document.getElementById('denyAgeBtn');

            // Check if age has already been verified in session storage
            const isAgeVerified = sessionStorage.getItem('ageVerified');
            if (isAgeVerified === 'true') {
                ageVerificationModal.classList.add('hidden');
            } else {
                ageVerificationModal.classList.remove('hidden');
            }

            confirmAgeBtn.addEventListener('click', function() {
                sessionStorage.setItem('ageVerified', 'true');
                ageVerificationModal.classList.add('hidden');
            });

            denyAgeBtn.addEventListener('click', function() {
                // Redirect or show a message if age is not confirmed
                window.location.href = 'https://www.google.com'; // Redirect to a generic site
            });

            // Mobile Menu Logic
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
            const closeMobileMenuBtn = document.getElementById('closeMobileMenuBtn');

            mobileMenuBtn.addEventListener('click', function() {
                mobileMenuOverlay.classList.remove('hidden');
                setTimeout(() => {
                    mobileMenuOverlay.classList.remove('opacity-0');
                }, 10); // Small delay for transition
            });

            closeMobileMenuBtn.addEventListener('click', function() {
                hideMobileMenu();
            });

            // Function to hide mobile menu, used by links as well
            function hideMobileMenu() {
                mobileMenuOverlay.classList.add('opacity-0');
                setTimeout(() => {
                    mobileMenuOverlay.classList.add('hidden');
                }, 300); // Match transition duration
            }

            // Make hideMobileMenu globally accessible for inline onclick
            window.hideMobileMenu = hideMobileMenu;
        });
    </script>
</body>
</html>
