<?php
/*
Template Name: Startsida
*/
?>
<?php get_header(); ?>
				<section id="mediaclips">
					<div id="cover">
					</div>				
					<?php query_posts("cat=3&showposts=9"); ?>

					<?php
					
						$n_id = 1;

						if (have_posts()) : while (have_posts()) : the_post(); 
					
					?>
										
						<div class="border">
						
							<?php							
							
							if(has_post_thumbnail()) {						
								
								echo '<div class="shw ' . $n_id . '">';
								the_post_thumbnail();
								echo '</div>';								
								
							} 
							
							?>
		
						</div><!-- .border -->
						<div style="font-size: 20px; color: #f00;"></div>
							<div class="big" id="big<?php echo $n_id; ?>">
							
								<div class="close <?php echo $n_id; ?>"></div>
							
								<div class="next <?php echo $n_id; ?>"></div>
								<div class="prev <?php echo $n_id; ?>"></div>
								
								<?php if(preg_match('#http://www\.youtube\.com/v/([^&"\'? ]*)#', the_content() ,$match) ) {
									
									the_excerpt();
									
								} else {
								
									the_post_thumbnail('single-post-thumbnail'); ?>
								<div class="imagecaption" style="height:auto; width: 100%; background:#000;margin-top:-8px;border-radius: 15px;color:#fff;padding:8px;">
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink() ?>"> Läs mer</a>
								</div>
																
							</div><!-- .big -->
						<?php } ?>
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