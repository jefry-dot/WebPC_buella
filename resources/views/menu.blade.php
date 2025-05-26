@extends('layouts.main')

@section('title', 'Menu')

@section('content')
<div class="container mx-auto px-6 py-16">
    <div class="max-w-2xl mx-auto text-center">
        <h1 class="text-6xl font-bold text-[#2C2F24] mb-6">Our Menu</h1>
        <p class="text-lg text-[#495460] leading-relaxed">
            We consider all the drivers of change give you the components<br> 
            
        </p>
    </div>

    <!-- Filter Buttons -->
    <div class="flex flex-wrap justify-center gap-4 mt-10">
        <button class="filter-btn px-8 py-3 rounded-full transition-all duration-300 bg-[#AD343E] text-white font-medium shadow-md hover:shadow-lg" data-filter="all">All</button>
        <button class="filter-btn px-8 py-3 rounded-full transition-all duration-300 border-2 border-gray-200 font-medium hover:border-[#AD343E] hover:text-[#AD343E]" data-filter="Makanan">Makanan</button>
        <button class="filter-btn px-8 py-3 rounded-full transition-all duration-300 border-2 border-gray-200 font-medium hover:border-[#AD343E] hover:text-[#AD343E]" data-filter="Minuman">Minuman</button>
        <button class="filter-btn px-8 py-3 rounded-full transition-all duration-300 border-2 border-gray-200 font-medium hover:border-[#AD343E] hover:text-[#AD343E]" data-filter="Snack">Snack</button>
    </div>

    <!-- Menu Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mt-14" id="menu-container">
        @foreach ($menus as $menu)
        <a href="https://api.whatsapp.com/send?phone=6289510725490&text=Halo%20saya%20ingin%20bertanya%20tentang%20menu%20{{ urlencode($menu->name) }}" 
           target="_blank" 
           class="menu-item group bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 block cursor-pointer"
           data-category="{{ $menu->category }}">
            <div class="overflow-hidden rounded-xl">
                <img src="{{ Storage::url($menu->image) }}" alt="{{ $menu->name }}" class="w-full h-60 object-cover rounded-xl transform group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="pt-5">
                <h3 class="text-xl font-bold text-gray-800">{{ $menu->name }}</h3>
                <p class="text-gray-600 mt-2 leading-relaxed">{{ $menu->description }}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>

<script>
    // Filter script remains the same
    document.addEventListener("DOMContentLoaded", function() {
        const buttons = document.querySelectorAll(".filter-btn");
        const menuItems = document.querySelectorAll(".menu-item");

        buttons.forEach(button => {
            button.addEventListener("click", function() {
                const filter = this.getAttribute("data-filter");

                menuItems.forEach(item => {
                    if (filter === "all" || item.getAttribute("data-category") === filter) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });

                // Update button styles
                buttons.forEach(btn => {
                    btn.classList.remove("bg-[#AD343E]", "text-white", "border-[#AD343E]", "text-[#AD343E]");
                    btn.classList.add("border-gray-200");
                });
                this.classList.add("bg-[#AD343E]", "text-white", "border-[#AD343E]");
                this.classList.remove("border-gray-200", "hover:border-[#AD343E]", "hover:text-[#AD343E]");
            });
        });
    });
</script>
@endsection