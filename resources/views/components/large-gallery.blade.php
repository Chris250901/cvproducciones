@props(['categories' => [], 'photos_by_category' => []])

<div class="py-20 bg-gradient-to-b from-background-light to-background-dark">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Título -->
        <div class="text-center mb-16">
            <span class="text-primary font-bold tracking-wider uppercase text-sm">Galería</span>
            <h2 class="mt-2 font-display font-bold text-5xl text-white mb-4">Eventos Destacados</h2>
            <div class="w-32 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mt-4 rounded-full"></div>
            <p class="mt-6 text-xl text-gray-300 max-w-3xl mx-auto">
                Explora nuestro trabajo en alta calidad. Cada evento cuenta su propia historia a través de nuestro lente.
            </p>
        </div>

        <!-- Navegación de categorías -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button
                onclick="showCategory('all')"
                class="category-btn bg-primary text-white px-6 py-3 rounded-full text-sm font-bold transition-all shadow-lg"
                data-category="all"
            >
                <i class="fas fa-th mr-2"></i>Todos los Eventos
            </button>
            @foreach($categories as $category)
                <button
                    onclick="showCategory('{{ $category }}')"
                    class="category-btn bg-gray-800 hover:bg-primary text-gray-300 hover:text-white px-6 py-3 rounded-full text-sm font-bold transition-all"
                    data-category="{{ $category }}"
                >
                    <i class="fas fa-camera mr-2"></i>{{ ucfirst($category) }}
                </button>
            @endforeach
        </div>

        <!-- Grid de fotos grande -->
        <div id="gallery-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($photos_by_category as $category => $photos)
                @foreach($photos as $photo)
                    <div
                        class="gallery-item"
                        data-category="{{ $category }}"
                        data-photo-id="{{ $photo['id'] }}"
                    >
                        <div class="relative group cursor-pointer overflow-hidden rounded-2xl shadow-2xl transform transition-all duration-500 hover:scale-105">
                            <!-- Imagen principal -->
                            <img
                                src="{{ $photo['url'] }}"
                                alt="{{ $photo['title'] }}"
                                class="w-full h-80 object-cover lazyload"
                                loading="lazy"
                            >

                            <!-- Overlay con información -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500">
                                <div class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                                    <h3 class="font-display font-bold text-xl mb-2">{{ $photo['title'] }}</h3>
                                    <div class="flex items-center justify-between">
                                        <span class="text-primary font-medium">
                                            <i class="fas fa-tag mr-1"></i>{{ ucfirst($category) }}
                                        </span>
                                        <span class="text-sm text-gray-300">
                                            <i class="fas fa-eye mr-1"></i>{{ number_format($photo['views'], 0) }} vistas
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Icono de zoom -->
                            <div class="absolute top-4 right-4 w-12 h-12 bg-black/50 hover:bg-primary rounded-full flex items-center justify-center transition-all opacity-0 group-hover:opacity-100">
                                <i class="fas fa-search-plus text-white"></i>
                            </div>

                            <!-- Filtros visuales -->
                            <div class="absolute top-4 left-4">
                                <span class="bg-primary/90 text-white text-xs px-2 py-1 rounded-full">
                                    {{ $photo['date'] ?? 'Reciente' }}
                                </span>
                            </div>
                        </div>

                        <!-- Información adicional -->
                        <div class="mt-4 p-4 bg-gray-900/50 rounded-xl backdrop-blur-sm">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <img
                                        src="{{ asset('img/fotoperfil.jpg') }}"
                                        alt="CV Producciones"
                                        class="w-10 h-10 rounded-full object-cover border-2 border-primary"
                                    >
                                    <div>
                                        <p class="text-white font-medium text-sm">CV Producciones</p>
                                        <p class="text-gray-400 text-xs">Fotógrafo Profesional</p>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button class="text-gray-400 hover:text-red-500 transition-colors" title="Like">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <button class="text-gray-400 hover:text-blue-500 transition-colors" title="Compartir">
                                        <i class="fas fa-share"></i>
                                    </button>
                                    <button class="text-gray-400 hover:text-green-500 transition-colors" title="Descargar">
                                        <i class="fas fa-download"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>

        <!-- Botón de cargar más -->
        <div class="text-center mt-12">
            <button
                id="load-more"
                class="bg-gradient-to-r from-primary to-secondary hover:from-orange-600 hover:to-orange-600 text-white px-8 py-4 rounded-full font-bold text-lg transition-all shadow-lg transform hover:scale-105"
            >
                <i class="fas fa-plus mr-2"></i>Cargar más fotos
            </button>
        </div>
    </div>
</div>

