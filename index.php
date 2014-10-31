
		 
		 <?php get_header(); ?>
		 <?php get_template_part('slider') ; ?>
		 <?php get_template_part('seconde_menu') ; ?>
			 
		     <div class="content fix">
			   <?php get_template_part('left_sidebar') ; ?>
			     <div class="main_content fix  floatleft">
				     <div class="news fix">
					    	
								 <?php get_template_part('post_loop') ; ?>
	 
					 </div>
				      <?php get_template_part('video') ; ?>
				 </div>
				 <?php get_template_part('right_sidebar') ; ?>
			      
			 </div>
		 </div>
		
		<?php get_footer(); ?>