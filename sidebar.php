<div id="sidebar">

	<?php include('searchform.php'); ?>
	
	<div id="sidebar-content">

	<?php wp_list_categories('title_li=<h2>' . __('CATEGORIES') . '</h2>' ); ?> 
	<br />
	<br />
	<?php wp_tag_cloud( $args ); ?> 
	<?php
	$recent_comments = get_comments( array(
    'number'    => 3,
    'status'    => 'approve'
	) );
	?>
	</div><!-- #sidebar-content -->
	<img src="<?php echo bloginfo('template_url'); ?>/img/sidebar_bottom_bg.png" />
</div>