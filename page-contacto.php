<?php
/*
Template Name: Contacto
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
                <a href="https://wa.link/byytp0" target="_blank"">
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
                data-aos-delay="100">Solicita información</h1>
                <p data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200">Contamos con varias opciones que se adecuan a tus necesidades.</p>
            </div>
        </div>
    </div>
</section>

<section class="descanso descanso-1 pt-60 pb-30">

</section>

<section id="contacto" class="bg-dark pt-60">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-lg-center">
                <h2
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >Contacto</h2>
                <p
                    class="mb-5"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200">
                    Cuéntanos cómo te podemos ayudar.
                </p>

            </div>
            <div class="col-12">
                <div class="card w-100 mb-3"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="500"
                >
                    <div class="card-body">
                        <div id="form-messages"></div>

                        <form
                            action="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/mailer.php"
                            method="POST"
                            class="row g-3 needs-validation contact-form"
                            id="ajax-contact"
                            novalidate
                        >
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-md-12 form-floating mb-4">
                                        <input
                                            type="text"
                                            class="form-control shadow-none"
                                            id="nombre"
                                            name="nombre"
                                            placeholder="Nombre completo*"
                                            pattern=".{5,50}"
                                            required
                                        />
                                        <label for="nombre" class="form-label"
                                            >Nombre completo*</label
                                        >
                                        <div class="valid-feedback">
                                            ¡Se ve bien!
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor introduce tu nombre completo.
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-floating mb-4">
                                        <input
                                            type="email"
                                            class="form-control shadow-none"
                                            id="correo"
                                            name="correo"
                                            placeholder="Correo electrónico*"
                                            required
                                        />
                                        <label for="correo" class="form-label"
                                            >Correo electrónico*</label
                                        >
                                        <div class="valid-feedback">
                                            ¡Se ve bien!
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor introduce una dirección de
                                            correo válida.
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-floating mb-4">
                                        <input
                                            type="tel"
                                            class="form-control shadow-none"
                                            id="telefono"
                                            name="telefono"
                                            placeholder="Teléfono*"
                                            required
                                        />
                                        <label for="telefono" class="form-label"
                                            >Teléfono*</label
                                        >
                                        <div class="valid-feedback">
                                            ¡Se ve bien!
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor introduce un número de
                                            teléfono válido.
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-floating mb-3 mb-lg-0">
                                        <textarea
                                            class="form-control shadow-none"
                                            id="mensaje"
                                            name="mensaje"
                                            placeholder="Mensaje*"
                                            style="height: 100px"
                                            required
                                        ></textarea>
                                        <label for="mensaje">Mensaje*</label>
                                        <div class="valid-feedback">
                                            ¡Se ve bien!
                                        </div>
                                        <div class="invalid-feedback">
                                            Por favor introduce tu mensaje.
                                        </div>
                                    </div>
                                    <div class="col-md-6 my-auto">
                                        <div id="hold-on-a-sec">
                                            <i
                                                id="contact-spinner"
                                                class="fas fa-spinner fa-spin"
                                            ></i>
                                            Por favor espera..
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 d-flex justify-content-center align-items-end">
                                <div class="row">
                                    <button
                                        type="submit"
                                        class="btn btn-primary btn-lg btn-block rounded-pill"
                                    >
                                        <i class="fa-solid fa-paper-plane"></i>
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
