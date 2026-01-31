<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

    <!-- SEO Meta Tags -->
    <title>@yield('title', 'CV Producciones | Fotografía Profesional en Lima')</title>
    <meta name="description" content="@yield('description', 'Fotografía premium para bodas, eventos y sesiones profesionales en Lima y Callao. +500 eventos capturados con 4.9/5 en reseñas.')">
    <meta name="keywords" content="@yield('keywords', 'fotografía de bodas, fotógrafo profesional, eventos, sesión de parejas, fotografía comercial Lima, fotógrafo de eventos Lima')">
    <meta name="author" content="CV Producciones">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="@yield('og:title', 'CV Producciones | Fotografía Profesional')">
    <meta property="og:description" content="@yield('og:description', 'Capturamos momentos únicos con estilo editorial en Lima y Callao')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:image" content="{{ asset('img/og-image.jpg') }}">
    <meta property="og:site_name" content="CV Producciones">
    <meta property="og:locale" content="es_PE">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter:title', 'CV Producciones - Fotografía Profesional')">
    <meta name="twitter:description" content="@yield('twitter:description', 'Fotografía premium para eventos especiales en Lima')">
    <meta name="twitter:image" content="{{ asset('img/twitter-image.jpg') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ request()->url() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Montserrat:wght@400;500;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#E78419", // Orange Accent
                        secondary: "#599AAC", // Teal
                        "background-light": "#F3F4F6",
                        "background-dark": "#050708", // Dark background
                        "surface-dark": "#121418",
                        "card-teal": "#2B444C",
                    },
                    fontFamily: {
                        display: ["Montserrat", "sans-serif"],
                        body: ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                        lg: "1rem",
                        xl: "1.5rem",
                    },
                    backgroundImage: {
                        'hero-gradient': 'linear-gradient(to right, rgba(5,7,8,1) 30%, rgba(5,7,8,0.8) 50%, rgba(5,7,8,0) 100%)',
                    },
                    animation: {
                        'fade-in-up': 'fade-in-up 0.8s ease-out forwards',
                    }
                },
            },
        };
    </script>
    <style>
        .glass-nav {
            background: rgba(5, 7, 8, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .text-gradient {
            background: linear-gradient(to right, #ffffff, #599AAC);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }

        .lazyload {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .lazyload.loaded {
            opacity: 1;
        }

        /* Touch-friendly mobile styles */
        @media (hover: none) {
            .group:hover .group-hover\:opacity-100 {
                opacity: 1 !important;
            }

            .group:active .group-hover\:scale-105 {
                transform: scale(1.05);
            }
        }
    </style>
</head>
<body class="font-body bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200 antialiased transition-colors duration-300">
    <!-- Scroll Progress Indicator -->
    <div id="scroll-progress" class="fixed top-0 w-full h-1 bg-gray-800 z-40 transition-all duration-300">
        <div class="h-full bg-primary transition-all duration-300"></div>
    </div>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- WhatsApp Widget -->
    <div class="fixed bottom-6 right-6 z-40 flex flex-col items-end gap-3 animate-fade-in-up">
        <div class="bg-white dark:bg-card-teal text-gray-800 dark:text-white p-4 rounded-2xl rounded-tr-none shadow-2xl mb-2 max-w-xs border border-gray-100 dark:border-gray-700">
            <p class="text-sm font-medium">¡Hola! 👋 ¿Te gustaría conocer nuestros servicios?</p>
            <div class="mt-3 flex gap-2">
                <button class="bg-primary text-white text-xs font-bold py-2 px-3 rounded-lg hover:bg-orange-600 transition">Ver Paquetes</button>
                <button class="bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 text-xs font-bold py-2 px-3 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600 transition">Cotizar</button>
            </div>
        </div>
        <button class="w-16 h-16 bg-[#25D366] hover:bg-[#20bd5a] text-white rounded-full shadow-lg shadow-green-500/30 flex items-center justify-center transition-transform hover:scale-110" onclick="window.open('https://wa.me/51XXXXXXXXX?text=Hola%20CV%20Producciones%2C%20quiero%20cotizar%20un%20evento%20para%20la%20fecha%20____%20en%20____.', '_blank')">
            <i class="fab fa-whatsapp text-3xl"></i>
        </button>
    </div>

    <!-- Mobile Menu Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuBtn = document.querySelector('.mobile-menu-btn');
            const mobileMenu = document.querySelector('.mobile-menu-overlay');
            const closeBtn = document.querySelector('.close-menu');
            const menuLinks = mobileMenu.querySelectorAll('a');

            function openMenu() {
                mobileMenu.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeMenu() {
                mobileMenu.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }

            menuBtn?.addEventListener('click', openMenu);
            closeBtn?.addEventListener('click', closeMenu);

            menuLinks.forEach(link => {
                link.addEventListener('click', closeMenu);
            });

            mobileMenu?.addEventListener('click', function(e) {
                if (e.target === mobileMenu) {
                    closeMenu();
                }
            });
        });
    </script>

    <!-- Dark Mode Script -->
    <script>
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark');
        }
    </script>

    <!-- Lazy Loading Script -->
    <script src="{{ asset('js/image-optimizer.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Lazy loading for images
            const lazyImages = document.querySelectorAll('img[data-src]');

            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.add('loaded');
                        img.removeAttribute('data-src');
                        imageObserver.unobserve(img);
                    }
                });
            }, {
                rootMargin: '50px 0px',
                threshold: 0.01
            });

            lazyImages.forEach(img => {
                imageObserver.observe(img);
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Scroll progress indicator
            const scrollProgress = document.getElementById('scroll-progress');
            if (scrollProgress) {
                window.addEventListener('scroll', () => {
                    const scrollTop = window.scrollY;
                    const docHeight = document.body.scrollHeight - window.innerHeight;
                    const scrollPercent = (scrollTop / docHeight) * 100;
                    scrollProgress.style.width = scrollPercent + '%';
                });
            }

            // Pricing Calculator
            const eventTypeSelect = document.getElementById('eventType');
            const durationInput = document.getElementById('duration');
            const estimatedPriceDiv = document.getElementById('estimatedPrice');

            function updatePrice() {
                if (!eventTypeSelect || !durationInput || !estimatedPriceDiv) return;

                const eventType = eventTypeSelect.value;
                const duration = parseInt(durationInput.value) || 6;

                let basePrice = 1200; // Básico

                // Ajustar por tipo de evento
                switch(eventType) {
                    case 'boda': basePrice = 2000; break;
                    case '15anos': basePrice = 1800; break;
                    case 'cumpleanos': basePrice = 1200; break;
                    case 'corporativo': basePrice = 1600; break;
                    case 'familiar': basePrice = 1000; break;
                    case 'pareja': basePrice = 800; break;
                }

                // Ajustar por duración
                const pricePerHour = 150;
                const additionalHours = Math.max(0, duration - 6);
                const totalPrice = basePrice + (additionalHours * pricePerHour);

                // Rango de precios
                const priceRange = `${Math.round(totalPrice * 0.9)} - ${Math.round(totalPrice * 1.2)}`;
                estimatedPriceDiv.textContent = `S/ ${priceRange}`;
            }

            if (eventTypeSelect) {
                eventTypeSelect.addEventListener('change', updatePrice);
            }
            if (durationInput) {
                durationInput.addEventListener('input', updatePrice);
            }

            function contactForQuote() {
                if (!eventTypeSelect || !durationInput) return;

                const eventType = eventTypeSelect.options[eventTypeSelect.selectedIndex].text;
                const duration = durationInput.value;

                const message = encodeURIComponent(`Hola CV Producciones, estoy interesado en una cotización para ${eventType} con duración de ${duration} horas.`);

                window.open(`https://wa.me/51XXXXXXXXX?text=${message}`, '_blank');
            }

            // Expose to global scope
            window.contactForQuote = contactForQuote;
        });
    </script>
</body>
</html>