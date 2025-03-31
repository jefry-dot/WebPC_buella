<div class="mt-6">
    <h2 class="text-xl font-bold text-gray-800 mb-4">Komentar ({{ count($comments) }})</h2>

    <div class="max-h-[500px] overflow-y-auto space-y-4 pr-3">
        @foreach ($comments as $comment)
            <div class="flex gap-4 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-200 border border-gray-100">
                <!-- Avatar -->
                <div class="flex-shrink-0">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                        <span class="text-blue-600 font-medium">{{ strtoupper(substr($comment->nama, 0, 1)) }}</span>
                    </div>
                </div>

                <!-- Content -->
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-1">
                        <h3 class="font-semibold text-gray-800">{{ $comment->nama }}</h3>
                        <span class="text-sm text-gray-500">•</span>
                        <span class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
                    </div>
                    <p class="text-gray-700 leading-relaxed">{{ $comment->ulasan }}</p>
                    
                    <!-- Action Buttons -->
                    
                </div>
            </div>
        @endforeach
    </div>
</div>