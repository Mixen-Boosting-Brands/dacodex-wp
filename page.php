
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
                data-aos-delay="100"><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
</section>

<section class="descanso descanso-1 pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div
                class="col-12"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="300"
            >
                <?php the_content(); ?>

				<?php edit_post_link(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
