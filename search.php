
		 
		 <?php get_header(); ?>
		 <?php get_template_part('slider') ; ?>
	
			 
		     <div class="content fix">
			   
			     <div class="fix main_content_archive floatleft">
				     <div class="news  fix">
					    	
							 <h2 class="latest_frm_cat_title archive_title"><?php printf( __( 'Search Results for: %s', 'brightpage' ), '<span>' . get_search_query() . '</span>' ); ?></h2>	
						
						
					<?php if (have_posts()) : ?>
					
						<?php get_template_part( 'post_excerpt' ); // Post Excerpt (post-excerpt.php) ?>

					
						
					<?php else : ?>
						<h3 class="archive_not_found">404 <span>not found</span></h3>
					<?php endif; ?>	
							 
							 
							 					 </div>
	
				 </div>
				 <?php get_template_part('right_sidebar') ; ?>
			      
			 </div>
		 </div>
		
		<?php get_footer(); ?>