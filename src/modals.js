// core version + navigation, pagination modules:
import Swiper from "swiper";
import {
    Navigation,
    Pagination,
    Autoplay,
    Mousewheel,
    Scrollbar,
    Thumbs,
} from "swiper/modules";

// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("dynamicModal");
    const modalContent = document.getElementById("modalContent");

    modal.addEventListener("show.bs.modal", function (event) {
        const button = event.relatedTarget;
        const contentType = button.getAttribute("data-content-type");

        if (contentType === "gallery") {
            const images = JSON.parse(button.getAttribute("data-images"));

            // Crear el markup del Swiper
            const swiperHtml = `
                <div class="swiper">
                    <div class="swiper-wrapper">
                        ${images
                            .map(
                                (image) => `
                            <div class="swiper-slide">
                                <img src="${image}" class="img-fluid" alt="">
                            </div>
                        `
                            )
                            .join("")}
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            `;

            modalContent.innerHTML = swiperHtml;

            // Inicializar Swiper
            setTimeout(() => {
                const swiper = new Swiper(".swiper", {
                    modules: [Navigation, Pagination],
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: false,
                    grabCursor: true,
                });

                // Forzar actualización después de la inicialización
                swiper.update();
            }, 100);
        } else if (contentType === "map") {
            const mapIframe = button.getAttribute("data-map-iframe");
            const mapContainer = `
                <div class="map-container">
                    ${mapIframe}
                </div>
            `;
            modalContent.innerHTML = mapContainer;
        } else if (contentType === "text") {
            const textContent = button.getAttribute("data-text-content");
            const textContainer = `
                <div class="text-container">
                    ${textContent}
                </div>
            `;
            modalContent.innerHTML = textContainer;
        }
    });

    // Limpiar contenido cuando se cierra el modal
    modal.addEventListener("hidden.bs.modal", function () {
        modalContent.innerHTML = "";
    });
});
