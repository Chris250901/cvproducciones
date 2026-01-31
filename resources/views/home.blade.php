@extends('layouts.app')

@section('content')
    <!-- Hero Section con Carrusel -->
    <x-hero-carousel
        :slides="[
            [
                'image' => asset('img/bodas/01-107.jpg.webp'),
                'title' => 'Bodas Inolvidables',
                'description' => 'Capturamos cada momento mágico de tu día especial con estilo y emoción.',
                'category' => 'Bodas',
                'cta_text' => 'Cotizar Boda',
                'cta_link' => 'https://wa.me/51XXXXXXXXX?text=Hola%20CV%20Producciones%2C%20quiero%20cotizar%20una%20boda'
            ],
            [
                'image' => asset('img/15anos/01-159.jpg.webp'),
                'title' => '15 Años Especiales',
                'description' => 'Transformamos tus quinceaños en un cuento de hadas con nuestro lente artístico.',
                'category' => '15 Años',
                'cta_text' => 'Quiero mi Sesión',
                'cta_link' => 'https://wa.me/51XXXXXXXXX?text=Hola%20CV%20Producciones%2C%20quiero%20cotizar%20mis%2015%20a%C3%B1os'
            ],
            [
                'image' => asset('img/eventos/ALDANA/01 (1 de 217).jpg.webp'),
                'title' => 'Eventos Increíbles',
                'description' => 'De cumpleaños a eventos corporativos, cada celebración merece ser memorable.',
                'category' => 'Eventos',
                'cta_text' => 'Cotizar Evento',
                'cta_link' => 'https://wa.me/51XXXXXXXXX?text=Hola%20CV%20Producciones%2C%20quiero%20cotizar%20un%20evento'
            ]
        ]"
    />

    <!-- Galería Grande Categorizada -->
    <x-large-gallery
        :categories="['bodas', '15 años', 'cumpleaños', 'eventos', 'familiares']"
        :photos_by_category="[
            'bodas' => [
                ['id' => 1, 'url' => asset('img/bodas/01-107.jpg.webp'), 'title' => 'Boda Linda & Carlos', 'date' => '2024', 'views' => 1250],
                ['id' => 2, 'url' => asset('img/bodas/01-11.jpg.webp'), 'title' => 'Boda Romántica', 'date' => '2024', 'views' => 980],
                ['id' => 3, 'url' => asset('img/bodas/01-122.jpg.webp'), 'title' => 'Boda en Iglesia', 'date' => '2024', 'views' => 1100],
                ['id' => 4, 'url' => asset('img/bodas/01-125.jpg.webp'), 'title' => 'Recepción Boda', 'date' => '2024', 'views' => 890],
                ['id' => 5, 'url' => asset('img/bodas/01-151.jpg.webp'), 'title' => 'Sesión Preboda', 'date' => '2024', 'views' => 750],
            ],
            '15 años' => [
                ['id' => 6, 'url' => asset('img/15anos/01-159.jpg.webp'), 'title' => 'Quinceañera Elegante', 'date' => '2024', 'views' => 1450],
                ['id' => 7, 'url' => asset('img/15anos/01-162.jpg.webp'), 'title' => 'Cumple 15 Años', 'date' => '2024', 'views' => 1200],
                ['id' => 8, 'url' => asset('img/15anos/01-176.jpg.webp'), 'title' => 'Sesión 15 años', 'date' => '2024', 'views' => 950],
                ['id' => 9, 'url' => asset('img/15anos/01-189.jpg.webp'), 'title' => 'Cumpleaños Especial', 'date' => '2024', 'views' => 800],
            ],
            'cumpleaños' => [
                ['id' => 10, 'url' => asset('img/eventos/ALDANA/01 (1 de 217).jpg.webp'), 'title' => 'Fiesta Cumpleaños temática', 'date' => '2024', 'views' => 1150],
                ['id' => 11, 'url' => asset('img/eventos/ALDANA/01 (1 de 244).jpg.webp'), 'title' => 'Cumpleaños Sorpresa', 'date' => '2024', 'views' => 990],
                ['id' => 12, 'url' => asset('img/eventos/ALDANA/01 (105 de 244).jpg.webp'), 'title' => 'Pastel Cumpleaños', 'date' => '2024', 'views' => 850],
                ['id' => 13, 'url' => asset('img/eventos/ALDANA/01 (11 de 244).jpg.webp'), 'title' => 'Decoración Cumpleaños', 'date' => '2024', 'views' => 720],
            ],
            'eventos' => [
                ['id' => 14, 'url' => asset('img/eventos/01-196.jpg.webp'), 'title' => 'Evento Corporativo', 'date' => '2024', 'views' => 650],
                ['id' => 15, 'url' => asset('img/eventos/01-199.jpg.webp'), 'title' => 'Conferencia', 'date' => '2024', 'views' => 580],
                ['id' => 16, 'url' => asset('img/eventos/01-206.jpg.webp'), 'title' => 'Eventos Sociales', 'date' => '2024', 'views' => 720],
            ],
            'familiares' => [
                ['id' => 17, 'url' => asset('img/familiares/01.jpg.webp'), 'title' => 'Familia Unida', 'date' => '2024', 'views' => 590],
                ['id' => 18, 'url' => asset('img/familiares/02.jpg.webp'), 'title' => 'Retratos Familiares', 'date' => '2024', 'views' => 450],
            ]
        ]"
    />

    <!-- Services Section Mejorado -->
    <section class="py-20 bg-gradient-to-br from-background-light to-background-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-primary font-bold tracking-wider uppercase text-sm">Servicios</span>
                <h2 class="mt-2 font-display font-bold text-5xl text-white mb-6">¿Qué estás celebrando?</h2>
                <div class="w-32 h-1 bg-gradient-to-r from-primary to-secondary mx-auto mt-4 rounded-full"></div>
                <p class="mt-6 text-xl text-gray-300 max-w-3xl mx-auto">
                    Cada evento es único y requiere un enfoque especial. Ofrecemos servicios personalizados para cualquier ocasión.
                </p>
            </div>

            <!-- Eventos y Celebraciones -->
            <div class="mb-16">
                <h3 class="font-display font-bold text-3xl text-center text-white mb-12">Eventos y Celebraciones</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Boda -->
                    <div class="group bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:border-primary/50 transition-all transform hover:scale-105 hover:shadow-2xl hover:shadow-primary/25">
                        <div class="w-16 h-16 bg-gradient-to-r from-primary to-secondary rounded-2xl flex items-center justify-center mb-6 transform group-hover:rotate-12 transition-transform">
                            <i class="fas fa-heart text-white text-2xl"></i>
                        </div>
                        <h4 class="font-display font-bold text-2xl text-white mb-4">Bodas</h4>
                        <p class="text-gray-300 mb-6">Capturamos cada momento de tu día especial con estilo artístico y profesionalismo.</p>
                        <ul class="text-gray-400 space-y-2 mb-6">
                            <li><i class="fas fa-check text-primary mr-2"></i>8 horas de cobertura</li>
                            <li><i class="fas fa-check text-primary mr-2"></i>All inclusive album</li>
                            <li><i class="fas fa-check text-primary mr-2"></i>2 fotógrafos</li>
                            <li><i class="fas fa-check text-primary mr-2"></i>Entrega en 72 horas</li>
                        </ul>
                        <a href="https://wa.me/51XXXXXXXXX?text=Hola%20CV%20Producciones%2C%20quiero%20cotizar%20una%20boda" class="inline-flex items-center gap-2 bg-primary hover:bg-orange-600 text-white px-6 py-3 rounded-full font-medium transition-all">
                            Cotizar Boda <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <!-- 15 Años -->
                    <div class="group bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:border-primary/50 transition-all transform hover:scale-105 hover:shadow-2xl hover:shadow-primary/25">
                        <div class="w-16 h-16 bg-gradient-to-r from-primary to-secondary rounded-2xl flex items-center justify-center mb-6 transform group-hover:rotate-12 transition-transform">
                            <i class="fas fa-birthday-cake text-white text-2xl"></i>
                        </div>
                        <h4 class="font-display font-bold text-2xl text-white mb-4">15 Años</h4>
                        <p class="text-gray-300 mb-6">Transformamos tus quinceaños en un cuento de hadas con nuestro lente artístico.</p>
                        <ul class="text-gray-400 space-y-2 mb-6">
                            <li><i class="fas fa-check text-primary mr-2"></i>6 horas de cobertura</li>
                            <li><i class="fas fa-check text-primary mr-2"></i>3 cambios de vestuario</li>
                            <li><i class="fas fa-check text-primary mr-2"></i>Digital + Impresión</li>
                            <li><i class="fas fa-check text-primary mr-2"></i>Fotos + Video</li>
                        </ul>
                        <a href="https://wa.me/51XXXXXXXXX?text=Hola%20CV%20Producciones%2C%20quiero%20cotizar%20mis%2015%20a%C3%B1os" class="inline-flex items-center gap-2 bg-primary hover:bg-orange-600 text-white px-6 py-3 rounded-full font-medium transition-all">
                            Cotizar 15 Años <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <!-- Eventos -->
                    <div class="group bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 hover:border-primary/50 transition-all transform hover:scale-105 hover:shadow-2xl hover:shadow-primary/25">
                        <div class="w-16 h-16 bg-gradient-to-r from-primary to-secondary rounded-2xl flex items-center justify-center mb-6 transform group-hover:rotate-12 transition-transform">
                            <i class="fas fa-calendar-alt text-white text-2xl"></i>
                        </div>
                        <h4 class="font-display font-bold text-2xl text-white mb-4">Eventos Corporativos</h4>
                        <p class="text-gray-300 mb-6">Eventos de empresa, conferencias, lanzamientos y mucho más.</p>
                        <ul class="text-gray-400 space-y-2 mb-6">
                            <li><i class="fas fa-check text-primary mr-2"></i>Cobertura personalizada</li>
                            <li><i class="fas fa-check text-primary mr-2"></i>Reportaje profesional</li>
                            <li><i class="fas fa-check text-primary mr-2"></i>Edición inmediata</li>
                            <li><i class="fas fa-check text-primary mr-2"></i>Derechos de uso</li>
                        </ul>
                        <a href="https://wa.me/51XXXXXXXXX?text=Hola%20CV%20Producciones%2C%20quiero%20cotizar%20un%20evento%20corporativo" class="inline-flex items-center gap-2 bg-primary hover:bg-orange-600 text-white px-6 py-3 rounded-full font-medium transition-all">
                            Cotizar Evento <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Características Especiales -->
            <div class="bg-gradient-to-r from-primary/10 to-secondary/10 rounded-3xl p-12 border border-primary/20">
                <h3 class="font-display font-bold text-3xl text-white text-center mb-12">¿Por qué elegir CV Producciones?</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center group">
                        <div class="w-20 h-20 bg-primary/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/30 transition-colors">
                            <i class="fas fa-clock text-primary text-3xl"></i>
                        </div>
                        <h4 class="font-display font-bold text-xl text-white mb-2">Entrega Rápida</h4>
                        <p class="text-gray-300">Tus fotos listas en 72 horas con calidad profesional.</p>
                    </div>

                    <div class="text-center group">
                        <div class="w-20 h-20 bg-primary/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/30 transition-colors">
                            <i class="fas fa-certificate text-primary text-3xl"></i>
                        </div>
                        <h4 class="font-display font-bold text-xl text-white mb-2">Calidad Garantizada</h4>
                        <p class="text-gray-300">Equipamento profesional y años de experiencia.</p>
                    </div>

                    <div class="text-center group">
                        <div class="w-20 h-20 bg-primary/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/30 transition-colors">
                            <i class="fas fa-palette text-primary text-3xl"></i>
                        </div>
                        <h4 class="font-display font-bold text-xl text-white mb-2">Estilo Único</h4>
                        <p class="text-gray-300">Editorial creativo que resalta la emoción de cada momento.</p>
                    </div>

                    <div class="text-center group">
                        <div class="w-20 h-20 bg-primary/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/30 transition-colors">
                            <i class="fas fa-headset text-primary text-3xl"></i>
                        </div>
                        <h4 class="font-display font-bold text-xl text-white mb-2">Soporte 24/7</h4>
                        <p class="text-gray-300">Asistencia durante todo el evento y después.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section (solo tú) -->
    @include('partials.equipo')

    <!-- Testimonials Section -->
    <section class="py-20 bg-background-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-primary font-bold tracking-wider uppercase text-sm">Testimonios</span>
                <h2 class="mt-2 font-display font-bold text-4xl text-gray-900 mb-6">Lo que dicen nuestros clientes</h2>
                <div class="w-24 h-1 bg-secondary mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 transform hover:scale-105 transition-all">
                    <div class="flex mb-4">
                        @for($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star text-yellow-500"></i>
                        @endfor
                    </div>
                    <p class="text-gray-600 mb-6 italic">"Mi sesión de 15 años fue perfecta! El equipo es muy profesional y me hicieron sentir como una princesa. Las fotos son increíbles."</p>
                    <div class="flex items-center">
                        <img src="{{ asset('img/fotoperfil.jpg') }}" alt="Cliente" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <p class="font-semibold text-gray-900">María Rodriguez</p>
                            <p class="text-sm text-gray-500">15 años celebrados</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 transform hover:scale-105 transition-all">
                    <div class="flex mb-4">
                        @for($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star text-yellow-500"></i>
                        @endfor
                    </div>
                    <p class="text-gray-600 mb-6 italic">"La cobertura de nuestra boda fue espectacular. Cada momento importante fue capturado con perfección. ¡Totalmente recomendados!"</p>
                    <div class="flex items-center">
                        <img src="{{ asset('img/fotoperfil.jpg') }}" alt="Cliente" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <p class="font-semibold text-gray-900">Carlos & Linda</p>
                            <p class="text-sm text-gray-500">Boda 2024</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 transform hover:scale-105 transition-all">
                    <div class="flex mb-4">
                        @for($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star text-yellow-500"></i>
                        @endfor
                    </div>
                    <p class="text-gray-600 mb-6 italic">"El video de nuestra empresa quedó profesional y dinámico. El equipo de CV Producciones entiende perfectamente lo que necesitamos."</p>
                    <div class="flex items-center">
                        <img src="{{ asset('img/fotoperfil.jpg') }}" alt="Cliente" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <p class="font-semibold text-gray-900">Empresa XYZ</p>
                            <p class="text-sm text-gray-500">Evento Corporativo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="py-20 bg-gradient-to-r from-primary to-secondary">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="font-display font-bold text-4xl md:text-5xl text-white mb-6">¿Listo para capturar tus mejores momentos?</h2>
            <p class="text-xl text-white/90 mb-8">Contacta hoy y recibe un 10% de descuento en tu primera sesión.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/51XXXXXXXXX?text=Hola%20CV%20Producciones%2C%20quiero%20cotizar%20un%20evento" class="bg-white text-primary hover:bg-gray-100 px-8 py-4 rounded-full font-bold text-lg transition-all transform hover:scale-105 shadow-lg">
                    <i class="fab fa-whatsapp text-xl mr-2"></i>
                    ¡Hablemos ahora!
                </a>
                <a href="#contacto" class="bg-transparent border-2 border-white text-white hover:bg-white/10 px-8 py-4 rounded-full font-bold text-lg transition-all">
                    Ver Contacto
                </a>
            </div>
        </div>
    </section>

    <!-- YouTube Videos Section -->
    <section id="videos" class="py-20 bg-background-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-primary font-bold tracking-wider uppercase text-sm">Videos</span>
                <h2 class="mt-2 font-display font-bold text-4xl text-white mb-6">Nuestros Trabajos en Video</h2>
                <div class="w-24 h-1 bg-secondary mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <x-youtube-video videoId="xymUzLeJjfU" title="Video de Cumpleaños 1" />
                <x-youtube-video videoId="XTglaow3OQA" title="Video de Cumpleaños 2" />
                <x-youtube-video videoId="XVnJD2jXKLc" title="Video de Cumpleaños 3" />
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contacto" class="py-20 bg-background-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-primary font-bold tracking-wider uppercase text-sm">Contacto</span>
                <h2 class="mt-2 font-display font-bold text-4xl text-gray-900 mb-6">Hablemos de tu evento</h2>
                <div class="w-24 h-1 bg-secondary mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <form>
                        <div class="mb-6">
                            <label class="block text-gray-700 font-medium mb-2">Nombre Completo</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:outline-none transition-colors" placeholder="Tu nombre">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 font-medium mb-2">Correo Electrónico</label>
                            <input type="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:outline-none transition-colors" placeholder="tu@email.com">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 font-medium mb-2">Tipo de Evento</label>
                            <select class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:outline-none transition-colors">
                                <option>Boda</option>
                                <option>15 Años</option>
                                <option>Cumpleaños</option>
                                <option>Evento Corporativo</option>
                                <>Otros</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 font-medium mb-2">Mensaje</label>
                            <textarea rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-primary focus:outline-none transition-colors" placeholder="Cuéntanos sobre tu evento..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-primary hover:bg-orange-600 text-white py-3 rounded-lg font-bold transition-all">
                            Enviar Mensaje
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="space-y-8">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-phone text-primary text-2xl"></i>
                        </div>
                        <h3 class="font-display font-bold text-2xl text-gray-900 mb-2">Llámanos</h3>
                        <p class="text-gray-600">+51 XXX XXX XXX</p>
                        <p class="text-gray-500 text-sm">Lunes a Sábado: 9:00 AM - 8:00 PM</p>
                    </div>

                    <div class="text-center">
                        <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fab fa-whatsapp text-primary text-2xl"></i>
                        </div>
                        <h3 class="font-display font-bold text-2xl text-gray-900 mb-2">WhatsApp</h3>
                        <p class="text-gray-600">+51 XXX XXX XXX</p>
                        <p class="text-gray-500 text-sm">Respuesta inmediata</p>
                    </div>

                    <div class="text-center">
                        <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-envelope text-primary text-2xl"></i>
                        </div>
                        <h3 class="font-display font-bold text-2xl text-gray-900 mb-2">Email</h3>
                        <p class="text-gray-600">hola@cvproducciones.com</p>
                        <p class="text-gray-500 text-sm">Respuesta en 24 horas</p>
                    </div>

                    <div class="text-center">
                        <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-map-marker-alt text-primary text-2xl"></i>
                        </div>
                        <h3 class="font-display font-bold text-2xl text-gray-900 mb-2">Ubicación</h3>
                        <p class="text-gray-600">Lima, Perú</p>
                        <p class="text-gray-500 text-sm">Cobertura Lima y Callao</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection