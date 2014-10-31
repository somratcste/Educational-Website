
		 
		 <?php get_header(); ?>
		 
		 
			 
		     <div class="content fix">
			   <?php get_template_part('left_sidebar') ; ?>
			     <div class="main_content fix  floatleft">
				     <div class="news fix">
					    	
							
							
							
						<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>

	<!---- Post Query info here -->
	<div class="header_3 fix">
								  <h3><?php the_category(','); ?></h3>
						</div>
							<div class="news_content fix">
								 
								 <div class="news_pick_img">
								 <?php the_post_thumbnail('content-image', array('class' => 'post-thumb')); ?></div>
								 <div class="news_pick_des">
								   
									 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									 <p class="date"><?php the_time('M d, Y'); ?></p> 
									 <p> <?php the_content(); ?>	
									 </p>
									 <?php comments_template( '', true ); ?> 
								 </div>
							</div>
	
<?php endwhile; ?>
<?php endif; ?>
						
	 
					 </div>
				     
				 </div>
				 <?php get_template_part('right_sidebar') ; ?>
			      
			 </div>
		 </div>
		
		<?php get_footer(); ?>