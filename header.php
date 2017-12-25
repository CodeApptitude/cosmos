<?php
/**
 * The theme header
 *
 * @package cosmos
 */
?>
<!doctype html>
<html class="no-js" lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page">
    <header>
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
        <nav class="main-navigation" id="primary-navigation">
            <?php wp_nav_menu( [
                        'theme_location'  => 'primary',
                        'menu_id'         => 'main-menu'
                    ]); ?>
        </nav>
        <?php endif; ?>
    </header>
    <div id="content">