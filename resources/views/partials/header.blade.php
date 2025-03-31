<!-- Navbar -->
<nav class="bg-gray-100 p-4 flex justify-between items-center shadow-md sticky top-0 z-50">
    <div class="flex items-center">
        <img src="logo.png" alt="Logo" class="w-10 h-10 mr-2">
        <h1 class="text-xl font-bold whitespace-nowrap">Nasi Ayam Bu Ella</h1>
    </div>

    <!-- Desktop Menu Items + Book Button -->
    <div class="hidden md:flex items-center gap-4">
        <ul class="flex gap-6">
            <li><a href="{{ url('/') }}" class="text-gray-700 hover:text-gray-900 transition-colors">Home</a></li>
            <li><a href="#about-section" class="text-gray-700 hover:text-gray-900 transition-colors">About</a></li>
            <li><a href="{{ url('/menu') }}" class="text-gray-700 hover:text-gray-900 transition-colors">Menu</a></li>
            <li><a href="{{ url('/contact') }}" class="text-gray-700 hover:text-gray-900 transition-colors">Contact</a></li>
        </ul>
       
    </div>

    <!-- Mobile Menu Toggle -->
    <button id="menu-toggle" class="md:hidden text-gray-700 text-2xl focus:outline-none">
        ☰
    </button>

    <!-- Mobile Menu (Hidden by default) -->
    <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-white shadow-lg md:hidden">
        <ul class="flex flex-col divide-y divide-gray-200">
            <li><a href="{{ url('/') }}" class="block py-3 px-4 text-gray-700 hover:bg-gray-50">Home</a></li>
            <li><a href="#about-section" class="block py-3 px-4 text-gray-700 hover:bg-gray-50">About</a></li>
            <li><a href="{{ url('/menu') }}" class="block py-3 px-4 text-gray-700 hover:bg-gray-50">Menu</a></li>
            <li><a href="{{ url('/contact') }}" class="block py-3 px-4 text-gray-700 hover:bg-gray-50">Contact</a></li>
            
        </ul>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const aboutLink = document.getElementById("about-link");

        aboutLink.addEventListener("click", function (e) {
            e.preventDefault();

            // Cek apakah kita sedang di halaman Home
            if (window.location.pathname === "/" || window.location.pathname === "/home") {
                // Jika di Home, auto scroll ke About
                const aboutSection = document.querySelector("#about-section");
                if (aboutSection) {
                    aboutSection.scrollIntoView({ behavior: "smooth", block: "start" });
                }
            } else {
                // Jika bukan di Home, redirect ke halaman /about
                window.location.href = "/about";
            }
        });
    });


    // Toggle mobile menu
    document.getElementById("menu-toggle").addEventListener("click", function() {
        const menu = document.getElementById("mobile-menu");
        menu.classList.toggle("hidden");
        
        // Change icon based on menu state
        this.textContent = menu.classList.contains("hidden") ? "☰" : "✕";
    });

    // Close mobile menu when clicking on links
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', () => {
            document.getElementById("mobile-menu").classList.add("hidden");
            document.getElementById("menu-toggle").textContent = "☰";
        });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                
                // Update URL without page reload
                history.pushState(null, null, this.getAttribute('href'));
            }
        });
    });
</script>