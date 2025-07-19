
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloom & Petal - Your Daily Dose of Freshness</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fdfaf6; /* Soft cream background */
        }
        .hero-section {
            background-image: url('https://placehold.co/1920x800/e0c2b2/ffffff?text=Beautiful%20Flowers'); /* Placeholder for hero image */
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow-lg py-4 px-6 md:px-12 sticky top-0 z-50 rounded-b-lg">
        <nav class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-3xl font-bold text-pink-600">Bloom & Petal</a>
            <ul class="hidden md:flex space-x-8">
                <li><a href="#home" class="text-lg font-medium text-gray-700 hover:text-pink-600 transition duration-300">Home</a></li>
                <li><a href="#about" class="text-lg font-medium text-gray-700 hover:text-pink-600 transition duration-300">About Us</a></li>
                <li><a href="#flowers" class="text-lg font-medium text-gray-700 hover:text-pink-600 transition duration-300">Our Flowers</a></li>
                <li><a href="#testimonials" class="text-lg font-medium text-gray-700 hover:text-pink-600 transition duration-300">Testimonials</a></li>
                <li><a href="#contact" class="text-lg font-medium text-gray-700 hover:text-pink-600 transition duration-300">Contact</a></li>
            </ul>
            <button class="md:hidden text-gray-700 text-2xl focus:outline-none">
                <!-- Hamburger Icon -->
                &#9776;
            </button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero-section h-screen flex items-center justify-center text-center text-white p-4 rounded-b-xl">
        <div class="bg-black bg-opacity-50 p-8 rounded-xl shadow-2xl max-w-3xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6 animate-pulse">
                Experience the Beauty of Fresh Flowers
            </h1>
            <p class="text-xl md:text-2xl mb-8">
                Bringing joy and elegance to your special moments with our exquisite floral arrangements.
            </p>
            <a href="#flowers" class="bg-pink-600 hover:bg-pink-700 text-white font-bold py-4 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">
                Discover Our Collection
            </a>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="container mx-auto py-16 px-6 md:px-12 text-center">
        <h2 class="text-4xl font-bold text-pink-600 mb-10">Our Story, Our Passion</h2>
        <div class="flex flex-col md:flex-row items-center justify-center gap-10">
            <div class="md:w-1/2">
                <img src="https://placehold.co/600x400/d8b2c2/ffffff?text=Flower%20Arrangement" alt="Flower Arrangement" class="rounded-xl shadow-xl w-full h-auto object-cover">
            </div>
            <div class="md:w-1/2 text-lg leading-relaxed text-gray-700 text-left">
                <p class="mb-4">
                    At Bloom & Petal, our journey began with a simple yet profound love for flowers. We believe that every bloom tells a story, evokes an emotion, and brightens a day. Founded by a team of passionate florists, our mission is to handcraft stunning arrangements that perfectly capture the essence of your sentiments.
                </p>
                <p class="mb-4">
                    From vibrant bouquets for celebrations to serene arrangements for moments of reflection, we meticulously select the freshest, most beautiful flowers from sustainable farms. Our commitment to quality and artistry ensures that each creation is a masterpiece, delivered with care and a personal touch.
                </p>
                <p>
                    We are more than just a flower shop; we are creators of happiness, messengers of love, and partners in your most cherished memories. Let us help you express what words cannot.
                </p>
            </div>
        </div>
    </section>

    <!-- Our Flowers Section -->
    <section id="flowers" class="bg-gradient-to-r from-pink-50 to-rose-50 py-16 px-6 md:px-12">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-pink-600 mb-12">Our Exquisite Floral Collections</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Flower Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="https://placehold.co/600x400/f0d9e5/ffffff?text=Roses%20Bouquet" alt="Roses Bouquet" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Romantic Roses</h3>
                        <p class="text-gray-700 mb-4">
                            Classic red roses symbolizing love and passion. Perfect for anniversaries and special declarations.
                        </p>
                        <button class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-6 rounded-full transition duration-300">View Details</button>
                    </div>
                </div>

                <!-- Flower Card 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="https://placehold.co/600x400/d9e5f0/ffffff?text=Mixed%20Bouquet" alt="Mixed Bouquet" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Vibrant Mixed Bouquet</h3>
                        <p class="text-gray-700 mb-4">
                            A cheerful mix of seasonal flowers to brighten any room or occasion.
                        </p>
                        <button class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-6 rounded-full transition duration-300">View Details</button>
                    </div>
                </div>

                <!-- Flower Card 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="https://placehold.co/600x400/e5f0d9/ffffff?text=Lilies%20Arrangement" alt="Lilies Arrangement" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Elegant Lilies</h3>
                        <p class="text-gray-700 mb-4">
                            Graceful lilies for a touch of sophistication, ideal for sympathy or formal events.
                        </p>
                        <button class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-6 rounded-full transition duration-300">View Details</button>
                    </div>
                </div>

                <!-- Flower Card 4 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="https://placehold.co/600x400/f0d9d9/ffffff?text=Orchids%20Pot" alt="Orchids Pot" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Exotic Orchids</h3>
                        <p class="text-gray-700 mb-4">
                            Long-lasting and stunning orchids, perfect as a thoughtful gift or home decor.
                        </p>
                        <button class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-6 rounded-full transition duration-300">View Details</button>
                    </div>
                </div>

                <!-- Flower Card 5 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="https://placehold.co/600x400/d9f0e5/ffffff?text=Sunflowers%20Field" alt="Sunflowers Field" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Sunny Sunflowers</h3>
                        <p class="text-gray-700 mb-4">
                            Bright and cheerful sunflowers, bringing a ray of sunshine to any occasion.
                        </p>
                        <button class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-6 rounded-full transition duration-300">View Details</button>
                    </div>
                </div>

                <!-- Flower Card 6 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="https://placehold.co/600x400/e5d9f0/ffffff?text=Tulips%20Vase" alt="Tulips Vase" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-3">Spring Tulips</h3>
                        <p class="text-gray-700 mb-4">
                            Delicate and colorful tulips, heralding the arrival of spring and new beginnings.
                        </p>
                        <button class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-6 rounded-full transition duration-300">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="container mx-auto py-16 px-6 md:px-12 text-center">
        <h2 class="text-4xl font-bold text-pink-600 mb-12">What Our Customers Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white p-8 rounded-xl shadow-lg border-t-4 border-pink-500">
                <p class="text-lg italic text-gray-700 mb-6">
                    "The most beautiful bouquet I've ever received! The flowers were incredibly fresh and the arrangement was simply stunning. Highly recommend Bloom & Petal for any occasion."
                </p>
                <p class="font-semibold text-gray-900">- Sarah L.</p>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white p-8 rounded-xl shadow-lg border-t-4 border-pink-500">
                <p class="text-lg italic text-gray-700 mb-6">
                    "Exceptional service and breathtaking flowers. They went above and beyond to create a custom arrangement for my wedding. Truly a joy to work with!"
                </p>
                <p class="font-semibold text-gray-900">- Mark T.</p>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white p-8 rounded-xl shadow-lg border-t-4 border-pink-500">
                <p class="text-lg italic text-gray-700 mb-6">
                    "Fresh, vibrant, and delivered with care. Bloom & Petal is my go-to for all my floral needs. Their passion for flowers truly shines through."
                </p>
                <p class="font-semibold text-gray-900">- Emily R.</p>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="bg-pink-50 py-16 px-6 md:px-12 rounded-t-xl">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-pink-600 mb-10">Get in Touch</h2>
            <p class="text-lg text-gray-700 mb-8 max-w-2xl mx-auto">
                Have a question, a special request, or just want to say hello? We'd love to hear from you! Fill out the form below or reach us directly.
            </p>
            <div class="flex flex-col md:flex-row justify-center items-start gap-10">
                <div class="md:w-1/2 bg-white p-8 rounded-xl shadow-lg text-left">
                    <form>
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                            <input type="text" id="name" name="name" class="shadow appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-pink-500" placeholder="Your Name">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                            <input type="email" id="email" name="email" class="shadow appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-pink-500" placeholder="your.email@example.com">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
                            <textarea id="message" name="message" rows="6" class="shadow appearance-none border rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-pink-500" placeholder="Your message..."></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="bg-pink-600 hover:bg-pink-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
                <div class="md:w-1/3 bg-white p-8 rounded-xl shadow-lg text-left">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Our Details</h3>
                    <p class="text-gray-700 mb-3"><strong class="text-pink-600">Address:</strong> 123 Flower Lane, Blossom City, FL 12345</p>
                    <p class="text-gray-700 mb-3"><strong class="text-pink-600">Phone:</strong> +1 (555) 123-4567</p>
                    <p class="text-gray-700 mb-3"><strong class="text-pink-600">Email:</strong> info@bloomandpetal.com</p>
                    <div class="mt-6">
                        <img src="https://placehold.co/400x250/c2e0b2/ffffff?text=Our%20Shop%20Location" alt="Shop Location" class="rounded-lg shadow-md w-full h-auto object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8 px-6 md:px-12 rounded-t-lg">
        <div class="container mx-auto text-center text-sm">
            <p>&copy; 2025 Bloom & Petal. All rights reserved.</p>
            <p class="mt-2">Designed with <span class="text-red-500">&hearts;</span> by Your Company Name</p>
        </div>
    </footer>

</body>
</html>
