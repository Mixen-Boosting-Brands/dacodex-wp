// Seleccionar el elemento por la clase 'counter'
const counterElement = document.querySelector(".counter");

// Solo ejecutar el código si existe el elemento counter
if (counterElement) {
    // Función para animar el contador
    const animateCounter = (element, start, end, duration) => {
        let current = start;
        const range = end - start;
        const increment = end > start ? 1 : -1;
        const stepTime = Math.abs(Math.floor(duration / range));

        const timer = setInterval(() => {
            current += increment;
            element.textContent = current + "+";

            if (current == end) {
                clearInterval(timer);
            }
        }, stepTime);
    };

    // Función para verificar si el elemento está visible
    const isElementInViewport = (el) => {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <=
                (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <=
                (window.innerWidth || document.documentElement.clientWidth)
        );
    };

    let hasAnimated = false;

    // Listener para el scroll
    window.addEventListener("scroll", () => {
        if (!hasAnimated && isElementInViewport(counterElement)) {
            hasAnimated = true;
            animateCounter(counterElement, 0, 20, 1000);
        }
    });
}
