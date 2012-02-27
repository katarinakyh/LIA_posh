<?php get_header(); ?>
				
				<?php if (have_posts()): ?>
				
				<div id="content-wrap-start">
				
					<section id="content">
					
						<?php while (have_posts()) : the_post(); ?>
					<nav id="nav-single">
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
						<span class="nav-next""><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
					</nav><!-- #nav-single -->						
						<article class="list-post">
						
							<div class="post-img">
								<?php the_post_thumbnail(); ?>
							</div><!-- .post-img -->	
							
							<h2 class="postTitle"><?php the_title(); ?></h2>
      						
      						<small><?php the_date(); ?></small>
												
							<?php the_content(); ?>
								

						</article><!-- .list-post -->	
						
						<div style="clear:both"></div>
						
						<?php comments_template( '', true ); ?>						
					<?php endwhile;?>
					<?php endif; ?>		
		<div style="clear:both"></div>
<?php get_footer(); ?>