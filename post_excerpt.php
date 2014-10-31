 <?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
						
							<div class="news_content fix">
								 
								 <div class="news_pick_img">
								 <?php the_post_thumbnail('content-image', array('class' => 'post-thumb')); ?></div>
								 <div class="news_pick_des">
								   
									 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									 <div class="post_info">
						Posted in: <?php the_category(','); ?> | Posted on: <?php the_time('M d, Y'); ?>
						<?php comments_popup_link('No Comment','1 Comment','% Comments'); ?>
					</div>
									 
									 <p> <?php the_content(); ?>	
									 </p>
									 
								 </div>
							</div>
	
<?php endwhile; ?>
<?php endif; ?>