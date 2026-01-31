@props(['locations' => []])

<div class="relative h-96 rounded-2xl overflow-hidden">
    <!-- Mapa base - puedes integrar Google Maps, Mapbox u otro servicio -->
    <div class="absolute inset-0 bg-gray-200 dark:bg-gray-800">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3823.1234567890!2d-77.0428!3d-12.0464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQzJzAwLjAiTiA3NMKwMDAnMzUuMyJX!5e0!3m2!1sen!2spe!4v1234567890"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>

    <!-- Marcadores de locaciones -->
    <div class="absolute inset-0">
        @foreach($locations as $location)
            <div
                class="absolute cursor-pointer group"
                style="left: {{ $location['x'] }}%; top: {{ $location['y'] }}%; transform: translate(-50%, -50%);"
            >
                <div class="bg-primary text-white rounded-full w-10 h-10 flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                    <i class="fas fa-camera text-sm"></i>
                </div>
                <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                    <div class="bg-black text-white px-3 py-1 rounded-lg text-sm">
                        {{ $location['name'] }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Lista de locaciones -->
<div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($locations as $location)
        <div class="bg-white dark:bg-background-dark p-6 rounded-2xl">
            <h3 class="font-display font-bold text-xl text-gray-900 dark:text-white mb-2">{{ $location['name'] }}</h3>
            <p class="text-gray-600 dark:text-gray-400 text-sm mb-3">{{ $location['address'] }}</p>
            <div class="flex items-center text-sm text-gray-500">
                <i class="fas fa-map-marker-alt text-secondary mr-2"></i>
                <span>{{ $location['district'] }}</span>
            </div>
        </div>
    @endforeach
</div>