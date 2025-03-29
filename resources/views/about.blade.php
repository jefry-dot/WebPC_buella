@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-20 py-8 md:py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-center">
        <!-- Gambar Section -->
        <div class="relative group">
            <!-- Main Image -->
            <div class="overflow-hidden rounded-lg shadow-lg">
                <img src="about.png" alt="Nasi Ayam Bu Ella" 
                     class="w-full h-auto transition-transform duration-500 group-hover:scale-105">
            </div>
            
            <!-- Contact Box -->
            <div class="absolute -bottom-10 left-30 bg-[#474747] text-white p-4 rounded-lg shadow-md w-4/5 md:w-auto">
                <h3 class="text-lg font-bold mb-2">Kontak Kami</h3>
                <div class="space-y-2">
                    <p class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        +62 895-1072-5490
                    </p>
                    <p class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-1 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        <span>M8H4+73M, Puseurjaya, Telukjambe Timur, Karawang, Jawa Barat 41361</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Konten Section -->
        <div class="space-y-6">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                <span class="text-gray-800">Kami Memasak</span><br>
                <span class="text-gray-800">Makanan Enak</span><br>
                <span class="text-gray-800">dan Terjangkau</span>
            </h2>
            
            <div class="space-y-4 text-gray-700">
                <p>
                    Selamat datang di <strong class="text-[#F97316]">Nasi Ayam Bu Ella</strong>. Kami adalah UMKM yang menyajikan nasi ayam lezat dengan cita rasa khas, dibuat dari bahan-bahan segar dan bumbu pilihan.
                </p>
                <p>
                    Dengan kombinasi ayam yang gurih, nasi yang pulen, serta sambal yang nikmat, kami berkomitmen menghadirkan hidangan yang tidak hanya mengenyangkan, tetapi juga bikin ketagihan!
                </p>
                <p class="bg-orange-50 p-4 rounded-lg border-l-4 border-[#F97316]">
                    Kami percaya bahwa makanan enak tidak harus mahal. Itulah mengapa kami selalu menjaga kualitas dengan harga yang tetap ramah di kantong. Nikmati kelezatan nasi ayam kami, karena setiap suapan dibuat dengan sepenuh hati!
                </p>
            </div>
        </div>
    </div>
</div>
@endsection