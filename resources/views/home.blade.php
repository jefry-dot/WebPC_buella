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

    <header class="relative flex items-center justify-center text-center py-12 md:py-20 bg-cover bg-center min-h-screen" style="background-image: url('logo1.png');">
        <div class="bg-white bg-opacity-80 backdrop-blur-sm p-6 md:p-8 rounded-2xl mx-4 md:mx-0 max-w-[90%] md:max-w-2xl shadow-md">
            <div class="space-y-3 md:space-y-4">
                <h1 class="text-2xl md:text-4xl font-bold text-[#2C2F24]">Gurih, Lezat, Bikin Ketagihan!</h1>
                <p class="text-sm md:text-base text-[#2C2F24]/90">Pilih menu kalian, dijamin puas dan harga pasti </p>
                <a href="/menu" class="inline-block mt-2 md:mt-4 px-5 py-2 md:px-6 md:py-2 text-sm md:text-base rounded-full border-2 border-black text-black bg-white hover:bg-gray-50 transition">
                    Explore Menu
                </a>
            </div>
        </div>
    </header>
    {{-- halo --}}


    <!-- About Section -->
    @include('partials.about-section')


    <!-- Menu Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-amber-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h3 class="text-4xl font-bold text-gray-900 mb-4 relative pb-2 inline-block">
                    Jelajahi Menu Lezat Kami
                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-24 h-1 bg-amber-400 rounded-full"></div>
                </h3>
                <p class="text-gray-600 text-lg">Setiap hidangan dibuat dengan bahan pilihan dan bumbu rahasia</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 px-4">
                <!-- Makanan Card -->
                <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden hover:-translate-y-2">
                    <div class="p-6 text-center">
                        <div class="mb-4 flex justify-center relative">
                            <div class="w-24 h-24 bg-amber-100 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all">
                                <img src="makanan.png" alt="Makanan" class="w-20 h-20 object-contain" loading="lazy">
                            </div>
                            <div class="absolute top-0 right-2 bg-amber-400 text-white px-3 py-1 rounded-full text-sm font-medium shadow-sm">
                                Best Seller!
                            </div>
                        </div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Paket Nasi Ayam</h4>
                        <p class="text-gray-600 text-sm min-h-[60px]">Varian bumbu pilihan dengan nasi hangat + lalapan segar</p>
                        <a href="/menu" class="mt-6 inline-flex items-center justify-center px-5 py-2 border border-transparent text-base font-medium rounded-full text-white bg-amber-500 hover:bg-amber-600 transition-colors gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm6 4a1 1 0 10-2 0v1H7a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V9z" clip-rule="evenodd"/>
                            </svg>
                            Lihat Menu
                        </a>
                    </div>
                </div>

                <!-- Mie Card -->
                <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden hover:-translate-y-2">
                    <div class="p-6 text-center">
                        <div class="mb-4 flex justify-center">
                            <div class="w-24 h-24 bg-blue-100 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all">
                                <img src="mie.png" alt="Mie" class="w-20 h-20 object-contain" loading="lazy">
                            </div>
                        </div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Varian Mie Spesial</h4>
                        <p class="text-gray-600 text-sm min-h-[60px]">Mie goreng/rebus dengan topping lengkap dan bumbu khas</p>
                        <a href="/menu" class="mt-6 inline-flex items-center justify-center px-5 py-2 border border-transparent text-base font-medium rounded-full text-white bg-blue-500 hover:bg-blue-600 transition-colors gap-2">
                            🍜 Pilih Varian
                        </a>
                    </div>
                </div>

                <!-- Minuman Card -->
                <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden hover:-translate-y-2">
                    <div class="p-6 text-center">
                        <div class="mb-4 flex justify-center">
                            <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all">
                                <img src="minuman.png" alt="Minuman" class="w-20 h-20 object-contain" loading="lazy">
                            </div>
                        </div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Minuman Segar</h4>
                        <p class="text-gray-600 text-sm min-h-[60px]">Pilihan minuman dingin/hangat untuk temani makan Anda</p>
                        <a href="/menu" class="mt-6 inline-flex items-center justify-center px-5 py-2 border border-transparent text-base font-medium rounded-full text-white bg-green-500 hover:bg-green-600 transition-colors gap-2">
                            🥤 Pesan Sekarang
                        </a>
                    </div>
                </div>

                <!-- Lauk Card -->
                <div class="group relative bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden hover:-translate-y-2">
                    <div class="p-6 text-center">
                        <div class="mb-4 flex justify-center">
                            <div class="w-24 h-24 bg-red-100 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all">
                                <img src="lauk.png" alt="Lauk" class="w-20 h-20 object-contain" loading="lazy">
                            </div>
                        </div>
                        <h4 class="text-xl font-semibold text-gray-900 mb-2">Lauk Pendamping</h4>
                        <p class="text-gray-600 text-sm min-h-[60px]">Aneka gorengan renyah dan lauk pauk lengkap</p>
                        <a href="/menu" class="mt-6 inline-flex items-center justify-center px-5 py-2 border border-transparent text-base font-medium rounded-full text-white bg-red-500 hover:bg-red-600 transition-colors gap-2">
                            🍴 Tambahkan Lauk
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni Section -->
    @include('partials.testimoni')

    @livewireStyles

    <div class="max-w-xl mx-auto p-4">
        @livewire('comment-form')
        @livewire('comment-list')
    </div>

    @livewireScripts


    <!-- Footer -->
    @include('partials.footer')
</body>
</html>
