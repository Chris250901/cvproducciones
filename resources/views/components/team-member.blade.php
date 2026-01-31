@props(['name' => '', 'role' => '', 'photo' => '', 'bio' => ''])

<div class="text-center group">
    <div class="relative overflow-hidden rounded-2xl mb-6">
        <img
            src="{{ $photo }}"
            alt="{{ $name }}"
            class="w-48 h-48 mx-auto rounded-2xl object-cover lazyload"
        >
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    </div>
    <h3 class="font-display font-bold text-xl text-gray-900 dark:text-white mb-2">{{ $name }}</h3>
    <p class="text-primary font-medium mb-3">{{ $role }}</p>
    <p class="text-gray-600 dark:text-gray-400 text-sm max-w-md mx-auto">{{ $bio }}</p>
</div>