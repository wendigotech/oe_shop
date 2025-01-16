<?php
if ( ! function_exists( 'starter_shop_setup' ) ) :

function starter_shop_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'oe_shop', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    //Support custom logo
    add_theme_support( 'custom-logo' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'starter_shop' ),
        'social'  => __( 'Social Links Menu', 'starter_shop' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    register_nav_menu(  'footer_1', __( 'Footer Menu 1', 'oe_shop' )  );

    register_nav_menu(  'footer_2', __( 'Footer Menu 2', 'oe_shop' )  );

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // starter_shop_setup

add_action( 'after_setup_theme', 'starter_shop_setup' );


if ( ! function_exists( 'starter_shop_init' ) ) :

function starter_shop_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // starter_shop_setup

add_action( 'init', 'starter_shop_init' );


if ( ! function_exists( 'starter_shop_custom_image_sizes_names' ) ) :

function starter_shop_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'starter_shop_custom_image_sizes_names' );
endif;// starter_shop_custom_image_sizes_names



if ( ! function_exists( 'starter_shop_widgets_init' ) ) :

function starter_shop_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'name' => __( 'Information', 'oe_shop' ),
        'id' => 'info',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => __( 'Shop sidebar', 'oe_shop' ),
        'id' => 'shop',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>'
    ) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'starter_shop_widgets_init' );
endif;// starter_shop_widgets_init



if ( ! function_exists( 'starter_shop_customize_register' ) ) :

