<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/css/slick-theme.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/js/slick.min.js',array('jquery'), '', $the_theme->get( 'Version' ), true );
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'child-understrap-scripts-custom', get_stylesheet_directory_uri() . '/js/child-theme-custom.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_image_size( 'category-thumb', 730, 587 ); //300 pixels wide (and unlimited height)
add_image_size( 'vijesti', 200, 200 , true); //300 pixels wide (and unlimited height)


/**
 * Count number of widgets in a sidebar
 * Used to add classes to widget areas so widgets can be displayed one, two, three or four per row
 */
if ( ! function_exists( 'understrap_slbd_count_widgets' ) ) {
    function understrap_slbd_count_widgets( $sidebar_id ) {
        // If loading from front page, consult $_wp_sidebars_widgets rather than options
        // to see if wp_convert_widget_settings() has made manipulations in memory.
        global $_wp_sidebars_widgets;
        if ( empty( $_wp_sidebars_widgets ) ) :
            $_wp_sidebars_widgets = get_option( 'sidebars_widgets', array() );
        endif;

        $sidebars_widgets_count = $_wp_sidebars_widgets;

        if ( isset( $sidebars_widgets_count[ $sidebar_id ] ) ) :
            $widget_count = count( $sidebars_widgets_count[ $sidebar_id ] );
            $widget_classes = 'widget-count-' . count( $sidebars_widgets_count[ $sidebar_id ] );
            if ( $widget_count % 4 == 0 || $widget_count > 6 ) :
                // Four widgets per row if there are exactly four or more than six
                $widget_classes .= ' col-md-3';
            elseif ( 6 == $widget_count ) :
                // If two widgets are published
                $widget_classes .= ' col-md-2';
            elseif ( $widget_count >= 3 ) :
                // Three widgets per row if there's three or more widgets 
                $widget_classes .= ' col-md-4';
            elseif ( 2 == $widget_count ) :
                // If two widgets are published
                $widget_classes .= ' col-md-6';
            elseif ( 1 == $widget_count ) :
                // If just on widget is active
                $widget_classes .= ' col-md-12';
            endif; 
            return $widget_classes;
        endif;
    }
}


