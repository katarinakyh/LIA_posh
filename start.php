<html>
<head>
<style type="text/css">

element {
}

</style>
</head>
</html><?php
/*
Template Name: Startsida
*/
?>
<?php get_header(); ?>
				<section id="mediaclips">
					<div id="cover">
					</div>				
					<?php query_posts("cat=3,11&showposts=9"); ?>

					<?php
						
						$n_id = 1;

						if (have_posts()) : while (have_posts()) : the_post(); 
					
					?>
										
						<div class="border">
						
							<?php							
							
							if(has_post_thumbnail()) {						
								
								echo '<div class="shw ' . $n_id . '">';
								the_post_thumbnail('gallery');
								echo '</div>';								
								
							} 
							
							?>
		
						</div><!-- .border -->
						<div style="font-size: 20px; color: #f00;"></div>
							<div class="big" id="big<?php echo $n_id; ?>">
							
								<div class="close <?php echo $n_id; ?>"></div>				
								<div class="next <?php echo $n_id; ?>"></div>
								<div class="prev <?php echo $n_id; ?>"></div>
								
								<?php 
								
								
								
								if(in_category(11)) {
									
									the_content();
								 	
								
								} else if(in_category(3)) {
								
									the_post_thumbnail('zoom'); 
								
								}
								
								
									
								?>
								
								<div class="imagecaption">
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink() ?>"> Läs mer</a>
								</div>
																
							</div><!-- .big -->
						
						<?php $n_id++; ?>
												
						<?php //echo $i; ?>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>
				</section><!-- #mediaclips -->
				
				<div id="content-wrap-start">
				
					<section id="content">
					
						<article>
						
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>						
				
							<?php the_content(); ?>

							<?php endwhile; endif; ?>
							
						</article>					

<?php get_footer(); ?>