 
					     <div class="header_3 fix">
						     <h3>Sponser's</h3>
					     </div>
						 
						 
						 <?php if(!is_paged()){ ?>
<?php
	$args = array( 'post_type' => 'sponser',  'posts_per_page' => 4 );
	$loop = new WP_Query( $args );
?>
<?php while( $loop->have_posts()): $loop->the_post(); ?>

	<!---- Post Query info here -->
	<?php the_post_thumbnail('sponser_image', array('class' => 'post-thumb')); ?>
	
<?php endwhile; ?>
<?php wp_reset_query(); ?>
<?php } ?>
						 
						 
					 