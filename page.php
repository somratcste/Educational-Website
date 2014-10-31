
		 
		 <?php

		 get_header(); ?>
		
		 
			 
		     <div class="content fix">
			   
			     <div class="main_content fix  floatleft">
				     <div class="news fix">
					    	
								 <?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
						
							<div class="news_content fix">
								 
								 <div class="news_pick_img">
								 <?php the_post_thumbnail('content-image', array('class' => 'post-thumb')); ?></div>
								 <div class="news_pick_des">
								   
									 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									 <p class="date"><?php the_time('M d, Y'); ?></p> 
									 <p> <?php the_content(); ?>	
									 </p>
									 
								 </div>
							</div>
	
<?php endwhile; ?>
<?php endif; ?>
	 
					 </div>
				 </div>
				 
			      
			 </div>
		 </div>
		
		<?php get_footer(); ?>