@props(['quote' => '', 'clientName' => '', 'service' => '', 'photo' => '', 'rating' => 5])

<div class="bg-white dark:bg-background-dark p-8 rounded-2xl shadow-lg">
    <div class="flex items-center mb-4">
        @for($i = 1; $i <= 5; $i++)
            <i class="fas fa-star {{ $i <= $rating ? 'text-yellow-400' : 'text-gray-300' }}"></i>
        @endfor
    </div>
    <blockquote class="text-lg text-gray-700 dark:text-gray-300 mb-6 italic">
        "{{ $quote }}"
    </blockquote>
    <div class="flex items-center gap-4">
        <img
            src="{{ $photo }}"
            alt="{{ $clientName }}"
            class="w-12 h-12 rounded-full object-cover"
        >
        <div>
            <h4 class="font-bold text-gray-900 dark:text-white">{{ $clientName }}</h4>
            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $service }}</p>
        </div>
    </div>
</div>