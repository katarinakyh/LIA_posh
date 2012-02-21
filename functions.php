<?php
/*
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'themename' ),
	'footer' => __( 'Footer Menu', 'themename' ),
	'utility' => __( 'Utility Menu', 'themename' )
) );
*/

//Add default posts and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );

// This theme supports editor styles
/*add_editor_style("/css/layout-style.css");*/

// Disable the admin bar in 3.1
show_admin_bar( false );

// Removes "Please Upgrade" notification in dashboard
if ( !current_user_can( 'edit_users' ) ) {
  add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
  add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
}

// Changes WordPress logo at login to whatever is set
add_action('login_head', 'my_custom_login_logo');

function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_directory').'/img/posh_login.gif) !important; }
    </style>';
}

// If site is under maintance activate this
/*
add_action('get_header', 'cwc_maintenance_mode');
add_filter('show_admin_bar', '__return_false');
function cwc_maintenance_mode() {
    if ( !current_user_can( 'edit_themes' ) || !is_user_logged_in() ) {
        wp_die('SavorMedia.se genomgår just nu en förändring (2011-12-21-2011-12-22). Välkommen tillbaka senare.');
    }
}*/

// Style excerpt
add_filter('the_excerpt', 'excerpt_abooze');

function excerpt_abooze($text) {
   return str_replace('[...]', '...', $text); 
}
   
?>