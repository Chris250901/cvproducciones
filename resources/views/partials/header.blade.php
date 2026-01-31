<header class="fixed w-full top-0 z-50 glass-nav transition-all duration-300 dark:border-gray-800 border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex-shrink-0 flex items-center gap-3">
                <img alt="CV Producciones Logo" class="h-12 w-auto" src="{{ asset('img/logo.png') }}"/>
                <span class="font-display font-bold text-xl text-white tracking-wider hidden sm:block">CV<span class="text-secondary">PRODUCCIONES</span></span>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a class="text-gray-300 hover:text-primary transition-colors text-sm font-medium uppercase tracking-wide" href="#servicios">Servicios</a>
                <a class="text-gray-300 hover:text-primary transition-colors text-sm font-medium uppercase tracking-wide" href="#portafolio">Portafolio</a>
                <a class="text-gray-300 hover:text-primary transition-colors text-sm font-medium uppercase tracking-wide" href="#paquetes">Paquetes</a>
                <a class="text-gray-300 hover:text-primary transition-colors text-sm font-medium uppercase tracking-wide" href="#conocenos">Conócenos</a>
                <a class="text-gray-300 hover:text-primary transition-colors text-sm font-medium uppercase tracking-wide" href="#equipo">Equipo</a>
                <a class="text-gray-300 hover:text-primary transition-colors text-sm font-medium uppercase tracking-wide" href="#locaciones">Locaciones</a>
                <a class="text-gray-300 hover:text-primary transition-colors text-sm font-medium uppercase tracking-wide" href="#contacto">Contacto</a>
            </nav>

            <div class="hidden md:flex items-center">
                <a class="bg-primary hover:bg-orange-600 text-white px-5 py-2.5 rounded-full font-medium transition-all shadow-lg shadow-orange-500/20 flex items-center gap-2" href="https://wa.me/51XXXXXXXXX?text=Hola%20CV%20Producciones%2C%20quiero%20cotizar%20un%20evento%20para%20la%20fecha%20____%20en%20____." target="_blank">
                    <i class="fab fa-whatsapp text-lg"></i>
                    <span>Contactar</span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button type="button" class="mobile-menu-btn text-gray-300 hover:text-white p-2">
                    <span class="material-icons text-3xl">menu</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay fixed inset-0 z-40 bg-black/90 hidden">
        <div class="flex flex-col items-center justify-center h-full gap-8 text-white">
            <button class="close-menu absolute top-6 right-6 text-white">
                <span class="material-icons text-4xl">close</span>
            </button>

            <a class="text-2xl font-medium hover:text-primary transition-colors" href="#servicios">Servicios</a>
            <a class="text-2xl font-medium hover:text-primary transition-colors" href="#portafolio">Portafolio</a>
            <a class="text-2xl font-medium hover:text-primary transition-colors" href="#paquetes">Paquetes</a>
            <a class="text-2xl font-medium hover:text-primary transition-colors" href="#conocenos">Conócenos</a>
            <a class="text-2xl font-medium hover:text-primary transition-colors" href="#equipo">Equipo</a>
            <a class="text-2xl font-medium hover:text-primary transition-colors" href="#locaciones">Locaciones</a>
            <a class="text-2xl font-medium hover:text-primary transition-colors" href="#contacto">Contacto</a>

            <div class="mt-8">
                <a class="bg-primary hover:bg-orange-600 text-white px-8 py-3 rounded-full font-medium transition-all shadow-lg shadow-orange-500/20 flex items-center gap-2" href="https://wa.me/51XXXXXXXXX?text=Hola%20CV%20Producciones%2C%20quiero%20cotizar%20un%20evento%20para%20la%20fecha%20____%20en%20____." target="_blank">
                    <i class="fab fa-whatsapp text-xl"></i>
                    <span>Contactar</span>
                </a>
            </div>
        </div>
    </div>
</header>