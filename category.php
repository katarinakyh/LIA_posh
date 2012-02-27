<?php get_header(); ?>
<<<<<<< HEAD

			<?php if (have_posts()): ?>
=======
				
				<?php if (have_posts()): ?>
>>>>>>> 00e796ef1c3da76d06859ba7960435b1dbd750b9
				
				<div id="content-wrap-start">
				
					<section id="content">
					
						<?php while (have_posts()) : the_post(); ?>
						
<<<<<<< HEAD
						<article class="list-post">
=======
						<article class="list-post" style="background:url('<?php 
						
						if(is_home('blogg')) { 
							echo bloginfo('template_url');?>/img/post_head_bg.png');background-position: left top;background-repeat: no-repeat;';
						<?php } ?>">
>>>>>>> 00e796ef1c3da76d06859ba7960435b1dbd750b9
						
							<div class="post-img">
								<?php the_post_thumbnail(); ?>
							</div><!-- .post-img -->	
							
							<h2 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      						<small><?php the_date(); ?></small>
							
<<<<<<< HEAD
							
							
								<?php the_excerpt(); ?>
								
								<a href="<?php the_permalink() ?>"> Läs mer</a>
							
							
								
						</article><!-- .list-post -->	
						
						<?php endwhile;?>
						<?php endif; ?>		
=======
							<?php the_excerpt(); ?>
							<?php wp_list_categories( $args ); ?> 
							<a href="<?php the_permalink() ?>"> Läs mer</a>
									
						</article><!-- .list-post -->						
						
					<?php endwhile;?>
					
					<?php endif; ?>		
>>>>>>> 00e796ef1c3da76d06859ba7960435b1dbd750b9

<?php get_footer(); ?>