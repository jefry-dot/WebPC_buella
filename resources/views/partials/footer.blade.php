<footer class="bg-[#474747] text-gray-300 py-8 px-4">
    <div class="container mx-auto">
        <!-- Main Content -->
        <div class="flex flex-col lg:flex-row justify-between items-start gap-8 mb-8">
            <!-- Brand Info and Pages -->
            <div class="flex flex-col md:flex-row gap-8 w-full lg:w-auto">
                <!-- Brand Info -->
                <div class="max-w-md">
                    <h2 class="text-white text-2xl font-semibold italic mb-4">
                        Nasi Ayam Bu Ella
                    </h2>
                    <p class="text-sm">
                        In the new era of technology we look a in the future with certainty and pride to for our company and.
                    </p>
                    <!-- Social Media - Mobile -->
                    <div class="flex space-x-3 mt-4 md:hidden">
                        <a href="#" class="text-white hover:text-gray-400 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-white hover:text-gray-400 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <!-- Pages Links -->
                <div>
                    <h3 class="text-white font-semibold mb-3 text-lg">Pages</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ url('/') }}" class="hover:text-white text-sm">Home</a></li>
                        <li><a href="{{ url('/about') }}" class="hover:text-white text-sm">About</a></li>
                        <li><a href="{{ url('/menu') }}" class="hover:text-white text-sm">Menu</a></li>
                        <li><a href="{{ url('/contact') }}" class="hover:text-white text-sm">Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- Food Images - Larger and shifted left -->
            <div class="ml-[-1rem] grid grid-cols-2 gap-3 w-full sm:w-auto">
                <img src="footer1.png" alt="Food 1" class="rounded-lg w-full h-32 sm:h-36 sm:w-32 object-cover hover:scale-105 transition-transform">
                <img src="footer2.png" alt="Food 2" class="rounded-lg w-full h-32 sm:h-36 sm:w-32 object-cover hover:scale-105 transition-transform">
                <img src="footer3.png" alt="Food 3" class="rounded-lg w-full h-32 sm:h-36 sm:w-32 object-cover hover:scale-105 transition-transform">
                <img src="footer4.png" alt="Food 4" class="rounded-lg w-full h-32 sm:h-36 sm:w-32 object-cover hover:scale-105 transition-transform">
            </div>

            <!-- Social Media - Desktop -->
            <div class="hidden md:block lg:ml-8">
                <h3 class="text-white font-semibold mb-3 text-lg">Follow Us</h3>
                <div class="flex space-x-3">
                    <a href="#" class="text-white hover:text-gray-400 transition">
                        <i class="fab fa-facebook-f text-xl"></i>
                    </a>
                    <a href="#" class="text-white hover:text-gray-400 transition">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-600 pt-4 text-center text-gray-400 text-xs">
            Copyright © 2025 Nasi Ayam Bu Ella. All Rights Reserved
        </div>
    </div>
</footer>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
