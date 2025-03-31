<div class="p-4 border rounded-lg shadow-md">
    <h2 class="text-lg font-semibold mb-3">Tulis Komentar</h2>
    
    <form wire:submit.prevent="submit">
        <input type="text" wire:model="nama" placeholder="Nama" class="w-full p-2 border rounded mb-2">
        @error('nama') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror

        <textarea wire:model="ulasan" placeholder="Tulis ulasan..." class="w-full p-2 border rounded mb-2"></textarea>
        @error('ulasan') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Kirim</button>
    </form>
</div>
