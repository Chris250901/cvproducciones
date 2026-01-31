@props(['slides' => []])

<div class="relative w-full h-screen overflow-hidden">
    <!-- Carrusel principal -->
    <div id="hero-carousel" class="relative w-full h-full">
        @foreach($slides as $index => $slide)
            <div
                class="carousel-slide absolute inset-0 transition-opacity duration-1000 ease-in-out"
                data-index="{{ $index }}"
                style="{{ $index === 0 ? 'opacity: 1' : 'opacity: 0' }}"
            >
                <!-- Fondo con imagen -->
                <div class="absolute inset-0">
                    <img
                        src="{{ $slide['image'] }}"
                        alt="{{ $slide['title'] }}"
                        class="w-full h-full object-cover"
                        style="filter: brightness(0.4);"
                    >
                    <div class="absolute inset-0 bg-gradient-to-r from-background-dark via-background-dark/60 to-transparent"></div>
                </div>

                <!-- Contenido superpuesto -->
                <div class="relative z-10 h-full flex items-center justify-center text-white">
                    <div class="text-center max-w-4xl px-4">
                        <div class="inline-block px-4 py-2 rounded-full border border-primary/30 bg-primary/10 backdrop-blur-sm mb-6">
                            <span class="text-primary text-sm font-semibold tracking-wide uppercase">{{ $slide['category'] }}</span>
                        </div>
                        <h1 class="font-display font-bold text-5xl md:text-7xl lg:text-8xl leading-tight mb-6 animate-fade-in-up">
                            {{ $slide['title'] }}
                        </h1>
                        <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
                            {{ $slide['description'] }}
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a
                                href="{{ $slide['cta_link'] }}"
                                class="bg-primary hover:bg-orange-600 text-white px-8 py-4 rounded-full font-bold text-lg transition-all shadow-lg shadow-orange-500/30 flex items-center justify-center gap-2 group"
                                target="_blank"
                            >
                                <i class="fab fa-whatsapp text-xl"></i>
                                <span>{{ $slide['cta_text'] }}</span>
                                <i class="fas fa-arrow-right text-sm transform group-hover:translate-x-1 transition-transform"></i>
                            </a>
                            <a
                                href="#portafolio"
                                class="border border-primary/50 hover:border-primary text-white px-8 py-4 rounded-full font-bold text-lg transition-all"
                            >
                                Ver Portafolio
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Indicador de categoría -->
                <div class="absolute top-8 left-8 bg-primary/20 backdrop-blur-sm px-3 py-1 rounded-full">
                    <span class="text-white text-sm font-medium">
                        <i class="fas fa-camera mr-2"></i>
                        {{ $slide['category'] }}
                    </span>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Navegación del carrusel -->
    <button
        id="prev-slide"
        class="absolute left-4 top-1/2 -translate-y-1/2 z-20 w-12 h-12 bg-black/50 hover:bg-black/70 text-white rounded-full flex items-center justify-center transition-all"
    >
        <i class="fas fa-chevron-left"></i>
    </button>
    <button
        id="next-slide"
        class="absolute right-4 top-1/2 -translate-y-1/2 z-20 w-12 h-12 bg-black/50 hover:bg-black/70 text-white rounded-full flex items-center justify-center transition-all"
    >
        <i class="fas fa-chevron-right"></i>
    </button>

    <!-- Indicadores -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex gap-3">
        @foreach($slides as $index => $slide)
            <button
                class="carousel-indicator w-3 h-3 rounded-full transition-all"
                data-slide="{{ $index }}"
                style="{{ $index === 0 ? 'background: #f97316; width: 2rem;' : 'background: rgba(255,255,255,0.3);' }}"
            ></button>
        @endforeach
    </div>

    <!-- Barra de progreso -->
    <div class="absolute bottom-0 left-0 h-1 bg-primary/30">
        <div id="carousel-progress" class="h-full bg-primary transition-all duration-10000" style="width: 10%"></div>
    </div>

    <script>
        // Carousel functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const indicators = document.querySelectorAll('.carousel-indicator');
        const progressBar = document.getElementById('carousel-progress');
        let autoPlayInterval;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.opacity = i === index ? '1' : '0';
            });

            indicators.forEach((indicator, i) => {
                indicator.style.background = i === index ? '#f97316' : 'rgba(255,255,255,0.3)';
                indicator.style.width = i === index ? '2rem' : '0.75rem';
            });

            currentSlide = index;
            resetAutoPlay();
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        function startAutoPlay() {
            autoPlayInterval = setInterval(nextSlide, 10000);
        }

        function resetAutoPlay() {
            clearInterval(autoPlayInterval);
            startAutoPlay();
            progressBar.style.transition = 'none';
            progressBar.style.width = '0%';
            setTimeout(() => {
                progressBar.style.transition = 'width 10s linear';
                progressBar.style.width = '100%';
            }, 50);
        }

        // Event listeners
        document.getElementById('next-slide').addEventListener('click', nextSlide);
        document.getElementById('prev-slide').addEventListener('click', prevSlide);

        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => showSlide(index));
        });

        // Auto-play
        startAutoPlay();

        // Touch support for mobile
        let touchStartX = 0;
        let touchEndX = 0;

        document.getElementById('hero-carousel').addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        });

        document.getElementById('hero-carousel').addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });

        function handleSwipe() {
            if (touchEndX < touchStartX - 50) nextSlide();
            if (touchEndX > touchStartX + 50) prevSlide();
        }
    </script>
</div>