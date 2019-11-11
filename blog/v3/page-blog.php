<?php /* Template Name: Blog */ get_header(); ?>

	<main role="main" class="main">

		<!-- section -->
		<section class="full-section">

			<div class="container">
				<div style="display:none;"><!--Para voltar o site com os blocos de destaque basta escluir essa div atenção ao fechamento dela-->
				<!-- DESTAQUE -->
				<div class="col-xs-12 col-md-6 destaque-1-block">
					<?php
					wp_reset_query();

					$args  = array(
						'post_type'=>'post',
						'posts_per_page'=>'1',
						'meta_query' => array(
							array(
								'key' => 'destaque_home', // name of custom field
					            'value' => '"destaque1"', // matches exactly "red"
					            'compare' => 'LIKE'
							)
						)		
					);
					?>
						
					<?php $destaque1 = new WP_Query( $args ); ?>

					<?php if ( $destaque1->have_posts() ) : ?>
					<?php while ( $destaque1->have_posts() ) : $destaque1->the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>

							<!-- post thumbnail -->
							<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
								<a class="image-post" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('destaque1'); // Declare pixel size you need inside the array ?>
								</a>
							<?php endif; ?>
							<!-- /post thumbnail -->

							<!-- post title -->
							<div class="post-title">
								<h2>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								</h2>
								<!-- /post title -->

								<!-- post details -->
								<span class="date"><?php the_time('j \d\e F \d\e Y'); ?></span>
							</div> 

							<?php html5wp_excerpt('html5wp_index');?>

						</article>
						<!-- /article -->

					<?php endwhile; ?> 
					<?php endif; ?>
				</div>
				<!-- DESTAQUE -->

				<!-- DESTAQUE 2 -->
				<div class="col-xs-12 col-md-6 destaque-2-block">
					<?php
					wp_reset_query();

					$args  = array(
						'post_type'=>'post',
						'posts_per_page'=>'3',
						'meta_query' => array(
							array(
								'key' => 'destaque_home', // name of custom field
					            'value' => '"destaque2"', // matches exactly "red"
					            'compare' => 'LIKE'
							)
						)		
					);
					?>
						
					<?php $destaque2 = new WP_Query( $args ); ?>

					<?php if ( $destaque2->have_posts() ) : ?>
					<?php while ( $destaque2->have_posts() ) : $destaque2->the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>

							<div class="destaque-2-thumb">
								<!-- post thumbnail -->
								<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
									<a class="image-post" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail('destaque2'); // Declare pixel size you need inside the array ?>
									</a>
								<?php endif; ?>
							</div>

							<div class="destaque-2-content">
								<div class="post-title">
									<h2>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
									</h2>
									<!-- /post title -->

									<!-- post details -->
									<span class="date"><?php the_time('j \d\e F \d\e Y'); ?></span>
								</div> 
								<?php html5wp_excerpt('html5wp_index');?>
							</div>

						</article>
						<!-- /article -->

					<?php endwhile; ?> 
					<?php endif; ?>
				</div>
				<!-- DESTAQUE 2 -->
				</div>

				<div class="col-xs-12 banner-blog">
					<a href="http://www.ginecomastiatratamento.com.br"><img src="https://www.ginecomastiatratamento.com.br/blog/wp-content/uploads/2016/12/banner-blog.jpg" alt="Tratamento de Ginecomastia"></a>
				</div>

				<div class="posts-list col-xs-12 col-sm-8 col-md-8 col-lg-8">
					<?php
						wp_reset_query();

						if( get_query_var( 'paged' ) ){
							$paged = get_query_var('paged');
						}elseif( get_query_var('page') ){
							$paged = get_query_var('page');
						}else{
							$paged = 1;
						}

						$args  = array(
							'post_type'=>'post',
							'posts_per_page'=> wp_is_mobile() ? '4' : '5',
							'paged'=>$paged					
						);
						
						query_posts($args);
						get_template_part('loop'); 
					?>

					<?php get_template_part('pagination'); ?>
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
