
		 
		 <?php get_header(); ?>
		 <?php get_template_part('slider') ; ?>
	
			 
		     <div class="content fix">
			   
			     <div class="fix main_content_archive floatleft">
				     <div class="news  fix">
					    	
							 
							 
							 <h1 class="archivetitle">

    <?php if (have_posts()) : ?>

        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

            <?php /* If this is a category archive */ if (is_category()) { ?>

                <?php _e('Archive for the'); ?> '<?php echo single_cat_title(); ?>' <?php _e('Category'); ?>                                    

            <?php /* If this is a tag archive */  } elseif( is_tag() ) { ?>

                <?php _e('Archive for the'); ?> <?php single_tag_title(); ?> Tag

            <?php /* If this is a daily archive */ } elseif (is_day()) { ?>

                <?php _e('Archive for'); ?> <?php the_time('F jS, Y'); ?>                                        

            <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>

                <?php _e('Archive for'); ?> <?php the_time('F, Y'); ?>                                    

            <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>

                <?php _e('Archive for'); ?> <?php the_time('Y'); ?>                                        

            <?php /* If this is a search */ } elseif (is_search()) { ?>

                <?php _e('Search Results'); ?>                            

            <?php /* If this is an author archive */ } elseif (is_author()) { ?>

                <?php _e('Author Archive'); ?>                                        

            <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>

                <?php _e('Blog Archives'); ?>                                        

    <?php } ?>

</h1>



<?php if(have_posts()): ?>
							<?php while(have_posts()): the_post(); ?>
						
							<div class="news_content fix ">
								 
								 <div class="news_pick_img">
								 <?php the_post_thumbnail('content-image', array('class' => 'post-thumb')); ?></div>
								 <div class="news_pick_des">
								   
									 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									 <p class="date"><?php the_time('M d, Y'); ?></p> 
									 <p> <?php the_excerpt(); ?>	
									 </p>
									 
								 </div>
							</div>
								
							<?php endwhile; ?>
							<?php endif; ?>
	 



<?php else : ?>

    <h3><?php _e('404 Error&#58; Not Found'); ?></h3>

<?php endif; ?>


							 
							 
							 
							 
							 
							 
							 
							 
							 					 </div>
	
				 </div>
				 <?php get_template_part('right_sidebar') ; ?>
			      
			 </div>
		 </div>
		
		<?php get_footer(); ?>