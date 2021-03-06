<?php

    /**
     * Functions and definitions
     *
     * @link https://developer.wordpress.org/themes/basics/theme-functions/
     *
     * @package Fancy Lab
     */

    /**
     * Register custom navigation walker
     */

    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

    /**
     * Customizer addition
     */
    require_once get_template_directory() . '/inc/customizer.php';

    /**
     * Enqueue scripts and styles.
     *
     * @since Fancy Lab
     *
     * @return void
     */
    function fancy_lab_scripts() {
        //Bootstrap javascript and CSS files
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
        wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.0.0', 'all' );

        // Theme's main stylesheet
        wp_enqueue_style( 'fancy-lab-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
        // Google Fonts
        // wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=Seaweed+Script&display=swap');
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script' );

        // Flexslider Javascript and CSS files
        wp_enqueue_script( 'flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
        wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all' );
        wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array( 'jquery' ), '', true );
    }
    add_action( 'wp_enqueue_scripts', 'fancy_lab_scripts' );

    if ( !function_exists( 'fancy_lab_setup' ) ) {
        /**
         * Sets up theme defaults and registers support for various WordPress features.
         *
         * Note that this function is hooked into the after_setup_theme hook, which
         * runs before the init hook. The init hook is too late for some features, such
         * as indicating support for post thumbnails.
         *
         * @since Fancy Lab 1.0
         *
         * @return void
         */
        function fancy_lab_setup() {

            // Add default posts and comments RSS feed links to head.
            add_theme_support( 'automatic-feed-links' );

            /*
             * Let WordPress manage the document title.
             * This theme does not use a hard-coded <title> tag in the document head,
             * WordPress will provide it for us.
             */
            add_theme_support( 'title-tag' );

            /**
             * Add post-formats support.
             */
            add_theme_support(
                'post-formats',
                array(
                    'link',
                    'aside',
                    'gallery',
                    'image',
                    'quote',
                    'status',
                    'video',
                    'audio',
                    'chat',
                )
            );

            // This theme uses wp_nav_menu() in two locations.
            register_nav_menus(
                array(
                    'fancy_lab_main_menu'   => esc_html__( 'Fancy Lab Main Menu', 'fancylab' ),
                    'fancy_lab_footer_menu' => esc_html__( 'Fancy Lab Footer Menu', 'fancylab' ),
                )
            );

            /*
             * Make theme available for translation.
             * Translations can be filed in the /languages/ directory.
             * If you're building a theme based on Fancy Lab, use a find and replace
             * to change 'fancy-lab' to the name of your theme in all the template files.
             */
            $textdomain = 'fancylab';
            load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/' );
            load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

            /*
             * Switch default core markup for search form, comment form, and comments
             * to output valid HTML5.
             */
            add_theme_support(
                'html5',
                array(
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                    'navigation-widgets',
                )
            );

            /**
             * Add WooCommerce support.
             */

            add_theme_support( 'woocommerce', array(
                'thumbnail_image_width' => 255,
                'single_image_width'    => 255,
                'product_grid'          => array(
                    'default_rows'    => 10,
                    'min_rows'        => 5,
                    'max_rows'        => 10,
                    'default_columns' => 1,
                    'min_columns'     => 1,
                    'max_columns'     => 4,
                ),
            ) );

            add_theme_support( 'wc-product-gallery-zoom' );
            add_theme_support( 'wc-product-gallery-lightbox' );
            add_theme_support( 'wc-product-gallery-slider' );

            add_theme_support( 'custom-logo', array(
                'height'      => 85,
                'width'       => 160,
                'flex_height' => true,
                'flex_width'  => true,
            ) );

            add_image_size( 'fancy-lab-slider', 1920, 800, array( 'center', 'center' ) );
            add_image_size( 'fancy-lab-blog', 960, 640, array( 'center', 'center' ) );

            if ( !isset( $content_width ) ) {
                $content_width = 600;
            }
        }
    }
    add_action( 'after_setup_theme', 'fancy_lab_setup', 0 );

    /**
     * If WooCommerce is active, we want to enqueue a file
     * with a couple of template overrides
     */

    if ( class_exists( 'WooCommerce' ) ) {
        require get_template_directory() . '/inc/wc-modification.php';
    }

    /**
     * Show cart contents / total Ajax
     */
    add_filter( 'woocommerce_add_to_cart_fragments', 'fancy_lab_woocommerce_header_add_to_cart_fragment' );

    function fancy_lab_woocommerce_header_add_to_cart_fragment( $fragments ) {
        global $woocommerce;

        ob_start();

    ?>
    <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
<?php
    $fragments['span.items'] = ob_get_clean();
        return $fragments;
    }

    /**
     * Register widget area.
     *
     * @since Fancy Lab
     *
     * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
     *
     * @return void
     */
    function fancy_lab_widgets_init() {

        register_sidebar(
            array(
                'name'          => esc_html__( 'Fancy Lab Main Sidebar', 'fancylab' ),
                'id'            => 'fancy-lab-sidebar-1',
                'description'   => esc_html__( 'Add widgets here to appear in your right sidebar.', 'fancylab' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>',
            )
        );

        register_sidebar(
            array(
                'name'          => esc_html__( 'Sidebar Shop', 'fancylab' ),
                'id'            => 'fancy-lab-sidebar-shop',
                'description'   => esc_html__( 'Add woocommerce widgets here to appear in your sidebar.', 'fancylab' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>',
            )
        );

        register_sidebar(
            array(
                'name'          => esc_html__( 'Footer Sidebar 1', 'fancylab' ),
                'id'            => 'fancy-lab-sidebar-footer1',
                'description'   => esc_html__( 'Add woocommerce widgets here to appear in your footer area.', 'fancylab' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>',
            )
        );

        register_sidebar(
            array(
                'name'          => esc_html__( 'Footer Sidebar 2', 'fancylab' ),
                'id'            => 'fancy-lab-sidebar-footer2',
                'description'   => esc_html__( 'Add woocommerce widgets here to appear in your footer area.', 'fancylab' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>',
            )
        );

        register_sidebar(
            array(
                'name'          => esc_html__( 'Footer Sidebar 3', 'fancylab' ),
                'id'            => 'fancy-lab-sidebar-footer3',
                'description'   => esc_html__( 'Add woocommerce widgets here to appear in your footer area.', 'fancylab' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>',
            )
        );
    }
add_action( 'widgets_init', 'fancy_lab_widgets_init' );
