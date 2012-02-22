<?php
/*
Template Name: Startsida
*/
?>
<?php get_header(); ?>
				

				<section id="mediaclips">
					<div class="big">
					</div><!-- .big -->
					
						<?php query_posts("cat=3&showposts=9"); ?>
						
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
						<div class="border">
							<?php
							$i=0;
							
							if(has_post_thumbnail()) {						
								$i++;
								echo '<a class="'.$i.'" href="';
								the_permalink();
								echo '">';
								the_post_thumbnail();
								echo '</a>';
								
								
							} else {
								
								echo '<a href="';
								the_permalink();
								echo '">';
								the_content();
								echo '</a>';
								
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
						
							<h2>About</h2>
							
							<p>Posh makes cool, advanced and interactive things for events, trade fairs and showrooms using multitouch screens, back projections, 3D, other rich media technologies and high-tech hardware.<br /> But the specific technology is not really a limitation, we love a technical challenge and outrageous, impossible ideas.<br /> That's when great things come alive! There should be no creative limits to things such as games, presentations and visualizations.<br /> We simply refuse to work with static, boring roll-ups, plain walls and brochure stands. Our mission is to create cool and spectacular events to make our customer the center of attention, for our customer to rock the socks off their clients and competitors.<br /> Check out some of the showcase videos first, and if you like what you see, let's talk creative ideas and business! We're going to make you an offer you can't refuse.
							
							Posh makes cool, advanced and interactive things for events, trade fairs and showrooms using multitouch screens, back projections, 3D, other rich media technologies and high-tech hardware.<br /> But the specific technology is not really a limitation, we love a technical challenge and outrageous, impossible ideas.<br /> That's when great things come alive! There should be no creative limits to things such as games, presentations and visualizations.<br /> We simply refuse to work with static, boring roll-ups, plain walls and brochure stands. Our mission is to create cool and spectacular events to make our customer the center of attention, for our customer to rock the socks off their clients and competitors.<br /> Check out some of the showcase videos first, and if you like what you see, let's talk creative ideas and business! We're going to make you an offer you can't refuse.
							
							Posh makes cool, advanced and interactive things for events, trade fairs and showrooms using multitouch screens, back projections, 3D, other rich media technologies and high-tech hardware.<br /> But the specific technology is not really a limitation, we love a technical challenge and outrageous, impossible ideas.<br /> That's when great things come alive! There should be no creative limits to things such as games, presentations and visualizations.<br /> We simply refuse to work with static, boring roll-ups, plain walls and brochure stands. Our mission is to create cool and spectacular events to make our customer the center of attention, for our customer to rock the socks off their clients and competitors.<br /> Check out some of the showcase videos first, and if you like what you see, let's talk creative ideas and business! We're going to make you an offer you can't refuse.					
							Posh makes cool, advanced and interactive things for events, trade fairs and showrooms using multitouch screens, back projections, 3D, other rich media technologies and high-tech hardware.<br /> But the specific technology is not really a limitation, we love a technical challenge and outrageous, impossible ideas.<br /> That's when great things come alive! There should be no creative limits to things such as games, presentations and visualizations.<br /> We simply refuse to work with static, boring roll-ups, plain walls and brochure stands. Our mission is to create cool and spectacular events to make our customer the center of attention, for our customer to rock the socks off their clients and competitors.<br /> Check out some of the showcase videos first, and if you like what you see, let's talk creative ideas and business! We're going to make you an offer you can't refuse.</p>
							
							<!--<div id="logoimage"> </div>-->
							
						</article>					

<?php get_footer(); ?>