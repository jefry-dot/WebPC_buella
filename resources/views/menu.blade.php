@extends('layouts.main')

@section('title', 'Menu')

@section('content')
<div class="container mx-auto px-6 py-16">
    <div class="max-w-2xl mx-auto text-center">
        <h1 class="text-6xl font-bold text-[#2C2F24] mb-6">Our Menu</h1>
        <p class="text-lg text-[#495460] leading-relaxed">
            We consider all the drivers of change give you the components<br>
            you need to change to  a truly
        </p>
    </div>
    <!-- Search Bar -->
<div class="mt-10 flex justify-center">
    <input
        type="text"
        id="search-input"
        placeholder="Cari menu..."
        class="w-full max-w-md px-4 py-2 border border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-[#AD343E] focus:border-[#AD343E] transition"
    />
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
        <div
            onclick="addToCart({{ $menu->id }}, '{{ $menu->name }}', {{ $menu->price }})"
            class="menu-item group bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 block cursor-pointer"
            data-category="{{ $menu->category }}">
                <div class="overflow-hidden rounded-xl">
                    <img src="{{ Storage::url($menu->image) }}" alt="{{ $menu->name }}" class="w-full h-60 object-cover rounded-xl transform group-hover:scale-105 transition-transform duration-300">
                </div>
            <div class="pt-5">
    <h3 class="text-xl font-bold text-gray-800">{{ $menu->name }}</h3>
    <p class="text-gray-600 mt-2 leading-relaxed">{{ $menu->description }}</p>
    <p class="text-[#AD343E] font-semibold text-lg mt-2">
        {{ 'Rp ' . number_format($menu->price, 0, ',', '.') }}
    </p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="fixed bottom-5 right-5">
    <button onclick="showCart()" class="bg-[#AD343E] text-white px-5 py-3 rounded-full shadow-lg hover:bg-red-700">
        🛒 Lihat Keranjang (<span id="cart-count">0</span>)
    </button>
</div>

<div id="cart-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg max-w-lg w-full shadow-xl">
        <h2 class="text-2xl font-bold mb-4">Keranjang Anda</h2>
        <ul id="cart-list" class="space-y-2"></ul>
        <p class="mt-4 font-semibold">Total: Rp <span id="cart-total">0</span></p>

        <div class="flex justify-end gap-4 mt-6">
            <button onclick="sendToWhatsapp()" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Pesan via WA</button>
            <button onclick="hideCart()" class="bg-gray-300 px-4 py-2 rounded">Tutup</button>
        </div>
    </div>
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

    // Search by name
document.getElementById("search-input").addEventListener("input", function () {
    const keyword = this.value.toLowerCase();
    const menuItems = document.querySelectorAll(".menu-item");

    menuItems.forEach(item => {
        const name = item.querySelector("h3").textContent.toLowerCase();
        const description = item.querySelector("p").textContent.toLowerCase();

        if (name.includes(keyword) || description.includes(keyword)) {
            item.style.display = "block";
        } else {
            item.style.display = "none";
        }
    });
});

let cart = JSON.parse(localStorage.getItem("cart")) || [];

function addToCart(id, name, price) {
    cart.push({ id, name, price });
    localStorage.setItem("cart", JSON.stringify(cart));
    updateCartCount();
    alert("Menu ditambahkan ke keranjang!");
}

function updateCartCount() {
    document.getElementById("cart-count").innerText = cart.length;
}

function showCart() {
    document.getElementById("cart-modal").classList.remove("hidden");

    const list = document.getElementById("cart-list");
    list.innerHTML = "";
    let total = 0;

    cart.forEach((item, index) => {
        total += item.price;
        list.innerHTML += `
            <li class="flex justify-between border-b pb-1">
                ${item.name} - Rp ${item.price.toLocaleString()}
                <button onclick="removeItem(${index})" class="text-red-500">❌</button>
            </li>
        `;
    });

    document.getElementById("cart-total").innerText = total.toLocaleString();
}

function hideCart() {
    document.getElementById("cart-modal").classList.add("hidden");
}

function removeItem(index) {
    cart.splice(index, 1);
    localStorage.setItem("cart", JSON.stringify(cart));
    showCart();
    updateCartCount();
}

function sendToWhatsapp() {
    if (cart.length === 0) return alert("Keranjang masih kosong!");

    const message = cart.map(item => `- ${item.name} (Rp ${item.price.toLocaleString()})`).join('%0A');
    const total = cart.reduce((sum, item) => sum + item.price, 0);
    const fullMessage = `Halo, saya ingin memesan:%0A${message}%0A%0ATotal: Rp ${total.toLocaleString()}`;

    window.open(`https://api.whatsapp.com/send?phone=6289510725490&text=${fullMessage}`, '_blank');
}
updateCartCount();


</script>
@endsection
