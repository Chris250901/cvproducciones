@props(['logo' => '', 'name' => '', 'url' => ''])

<div class="flex items-center justify-center p-6 group hover:bg-gray-50 dark:hover:bg-gray-800 rounded-2xl transition-colors duration-300">
    @if($url)
        <a href="{{ $url }}" target="_blank" class="block">
            <img
                src="{{ $logo }}"
                alt="{{ $name }}"
                class="h-16 w-auto grayscale group-hover:grayscale-0 transition-all duration-300"
            >
        </a>
    @else
        <img
            src="{{ $logo }}"
            alt="{{ $name }}"
            class="h-16 w-auto grayscale group-hover:grayscale-0 transition-all duration-300"
        >
    @endif
</div>