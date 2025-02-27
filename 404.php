
<?php get_header(); ?>

<section id="jumbotron" class="bg-dark jumbotron-interna">
    <div
        class="top-bar"
        data-aos="fade-in"
        data-aos-duration="1000"
        data-aos-delay="0"
    >
        <ul class="list-inline mb-0">
            <li class="list-inline-item">
                <a href="https://wa.link/byytp0" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i> +52 (614)
                    247-6164
                </a>
            </li>
            <li class="list-inline-item">
                <a href="tel:+526144789000">
                    <i class="fa-solid fa-phone"></i> +52 (614) 478-9000
                </a>
            </li>
            <li class="list-inline-item">
                <a href="mailto:ventas@dacodex.mx">
                    <i class="fa-solid fa-envelope"></i>
                    ventas@dacodex.mx
                </a>
            </li>
        </ul>
    </div>

    <div class="overlay"></div>

    <div class="container">
        <div class="row">
            <div class="col-12 my-auto">
                <h2 data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100">Error 404: Página no encontrada</h2>
            </div>
        </div>
    </div>
</section>

<section class="descanso descanso-1 pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div
                class="col-12 text-center"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="300"
            >
                <p>Lo sentimos pero la página solicitada no existe o cambió de ubicación.</p>

                <a class="btn btn-primary" href="<?php echo esc_url(
                    home_url()
                ); ?>">
                    <i class="fa-solid fa-house"></i> Volver al inicio
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
