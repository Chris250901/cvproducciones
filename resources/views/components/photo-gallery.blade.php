@props(['category' => '', 'photos' => []])

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($photos as $photo)
        <div class="group cursor-pointer overflow-hidden rounded-2xl">
            <img
                data-src="{{ $photo['url'] }}"
                alt="{{ $photo['title'] ?? $category }}"
                class="w-full h-64 object-cover lazyload"
                loading="lazy"
            >
            <div class="p-4">
                <h3 class="font-display font-bold text-lg text-gray-900 dark:text-white mb-2">{{ $photo['title'] ?? 'Foto' }}</h3>
                <p class="text-gray-600 dark:text-gray-400 text-sm">{{ $photo['description'] ?? '' }}</p>
            </div>
        </div>
    @endforeach
</div>