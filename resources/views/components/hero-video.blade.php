@props(['videoUrl' => '', 'title' => '', 'subtitle' => '', 'backgroundImage' => ''])

@if($videoUrl)
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <!-- Video Background -->
        <div class="absolute inset-0 z-0">
            <video
                autoplay
                muted
                loop
                class="w-full h-full object-cover"
                style="opacity: 0.7;"
            >
                <source src="{{ $videoUrl }}" type="video/mp4">
            </video>
        </div>

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-transparent z-10"></div>

        <!-- Content -->
        <div class="relative z-20 text-center px-4">
            <h1 class="text-5xl md:text-7xl font-display font-bold text-white mb-6 animate-fade-in-up">
                {{ $title }}
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-2xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s;">
                {{ $subtitle }}
            </p>
            <div class="animate-fade-in-up" style="animation-delay: 0.4s;">
                <a href="#servicios" class="bg-primary hover:bg-orange-600 text-white px-8 py-4 rounded-full font-medium text-lg transition-all shadow-lg shadow-orange-500/20">
                    Ver Servicios
                </a>
            </div>
        </div>
    </section>
@else
    <!-- Fallback con imagen de fondo -->
    <section class="relative h-screen flex items-center justify-center bg-background-light dark:bg-background-dark">
        <div class="absolute inset-0">
            <img src="{{ $backgroundImage }}" alt="Hero" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent"></div>
        </div>
        <div class="relative z-20 text-center text-white px-4">
            <h1 class="text-5xl md:text-7xl font-display font-bold mb-6">{{ $title }}</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto">{{ $subtitle }}</p>
            <a href="#servicios" class="bg-primary hover:bg-orange-600 text-white px-8 py-4 rounded-full font-medium text-lg transition-all">
                Conocer Más
            </a>
        </div>
    </section>
@endif