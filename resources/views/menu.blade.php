@extends('layouts.main')

@section('title', 'Menu')

@section('content')
<div class="container mx-auto px-6 py-12">
    <h1 class="text-5xl font-bold text-center text-[#2C2F24]">Our Menu</h1>
    <p class="text-center text-[#495460] mt-2">
        We consider all the drivers of change give you the components <br> 
        you need to change to create a truly happens.
    </p>

    <!-- Filter Buttons -->
    <div class="flex justify-center space-x-4 mt-6">
        <button class="filter-btn bg-[#AD343E] text-white px-6 py-2 rounded-full" data-filter="all">All</button>
        <button class="filter-btn border border-gray-500 px-6 py-2 rounded-full" data-filter="Makanan">Makanan</button>
        <button class="filter-btn border border-gray-500 px-6 py-2 rounded-full" data-filter="Minuman">Minuman</button>
        <button class="filter-btn border border-gray-500 px-6 py-2 rounded-full" data-filter="Snack">Snack</button>
    </div>

    <!-- Menu Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-8" id="menu-container">
        @foreach ($menus as $menu)
        <div class="menu-item bg-white text-black p-4 rounded-lg shadow-lg" data-category="{{ $menu->category }}">
            <img src="{{ Storage::url($menu->image) }}" alt="{{ $menu->name }}" class="w-full h-40 object-cover rounded-lg">
            <h3 class="text-lg font-semibold mt-4">{{ $menu->name }}</h3>
            <p class="text-gray-600 text-sm">{{ $menu->description }}</p>
           
        </div>
        @endforeach
    </div>
</div>

<script>
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

                // Tambah efek tombol aktif
                buttons.forEach(btn => btn.classList.remove("bg-[#AD343E]", "text-white"));
                this.classList.add("bg-[#AD343E]", "text-white");
            });
        });
    });
</script>
@endsection
