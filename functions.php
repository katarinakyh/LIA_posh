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
add_image_size( 'single-post-thumbnail', 906, 640, false ); // Permalink thumbnail size
add_image_size( 'medium', 582, 9999, false );


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
   	add_editor_style( 'editor.css' );
   	add_filter( 'default_content', 'custom_editor_content' );
    function custom_editor_content( $content ) {
         global $current_screen;
         if ( $current_screen->post_type == 'page') {
            $content = '
            	<div class="column">
            	<h2>Rubrik</h2>
            	</div>
            	<div class="column">
            	<h2>Rubrik</h2>
            	</div>
            	<div class="column">
            	<h2>Rubrik</h2>
            	</div>
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


/** HÄR BÖJAR TOOLBOX FUNCTIONS SOM BEHÖVS FÖR ATT KOMMENTARERNA SKA VISAS RÄTT**/
 if ( ! function_exists( 'toolbox_comment' ) ) :

/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own toolbox_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Toolbox 0.4
 */
function toolbox_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'toolbox' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'toolbox' ), ' ' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer>
				<div class="comment-author vcard">
					<?php echo get_avatar( $comment, 40 ); ?>
					<?php printf( __( '%s <span class="says">says:</span>', 'toolbox' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
				</div><!-- .comment-author .vcard -->
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em><?php _e( 'Your comment is awaiting moderation.', 'toolbox' ); ?></em>
					<br />
				<?php endif; ?>

				<div class="comment-meta commentmetadata">
					<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>">
					<?php
						/* translators: 1: date, 2: time */
						printf( __( '%1$s at %2$s', 'toolbox' ), get_comment_date(), get_comment_time() ); ?>
					</time></a>
					<?php edit_comment_link( __( '(Edit)', 'toolbox' ), ' ' );
					?>
				</div><!-- .comment-meta .commentmetadata -->
			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for toolbox_comment()

  
?>