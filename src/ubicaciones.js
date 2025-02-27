document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".card-body");

    cards.forEach((card) => {
        const link = card.querySelector("a");
        if (link) {
            const button = card.querySelector(".btn");

            if (button) {
                // Copiar TODOS los atributos del enlace al botón
                [...link.attributes].forEach((attr) => {
                    if (attr.name.startsWith("data-")) {
                        button.setAttribute(attr.name, attr.value);
                    }
                });

                // Asegurarnos de que tenga los atributos necesarios para el modal
                button.setAttribute("data-bs-toggle", "modal");
                button.setAttribute("data-bs-target", "#dynamicModal");
                button.removeAttribute("href");
            }

            // Manejar el hover
            card.addEventListener("mouseenter", () => {
                if (button) {
                    button.classList.add("btn-primary-hover");
                }
            });

            card.addEventListener("mouseleave", () => {
                if (button) {
                    button.classList.remove("btn-primary-hover");
                }
            });
        }
    });
});
