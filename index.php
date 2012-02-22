<?php get_header(); ?>
				
				<section id="mediaclips">
				
					<?php query_posts("cat=3&showposts=10"); ?>
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
					<!--<a href="<?php //the_permalink() ?>">
					
						
					</a>-->

					<div class="border">
						<?php
						if(has_post_thumbnail()) {
						
							the_post_thumbnail();
							
						} else {
							
							echo 'Banana!';
							
						}
						?>
						
						<?php //the_title(); ?>
						<?php //the_excerpt(); ?>
						
					</div><!-- .border -->

					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				
					<div class="border"> <div class="img"> </div> </div>
					<div class="border"> <div class="img"> </div> </div>
					<div class="border"> <div class="img"> </div> </div>
					<div class="border"> <div class="img"> </div> </div>
					<div class="border"> <div class="img"> </div> </div>
					<div class="border"> <div class="img"> </div> </div>
					<div class="border"> <div class="img"> </div> </div>
					<div class="border"> <div class="img"> </div> </div>
					
				</section>
				
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