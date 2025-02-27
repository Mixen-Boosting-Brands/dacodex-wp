<!doctype html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="<?php bloginfo("description"); ?>">
        <title><?php
        wp_title("");
        if (wp_title("", false)) {
            echo " : ";
        }
        bloginfo("name");
        ?></title>

        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo(
            "name"
        ); ?>" href="<?php bloginfo("rss2_url"); ?>" />

        <link
            rel="icon"
            type="image/png"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/favicon-96x96.png"
            sizes="96x96"
        />
        <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/favicon.svg" />
        <link rel="shortcut icon" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/favicon.ico" />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/apple-touch-icon.png"
        />
        <meta name="apple-mobile-web-app-title" content="Dacodex" />
        <link rel="manifest" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/site.webmanifest" />

        <link rel="stylesheet" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/css/styles.css" />

        <?php wp_head(); ?>
    </head>
    <body>
        <div id="backdrop"></div>
        <div class="menu">
            <a id="cerrar-menu" href="javascript:void(0)">
                <i class="fas fa-times"></i>
            </a>
            <div class="menu-contenido">
                <a class="anchor" id="btn-logo" href="<?php echo esc_url(
                    home_url()
                ); ?>" alt="Dacodex">
                    <img
                        class="logo img-fluid"
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/logo@2x.png"
                        alt=""
                        loading="lazy"
                    />
                </a>
                <nav>
                    <ul id="navmenu" class="list-unstyled mb-0">
                        <li>
                            <a class="anchor" id="btn-nav-1" href="<?php echo esc_url(
                                home_url()
                            ); ?>">Inicio</a>
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-2" href="#">Empresa</a>
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-3" href="#">Ubicaciones</a>
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-4" href="#">Servicios</a>
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-5" href="#">Preguntas</a>
                        </li>
                        <li>
                            <a class="anchor" id="btn-nav-6" href="#">Shelter Office</a>
                        </li>
                    </ul>
                </nav>
                <a href="#contacto" class="anchor btn btn-primary" id="btn-contacto"
                    >Contáctanos</a
                >
                <div id="contacto-menu">
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://wa.link/byytp0" target="_blank">
                                <i class="fa-brands fa-whatsapp"></i> +52 (614)
                                247-6164
                            </a>
                        </li>
                        <li>
                            <a href="tel:+526144789000">
                                <i class="fa-solid fa-phone"></i> +52 (614)
                                478-9000
                            </a>
                        </li>
                        <li>
                            <a href="mailto:ventas@dacodex.com">
                                <i class="fa-solid fa-envelope"></i>
                                ventas@dacodex.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <header id="navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-lg-3 my-auto">
                        <a href="/" alt="Dacodex">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/logo-white@2x.png"
                                alt=""
                                class="logo logo-navbar logo-white img-fluid"
                                loading="lazy"
                            />
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/logo-black@2x.png"
                                alt=""
                                class="logo logo-navbar logo-black img-fluid"
                                loading="lazy"
                            />
                        </a>
                    </div>
                    <div class="col-6 col-lg-9 my-auto text-end">
                        <nav class="d-none d-lg-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="<?php echo esc_url(
                                        home_url()
                                    ); ?>">Inicio</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Empresa</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Ubicaciones</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Servicios</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Preguntas</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Shelter Office</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#contacto">Contacto</a>
                                </li>
                            </ul>
                        </nav>
                        <a
                            id="mburger"
                            class="d-lg-none"
                            href="javascript:void(0)"
                        >
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