function starter_shop_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'shop_footer', array(
        'title' => __( 'Shop footer', 'oe_shop' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'shop_footer_text', array(
        'type' => 'theme_mod',
        'default' => __( 'Duis pharetra venenatis felis, ut tincidunt ipsum consequat nec. Fusce et porttitor libero, eu aliquam nisi. Nam finibus ullamcorper semper.', 'oe_shop' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_text', array(
        'label' => __( 'Text', 'oe_shop' ),
        'type' => 'textarea',
        'section' => 'shop_footer'
    ));

    $wp_customize->add_setting( 'shop_footer_phone', array(
        'type' => 'theme_mod',
        'default' => __( '+1 234 567-890', 'oe_shop' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_phone', array(
        'label' => __( 'Phone number', 'oe_shop' ),
        'type' => 'text',
        'section' => 'shop_footer'
    ));

    $wp_customize->add_setting( 'shop_footer_phone_url', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_phone_url', array(
        'label' => __( 'Phone url', 'oe_shop' ),
        'type' => 'url',
        'section' => 'shop_footer'
    ));

    $wp_customize->add_setting( 'shop_footer_email', array(
        'type' => 'theme_mod',
        'default' => __( 'hello@company.com', 'oe_shop' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_email', array(
        'label' => __( 'Email', 'oe_shop' ),
        'type' => 'text',
        'section' => 'shop_footer'
    ));

    $wp_customize->add_setting( 'shop_footer_email_url', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_email_url', array(
        'label' => __( 'Email url', 'oe_shop' ),
        'type' => 'url',
        'section' => 'shop_footer'
    ));

    $wp_customize->add_setting( 'shop_footer_colum1_heading', array(
        'type' => 'theme_mod',
        'default' => __( 'Über uns', 'oe_shop' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_colum1_heading', array(
        'label' => __( 'Column 1 Heading', 'oe_shop' ),
        'type' => 'text',
        'section' => 'shop_footer'
    ));

    $wp_customize->add_setting( 'shop_footer_column2_heading', array(
        'type' => 'theme_mod',
        'default' => __( 'Service', 'oe_shop' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_column2_heading', array(
        'label' => __( 'Column 2 Heading', 'oe_shop' ),
        'type' => 'text',
        'section' => 'shop_footer'
    ));

    $wp_customize->add_setting( 'shop_footer_column3_heading', array(
        'type' => 'theme_mod',
        'default' => __( 'Abonnieren', 'oe_shop' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_column3_heading', array(
        'label' => __( 'Column 3 Heading', 'oe_shop' ),
        'type' => 'text',
        'section' => 'shop_footer'
    ));

    $wp_customize->add_setting( 'shop_footer_subscribe_text', array(
        'type' => 'theme_mod',
        'default' => __( 'Abonnieren Sie unseren Newsletter und erhalten Sie exklusive Updates direkt in Ihrem Posteingang.', 'oe_shop' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_subscribe_text', array(
        'label' => __( 'Subscribe text', 'oe_shop' ),
        'type' => 'text',
        'section' => 'shop_footer'
    ));

    $wp_customize->add_setting( 'shop_footer_social_heading', array(
        'type' => 'theme_mod',
        'default' => __( 'Soziale Medien', 'oe_shop' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_social_heading', array(
        'label' => __( 'Social Heading', 'oe_shop' ),
        'type' => 'text',
        'section' => 'shop_footer'
    ));

    $wp_customize->add_setting( 'shop_footer_social_fb', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_social_fb', array(
        'label' => __( 'Facebook', 'oe_shop' ),
        'type' => 'url',
        'section' => 'shop_footer'
    ));

    $wp_customize->add_setting( 'shop_footer_social_tw', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_social_tw', array(
        'label' => __( 'Twitter', 'oe_shop' ),
        'type' => 'url',
        'section' => 'shop_footer'
    ));

    $wp_customize->add_setting( 'shop_footer_social_ig', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_social_ig', array(
        'label' => __( 'Instagram', 'oe_shop' ),
        'type' => 'url',
        'section' => 'shop_footer'
    ));

    $wp_customize->add_setting( 'shop_footer_social_ln', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_social_ln', array(
        'label' => __( 'LinkedIn', 'oe_shop' ),
        'type' => 'url',
        'section' => 'shop_footer'
    ));

    $wp_customize->add_setting( 'shop_footer_social_yt', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_social_yt', array(
        'label' => __( 'YouTube', 'oe_shop' ),
        'type' => 'url',
        'section' => 'shop_footer'
    ));

    $wp_customize->add_setting( 'shop_footer_copyright', array(
        'type' => 'theme_mod',
        'default' => __( 'All Rights Reserved - Company Name', 'oe_shop' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_copyright', array(
        'label' => __( 'Copyright notice', 'oe_shop' ),
        'type' => 'text',
        'section' => 'shop_footer'
    ));

    $wp_customize->add_setting( 'shop_footer_privacy_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_privacy_link', array(
        'label' => __( 'Privacy Policy Link', 'oe_shop' ),
        'type' => 'url',
        'section' => 'shop_footer'
    ));

    $wp_customize->add_setting( 'shop_footer_terms_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'shop_footer_terms_link', array(
        'label' => __( 'Terms link', 'oe_shop' ),
        'type' => 'url',
        'section' => 'shop_footer'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'starter_shop_customize_register' );
endif;// starter_shop_customize_register


if ( ! function_exists( 'starter_shop_enqueue_scripts' ) ) :
    function starter_shop_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_enqueue_script( 'oe_shop-custom', get_template_directory_uri() . '/custom.js', array( 'jquery' ), '1.0.38', true );

    wp_deregister_script( 'oe_shop-popper' );
    wp_enqueue_script( 'oe_shop-popper', get_template_directory_uri() . '/assets/js/popper.min.js', [], '1.0.38', true);

    wp_deregister_script( 'oe_shop-bootstrap' );
    wp_enqueue_script( 'oe_shop-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', [], '1.0.38', true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'oe_shop-bootstrap' );
    wp_enqueue_style( 'oe_shop-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', [], '1.0.38', 'all');

    wp_deregister_style( 'oe_shop-blocks' );
    wp_enqueue_style( 'oe_shop-blocks', get_template_directory_uri() . '/blocks.css', [], '1.0.38', 'all');

    wp_deregister_style( 'oe_shop-style' );
    wp_enqueue_style( 'oe_shop-style', get_bloginfo('stylesheet_url'), [], '1.0.38', 'all');

    wp_deregister_style( 'oe_shop-custom' );
    wp_enqueue_style( 'oe_shop-custom', get_template_directory_uri() . '/custom.css', [], '1.0.38', 'all');

    wp_deregister_style( 'oe_shop-gallery' );
    wp_enqueue_style( 'oe_shop-gallery', get_template_directory_uri() . '/gallery.css', [], '1.0.38', 'all');

    wp_deregister_style( 'oe_shop-button' );
    wp_enqueue_style( 'oe_shop-button', get_template_directory_uri() . '/button.css', [], '1.0.38', 'all');

    wp_deregister_style( 'oe_shop-notice' );
    wp_enqueue_style( 'oe_shop-notice', get_template_directory_uri() . '/notice.css', [], '1.0.38', 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'starter_shop_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
if( !class_exists( 'PG_Helper_v2' ) ) { require_once "inc/wp_pg_helpers.php"; }
if( !class_exists( 'PG_WC_Helper' ) ) { require_once "inc/wc_pg_helpers.php"; }
if( !class_exists( 'PG_Blocks_v3' ) ) { require_once "inc/wp_pg_blocks_helpers.php"; }
if( !class_exists( 'PG_Simple_Form_Mailer' ) ) { require_once "inc/wp_simple_form_mailer.php"; }
if( !class_exists( 'PG_Smart_Walker_Nav_Menu' ) ) { require_once "inc/wp_smart_navwalker.php"; }
if( !class_exists( 'PG_Pagination' ) ) { require_once "inc/wp_pg_pagination.php"; }

    /* Pinegrow generated Include Resources End */

/* Setting up theme supports options */

function starter_shop_setup_theme_supports() {
    // Don't edit anything between the following comments.
    /* Pinegrow generated Theme Supports Begin */

    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );    
//Tell WP to scope loaded editor styles to the block editor                    
add_theme_support( 'editor-styles' );
    /* Pinegrow generated Theme Supports End */
}
add_action('after_setup_theme', 'starter_shop_setup_theme_supports');

/* End of setting up theme supports options */


/* Setting up WooCommerce filters */
/* Pinegrow generated WooCommerce Filters Begin */

    /* This filter lets us multiple variants of the same template name. It also handles locating the templates that are present in the theme or plugin. */        
    add_filter( 'wc_get_template', function( $template, $template_name, $args, $template_path, $default_path ) {
        global $pg_wc_use_template, $pg_wc_use_template_cache_oe_shop;
        if(!isset($pg_wc_use_template_cache_oe_shop)) $pg_wc_use_template_cache_oe_shop = array();
        
        if( !empty($pg_wc_use_template) ) {
            $template_variant = trailingslashit( get_template_directory() ) . 'woocommerce/' . str_replace( '.php', '-'.$pg_wc_use_template.'.php', $template_name);
            $template_key = $template_name . '-' . $pg_wc_use_template;
        } else {
            $template_key = $template_name;
            $template_variant = trailingslashit( get_template_directory() ) . 'woocommerce/' . $template_name;
        }
            
        if(isset($pg_wc_use_template_cache_oe_shop[ $template_key ])) {
            if($pg_wc_use_template_cache_oe_shop[ $template_key ]) {
                $template = $template_variant;
            }
        } else if(file_exists($template_variant)) {
            $template = $template_variant;
            $pg_wc_use_template_cache_oe_shop[ $template_key ] = true;
        } else {
            $pg_wc_use_template_cache_oe_shop[ $template_key ] = false;
        }
 
        return $template;
    }, 10, 5 );  
            
    /* Pinegrow generated WooCommerce Filters End */
/* End Setting up WooCommerce filters */


/* Overriding WooCommerce template functions */

// Don't edit anything between the following comments.
/* Pinegrow generated Override WooCommerce Functions Begin */

if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
function woocommerce_template_loop_product_thumbnail() {
    wc_get_template( 'loop/product-image.php' );                    
}
}

if ( ! function_exists( 'woocommerce_template_loop_product_title' ) ) {
function woocommerce_template_loop_product_title() {
    wc_get_template( 'loop/title.php' );                    
}
}

    /* Pinegrow generated Override WooCommerce Functions End */

/* End of Overriding WooCommerce template functions */


/* Creating Editor Blocks with Pinegrow */

function starter_shop_blocks_init() {
    // Register blocks. Don't edit anything between the following comments.
    /* Pinegrow generated Register Pinegrow Blocks Begin */
    require_once 'blocks/front-hero/front-hero_register.php';
    require_once 'blocks/front-small-banner/front-small-banner_register.php';
    require_once 'blocks/front-small-banners/front-small-banners_register.php';
    require_once 'blocks/shop-front-cta/shop-front-cta_register.php';
    require_once 'blocks/shop-product-list/shop-product-list_register.php';
    require_once 'blocks/shop-product-pick/shop-product-pick_register.php';
    require_once 'blocks/shop-categories/shop-categories_register.php';
    require_once 'blocks/shop-categories-select/shop-categories-select_register.php';
    require_once 'blocks/shop-newsletter/shop-newsletter_register.php';
    require_once 'blocks/shop-feature/shop-feature_register.php';
    require_once 'blocks/shop-features/shop-features_register.php';
    require_once 'blocks/shop-mosaic/shop-mosaic_register.php';
    require_once 'blocks/shop-sidebar-heading/shop-sidebar-heading_register.php';
    require_once 'blocks/shop-sidebar-search/shop-sidebar-search_register.php';

    /* Pinegrow generated Register Pinegrow Blocks End */
}
add_action('init', 'starter_shop_blocks_init');

/* End of creating Editor Blocks with Pinegrow */


/* Register Blocks Categories */

function starter_shop_register_blocks_categories( $categories ) {

    // Don't edit anything between the following comments.
    /* Pinegrow generated Register Blocks Category Begin */

$categories = array_merge( $categories, array( array(
        'slug' => 'shop',
        'title' => __( 'Shop blocks', 'oe_shop' )
    ) ) );

    /* Pinegrow generated Register Blocks Category End */
    
    return $categories;
}
add_action( version_compare('5.8', get_bloginfo('version'), '<=' ) ? 'block_categories_all' : 'block_categories', 'starter_shop_register_blocks_categories');

/* End of registering Blocks Categories */


/* Loading editor styles for blocks */

function starter_shop_add_blocks_editor_styles() {
    // Add blocks editor styles. Don't edit anything between the following comments.
    /* Pinegrow generated Load Blocks Editor Styles Begin */
    add_editor_style( 'bootstrap/css/bootstrap.min.css' );
    add_editor_style( 'blocks.css' );

    /* Pinegrow generated Load Blocks Editor Styles End */
}
add_action('admin_init', 'starter_shop_add_blocks_editor_styles');

/* End of loading editor styles for blocks */

?>