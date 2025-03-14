<?php
/*
Template Name: Nuestros servicios
*/
get_header(); ?>

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
                <a href="mailto:ventas@dacodex.com">
                    <i class="fa-solid fa-envelope"></i>
                    ventas@dacodex.com
                </a>
            </li>
        </ul>
    </div>

    <div class="overlay"></div>

    <div class="container">
        <div class="row">
            <div class="col-12 my-auto">
                <h1 data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100"><?php the_title(); ?></h1>
                <p data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200">Conoce todos nuestros servicios disponibles para tu empresa.</p>
            </div>
        </div>
    </div>
</section>

<section class="descanso descanso-1 pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100">
                    Todo lo que necesitas para aprovechar más tu jornada
                    de trabajo
                </h1>
            </div>
        </div>
    </div>
</section>

<section id="servicios" class="cards pt-30 pb-60">
    <div class="container">
        <div class="row mb-3 mb-lg-5">
            <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="card p-relative boton-flecha boton-flecha-abajo-derecha-ra"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <div class="icono">
                                    <img src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/servicios/ico-1@2x.png" alt="" loading="lazy">
                                </div>
                            </li>
                            <li>
                                <h4 class="card-title">Oficina Privada<span>*Renta mensual varía por ubicación y tamaño</span></h4>
                            </li>
                        </ul>
                        <ul class="card-text text-muted">
                            <li>Oficina privada amueblada</li>
                            <li>Servicios (luz y agua)</li>
                            <li>Servicio de limpieza*</li>
                            <li>Oficina climatizada</li>
                            <li>Internet simétrico de alta velocidad*</li>
                            <li>Sala de juntas**</li>
                            <li>Áreas comunes (baños, cocina, sala de espera)</li>
                            <li>Acceso 24/7 con tarjeta de proximidad</li>
                            <li>Domicilio comercial y fiscal</li>
                        </ul>
                        <a href="<?php echo get_permalink(
                            18
                        ); ?>" class="btn btn-primary">Desde $5,090.00 más IVA</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="card p-relative boton-flecha boton-flecha-abajo-derecha-ra"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="300"
                >
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <div class="icono">
                                    <img src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/servicios/ico-2@2x.png" alt="" loading="lazy">
                                </div>
                            </li>
                            <li>
                                <h4 class="card-title">Estación Cowork<span>*Renta mensual varía por ubicación y tamaño</span></h4>
                            </li>
                        </ul>
                        <ul class="card-text text-muted">
                            <li>Estación de trabajo</li>
                            <li>Servicios (luz y agua)</li>
                            <li>Servicio de limpieza*</li>
                            <li>Internet simétrico de alta velocidad*</li>
                            <li>Áreas comunes (baños, cocina, sala de espera)</li>
                            <li>Acceso 24/7 con tarjeta de proximidad</li>
                            <li>Domicilio comercial y fiscal</li>
                        </ul>
                        <a href="<?php echo get_permalink(
                            18
                        ); ?>" class="btn btn-primary">Desde $2,090.00 más IVA</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="card p-relative boton-flecha boton-flecha-abajo-derecha-ra"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="400"
                >
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <div class="icono">
                                    <img src="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/servicios/ico-3@2x.png" alt="" loading="lazy">
                                </div>
                            </li>
                            <li>
                                <h4 class="card-title">Oficina Virtual<span>*Renta mensual varía por ubicación</span></h4>
                            </li>
                        </ul>
                        <ul class="card-text text-muted">
                            <li>Domicilio comercial y fiscal</li>
                            <li>Recepción bilingüe</li>
                            <li>Línea telefónica compartida</li>
                        </ul>
                        <a href="<?php echo get_permalink(
                            18
                        ); ?>" class="btn btn-primary">Desde $1,090.00 más IVA</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <ul class="list-inline"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="500"
                >
                    <li class="list-inline-item mb-3 mb-xl-0">
                        <a href="javascript:void(0)" class="btn btn-secondary btn-lg"
                           data-bs-toggle="modal"
                           data-bs-target="#dynamicModal"
                           data-content-type="text"
                           data-text-content="<h4>Requisitos Persona Física</h4>
                                             <ul>
                                                 <li>Identificación oficial.</li>
                                                 <li>Comprobante de domicilio.</li>
                                                 <li>Constancia Situación Fiscal.</li>
                                                 <li>Carátula bancaria (sin cantidades).</li>
                                                 <li>Depósito de renta.</li>
                                                 <li>Depósito de garantía de un mes de renta.</li>
                                             </ul>">
                            Requisitos de contratación Persona Física <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mb-3 mb-xl-0">
                        <a href="javascript:void(0)" class="btn btn-primary btn-lg"
                           data-bs-toggle="modal"
                           data-bs-target="#dynamicModal"
                           data-content-type="text"
                           data-text-content="<h4>Requisitos Persona Moral</h4>
                                             <ul>
                                                 <li>Acta constitutiva (si el contratante es persona moral).</li>
                                                 <li>Poderes del representante legal (si el contratante es persona moral).</li>
                                                 <li>Constancia Situación Fiscal.</li>
                                                 <li>Identificación oficial.</li>
                                                 <li>Comprobante de domicilio.</li>
                                                 <li>Carátula bancaria (sin cantidades).</li>
                                                 <li>Depósito de garantía de un mes de renta.</li>
                                             </ul>">
                            Requisitos de contratación Persona Moral <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php require_once get_template_directory() .
    "/includes/otros-servicios.php"; ?>

<?php get_footer(); ?>
