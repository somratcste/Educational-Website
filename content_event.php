<div class="events fix">
					     <div class="header_3 fix">
						     <h3>Events</h3>
					     </div>
					    
						     
						    
							 
							 <?php if(!is_paged()){ ?>
<?php
	$args = array( 'post_type' => 'post', 'category_name' => 'events', 'posts_per_page' => 5 );
	$loop = new WP_Query( $args );
?>

<?php while( $loop->have_posts()): $loop->the_post(); ?>
 <div class="events_content fix">
<div class="events_img fix">
							 <?php the_post_thumbnail('event_image', array('class' => 'post-thumb')); ?>
						     </div>
							  <div class="events_des fix">
	<!---- Post Query info here -->
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><p><?php the_time('M d, Y'); ?></p>
	
	 </div>
	  </div>			 
<?php endwhile; ?>

<?php wp_reset_query(); ?>

<?php }

 ?>
											  
			
					</div> 