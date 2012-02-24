<?php get_header(); ?>

				<?php query_posts("cat=*"); ?>
				
				<?php if (have_posts()): ?>
				
				<div id="content-wrap-start">
				
					<section id="content">
					
						<?php while (have_posts()) : the_post(); ?>
						
						<article class="list-post">
						
							<div class="post-img">
								<?php the_post_thumbnail(); ?>
							</div><!-- .post-img -->	
							
							<h2 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      						<small><?php the_date(); ?></small>
							
							
							
								<?php the_excerpt(); ?>
								
								<a href="<?php the_permalink() ?>"> Läs mer</a>
							
							
								
						</article><!-- .list-post -->	
						
						<?php endwhile;?>
						<?php endif; ?>		

<?php get_footer(); ?>