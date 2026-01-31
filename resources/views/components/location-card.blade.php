@props(['name' => '', 'description' => '', 'image' => '', 'features' => []])

<div class="group cursor-pointer overflow-hidden rounded-2xl">
    <div class="relative h-64 overflow-hidden">
        <img
            src="{{ $image }}"
            alt="{{ $name }}"
            class="w-full h-full object-cover lazyload group-hover:scale-110 transition-transform duration-500"
        >
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
    </div>
    <div class="p-6">
        <h3 class="font-display font-bold text-xl text-gray-900 dark:text-white mb-3">{{ $name }}</h3>
        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">{{ $description }}</p>
        <div class="flex flex-wrap gap-2">
            @foreach($features as $feature)
                <span class="bg-primary/10 text-primary text-xs px-3 py-1 rounded-full">{{ $feature }}</span>
            @endforeach
        </div>
    </div>
</div>