<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package evgenstudio
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="container">
				<div class="row">
					<div class="col-12">
						<header class="page-header">
							<h1 class="page-title mb-5">Поиск по сайту</h1>
						</header><!-- .page-header -->

						<?php echo get_search_form(); ?>

							<?php if ( have_posts() ) : ?>

								<?php
								/* Start the Loop */
								while ( have_posts() ) :
									the_post();

								?>
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<?php
										$post_pro_cat = get_the_terms( $post->ID, 'project_cat' );
										$data_sort = 'all+';
										$terms_pro = '';
										foreach ( $post_pro_cat as $value_post_pro_cat ) {
											$data_sort .= $value_post_pro_cat->slug . '+';
											$terms_pro .= $value_post_pro_cat->name . ' + ';
										}
										$terms_pro = trim( $terms_pro, '+ ' );
									?>
										<div class="project-content mb-4 pb-3">
											<div class="project_item_row_header mb-2 d-flex">
												<div class="title">
												<?php echo $post->post_title ?>
												</div>
												<div class="project_link">
													<a href="<?php echo get_post_meta( $post->ID, 'link', true ); ?>"><?php echo get_post_meta( $post->ID, 'text_link', true ); ?></a>
												</div>
											</div>
											<div class="project_item_row mb-2">
												<div class="project_cat mb-3">
													<?php echo $terms_pro; ?>
												</div>
												<div class="project_desc mb-4">
													<?php echo get_post_meta( $post->ID, 'desc', true ); ?>
												</div>
											</div>
											<div class="project_item_row_footer">
												<a class="project_more cursor-pointer" href="<?php echo get_permalink( $post->ID ); ?>">
													Подробнее
													<img class="ml-3" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="">
												</a>
												<div class="project_logo">
													<img src="<?php  echo wp_get_attachment_image_url( get_post_meta( $post->ID, 'logo', true ), 'full' ); ?>" >
												</div>
											</div>
										</div>

									</article><!-- #post-<?php the_ID(); ?> -->

									<?php
								endwhile;

							else :
								?>

									По вашему запросу ничего не найдено :(
									<div class="non-search-text">Но вы можете ознакомиться с <a href="/#projects">Нашими проектами</a></div>

								<?php
							endif;
						?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();
