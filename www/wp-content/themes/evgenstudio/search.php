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

						<?php echo get_search_query(); ?>

							<?php if ( have_posts() ) : ?>

								<header class="page-header">
									<h1 class="page-title">Поиск по сайту</h1>
								</header><!-- .page-header -->


								<?php
								/* Start the Loop */
								while ( have_posts() ) :
									the_post();

								?>
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<header class="entry-header">
											<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

										</header><!-- .entry-header -->

									</article><!-- #post-<?php the_ID(); ?> -->

									<?php
								endwhile;

							else :

							endif;
						?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();
