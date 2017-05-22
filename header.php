<html lang="en" class="no-js">
    <head>
        <!-- Metatags -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title -->
        <title>
            <?php if ( is_front_page() ): ?>
                <?php bloginfo( 'name' ); ?> | Artist
            <?php else: ?>
                <?php bloginfo( 'name' ); ?> | <?php wp_title(''); ?>
            <?php endif; ?>
        </title>

        <!-- Styles -->
        <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/dist/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/dist/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/dist/css/lightgallery.css">

        <!-- Icons -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/favicon-194x194.png" sizes="194x194">
        <link rel="icon" type="image/png" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/manifest.json">
        <link rel="mask-icon" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/safari-pinned-tab.svg" color="#ffffff">
        <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/mstile-144x144.png">
        <meta name="msapplication-config" content="<?php bloginfo( 'template_url' ); ?>/dist/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <!-- SEO -->
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta name="author" content="Claudio Carpi">
        <meta name="robots" content="index, follow">
        <link rel="author" href="humans.txt">

        <!-- Facebook -->
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
        <meta property="og:description" content="<?php bloginfo( 'description' ); ?>">
        <meta property="og:url" content="<?php bloginfo( 'url' ); ?>">
        <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
        <meta property="og:image" content="<?php bloginfo( 'template_url' ); ?>/dist/img/screenshot-social.jpg">

        <!-- Google+ -->
		<link rel="canonical" href="<?php bloginfo( 'url' ); ?>">

        <!-- Twitter -->
		<meta name="twitter:card" content="<?php bloginfo( 'name' ); ?>">
		<meta name="twitter:domain" content="<?php bloginfo( 'url' ); ?>">
		<meta name="twitter:site" content="<?php bloginfo( 'url' ); ?>">
		<meta name="twitter:title" content="<?php bloginfo( 'name' ); ?>">
		<meta name="twitter:description" content="<?php bloginfo( 'description' ); ?>">
		<meta name="twitter:creator" content="Claudio Carpi">
		<meta name="twitter:image:src" content="<?php bloginfo( 'template_url' ); ?>/dist/img/screenshot-social.jpg">

        <?php if (  get_field('home-logo-color') || get_field('home-logo-opacity') ): ?>
            <!-- Theme Options -->
            <style>
                <?php // Background ?>
                <?php if ( get_field('home-cover-background') ): ?>
                    .home, .contact {
                        background: <?php the_field('home-cover-background'); ?>;
                    }
                <?php endif; ?>

                <?php // Background Opacity ?>
                <?php if ( get_field('home-cover-opacity') ): ?>
                    .home .cover, .contact .cover {
                        opacity: <?php the_field('home-cover-opacity'); ?>;
                    }
                <?php endif; ?>

                <?php // Logo Color ?>
                <?php if (  get_field('home-logo-color')  ): ?>
                    .home .logo a {
                        color: <?php the_field('home-logo-color'); ?>;
                    }
                <?php endif; ?>

                <?php // Logo Opacity ?>
                <?php if (  get_field('home-logo-opacity')  ): ?>
                    .home .logo {
                        opacity: <?php the_field('home-logo-opacity'); ?>;
                    }
                <?php endif; ?>
            </style>
        <?php endif; ?>
    </head>

    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an outdated browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <style>
            <?php // Menu Background ?>
            <?php if ( get_field('menu-background', 'option') ): ?>
                <?php $menu_background = get_field('menu-background', 'option'); ?>
                nav {
                    background-image: url(<?php echo $menu_background['url']; ?>);
                }
            <?php endif; ?>

            <?php // Menu Color ?>
            <?php if ( get_field('menu-color', 'option') ): ?>
                nav::before {
                    background: <?php the_field('menu-color', 'option'); ?>;
                }
            <?php endif; ?>

            <?php // Menu Opacity ?>
            <?php if ( get_field('menu-opacity', 'option')  ): ?>
                nav::before {
                    opacity: <?php the_field('menu-opacity', 'option'); ?>;
                }
            <?php endif; ?>
        </style>

        <!-- SVG Icons -->
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="icon-instagram" viewBox="0 0 512 512">
                <title>Instagram</title>
                <path d="M464 0H48C21.6 0 0 21.6 0 48v416c0 26.4 21.6 48 48 48h416c26.4 0 48-21.6 48-48V48c0-26.4-21.6-48-48-48zM352 80c0-8.8 7.2-16 16-16h64c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16h-64c-8.8 0-16-7.2-16-16V80zm-96 80c53 0 96 43 96 96s-43 96-96 96-96-43-96-96 43-96 96-96zm192 272c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V224h35.2c-2.1 10.3-3.2 21-3.2 32 0 88.4 71.6 160 160 160s160-71.6 160-160c0-11-1.1-21.7-3.2-32H448v208z"/>
            </symbol>
        </svg>
