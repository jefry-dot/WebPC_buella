@extends('layouts.main')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-100 to-purple-50 flex flex-col items-center justify-center p-4">
    <!-- Floating animation container -->
    <div class="animate-float">
        <!-- Error code with glow effect -->
        
        <!-- Illustration -->
        <img src="eror.png" 
             alt="Lost illustration"/>
    </div>

    <!-- Message container -->
    <div class="text-center space-y-4 max-w-2xl">
        <h1 class="text-3xl font-bold text-gray-800">
            Wah, nyasar nih! �
        </h1>
        
        <p class="text-lg text-gray-600 font-medium">
            Kayaknya halaman yang kamu cari lagi liburan... 
            <span class="block mt-1 text-sm text-gray-500">Atau mungkin kita yang salah alamat?</span>
        </p>

        <!-- Action buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center mt-6">
            <a href="{{ url('/') }}" 
               class="px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-full 
                      shadow-lg hover:shadow-xl transform transition hover:scale-105
                      flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Pulang ke Beranda
            </a>
            
            <button onclick="history.back()" 
                    class="px-6 py-3 border-2 border-blue-500 text-blue-600 rounded-full 
                           hover:bg-blue-50 transition-colors">
                ⇦ Kembali ke Halaman Sebelumnya
            </button>
        </div>

        <!-- Additional help -->
        <p class="text-sm text-gray-400 mt-8">
            Kalau masih nyasar terus, kamu bisa 
            <a href="mailto:support@website.com" class="underline hover:text-blue-600">hubungi kami</a>
            atau coba cek lagi URL-nya yaa~
        </p>
    </div>
</div>

<style>
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }
    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
</style>
@endsection