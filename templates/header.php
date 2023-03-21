<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> <!-- Adds classes to body from WP -->
<div class="site-wrapper">
        <header class="header">
            <div class="header-content">
                <div class="logotype-wrapper">
                <a href="<?php echo home_url(); ?>" class="nav-link"> <!-- Link to front page -->
                    <?php   
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            
                            if ( has_custom_logo() ) {
                                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="logotype">';
                            } else {
                                echo '<h1>' . get_bloginfo('name') . '</h1>';
                                }
                    ?>    
                    </a>
                </div>

                <nav class="nav" id="main-nav">
                    <?php 
                        /* Gets the menu */
                        wp_nav_menu(array(
                            'theme_location' => 'mainmenu'
                        ));
                    ?> 
                </nav>
                <button class="nav-toggle" aria-label="toggle navigation">
                    <span class="hamburger"></span>
                </button>
            </div>
        </header>
