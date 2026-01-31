@props(['categories' => [], 'photos' => []])

<div class="mb-8">
    <div class="flex flex-wrap justify-center gap-4">
        <button onclick="filterPortfolio('all')" class="filter-btn bg-primary text-white px-6 py-2 rounded-full text-sm font-medium transition-all">
            Todos
        </button>
        @foreach($categories as $category)
            <button onclick="filterPortfolio('{{ $category }}')" class="filter-btn bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 px-6 py-2 rounded-full text-sm font-medium hover:bg-primary hover:text-white transition-all">
                {{ $category }}
            </button>
        @endforeach
    </div>
</div>

<div id="portfolio-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($photos as $photo)
        <div class="portfolio-item" data-category="{{ $photo['category'] }}">
            <div class="group cursor-pointer overflow-hidden rounded-2xl relative">
                <img
                    src="{{ $photo['url'] }}"
                    alt="{{ $photo['title'] }}"
                    class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110"
                >
                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/60 transition-all duration-300"></div>
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300">
                    <div class="text-center">
                        <h3 class="text-white font-display font-bold text-xl mb-2">{{ $photo['title'] }}</h3>
                        <p class="text-white/80 text-sm">{{ $photo['category'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<script>
function filterPortfolio(category) {
    const items = document.querySelectorAll('.portfolio-item');
    const buttons = document.querySelectorAll('.filter-btn');

    // Update button styles
    buttons.forEach(btn => {
        if (btn.textContent.toLowerCase() === category || (category === 'all' && btn.textContent === 'Todos')) {
            btn.classList.add('bg-primary', 'text-white');
            btn.classList.remove('bg-gray-200', 'dark:bg-gray-700', 'text-gray-700', 'dark:text-gray-300');
        } else {
            btn.classList.remove('bg-primary', 'text-white');
            btn.classList.add('bg-gray-200', 'dark:bg-gray-700', 'text-gray-700', 'dark:text-gray-300');
        }
    });

    // Filter items
    items.forEach(item => {
        if (category === 'all' || item.dataset.category === category) {
            item.style.display = 'block';
            item.style.animation = 'fade-in-up 0.5s ease-out forwards';
        } else {
            item.style.display = 'none';
        }
    });
}
</script>