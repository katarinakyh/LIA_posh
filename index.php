<?php get_header(); ?>

				<?php query_posts("cat=*"); ?>
				
				<?php if (have_posts()): ?>
				
				<div id="content-wrap-start">
				
					<section id="content">
						
						<?php get_sidebar(); ?>
						
						<?php while (have_posts()) : the_post(); ?>
						
						<article class="list-post" style="background:url('<?php 
						
						if(is_home('blogg')) { 
							echo bloginfo('template_url');?>/img/post_head_bg.png');background-position: left top;background-repeat: no-repeat;';
						<?php } ?>">
						
							<div class="post-img">
								<?php the_post_thumbnail(); ?>
							</div><!-- .post-img -->	
							
							<h2 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      						<small><?php the_date(); ?></small>
							
							<?php the_excerpt(); ?>
							
							<?php the_category(', '); ?>
							
							<a href="<?php the_permalink() ?>"> Läs mer</a>
									
						</article><!-- .list-post -->						
						
					<?php endwhile;?>
					<?php endif; ?>		

<?php get_footer(); ?>