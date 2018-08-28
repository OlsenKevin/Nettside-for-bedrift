<?php


function ti_constructzine_theme_setup(){
	global $content_width;

	if ( ! isset( $content_width ) ) {
		$content_width = 634;
	}
	require_once( 'includes/custom-functions.php' );

	require_once( 'includes/customizer.php' );
	
	require_once( 'includes/widget_testimonials.php' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'automatic-feed-links' );

	$args = array(

		'default-image'          => get_template_directory_uri() . '/images/header.png',
		'random-default'         => false,
		'width'                  => 1903,
		'height'                 => 720,
		'flex-height'            => false,
		'flex-width'             => false,
		'default-text-color'     => '',
		'header-text'            => false,
		'uploads'                => true,
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',

	);
	load_theme_textdomain('constructzine-lite', get_template_directory() . '/languages'); 
	add_theme_support( 'custom-header', $args );
}




/*

*	Constructzine Style

*/

function ti_constructzine_frontend_files() {

	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0', false );


	if ( is_singular() ) {
		wp_enqueue_script( "comment-reply" );
	}

	

	wp_enqueue_script( 'carouFredSel', get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.1-packed.js', array( 'jquery' ), '6.2.1', true );

    wp_enqueue_style( 'ti_constructzine_source_sans', '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic'); 
    wp_enqueue_style( 'ti_constructzine_yanone', '//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300,700'); 

	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0', true );
}


add_action( 'wp_enqueue_scripts', 'ti_constructzine_frontend_files' );



function ti_constructzine_menu() {


	$locations = array(

		'top-menu' => __( 'Top Header', 'constructzine-lite' ),

	);

	register_nav_menus( $locations );


}


add_action( 'init', 'ti_constructzine_menu' );


add_action( 'after_setup_theme', 'ti_constructzine_theme_setup' );



function ti_constructzine_sidebar() {


	$args = array(

		'id'            => 'general_sidebar',
		'name'          => __( 'General Sidebar', 'constructzine-lite' ),
		'description'   => __( 'This sidebar will appear in blog page.', 'constructzine-lite' ),
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',

	);

	register_sidebar( $args );


	$args = array(

		'id'            => 'home_sidebar',
		'name'          => __( 'Homepage Sidebar', 'constructzine-lite' ),
		'description'   => __( 'This sidebar will appear on the frontpage', 'constructzine-lite' ),
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
		'before_widget' => '<div  id="%1$s" class="feedback widget block %2$s">',
		'after_widget'  => '</div>',

	);

	register_sidebar( $args );

}


add_action( 'widgets_init', 'ti_constructzine_sidebar' );

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'ti_constructzine_required_plugins' );

function ti_constructzine_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        // This is an example of how to include a plugin from the WordPress Plugin Repository
        array(
            'name'      => __('Tweet Old Post','constructzine-lite'),
            'slug'      => 'tweet-old-post',
            'required'  => false,
        ),
        array(
            'name'      => __('Contact Form 7','constructzine-lite'),
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
        array(
            'name'      => __('WP Product Review','constructzine-lite'),
            'slug'      => 'wp-product-review',
            'required'  => false,
        ),
    

    );

    // Change this to your theme text domain, used for internationalising strings
    $theme_text_domain = 'plumbelt-lite';

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'domain'            => 'plumbelt-lite',           // Text domain - likely want to be the same as your theme.
        'default_path'      => '',                          // Default absolute path to pre-packaged plugins
        'parent_menu_slug'  => 'themes.php',                // Default parent menu slug
        'parent_url_slug'   => 'themes.php',                // Default parent URL slug
        'menu'              => 'install-required-plugins',  // Menu slug
        'has_notices'       => true,                        // Show admin notices or not
        'is_automatic'      => false,                       // Automatically activate plugins after installation or not
        'message'           => '',                          // Message to output right before the plugins table
        'strings'           => array(
            'page_title'                                => __( 'Install Required Plugins', $theme_text_domain ),
            'menu_title'                                => __( 'Install Plugins', $theme_text_domain ),
            'installing'                                => __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
            'oops'                                      => __( 'Something went wrong with the plugin API.', $theme_text_domain ),
            'notice_can_install_required'               => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_install_recommended'            => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_install'                     => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
            'notice_can_activate_required'              => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_activate_recommended'           => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_activate'                    => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
            'notice_ask_to_update'                      => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_update'                      => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
            'install_link'                              => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                             => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
            'return'                                    => __( 'Return to Required Plugins Installer', $theme_text_domain ),
            'plugin_activated'                          => __( 'Plugin activated successfully.', $theme_text_domain ),
            'complete'                                  => __( 'All plugins installed and activated successfully. %s', $theme_text_domain ), // %1$s = dashboard link
            'nag_type'                                  => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
        )
    );

    tgmpa( $plugins, $config );

}

// Custom title function
function ti_constructzine_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'constructzine-lite' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'ti_constructzine_wp_title', 10, 2 );


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);


// dette legger til en klasse som heter current-menu-class for å farge legge aktive tabs i meny
function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}