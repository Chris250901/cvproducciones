@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-20 bg-background-dark overflow-hidden min-h-screen flex items-center">
        <div class="absolute inset-0 z-0">
            <div class="absolute right-0 top-0 w-full md:w-2/3 h-full bg-cover bg-center bg-no-repeat opacity-40 md:opacity-100" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCV1LQv6PMlydfITQDAnyDfvtDj826u73mFBpdKJ9s3dBxZjkIzpKY4meUdneIkmW_2911FLTwna2Ck2pXsW8IumPZ8SX_W5jhuzD8HP_F4kpTkYevQ-U3-USZCkaacV-mlzMciMhlpztqF8ovBDJM1sagdfXznDbgZPvGTShm1ifbIpyaPp7KyDRHoAN7f6reh7xJgubc8kLUXpdh1aadan3UiKM5EvMQFFKf4EmcJWhKf2Kd8D8FJ-F9W0PtfkU7FnKuRfUuoTTr7');">
                <div class="absolute inset-0 bg-gradient-to-r from-background-dark via-background-dark/80 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-transparent md:hidden"></div>
            </div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-32 grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-8 animate-fade-in-up">
                <div class="inline-block px-4 py-1.5 rounded-full border border-secondary/30 bg-secondary/10 backdrop-blur-sm">
                    <span class="text-secondary text-sm font-semibold tracking-wide uppercase">Fotografía Premium en Lima</span>
                </div>
                <h1 class="font-display font-bold text-5xl md:text-6xl lg:text-7xl leading-tight text-white">
                    Tu historia merece ser contada <br/>
                    <span class="text-gradient">con luz.</span>
                </h1>
                <p class="text-lg text-gray-400 font-light max-w-lg leading-relaxed">
                    Capturamos la esencia de tus momentos más importantes con un estilo editorial único. Emoción genuina, calidad impecable y entrega rápida en solo 7 días.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a class="bg-primary hover:bg-orange-600 text-white px-8 py-4 rounded-full font-bold text-lg transition-all shadow-lg shadow-orange-500/30 flex items-center justify-center gap-2 group" href="https://wa.me/51XXXXXXXXX?text=Hola%20CV%20Producciones%2C%20quiero%20cotizar%20un%20evento%20para%20la%20fecha%20____%20en%20____." target="_blank">
                        <i class="fab fa-whatsapp text-xl"></i>
                        <span>Cotizar por WhatsApp</span>
                        <i class="fas fa-arrow-right text-sm transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a class="border border-gray-600 hover:border-white text-gray-300 hover:text-white px-8 py-4 rounded-full font-medium text-lg transition-all flex items-center justify-center" href="#portafolio">
                        Ver Portafolio
                    </a>
                </div>
                <div class="pt-8 flex items-center gap-6 text-sm text-gray-500">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-star text-yellow-500"></i>
                        <span>4.9/5 en Google</span>
                    </div>
                    <div class="w-1 h-1 bg-gray-600 rounded-full"></div>
                    <div>+500 Eventos Cubiertos</div>
                </div>
            </div>
            <div class="hidden md:block"></div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="bg-surface-dark border-y border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-gray-800">
                <div class="flex items-center justify-center gap-4 py-2">
                    <div class="w-12 h-12 rounded-full bg-card-teal/50 flex items-center justify-center text-secondary">
                        <span class="material-icons">timer</span>
                    </div>
                    <div class="text-left">
                        <h3 class="font-display font-bold text-white text-lg">Entrega en 7 días</h3>
                        <p class="text-gray-400 text-sm">Tus recuerdos, más rápido.</p>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-4 py-2">
                    <div class="w-12 h-12 rounded-full bg-card-teal/50 flex items-center justify-center text-secondary">
                        <span class="material-icons">usb</span>
                    </div>
                    <div class="text-left">
                        <h3 class="font-display font-bold text-white text-lg">USB de Madera</h3>
                        <p class="text-gray-400 text-sm">Presentación premium de regalo.</p>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-4 py-2">
                    <div class="w-12 h-12 rounded-full bg-card-teal/50 flex items-center justify-center text-secondary">
                        <span class="material-icons">photo_library</span>
                    </div>
                    <div class="text-left">
                        <h3 class="font-display font-bold text-white text-lg">100 Fotos Impresas</h3>
                        <p class="text-gray-400 text-sm">Bonus exclusivo por tiempo limitado.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-background-light dark:bg-background-dark" id="servicios">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-primary font-bold tracking-wider uppercase text-sm">Servicios</span>
                <h2 class="mt-2 font-display font-bold text-4xl text-gray-900 dark:text-white">¿Qué estás celebrando?</h2>
                <div class="w-24 h-1 bg-secondary mx-auto mt-4 rounded-full"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="group relative h-96 rounded-xl overflow-hidden cursor-pointer shadow-xl">
                    <img alt="Fotografía de Bodas" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCyZcxU-Ld1Wy6qiHkCVCJrQpPCu85P_HhxNtebn_caJIdHHzl1cSCjZg02OQI13NK3uG3Mh6ozOEyAe8QX9-4ivX350zfkcHUxv57ae0Uk2OQOB6Qj0Qfml8ZqEckP8zIosma0ayrCVkumqGNvSsSVKiusB7qg9Mg9vH92ijfz-_m2C8EmdKGZVUpuz4tZDLxc4AZOqHIpNHNwWARzz_5HJDfn90Tz7PZmwEg-KxfEiDpPO0hefdXynnW61EqnmSGaaTUKAOXQLkQ"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <h3 class="font-display font-bold text-2xl text-white mb-2">Bodas</h3>
                        <p class="text-gray-200 text-sm opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">Capturamos el "sí, acepto" con elegancia cinematográfica.</p>
                    </div>
                </div>
                <div class="group relative h-96 rounded-xl overflow-hidden cursor-pointer shadow-xl">
                    <img alt="Fotografía de 15 Años" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCbaRZ8rC7X4_Pxt1QRVbO5OiBaCj2lMkrBzw9ieafEKwkQZ5IXE72fyDkpSbi6o4p9ynkluV9KVwbDJZakBo717kQ4mv8x08Eie7jQw5_unDSPKWRTFkEoFl22Dl3Yx2Dcy_AjCkfHLPzx1LdU2v7L8fxEYgCCnA6pkxJDamg1p3KfP4QIn0Tg69DrpDQXJ1caVMv_feF49WB7bleUiSSY4LnF8tSUw9FozwLkuk402BHOaGiV4euulywzE3mfwn7BeSZXbd_J3wNI"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <h3 class="font-display font-bold text-2xl text-white mb-2">15 Años</h3>
                        <p class="text-gray-200 text-sm opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">Tu momento de brillar, inmortalizado para siempre.</p>
                    </div>
                </div>
                <div class="group relative h-96 rounded-xl overflow-hidden cursor-pointer shadow-xl">
                    <img alt="Sesión de Pareja" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKhv57oHJL92P0CG2Xz1WW3fLy0PebFNJBvdcd03dAUPkGq7fKZcpNqHvnNTMNU5u-ZN7AcmiTBg5X9nQM4wpy1GwlGr5yZmOVRHPxTDZ8EfLpm8HI2YRLoRymJ1nmtJqI9zYJjEVwB2nYGWmBmp73s19jrWDyM1zErhVN_kIkA-ljLubJVSn48tVfcF1He3tYSx032PwPf6fKGJpXGt8SUhs9_CTJFIX-ruxNmkRgg4y2pSxRPNnS66bginJvQVbxwnbAI1-ZbNgw"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <h3 class="font-display font-bold text-2xl text-white mb-2">Sesión de Pareja</h3>
                        <p class="text-gray-200 text-sm opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">Historias de amor contadas con luz natural.</p>
                    </div>
                </div>
                <div class="group relative h-96 rounded-xl overflow-hidden cursor-pointer shadow-xl">
                    <img alt="Eventos Corporativos" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCH8MaX9s-kenNlh6MrWI4tu0lc668ymYOY-j-hTVHTWcNIFZTFX9gL9bVF4Ay8z12SpMXValK0oux3UhFnFwgd4-bUGbeBDjgdV-Lk5ZCfPO3wByPdjiz8iPXmne6kwpWNGblMTSn0jaz2IrT20dgw_3wZmO4Uok44h9aY7i0tU-s_v2Kvpu0Q8aKI-vacMYH0Je11SRaq8bZi8L0kF82NCXD9cy5TgO-cZPiq3VRDcSXXjxPMX_qSvmUygJ8gJ5aVHiUahsgUJK8J"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <h3 class="font-display font-bold text-2xl text-white mb-2">Corporativo</h3>
                        <p class="text-gray-200 text-sm opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">Imagen profesional para tu empresa.</p>
                    </div>
                </div>
                <div class="group relative h-96 rounded-xl overflow-hidden cursor-pointer shadow-xl">
                    <img alt="Sesión de Maternidad" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA341fkXxJ6jj_djCqNSzyGNkdYo1McIZWGqJCgY-eOU2aEDIVwg4TP1RpB2Ug-sNdmUsg1YzLp6MtEvdOzIl8Mr3TLN9XrTVtJLxTcb0EJ1j4pNcwU4ODq45pSD1G0fi2BCuflABbWzewWqbJGeBlRBI57Bqs26tPS4Fyoif8Qut65BH1XPqx5LZFx7TYXjAwr27QIiuXefOIRdF3hahn_GBxzHBLmrsBMJ51_ZCR0q_c-qbtmlIc4LoVqj2uNwJBLCnU6YSgCvkgv"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <h3 class="font-display font-bold text-2xl text-white mb-2">Maternidad</h3>
                        <p class="text-gray-200 text-sm opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">La belleza de la espera.</p>
                    </div>
                </div>
                <div class="group relative h-96 rounded-xl overflow-hidden cursor-pointer shadow-xl">
                    <img alt="Sesión Familiar" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuArJ7oNJb6os-ZqmnbBJOUw5rTRD696oxM1ExG4B0UrWvmFt9sGq7c2ifQDs17xRG77h27UlcGdIjjMOATPy5AEpNs83G0ub2QLxeSvHtLLwgSX1lp0Iuj3qKo69Ajf1H4-kb7VDglh6xBK6hMkNmajppvm95xAK6O1G48F7yFWsClJZsrpQPQGVWXpFRsqbW6TEUNQzKe2d_HEf18Mep-Imk9PntswvD6_R-5YPa676QcSFU5W0OZcBgG39xtPQ9zzTSSffVWvrNFZ"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <h3 class="font-display font-bold text-2xl text-white mb-2">Familia</h3>
                        <p class="text-gray-200 text-sm opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">Recuerdos que duran generaciones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-background-light dark:bg-surface-dark relative overflow-hidden">
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-secondary/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-primary/10 rounded-full blur-3xl"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="font-display font-bold text-4xl text-gray-900 dark:text-white">Proceso de Reserva</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">Solo 3 pasos para asegurar tus recuerdos.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-card-teal rounded-2xl p-8 border border-gray-200 dark:border-gray-700 shadow-xl hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 rounded-full bg-primary/20 text-primary flex items-center justify-center mb-6 text-2xl font-bold">1</div>
                    <h3 class="font-display font-bold text-xl text-gray-900 dark:text-white mb-4">Consulta</h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Contáctanos vía WhatsApp. Cuéntanos sobre tu evento, fecha y preferencias. Te asesoramos para elegir el mejor paquete.
                    </p>
                </div>
                <div class="bg-white dark:bg-card-teal rounded-2xl p-8 border border-gray-200 dark:border-gray-700 shadow-xl hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 rounded-full bg-primary/20 text-primary flex items-center justify-center mb-6 text-2xl font-bold">2</div>
                    <h3 class="font-display font-bold text-xl text-gray-900 dark:text-white mb-4">Reserva</h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Separa tu fecha con un adelanto mínimo. Firmamos contrato para tu seguridad y tranquilidad.
                    </p>
                </div>
                <div class="bg-white dark:bg-card-teal rounded-2xl p-8 border border-gray-200 dark:border-gray-700 shadow-xl hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 rounded-full bg-primary/20 text-primary flex items-center justify-center mb-6 text-2xl font-bold">3</div>
                    <h3 class="font-display font-bold text-xl text-gray-900 dark:text-white mb-4">Entrega</h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        ¡Disfruta tu día! Nosotros nos encargamos del resto. Recibe tus fotos editadas en alta calidad en solo 7 días.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section class="py-20 bg-background-light dark:bg-background-dark" id="paquetes">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-primary font-bold tracking-wider uppercase text-sm">Paquetes</span>
                <h2 class="mt-2 font-display font-bold text-4xl text-gray-900 dark:text-white">Elige tu experiencia</h2>
                <div class="w-24 h-1 bg-secondary mx-auto mt-4 rounded-full"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Básico Package -->
                <div class="bg-white dark:bg-surface-dark rounded-2xl p-8 border border-gray-200 dark:border-gray-700 shadow-xl hover:-translate-y-2 transition-transform duration-300">
                    <div class="text-center mb-6">
                        <h3 class="font-display font-bold text-2xl text-gray-900 dark:text-white mb-2">Básico</h3>
                        <div class="text-3xl font-bold text-primary">Desde S/ 1,200</div>
                    </div>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-secondary">check_circle</i>
                            <span class="text-gray-600 dark:text-gray-300">6 horas de cobertura</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-secondary">check_circle</i>
                            <span class="text-gray-600 dark:text-gray-300">300 fotos editadas</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-secondary">check_circle</i>
                            <span class="text-gray-600 dark:text-gray-300">USB de madera</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-secondary">check_circle</i>
                            <span class="text-gray-600 dark:text-gray-300">Entrega en 7 días</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-gray-400">highlight_off</i>
                            <span class="text-gray-400">Video highlight</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-gray-400">highlight_off</i>
                            <span class="text-gray-400">100 fotos impresas</span>
                        </div>
                    </div>
                    <a href="https://wa.me/51XXXXXXXXX?text=Hola%20CV%20Producciones%2C%20estoy%20interesado%20en%20el%20paquete%20B%C3%A1sico%20para%20cotizar." class="w-full bg-primary hover:bg-orange-600 text-white py-3 rounded-full font-medium transition-all shadow-lg shadow-orange-500/20 text-center">
                        Elegir paquete
                    </a>
                </div>

                <!-- Pro Package -->
                <div class="bg-white dark:bg-surface-dark rounded-2xl p-8 border border-primary/30 shadow-xl hover:-translate-y-2 transition-transform duration-300 relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-primary text-white px-4 py-1 rounded-full text-sm font-bold">
                        Popular
                    </div>
                    <div class="text-center mb-6">
                        <h3 class="font-display font-bold text-2xl text-gray-900 dark:text-white mb-2">Pro</h3>
                        <div class="text-3xl font-bold text-primary">Desde S/ 2,200</div>
                    </div>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-secondary">check_circle</i>
                            <span class="text-gray-600 dark:text-gray-300">8 horas de cobertura</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-secondary">check_circle</i>
                            <span class="text-gray-600 dark:text-gray-300">500 fotos editadas</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-secondary">check_circle</i>
                            <span class="text-gray-600 dark:text-gray-300">USB de madera</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-secondary">check_circle</i>
                            <span class="text-gray-600 dark:text-gray-300">Video highlight 2min</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-secondary">check_circle</i>
                            <span class="text-gray-600 dark:text-gray-300">Entrega en 7 días</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-secondary">check_circle</i>
                            <span class="text-gray-600 dark:text-gray-300">100 fotos impresas</span>
                        </div>
                    </div>
                    <a href="https://wa.me/51XXXXXXXXX?text=Hola%20CV%20Producciones%2C%20estoy%20interesado%20en%20el%20paquete%20Pro%20para%20cotizar." class="w-full bg-primary hover:bg-orange-600 text-white py-3 rounded-full font-medium transition-all shadow-lg shadow-orange-500/20 text-center">
                        Elegir paquete
                    </a>
                </div>

                <!-- Premium Package -->
                <div class="bg-white dark:bg-surface-dark rounded-2xl p-8 border border-gray-200 dark:border-gray-700 shadow-xl hover:-translate-y-2 transition-transform duration-300">
                    <div class="text-center mb-6">
                        <h3 class="font-display font-bold text-2xl text-gray-900 dark:text-white mb-2">Premium</h3>
                        <div class="text-3xl font-bold text-primary">Desde S/ 3,500</div>
                    </div>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-secondary">check_circle</i>
                            <span class="text-gray-600 dark:text-gray-300">12 horas de cobertura</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-secondary">check_circle</i>
                            <span class="text-gray-600 dark:text-gray-300">800 fotos editadas</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-secondary">check_circle</i>
                            <span class="text-gray-600 dark:text-gray-300">USB de madera + libro</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-secondary">check_circle</i>
                            <span class="text-gray-600 dark:text-gray-300">Video highlight 5min</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-secondary">check_circle</i>
                            <span class="text-gray-600 dark:text-gray-300">Entrega en 7 días</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="material-icons text-secondary">check_circle</i>
                            <span class="text-gray-600 dark:text-gray-300">200 fotos impresas</span>
                        </div>
                    </div>
                    <a href="https://wa.me/51XXXXXXXXX?text=Hola%20CV%20Producciones%2C%20estoy%20interesado%20en%20el%20paquete%20Premium%20para%20cotizar." class="w-full bg-primary hover:bg-orange-600 text-white py-3 rounded-full font-medium transition-all shadow-lg shadow-orange-500/20 text-center">
                        Elegir paquete
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="py-20 bg-surface-dark border-t border-gray-800" id="conocenos">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-primary font-bold tracking-wider uppercase text-sm">Sobre nosotros</span>
                <h2 class="mt-2 font-display font-bold text-4xl text-white">Conoce nuestro estilo</h2>
                <div class="w-24 h-1 bg-secondary mx-auto mt-4 rounded-full"></div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1">
                    <img src="/img/fotografo.jpg" alt="Nuestro equipo" class="rounded-2xl w-full h-auto shadow-2xl">
                </div>
                <div class="order-1 lg:order-2 space-y-6">
                    <p class="text-xl text-gray-300 leading-relaxed">
                        Somos más que fotógrafos, somos narradores de historias. Cada evento que capturamos es una oportunidad única para contar tu historia con la luz como protagonista.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <i class="material-icons text-primary mt-1">location_on</i>
                            <div>
                                <h4 class="font-display font-bold text-white mb-1">Dirección durante la sesión</h4>
                                <p class="text-gray-400">Nos adaptamos a tu espacio para crear el ambiente perfecto.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <i class="material-icons text-primary mt-1">schedule</i>
                            <div>
                                <h4 class="font-display font-bold text-white mb-1">Puntualidad</h4>
                                <p class="text-gray-400">Llegamos siempre con anticipación para no perder ningún momento.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <i class="material-icons text-primary mt-1">favorite</i>
                            <div>
                                <h4 class="font-display font-bold text-white mb-1">Trato humano</h4>
                                <p class="text-gray-400">Nos comunicamos contigo para entender tus necesidades.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <i class="material-icons text-primary mt-1">verified</i>
                            <div>
                                <h4 class="font-display font-bold text-white mb-1">Entrega cuidada</h4>
                                <p class="text-gray-400">Cada foto es tratada con el máximo detalle y respeto.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <i class="material-icons text-primary mt-1">description</i>
                            <div>
                                <h4 class="font-display font-bold text-white mb-1">Contrato</h4>
                                <p class="text-gray-400">Aseguramos tu evento con un contrato formal y transparente.</p>
                            </div>
                        </div>
                    </div>
                    <a href="#portafolio" class="inline-flex items-center gap-2 bg-primary hover:bg-orange-600 text-white px-8 py-3 rounded-full font-medium transition-all shadow-lg shadow-orange-500/20">
                        Conoce nuestro estilo <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-background-light dark:bg-background-dark">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-primary font-bold tracking-wider uppercase text-sm">Preguntas frecuentes</span>
                <h2 class="mt-2 font-display font-bold text-4xl text-gray-900 dark:text-white">Respuestas rápidas</h2>
                <div class="w-24 h-1 bg-secondary mx-auto mt-4 rounded-full"></div>
            </div>
            <div class="space-y-4">
                <details class="bg-white dark:bg-surface-dark rounded-lg border border-gray-200 dark:border-gray-700 p-6 cursor-pointer">
                    <summary class="font-display font-bold text-lg text-gray-900 dark:text-white flex items-center justify-between">
                        ¿Cuál es el tiempo de entrega?
                        <i class="material-icons text-secondary">expand_more</i>
                    </summary>
                    <p class="mt-4 text-gray-600 dark:text-gray-300">
                        Todas las fotos son editadas y entregadas en alta calidad en un máximo de 7 días hábiles después de tu evento.
                    </p>
                </details>

                <details class="bg-white dark:bg-surface-dark rounded-lg border border-gray-200 dark:border-gray-700 p-6 cursor-pointer">
                    <summary class="font-display font-bold text-lg text-gray-900 dark:text-white flex items-center justify-between">
                        ¿Cómo puedo reservar mi fecha?
                        <i class="material-icons text-secondary">expand_more</i>
                    </summary>
                    <p class="mt-4 text-gray-600 dark:text-gray-300">
                        Puedes reservar tu fecha contactándonos por WhatsApp o llamándonos. Te enviaremos un contrato y requeriremos un adelanto para confirmar.
                    </p>
                </details>

                <details class="bg-white dark:bg-surface-dark rounded-lg border border-gray-200 dark:border-gray-700 p-6 cursor-pointer">
                    <summary class="font-display font-bold text-lg text-gray-900 dark:text-white flex items-center justify-between">
                        ¿Qué requiere el adelanto?
                        <i class="material-icons text-secondary">expand_more</i>
                    </summary>
                    <p class="mt-4 text-gray-600 dark:text-gray-300">
                        El adelanto corresponde al 30% del total del paquete elegido y es no reembolsable. Sirve para asegurar tu fecha y comenzar la organización.
                    </p>
                </details>

                <details class="bg-white dark:bg-surface-dark rounded-lg border border-gray-200 dark:border-gray-700 p-6 cursor-pointer">
                    <summary class="font-display font-bold text-lg text-gray-900 dark:text-white flex items-center justify-between">
                        ¿Se cobran horas extra?
                        <i class="material-icons text-secondary">expand_more</i>
                    </summary>
                    <p class="mt-4 text-gray-600 dark:text-gray-300">
                        Sí, las horas extra se cobran a S/ 150 por hora adicional. Te informaremos con anticipación si necesitas extender la cobertura.
                    </p>
                </details>

                <details class="bg-white dark:bg-surface-dark rounded-lg border border-gray-200 dark:border-gray-700 p-6 cursor-pointer">
                    <summary class="font-display font-bold text-lg text-gray-900 dark:text-white flex items-center justify-between">
                        ¿Qué incluye la cobertura?
                        <i class="material-icons text-secondary">expand_more</i>
                    </summary>
                    <p class="mt-4 text-gray-600 dark:text-gray-300">
                        Incluye cobertura completa de todo el evento, múltiples cámaras, equipo profesional y edición de todas las fotos seleccionadas.
                    </p>
                </details>

                <details class="bg-white dark:bg-surface-dark rounded-lg border border-gray-200 dark:border-gray-700 p-6 cursor-pointer">
                    <summary class="font-display font-bold text-lg text-gray-900 dark:text-white flex items-center justify-between">
                        ¿En qué formato recibo las fotos?
                        <i class="material-icons text-secondary">expand_more</i>
                    </summary>
                    <p class="mt-4 text-gray-600 dark:text-gray-300">
                        Recibirás todas las fotos en alta resolución (JPG 300dpi) en un USB de madera con diseño personalizado y digitalmente.
                    </p>
                </details>

                <details class="bg-white dark:bg-surface-dark rounded-lg border border-gray-200 dark:border-gray-700 p-6 cursor-pointer">
                    <summary class="font-display font-bold text-lg text-gray-900 dark:text-white flex items-center justify-between">
                        ¿Hay contrato por escrito?
                        <i class="material-icons text-secondary">expand_more</i>
                    </summary>
                    <p class="mt-4 text-gray-600 dark:text-gray-300">
                        Sí, contamos con contrato formal que detalla todos los servicios, horarios, condiciones y pagos para tu tranquilidad.
                    </p>
                </details>

                <details class="bg-white dark:bg-surface-dark rounded-lg border border-gray-200 dark:border-gray-700 p-6 cursor-pointer">
                    <summary class="font-display font-bold text-lg text-gray-900 dark:text-white flex items-center justify-between">
                        ¿Cómo puedo pagar?
                        <i class="material-icons text-secondary">expand_more</i>
                    </summary>
                    <p class="mt-4 text-gray-600 dark:text-gray-300">
                        Aceptamos transferencia bancaria, Yape/Plin y efectivo en el momento de la firma del contrato. El saldo restante se cancela el día del evento.
                    </p>
                </details>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="py-20 bg-background-light dark:bg-background-dark" id="portafolio">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <span class="text-primary font-bold tracking-wider uppercase text-sm">Galería</span>
                    <h2 class="mt-2 font-display font-bold text-4xl text-gray-900 dark:text-white">Portafolio Reciente</h2>
                </div>
                <a class="hidden md:flex items-center gap-2 text-secondary hover:text-white transition-colors font-medium mt-4 md:mt-0" href="#">
                    Ver todo en Instagram <i class="fab fa-instagram"></i>
                </a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 auto-rows-[200px]">
                <div class="row-span-2 rounded-xl overflow-hidden group relative">
                    <img alt="Retrato Boda" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqMzUusMx6x7MLbsCjOjJvKlWragW2i3qpvZzu0rK5SoTAopSPScJPK2BSmnjXlbBbORuYWd2azpUF-axKabbsFU7IDqlFwNRa-PUbRT0EMP3TdiIhxupXbmia5e6Uha84-o6OY_8HofMv9ozRMCiGtFNASuDkgrJCUsTVUarDar7mEqfm4GUq0DQv9QMgC97Va0f_xWNzHBK5MvPXFkBHyM6u7N671UpRSrchI8YXFnorI2Szc-LgYreUd4ji3OvTO_5j318jeYjN"/>
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="text-white font-display font-bold">Ver proyecto</span>
                    </div>
                </div>
                <div class="col-span-2 rounded-xl overflow-hidden group relative">
                    <img alt="Ceremonia" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3qIFcEtnJiQMP-_YEtyjJb-yt5-tfm0P_Q-9CLfz45I5Y2Jc6JMbCvTJz9uE6e8nTn5ZZFmqDKqt6bIWWEfj-_NWO8mDS-y8P938xf9vPSKju4J4zVBuXb3xzH-1Qh4_oSPA3DM0zQElGWE9RAbXzvYSdrS2tcW5okH0YbEWPjNt1g-ygK1TgIiycfevnpPs21UwjWAa5ubumpak5eVEe0TsxWELsvRt628vtKviKpF_B0-SawXifwPSV2UdZZJKOwrCFM9uqy9hj"/>
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="text-white font-display font-bold">Ver proyecto</span>
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden group relative">
                    <img alt="Detalle" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBr6OOT4fvGfubIMXl9nxFaYTOTGJEXQMxrgmtp09hu73XnWz6ulIwFAv10grjxap49w1rR_wLapMJLdv6_MBpv_vIjfY7Rg2Z3jEX8wNIPXjZBWzxOUVDf4xeA0exx6QFeTPHUFGd9oMPE758ZuwZ88vSKoeC4mxqBU1ObYtaXURRbTwbZbVwBMK6IJhNqF0jNdKIeEoc6spGxkdr1vUops6AVzTwKJWghydA04CvEK40op0JrqbJe6_1Jh2mGfj7l2INT1aQPTb4U"/>
                </div>
                <div class="rounded-xl overflow-hidden group relative">
                    <img alt="Retrato" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA787hcc5GrFikf7RMjBYS1utF4qFtvT6K-2uB3nj6Bch5EG1ZaD8cLMkxni-Lfbrl6fu-9Wzk0Ah3UJZEKebwRtrplkYIZyqHs7P-_JiuMFlgDFxbZXqqPYUwnv9WTh27oZXPRPl8MXojvScSDdM9yqHEu7Z9H1Nu8ZZfyiadsbd5hUKSfPQusMGT7zP_t48Rgo2-DtmcT-VfNEJvLGlq9fkRPZekF7IoY13OG2XhlY8ggO_sNa3qPZSNP6JcSseD03SxLxNl7y5Vd"/>
                </div>
                <div class="row-span-2 rounded-xl overflow-hidden group relative">
                    <img alt="Novios" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGksYHbS5szgiBRdaq4I0JplkO3XkOFLmryUQ5K157x2I_ZxJWvil_nN8BLxALBikysG19Y-KTTRj7NHd46ltpeD_FJJAWB_E7x9ePJfsX4vuLwuKhipy_AEiddwLYn1ztwssg1iecjbt-FaN5FH2TyeTMqfZNHq5kIivBtENkkep24e1az5UICwAtczvdXuedx8dLSsUt7JkFiEhP_pELhlLPRReHwndHQiXOOZA-i6SV2utUyl_J_V3XVcVPUK97zuwojl6j9e1X"/>
                </div>
                <div class="col-span-2 rounded-xl overflow-hidden group relative">
                    <img alt="Fiesta" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUUi3YTE0EeFp-0rgDieQ4-EflBMsIKaeP9obCQ6o67b3VTjtvY7WJYs3-CFgVuQEDGp7e7_XJJMyFxhUD6Ji52JTzddOlDBj8FszdMsYbSAb4n-0YCVaNVbz1Hz_5khRe4M90vThxrdJ6W9P21-S_zQclaQYLmyfencO-5Kj0ylXA_nbJDxPvKL0tfUQXS_Bdp2_Jn5zV3gVPPSMVy4t9-4RmHc_nYi8L3D_O3uPim8AxjqQihoq6Pkau2HfQBcD--aQgK8E9zFI8"/>
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="text-white font-display font-bold">Ver proyecto</span>
                    </div>
                </div>
                <div class="rounded-xl overflow-hidden group relative">
                    <img alt="Decoración" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdbaYa2vUspVESih3PtF15d0n4HCqXa42UZVp27p5V0f_pOimNo3AHru-8JtFH3WuIC5RixjzLmNSpCJixqSUwIKT7MRq4UTg8wWS9_lNUdmZnAW7Enkl6qBD1jYobDzi_HlDFUIJHtYRu_uKOnvAHoEICiUdcwHbS176zjRhr1y4FdmBu2ueEEv1xW3hzUzMcDUjsVXy6PsW8zo43JcNuLe0sW7QvU6-uqOdpRlz4xsn1VYUDHb7a-y6OKM2Ls4N3IWAG6w6_x0J9"/>
                </div>
            </div>
            <div class="mt-8 text-center md:hidden">
                <a class="inline-flex items-center gap-2 text-secondary font-medium" href="#">
                    Ver todo en Instagram <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-24 bg-surface-dark border-t border-gray-800" id="contacto">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="font-display font-bold text-4xl md:text-5xl text-white mb-6">¿Listo para crear magia juntos?</h2>
            <p class="text-xl text-gray-400 mb-10">Agenda tu sesión hoy y recibe un descuento especial por pronto pago.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a class="bg-primary hover:bg-orange-600 text-white px-8 py-4 rounded-full font-bold text-lg transition-all shadow-lg shadow-orange-500/30 flex items-center justify-center gap-2" href="https://wa.me/51XXXXXXXXX?text=Hola%20CV%20Producciones%2C%20quiero%20cotizar%20un%20evento%20para%20la%20fecha%20____%20en%20____." target="_blank">
                    <i class="fab fa-whatsapp text-xl"></i>
                    <span>Hablar por WhatsApp</span>
                </a>
                <a class="bg-transparent border border-gray-600 hover:border-secondary hover:text-secondary text-gray-300 px-8 py-4 rounded-full font-bold text-lg transition-all flex items-center justify-center gap-2" href="#">
                    <i class="fas fa-envelope text-xl"></i>
                    <span>Enviar Correo</span>
                </a>
            </div>
        </div>
    </section>
@endsection