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

set_post_thumbnail_size( 256, 178, true ); // 300px width 200px height, hard crop mode
add_image_size( 'single-post-thumbnail', 960, 9999 ); // Permalink thumbnail size
add_image_size( 'medium', 630, 9999, false );

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

// Avancerade templates 	
   	add_editor_style( '/css/editor-style.css' );
   	add_filter( 'default_content', 'custom_editor_content' );
    function custom_editor_content( $content ) {
         global $current_screen;
         if ( $current_screen->post_type == 'page') {
            $content = '
            	<div class="content-col-main">
					Vänster kolumn: 610 pixlar bred
					&nbsp;
				</div>
      
      			<div class="content-col-side">
      				Höger kolumn: 320 pixlar bred
					&nbsp;
				</div> &nbsp; &nbsp;

            ';
         }
         elseif ( $current_screen->post_type == 'POSTTYPE') {
            $content = '';
         }
        /* elseif ( $current_screen->post_type == 'slidedeck_add_slide') {
            $content = '<div class="rubrik_box">
						<h1 style="margin: -5px 0 5px;">Rubriktext</h1>
						Kort inledande text.
						<a style="margin-top: -15px;" href="#">Läs mer&gt;&gt;-länk (ändra så den länkar rätt!</a>
						</div>';
         }*/

         else {
            $content = '

              

            ';
         }
         return $content;
       }

   
?>