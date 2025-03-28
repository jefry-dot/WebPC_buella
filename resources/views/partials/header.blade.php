<!-- Navbar -->
<nav class="bg-gray-100 p-4 flex justify-between items-center shadow-md">
    <div class="flex items-center">
        <img src="logo.png" alt="Logo" class="w-10 h-10 mr-2">
        <h1 class="text-xl font-bold">Nasi Ayam Bu Ella</h1>
    </div>

    <!-- Tombol Hamburger (Mobile) -->
    <button id="menu-toggle" class="md:hidden text-gray-700">
        ☰
    </button>

    <!-- Menu Navigasi -->
    <ul id="menu" class="hidden md:flex gap-4 absolute md:static top-full left-0 w-full md:w-auto bg-gray-100 md:bg-transparent flex-col md:flex-row md:items-center shadow-md md:shadow-none p-4 md:p-0">
        <li><a href="{{ url('/') }}" class="text-gray-700 hover:text-gray-900 block md:inline">Home</a></li>
        <li><a href="{{ url('/about') }}" class="text-gray-700 hover:text-gray-900 block md:inline">About</a></li>
        <li><a href="{{ url('/menu') }}" class="text-gray-700 hover:text-gray-900 block md:inline">Menu</a></li>
        <li><a href="{{ url('/contact') }}" class="text-gray-700 hover:text-gray-900 block md:inline">Contact</a></li>
    </ul>

    <button class="mt-4 px-6 py-2 rounded-full border border-black text-black bg-white hover:bg-gray-200 transition">Book A Table</button>
</nav>

<!-- Script untuk Toggle Menu -->
<script>
    document.getElementById("menu-toggle").addEventListener("click", function() {
        document.getElementById("menu").classList.toggle("hidden");
    });
</script>

<!-- Hero Section (Tampil hanya di halaman Home) -->
@if(Request::is('/'))

@endif
