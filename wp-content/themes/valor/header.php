<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    <meta http-equiv="description" content="">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/jquery.modal.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/responsiveslides.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/slider_theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/styles.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/responsive.css"/>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.16/moment-timezone-with-data.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.modal.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/responsiveslides.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'index' ); ?>>
<div id="wrapper">
    <div id="header">
        <div id="mobile_menu">
            <ul>
                <li id="mobile_menu_btn"><a href="/"></a></li>
                <li id="sitename"><a href="/">Valor</a></li>
                <li id="mob_search"><a href="/">&nbsp;</a></li>


				<?php echo do_shortcode( '[qtranslate_selector]' ); ?>


                <li class=""><a href="http://data.valorservice.com" class="member-login-link">Login</a></li>

            </ul>
        </div>

        <div class="head_menu">
			<?php
			wp_nav_menu( array(
				             'menu'      => 'main',
				             'container' => false
			             ) );
			?>
			<?php get_search_form(); ?>

            <li id="top_lang">

				<?php echo do_shortcode( '[qtranslate_selector]' ); ?>


            <li class=""><a href="http://data.valorservice.com" class="member-login-link">Login</a></li>

        </div>
    </div>
