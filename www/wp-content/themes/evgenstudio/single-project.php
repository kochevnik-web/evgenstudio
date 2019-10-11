<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package evgenstudio
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="mb-4">
							<h1><?php the_title(); ?></h1>
							<div class="project_cat">
								<?php
									$post_pro_cat = get_the_terms( $post->ID, 'project_cat' );
									$terms_pro = '';
									foreach ( $post_pro_cat as $value_post_pro_cat ) {
										$terms_pro .= $value_post_pro_cat->name . ' + ';
									}
									$terms_pro = trim( $terms_pro, '+ ' );

									echo $terms_pro;
								?>
							</div>
						</div>
						<div class="d-flex mb-4 justify-content-between">
							<div class="single-project-offer">
								<?php if ( (bool)get_post_meta( $post->ID, 'name_offer', true ) || (bool)get_post_meta( $post->ID, 'city', true ) || (bool)get_post_meta( $post->ID, 'year', true ) ) { ?>
								<?php $context = trim( get_post_meta( $post->ID, 'city', true ) . ', ' . get_post_meta( $post->ID, 'year', true ), ', ' ); ?>
								<div class="font-weight-bold">Заказчик:</div>
								<div><?php echo get_post_meta( $post->ID, 'name_offer', true ); ?></div>
								<div><?php echo $context; ?></div>
								<?php } ?>
							</div>
							<div>
								<img src="<?php  echo wp_get_attachment_image_url( get_post_meta( $post->ID, 'logo', true ), 'full' ); ?>" >
							</div>
						</div>

						<div class="the_content mb-5">
							<?php the_content(); ?>
						</div>

						<?php if ( (bool)get_post_meta( $post->ID, 'link', true ) || (bool)get_post_meta( $post->ID, 'text_link', true ) ) { ?>
						<div class="single-project-footer-link text-center mb-3">
							<a href="<?php echo get_post_meta( $post->ID, 'link', true ); ?>"><?php echo get_post_meta( $post->ID, 'text_link', true ); ?></a>
						</div>
						<?php } ?>

						<div class="nex-post text-center">
							<?php $next_post =  get_adjacent_post( false, '', false, 'project_cat' ); ?>
							<?php if ( $next_post->ID > 0 ) { ?>
								<a href="<?php echo get_permalink( $next_post->ID ); ?>">Следующий проект</a>
								<img class="ml-3" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="">
							<?php } ?>
						</div>
					</div>
				</div>
			</div>

			<?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