<!-- Lightbox para vista ampliada -->
<div id="lightbox" class="fixed inset-0 bg-black/95 z-50 hidden flex items-center justify-center p-4">
    <div class="relative max-w-7xl max-h-full">
        <!-- Botón cerrar -->
        <button
            id="close-lightbox"
            class="absolute top-4 right-4 w-12 h-12 bg-white/10 hover:bg-white/20 text-white rounded-full flex items-center justify-center z-10 transition-all"
        >
            <i class="fas fa-times text-xl"></i>
        </button>

        <!-- Imagen grande -->
        <img
            id="lightbox-image"
            src=""
            alt=""
            class="max-w-full max-h-[90vh] object-contain rounded-2xl shadow-2xl"
        >

        <!-- Controles de navegación -->
        <button
            id="prev-lightbox"
            class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/10 hover:bg-white/20 text-white rounded-full flex items-center justify-center transition-all"
        >
            <i class="fas fa-chevron-left"></i>
        </button>
        <button
            id="next-lightbox"
            class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/10 hover:bg-white/20 text-white rounded-full flex items-center justify-center transition-all"
        >
            <i class="fas fa-chevron-right"></i>
        </button>

        <!-- Información de la foto -->
        <div class="absolute bottom-4 left-4 right-4 bg-black/70 backdrop-blur-sm p-4 rounded-xl text-white">
            <h3 id="lightbox-title" class="font-display font-bold text-xl mb-2"></h3>
            <p id="lightbox-category" class="text-primary"></p>
        </div>
    </div>
</div>

<script>
    // Función para filtrar categorías
    function showCategory(category) {
        const items = document.querySelectorAll('.gallery-item');
        const buttons = document.querySelectorAll('.category-btn');

        // Actualizar botones
        buttons.forEach(btn => {
            if (btn.dataset.category === category) {
                btn.classList.add('bg-primary', 'text-white', 'shadow-lg');
                btn.classList.remove('bg-gray-800', 'text-gray-300');
            } else {
                btn.classList.remove('bg-primary', 'text-white', 'shadow-lg');
                btn.classList.add('bg-gray-800', 'text-gray-300');
            }
        });

        // Filtrar items
        items.forEach(item => {
            if (category === 'all' || item.dataset.category === category) {
                item.style.display = 'block';
                item.style.animation = 'fadeInUp 0.6s ease-out forwards';
            } else {
                item.style.display = 'none';
            }
        });

        // Scroll suave al inicio de la galería
        document.getElementById('gallery-grid').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    // Lightbox functionality
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const lightboxTitle = document.getElementById('lightbox-title');
    const lightboxCategory = document.getElementById('lightbox-category');
    let currentImages = [];
    let currentIndex = 0;

    // Abrir lightbox
    document.querySelectorAll('.gallery-item img').forEach(img => {
        img.addEventListener('click', function() {
            const item = this.closest('.gallery-item');
            const title = item.querySelector('h3').textContent;
            const category = item.dataset.category;

            lightboxImage.src = this.src;
            lightboxImage.alt = title;
            lightboxTitle.textContent = title;
            lightboxCategory.textContent = `Categoría: ${category}`;

            // Obtener todas las imágenes de la categoría actual
            currentImages = Array.from(document.querySelectorAll(`.gallery-item[data-category="${category}"] img`));
            currentIndex = currentImages.indexOf(this);

            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
            document.body.style.overflow = 'hidden';
        });
    });

    // Cerrar lightbox
    document.getElementById('close-lightbox').addEventListener('click', closeLightbox);
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) closeLightbox();
    });

    function closeLightbox() {
        lightbox.classList.add('hidden');
        lightbox.classList.remove('flex');
        document.body.style.overflow = 'auto';
    }

    // Navegación en lightbox
    document.getElementById('prev-lightbox').addEventListener('click', showPrevImage);
    document.getElementById('next-lightbox').addEventListener('click', showNextImage);

    function showPrevImage() {
        currentIndex = (currentIndex - 1 + currentImages.length) % currentImages.length;
        updateLightboxImage();
    }

    function showNextImage() {
        currentIndex = (currentIndex + 1) % currentImages.length;
        updateLightboxImage();
    }

    function updateLightboxImage() {
        const currentImg = currentImages[currentIndex];
        lightboxImage.src = currentImg.src;
        lightboxImage.alt = currentImg.alt;
        lightboxTitle.textContent = currentImg.closest('.gallery-item').querySelector('h3').textContent;
    }

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (!lightbox.classList.contains('hidden')) {
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') showPrevImage();
            if (e.key === 'ArrowRight') showNextImage();
        }
    });

    // Lazy loading
    const lazyImages = document.querySelectorAll('.lazyload');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.classList.add('fade-in');
                observer.unobserve(img);
            }
        });
    });

    lazyImages.forEach(img => imageObserver.observe(img));

    // Cargar más fotos (simulado)
    document.getElementById('load-more').addEventListener('click', function() {
        this.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Cargando...';
        // Aquí iría la lógica para cargar más fotos desde el servidor
        setTimeout(() => {
            this.innerHTML = '<i class="fas fa-check mr-2"></i>Todas las fotos cargadas';
            this.disabled = true;
            this.classList.add('opacity-50', 'cursor-not-allowed');
        }, 2000);
    });
</script>

<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in {
        animation: fadeInUp 0.6s ease-out forwards;
    }

    .gallery-item {
        animation: fadeInUp 0.6s ease-out forwards;
        opacity: 0;
    }

    .gallery-item:nth-child(1) { animation-delay: 0.1s; }
    .gallery-item:nth-child(2) { animation-delay: 0.2s; }
    .gallery-item:nth-child(3) { animation-delay: 0.3s; }
    .gallery-item:nth-child(4) { animation-delay: 0.4s; }
    .gallery-item:nth-child(5) { animation-delay: 0.5s; }
    .gallery-item:nth-child(6) { animation-delay: 0.6s; }
</style>