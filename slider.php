</div>
<div class="container coloumn fix>
<div class="slider floatleft">
			     <div class="slide_show">
				
				<div class="slider-wrapper theme-light">
				
				
                 <div  class="nivoSlider" id="slider"> 
				 
				 
				 <?php if(!is_paged()){ ?>
<?php
	$args = array( 'post_type' => 'slider', 'posts_per_page' => 5 );
	$loop = new WP_Query( $args );
?>
<?php while( $loop->have_posts()): $loop->the_post(); ?>

	<!---- Post Query info here -->
	<?php the_post_thumbnail('slider_image', array('class' => 'post-thumb')); ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
<?php } ?>

				       
				       
			      </div >
				  </div>
				
				 </div>
			     
			 </div>
			 </div>
			 <div class="container coloumn fix">