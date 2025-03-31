@extends('layouts.main')

@section('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <h1 class="text-5xl font-bold text-red-600">500</h1>
    <p class="text-lg text-gray-700 mt-2">Oops! Terjadi kesalahan pada server.</p>
    <a href="{{ url('/') }}" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg">Kembali ke Beranda</a>
</div>
@endsection
