<?php
/*
Template Name: Startsida
*/
?>
<?php get_header(); ?>
				
				<section id="mediaclips">
				
					<?php query_posts("cat=3&showposts=9"); ?>
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
					
					
						
					

					<div class="border">
						<?php
						if(has_post_thumbnail()) {
						
							
						
							echo '<a href="';
							the_permalink();
							echo '">';
							the_post_thumbnail();
							echo '</a>';
							
							
						} else {
							
							the_content();
							
						}
						?>
						
						<?php //the_title(); ?>
						<?php //the_excerpt(); ?>
						
					</div><!-- .border -->

					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
									
				</section><!-- #mediaclips -->
				
				<div id="content-wrap">
				
					<section id="content">
					
						<article>
						
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>						
				
							<?php the_content(); ?>

							<?php endwhile; endif; ?>
							
						</article>					

<?php get_footer(); ?>