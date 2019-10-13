<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package evgenstudio
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">

				<div class="error-bg d-flex align-items-center justify-content-center flex-column">
					<img src="<?php echo get_template_directory_uri(); ?>/img/error404.png" class="mb-4">
					<p class="error-text text-center">Страница не найдена</p>
					<p class="error-text-1 text-center">Но мы нашли интересные <a href="/#projects">Проекты</a></p>
				</div>

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
