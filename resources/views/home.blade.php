<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasi Ayam Bu Ella</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">
    
    <!-- Navbar -->
    @include('partials.header')
    <header class="relative flex items-center justify-center text-center py-20 bg-cover bg-center min-h-screen" style="background-image: url('logo1.png');">
        <div class="px-6 max-w-2xl">
            <h2 class="text-4xl font-bold text-[#2C2F24]">Gurih, Lezat, Bikin Ketagihan!</h2>
            <p class="text-[#2C2F24] mt-2">Pilih menu kalian, dijamin puas dan harga pasti bersahabat</p>
            <button class="mt-4 px-6 py-2 rounded-full border border-black text-black bg-white hover:bg-gray-200 transition">
                Explore Menu
            </button>
        </div>
    </header>
    
    
    <!-- Menu Section -->
    <section class="text-center py-10">
        <h3 class="text-3xl font-bold">Browse Our Menu</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mt-6 px-6">
            <!-- Makanan -->
            <div class="p-6 border rounded-lg shadow-md text-center">
                <div class="flex justify-center">
                    <img src="makanan.png" alt="Makanan" class="w-16 h-16 mb-4">
                </div>
                <h4 class="font-semibold text-lg">Makanan</h4>
                <p class="text-gray-600">Menu dengan beberapa varian ayam yang terjangkau dan enak.</p>
                <a href="#" class="text-red-600 font-semibold mt-4 inline-block">Explore Menu</a>
            </div>
    
            <!-- Mie -->
            <div class="p-6 border rounded-lg shadow-md text-center">
                <div class="flex justify-center">
                    <img src="mie.png" alt="Mie" class="w-16 h-16 mb-4">
                </div>
                <h4 class="font-semibold text-lg">Mie</h4>
                <p class="text-gray-600">Menu dengan beberapa varian Mie, ada rebus dan goreng.</p>
                <a href="#" class="text-red-600 font-semibold mt-4 inline-block">Explore Menu</a>
            </div>
    
            <!-- Minuman -->
            <div class="p-6 border rounded-lg shadow-md text-center">
                <div class="flex justify-center">
                    <img src="minuman.png" alt="Minuman" class="w-16 h-16 mb-4">
                </div>
                <h4 class="font-semibold text-lg">Minuman</h4>
                <p class="text-gray-600">Menu dengan beberapa minuman sachet yang tersedia, bisa dingin atau tidak.</p>
                <a href="#" class="text-red-600 font-semibold mt-4 inline-block">Explore Menu</a>
            </div>
    
            <!-- Lauk -->
            <div class="p-6 border rounded-lg shadow-md text-center">
                <div class="flex justify-center">
                    <img src="lauk.png" alt="Lauk" class="w-16 h-16 mb-4">
                </div>
                <h4 class="font-semibold text-lg">Lauk</h4>
                <p class="text-gray-600">Menu dengan beberapa varian gorengan, lauk dll.</p>
                <a href="#" class="text-red-600 font-semibold mt-4 inline-block">Explore Menu</a>
            </div>
        </div>
    </section>
    @include('partials.footer')
    
    <!-- Footer -->
   
</body>
</html>
