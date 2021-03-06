<?php get_header(); ?>
				
				<?php if (have_posts()): ?>
				
				<div id="content-wrap-start">
				
					<section id="content">
					
						<?php get_sidebar(); ?>
					
						<?php while (have_posts()) : the_post(); ?>
						
						<article class="list-post">
						
							<div class="post-img">
							
							
							
							</div><!-- .post-img -->	
							
							<h2 class="postTitle"><?php the_title(); ?></h2>
      						
      						<small><?php the_date(); ?></small>
      						
      						<?php the_post_thumbnail('single-post-thumbnail'); ?>
												
							<?php the_content(); ?>
								
							<?php the_category(', '); ?>
							
							<nav id="nav-single">
								<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
								<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
							</nav><!-- #nav-single -->	
							
						</article><!-- .list-post -->	
						
											

						
						<div style="clear:both"></div>
						
						<?php comments_template( '', true ); ?>						
					<?php endwhile;?>
					<?php endif; ?>		
		
<?php get_footer(); ?>