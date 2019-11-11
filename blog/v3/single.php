<?php get_header(); ?>

	<main role="main" class="main">

		<!-- section -->
		<section class="full-section">

			<div class="container">

				<div class="post-content col-xs-12 col-sm-8 col-md-8 col-lg-8">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>

							<!-- post thumbnail -->
							<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
								<?php the_post_thumbnail(); // Fullsize image for the single post ?>
							<?php endif; ?>
							<!-- /post thumbnail -->

							<!-- post title -->
							<div class="post-title">
								<h1>
									<?php the_title(); ?>
								</h1>

								<span class="date"><?php the_time('j \d\e F \d\e Y'); ?></span>								
							</div>
							<!-- /post title -->

							<div class="post-the-content">
								<?php the_content(); // Dynamic Content ?>
							</div>

							<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

							<?php comments_template(); ?>

						</article>
						<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

						</article>
						<!-- /article -->

					<?php endif; ?>
				</div>

				<div class="blog-sidebar col-xs-12 col-sm-4 col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-1">
					<div class="side-block posts-list">
						<h3>Últimos Posts</h3>
						<?php
							wp_reset_query();

							$args  = array(
								'post_type'=>'post',
								'posts_per_page'=> '4',				
							);
							
							query_posts($args);
							get_template_part('loop-related'); 
						?>
					</div>
					<?php get_sidebar(); ?>
				</div>
			</div>

		</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
