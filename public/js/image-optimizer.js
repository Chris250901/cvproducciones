document.addEventListener('DOMContentLoaded', function() {
    // Optimización de imágenes con tamaños responsivos
    const optimizeImages = () => {
        const images = document.querySelectorAll('img[data-src]');

        images.forEach(img => {
            // Obtener el tamaño real del contenedor
            const container = img.parentElement;
            const containerWidth = container.offsetWidth;

            // Calcular tamaños para diferentes resoluciones
            const sizes = {
                mobile: Math.min(containerWidth, 400),
                tablet: Math.min(containerWidth, 800),
                desktop: Math.min(containerWidth, 1200)
            };

            // Crear URL con parámetros de optimización
            const baseUrl = img.dataset.src;
            const optimizedUrl = baseUrl +
                '?w=' + sizes.mobile +
                '&h=' + Math.round(sizes.mobile * 0.75) +
                '&fit=crop';

            // Usar Picture con diferentes fuentes
            const picture = document.createElement('picture');

            // Mobile
            const sourceMobile = document.createElement('source');
            sourceMobile.media = '(max-width: 640px)';
            sourceMobile.srcset = baseUrl + '?w=' + sizes.mobile + '&h=' + Math.round(sizes.mobile * 0.75) + '&fit=crop';

            // Tablet
            const sourceTablet = document.createElement('source');
            sourceTablet.media = '(max-width: 1024px)';
            sourceTablet.srcset = baseUrl + '?w=' + sizes.tablet + '&h=' + Math.round(sizes.tablet * 0.75) + '&fit=crop';

            // Desktop
            const sourceDesktop = document.createElement('source');
            sourceDesktop.media = '(min-width: 1025px)';
            sourceDesktop.srcset = baseUrl + '?w=' + sizes.desktop + '&h=' + Math.round(sizes.desktop * 0.75) + '&fit=crop';

            // Fallback
            const imgElement = document.createElement('img');
            imgElement.src = baseUrl + '?w=100&h=75&fit=crop';
            imgElement.alt = img.alt;
            imgElement.className = img.className;
            imgElement.loading = 'lazy';

            picture.appendChild(sourceMobile);
            picture.appendChild(sourceTablet);
            picture.appendChild(sourceDesktop);
            picture.appendChild(imgElement);

            // Reemplazar el img original
            img.parentNode.replaceChild(picture, img);
        });
    };

    // Optimizar cuando las imágenes se carguen
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                optimizeImages();
                imageObserver.disconnect();
            }
        });
    });

    // Observar todas las imágenes con data-src
    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
});