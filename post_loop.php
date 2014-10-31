<?php if(!is_paged()){ ?>
						<?php
							$args = array( 'post_type' => 'post', 'category_name' => 'Uncategorized', 'posts_per_page' => 3 );
							$loop = new WP_Query( $args );
						?>
						<?php while( $loop->have_posts()): $loop->the_post(); ?>
							 <div class="header_3 fix">
								  <h3><?php the_category(','); ?></h3>
						</div>
							<div class="news_content fix">
								 
								 <div class="news_pick_img">
								 <?php the_post_thumbnail('content-image', array('class' => 'post-thumb')); ?></div>
								 <div class="news_pick_des">
								   
									 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									 <p class="date"><?php the_time('M d, Y'); ?></p> 
									 <p> <?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">Read More</a>
									 </p>
								 </div>
							</div>
							
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
						<?php } ?>
						