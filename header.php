<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Casinos without licence or unlicensed casinos are terms in the Nordic countries"/>
    <title><?php bloginfo('title'); ?> | <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
    
</head>
<body>

<header class="header-section">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {
                    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                } else {
                    echo '<h3>'. get_bloginfo( 'name' ) .'</h3>';
                }
            ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location'=>'primary-menu',
                            'menu_class'=>'navbar-nav mr-auto primary-menu',
                        )
                    );
                ?>
            </div>
        </div>
    </nav>
</header>