@extends('layouts.main')

@section('title', $menu->name)

@section('content')
<div class="container mx-auto px-6 py-12">
    <h1 class="text-5xl font-bold text-center text-[#2C2F24]">{{ $menu->name }}</h1>
    <img src="{{ Storage::url($menu->image) }}" alt="{{ $menu->name }}" class="w-full h-80 object-cover rounded-lg">
    
    <p class="mt-4 text-gray-600">{{ $menu->description }}</p>
    <h2 class="mt-6 text-2xl font-bold">Ingredients</h2>
    <p>{{ $menu->details->ingredients ?? 'No ingredients available' }}</p>

    <h2 class="mt-6 text-2xl font-bold">Nutrition Facts</h2>
    <p>{{ $menu->details->nutrition_facts ?? 'No nutrition facts available' }}</p>
</div>
@endsection
