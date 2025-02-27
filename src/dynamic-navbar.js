// Función para verificar si dos elementos se superponen
function isOverlapping(element1, element2) {
    const rect1 = element1.getBoundingClientRect();
    const rect2 = element2.getBoundingClientRect();

    return !(rect1.bottom < rect2.top || rect1.top > rect2.bottom);
}

// Función principal
function updateNavbarColor() {
    const navbar = document.querySelector("#navbar");
    const darkSections = document.querySelectorAll(".bg-dark");
    let isOverDarkSection = false;

    // Verificar si el navbar está sobre alguna sección oscura
    darkSections.forEach((section) => {
        if (isOverlapping(navbar, section)) {
            isOverDarkSection = true;
        }
    });

    // Aplicar o remover clase según corresponda
    if (isOverDarkSection) {
        navbar.classList.remove("over-light-section");
    } else {
        navbar.classList.add("over-light-section");
    }
}

// Escuchar el evento scroll
window.addEventListener("scroll", updateNavbarColor);

// Ejecutar también al cargar la página
document.addEventListener("DOMContentLoaded", updateNavbarColor);