if ( ! function_exists( 'understrap_widgets_init' ) ) {
    /**
     * Initializes themes widgets.
     */
    function understrap_widgets_init() {
        /*register_sidebar( array(
            'name'          => __( 'Right Sidebar', 'understrap' ),
            'id'            => 'right-sidebar',
            'description'   => 'Right sidebar widget area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );*/
        register_sidebar( array(
            'name'          => __( 'Naslovna', 'understrap' ),
            'id'            => 'naslovna',
            'description'   => 'naslovna widget area',
            'before_widget' => '<aside id="%1$s" class="widget">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
         register_sidebar( array(
            'name'          => __( 'Vijesti Sidebar', 'understrap' ),
            'id'            => 'vijesti-sidebar',
            'description'   => 'Vijesti sidebar widget area',
            'before_widget' => '<aside id="%1$s" class="widget">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
         
         register_sidebar( array(
            'name'          => __( 'U Fokusu', 'understrap' ),
            'id'            => 'ufokusu',
            'description'   => 'ufokusu widget area',
            'before_widget' => '<aside id="%1$s" class="widget">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
          register_sidebar( array(
            'name'          => __( 'Edukacija', 'understrap' ),
            'id'            => 'edukacija',
            'description'   => 'edukacija widget area',
            'before_widget' => '<aside id="%1$s" class="widget">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
          register_sidebar( array(
            'name'          => __( 'Drustva_upravljanje', 'understrap' ),
            'id'            => 'drustva_upravljanje',
            'description'   => 'drustva_upravljanje widget area',
            'before_widget' => '<aside id="%1$s" class="widget">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
          register_sidebar( array(
            'name'          => __( 'Drustva_upravljanje_pojedinacno', 'understrap' ),
            'id'            => 'drustva_upravljanje_pojedinacno',
            'description'   => 'Drustva_upravljanje_pojedinacno widget area',
            'before_widget' => '<aside id="%1$s" class="widget">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
          register_sidebar( array(
            'name'          => __( 'fondovi_pojedinacno', 'understrap' ),
            'id'            => 'fondovi_pojedinacno',
            'description'   => 'fondovi_pojedinacno widget area',
            'before_widget' => '<aside id="%1$s" class="widget">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Left Sidebar', 'understrap' ),
            'id'            => 'left-sidebar',
            'description'   => 'Left sidebar widget area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );

        /*register_sidebar( array(
            'name'          => __( 'Hero Slider', 'understrap' ),
            'id'            => 'hero',
            'description'   => 'Hero slider area. Place two or more widgets here and they will slide!',
            'before_widget' => '<div class="carousel-item">',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => '',
        ) );

        register_sidebar( array(
            'name'          => __( 'Hero Static', 'understrap' ),
            'id'            => 'statichero',
            'description'   => 'Static Hero widget. no slider functionallity',
            'before_widget'  => '<div id="%1$s" class="static-hero-widget %2$s '. understrap_slbd_count_widgets( 'statichero' ) .'">', 
            'after_widget'   => '</div><!-- .static-hero-widget -->', 
            'before_title'   => '<h3 class="widget-title">', 
            'after_title'    => '</h3>',
        ) );*/

        register_sidebar( array(
            'name'          => __( 'Footer Full', 'understrap' ),
            'id'            => 'footerfull',
            'description'   => 'Widget area below main content and above footer',
            'before_widget'  => '<div id="%1$s" class="footer-widget %2$s '. understrap_slbd_count_widgets( 'footerfull' ) .'">', 
            'after_widget'   => '</div><!-- .footer-widget -->', 
            'before_title'   => '<h3 class="widget-title">', 
            'after_title'    => '</h3>', 
        ) );

    }
} // endif function_exists( 'understrap_widgets_init' ).
add_action( 'widgets_init', 'understrap_widgets_init' );



// Register Custom Post Type
function edukacija_fondovi() {

    $labels = array(
        'name'                  => _x( 'edukacija_fondovi', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Edukacija fond', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Edukacija fondovi', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Dodaj novi fond za edukaciju', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Edukacija fond', 'text_domain' ),
        'description'           => __( 'Važni pojmovi', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'Pojmovi' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'edukacija_fond', $args );

}
add_action( 'init', 'edukacija_fondovi', 0 );



// Register Custom Post Type
function Edu_fund_analiza() {

    $labels = array(
        'name'                  => _x( 'Fund analiza', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Edu fund analiza', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Edukacija Fundametalna', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Edu fund analiza', 'text_domain' ),
        'description'           => __( 'Edu fund analiza', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'Edu fund analiza', $args );

}
add_action( 'init', 'Edu_fund_analiza', 0 );


// Register Custom Post Type
function Edu_Tehnicka_analiza() {

    $labels = array(
        'name'                  => _x( 'Edu Tehnicka analiza', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Edu Tehnicka analiza', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Edukacija tehnička analiza', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Dodaj edu Tehnicka analiza', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Edu Tehnicka analiza', 'text_domain' ),
        'description'           => __( 'Edu Tehnicka analiza', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'Edu Tehnicka analiza', $args );

}
add_action( 'init', 'Edu_Tehnicka_analiza', 0 );


// Register Custom Post Type
function Leksikon() {

    $labels = array(
        'name'                  => _x( 'Leksikon', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Leksikon', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Leksikon', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Dodaj novi pojam', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Leksikon', 'text_domain' ),
        'description'           => __( 'Leksikon', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'Leksikon', $args );

}
add_action( 'init', 'Leksikon', 0 );

// Register Custom Post Type
function Profil_drustva() {

    $labels = array(
        'name'                  => _x( 'Profil drustva', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Profil drustva', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Profil društva', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Dodaj novi profil društva', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Profil drustva', 'text_domain' ),
        'description'           => __( 'Profil drustva', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-home',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'Profil drustva', $args );

}
add_action( 'init', 'Profil_drustva', 0 );

// Register Custom Post Type
function custom_post_type2() {

    $labels = array(
        'name'                  => _x( 'Pojam-dana', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Pojam-dana', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Pojam dana', 'text_domain' ),
        'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Dodaj pojam dana', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Pojam-dana', 'text_domain' ),
        'description'           => __( 'Pojam-dana', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'Pojam-dana' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'Pojam-dana', $args );

}
add_action( 'init', 'custom_post_type2', 0 );



// Register Custom Post Type
function drustva_za_upravljanje() {

    $labels = array(
        'name'                  => _x( 'drustva', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'drustva', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Društva', 'text_domain' ),
        'name_admin_bar'        => __( 'drustva', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Dodaj društvo', 'text_domain' ),
        'new_item'              => __( 'Dodaj društvo', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'drustva', 'text_domain' ),
        'description'           => __( 'drustva', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'drustva', $args );

}
add_action( 'init', 'drustva_za_upravljanje', 0 );


// Register Custom Post Type
function Fondovi() {

    $labels = array(
        'name'                  => _x( 'Fondovi', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Fond', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Fondovi', 'text_domain' ),
        'name_admin_bar'        => __( 'Fondovi', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New Fond', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Fond', 'text_domain' ),
        'description'           => __( 'Fondovi', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'Fondovi', $args );

}
add_action( 'init', 'Fondovi', 0 );



/**
 * Extend Recent Posts Widget 
 *
 * Adds different formatting to the default WordPress Recent Posts Widget
 */

Class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {

        function widget($args, $instance) {

                if ( ! isset( $args['widget_id'] ) ) {
                $args['widget_id'] = $this->id;
            }

            $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );

            /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
            $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

            $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
            if ( ! $number )
                $number = 5;
            $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

            /**
             * Filter the arguments for the Recent Posts widget.
             *
             * @since 3.4.0
             *
             * @see WP_Query::get_posts()
             *
             * @param array $args An array of arguments used to retrieve the recent posts.
             */
            $r = new WP_Query( apply_filters( 'widget_posts_args', array(
                'posts_per_page'      => $number,
                'no_found_rows'       => true,
                'post_status'         => 'publish',
                'ignore_sticky_posts' => true
            ) ) );

            if ($r->have_posts()) :
            ?>
            <?php echo $args['before_widget']; ?>
            <!--   if ( $title ) {
                echo $args['before_title'] . $title . $args['after_title'];
            }  -->
           
            <table class="table table-striped tablica_objave">
            <?php while ( $r->have_posts() ) : $r->the_post(); ?>
                
                <tr>
                     <td><?php the_post_thumbnail(array(150,150,crop)); ?></td>
                     <td><a href="<?php the_permalink(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a></td>
                 </tr>
                  
                   
                  

              <!--  <?php if ( $show_date ) : ?>
                    <span class="post-date"><?php echo get_the_date(); ?></span>
                <?php endif; ?> --> 
                
            <?php endwhile; ?>
           </table>
            <?php echo $args['after_widget']; ?>
            <?php
            // Reset the global $the_post as this query will have stomped on it
            wp_reset_postdata();

            endif;
        }
}
function my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('My_Recent_Posts_Widget');
}
add_action('widgets_init', 'my_recent_widget_registration');


 
function my_acf_init() {
  acf_update_setting('google_api_key', 'AIzaSyDxSSFvDIr5NGKiDtEIF7u0fCVpbDcOOeY');
}
add_action('acf/init', 'my_acf_init'); 




       