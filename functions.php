<?php 

function add_theme_scripts() {

   /*  wp_enqueue_style('main-google-font', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap'); */

    /* wp_enqueue_style('style', get_stylesheet_uri(), NULL, filemtime(get_template_directory() . 'style.css')); */
    
    wp_enqueue_style('style', get_stylesheet_uri());


    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/script/main.js', NULL, filemtime(get_template_directory().'/assets/script/main.js'), true);

    if(is_front_page()) {
    wp_enqueue_script('front-page-js', get_template_directory_uri() . '/assets/script/front-page.js', NULL, filemtime(get_template_directory().'/assets/script/front-page.js'), true);
    }

    /*if(is_page(8)) {
        wp_enqueue_script('bookCM-js', get_template_directory_uri() . '/assets/scripts/books.js', NULL, filemtime(get_template_directory().'/assets/scripts/books.js'), true);
    }
    */

    if(is_home()) {
        wp_enqueue_script('article-js', get_template_directory_uri() . '/assets/script/articles.js', NULL, filemtime(get_template_directory().'/assets/script/articles.js'), true);
    }
    if(is_archive()) {
        wp_enqueue_script('article-js', get_template_directory_uri() . '/assets/script/articles.js', NULL, filemtime(get_template_directory().'/assets/script/articles.js'), true);
    }
    if(is_page(38)) {
        wp_enqueue_script('portfoli-js', get_template_directory_uri() . '/assets/script/portfolio.js', NULL, filemtime(get_template_directory().'/assets/script/portfolio.js'), true);
    }
    if(is_singular('portfolio')) {
        wp_enqueue_script('single-portfolio-js', get_template_directory_uri() . '/assets/script/single-portfolio.js', NULL, filemtime(get_template_directory().'/assets/script/single-portfolio.js'), true);
    }
    if(is_page_template('services/logotype.php')) {
        wp_enqueue_script('service-js', get_template_directory_uri() . '/assets/script/service.js', NULL, filemtime(get_template_directory().'/assets/script/service.js'), true);
    }
    
}

add_action('wp_enqueue_scripts','add_theme_scripts');

function theme_setup() {

    add_theme_support('title-tag');
    add_theme_support('widgets');

    register_nav_menus(array(
        'mainmenu' => 'Main Menu',
        'categorymenu' => 'Category Menu',
        'archives' => 'Archives',
        'footermenu' => 'Footer Menu',
        'portfoliocatergories' => 'Portfolio Menu'
    ));
    //Support for utvald bild
    add_theme_support('post-thumbnails');

    add_theme_support( 'custom-logo');
}

add_action('after_setup_theme', 'theme_setup');

add_filter('next_posts_link_attributes', 'my_posts_link_attributes');
add_filter('previous_posts_link_attributes', 'my_posts_link_attributes');


function my_posts_link_attributes($postLinkClass) {
    $postLinkClass = 'class="btn"';
    return $postLinkClass;
}

function custom_portfolio_init() {
    // Set up the labels for the portfolio post type
    $labels = array(
        'name' => __( 'Portfolio' ),
        'singular_name' => __( 'Portfolio Item' ),
        'add_new_item' => __( 'Add New Portfolio Item' ),
        'edit_item' => __( 'Edit Portfolio Item' ),
        'menu_name' => __( 'Portfolio' ),
        'all_items' => __( 'All Portfolio Items' ),
    );

    // Set up the arguments for the portfolio post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon' => 'dashicons-portfolio',
        'has_archive' => true,
        'rewrite' => array( 'slug' => 'portfolio' ),
    );

    // Register the portfolio post type
    register_post_type( 'portfolio', $args );

    // Set up the labels for the portfolio category taxonomy
    $labels = array(
        'name' => __( 'Portfolio Categories' ),
        'singular_name' => __( 'Portfolio Category' ),
        'search_items' => __( 'Search Portfolio Categories' ),
        'all_items' => __( 'All Portfolio Categories' ),
        'parent_item' => __( 'Parent Portfolio Category' ),
        'edit_item' => __( 'Edit Portfolio Category' ),
        'update_item' => __( 'Update Portfolio Category' ),
        'add_new_item' => __( 'Add New Portfolio Category' ),
        'new_item_name' => __( 'New Portfolio Category Name' ),
        'menu_name' => __( 'Portfolio Categories' ),
    );

    // Set up the arguments for the portfolio category taxonomy
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'rewrite' => array( 'slug' => 'portfolio-category' ),
    );

    // Register the portfolio category taxonomy
    register_taxonomy( 'portfolio_category', 'portfolio', $args );
}
add_action( 'init', 'custom_portfolio_init' );

/* function portfolio_item_post_type() {
    register_post_type('portfolio_items',
        array(
            'labels' => array(
                'name' => 'Portfolio Items',
                'singular_name' => 'Portfolio Item'
            ),
            'hierarchical' => true,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-gallery',
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'portfolio')
        )
    );
}
add_action('init','portfolio_item_post_type');

function portfolio_item_taxonomy() {
    register_taxonomy('subjects','portfolio_items',
        array(
            'labels' => array(
                'name' => 'Portfolio Categories',
                'singular_name' => 'Portfolio Category'
            ),
            'hierarchical' => true,
            'public' => true
        )    
    );
}
add_action('init','portfolio_item_taxonomy'); */

/* function add_sidebars() {
    register_sidebar(
        array(
            'name' => 'Portfolio Sidebar',
            'id' => 'portfolio-sidebar'
        )
    );
}

add_action('widgets','add_sidebars'); */





/* function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="sub-menu top-sub-menu" /',$menu);        
    return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class');  */


/* add_action('wp_head','my_analytics');
function my_analytics() {
?>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-V5G2F6WZMV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-V5G2F6WZMV');
</script>
<?php
} */

/* add_filter( 'template_include', 'use_archive_portfolio', 99 );
function use_archive_portfolio( $template ) {

    if ( is_post_type_archive('portfolio-items')  ) {
        $new_template = locate_template( array( 'archive-portfolio_items.php' ) );
        if ( '' != $new_template ) {
            return $new_template ;
        }
    }

    return $template;
}
 */


