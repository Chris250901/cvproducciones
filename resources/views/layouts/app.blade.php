<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>CV Producciones | Fotografía Profesional</title>
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
    </style>
</head>
<body class="font-body bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200 antialiased transition-colors duration-300">
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- WhatsApp Widget -->
    <div class="fixed bottom-6 right-6 z-40 flex flex-col items-end gap-3 animate-fade-in-up">
        <div class="bg-white dark:bg-card-teal text-gray-800 dark:text-white p-4 rounded-2xl rounded-tr-none shadow-2xl mb-2 max-w-xs border border-gray-100 dark:border-gray-700">
            <p class="text-sm font-medium">¡Hola! 👋 ¿Te gustaría conocer nuestros paquetes de boda?</p>
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
</body>
</html>