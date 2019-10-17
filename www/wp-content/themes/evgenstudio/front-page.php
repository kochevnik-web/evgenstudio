<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

		<section id="main">
			<div class="container">
				<div class="row mt-5">
					<div class="col-md-5 d-flex align-items-center">
						<h2><?php echo get_the_title(); ?></h2>
					</div>
					<div class="col-md-7">
						<img class="imgList1" src="<?php echo get_template_directory_uri() . '/img/main-list.png'; ?>" alt="">
					</div>
				</div>
				<div class="row main-content" id="about">
					<div class="col-md-5 mb-4">
						<?php echo get_the_content(); ?>
					</div>
					<div class="col-md-7 pt-5">
						<img class="imgList2" src="<?php echo get_template_directory_uri() . '/img/list-2.png'; ?>" alt="">
					</div>
				</div>
			</div>
		</section>

		<section id="uslugi">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h3 class="mb-4">Наши услуги</h3>

						<?php $count_uslugi = get_post_meta( $post->ID, 'uslugi', true ); ?>
						<?php if ( (bool)$count_uslugi && $count_uslugi > 0 ) { ?>
							<?php for ( $u = 0; $u < $count_uslugi; $u++ ) { ?>

							<div class="uslugi-item mb-5">
								<div class="title mb-2">
									<?php echo get_post_meta( $post->ID, 'uslugi_' . $u . '_name', true ); ?>
								</div>
								<div class="link">
									<span class="cursor-pointer mr-3">Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
									<div class="d-none uslugi-content">

										<h4 class="mb-5"><?php echo get_post_meta( $post->ID, 'uslugi_' . $u . '_name', true ); ?></h4>
										<?php echo get_post_meta( $post->ID, 'uslugi_' . $u . '_text', true ); ?>
									</div>
								</div>
							</div>

							<?php } ?>
						<?php } ?>

					</div>
					<div class="col-md-7">
						<img class="imgList3" src="<?php echo get_template_directory_uri() . '/img/list-3.png'; ?>" alt="">
						<div class="uslugi-modal-wrapper">
							<button class="close-uslugi-modal position-absolute">
								<img src="<?php echo get_template_directory_uri(); ?>/img/close.svg">
							</button>
							<div class="uslugi-modal">
								<div class="uslugi-modal-content">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="uslugi-modal-wrapper-global position-fixed">
			<div class="position-relative w-100 h-100">
				<button class="close-uslugi-modal position-absolute">
					<img src="<?php echo get_template_directory_uri(); ?>/img/close.svg">
				</button>
				<div class="uslugi-modal">
					<div class="uslugi-modal-content-2">

					</div>
				</div>
			</div>
		</div>

		<?php $projects = get_post_meta( $post->ID, 'projects', true ); ?>
		<?php if( (bool)$projects && $projects > 0 ) { ?>
		<?php

		$arr = array();
		$arr_cat = array();

		for ( $p = 0; $p < $projects; $p++ ){
			$arr[] = get_post( get_post_meta( $post->ID, 'projects_' . $p . '_single_project', true ), OBJECT );
			$post_cat = get_the_terms( get_post_meta( $post->ID, 'projects_' . $p . '_single_project', true ), 'project_cat' );
			foreach ( $post_cat as $value_cat ) {
				if ( !array_key_exists( $value_cat->slug, $arr_cat ) ) {
					$arr_cat[$value_cat->slug] = $value_cat->name;
				}
			}
		}

		?>
		<section id="projects">
			<div class="container">
				<div class="row mb-5">
					<div class="col-12">
						<h3>Реализованные проекты</h3>
					</div>
					<?php if( count( $arr_cat ) > 0 ) { ?>
					<div class="col-12">
						<ul class="projects-sorting list-unstyled m-0">
						<li><span class="mr-3 cursor-pointer active" data-sort="all">Все</span></li>
							<?php foreach ( $arr_cat as $key_arr_cat => $value_arr_cat ) { ?>
							<li><span class="mr-3 cursor-pointer" data-sort="<?php echo $key_arr_cat; ?>"><?php echo $value_arr_cat; ?></span></li>
							<?php } ?>
						</ul>
					</div>
					<?php } ?>
				</div>

				<?php foreach ( $arr as $post_pro ) { ?>
				<?php
					$post_pro_cat = get_the_terms( $post_pro->ID, 'project_cat' );
					$data_sort = 'all+';
					$terms_pro = '';
					foreach ( $post_pro_cat as $value_post_pro_cat ) {
						$data_sort .= $value_post_pro_cat->slug . '+';
						$terms_pro .= $value_post_pro_cat->name . ' + ';
					}
					$terms_pro = trim( $terms_pro, '+ ' );
				?>
				<div class="project_item mb-5" data-sort="<?php echo $data_sort; ?>">
					<div class="row">
						<div class="col-md-6 mb-3 mb-lg-0">
							<img class="project_item_img" src="<?php echo get_the_post_thumbnail_url( $post_pro->ID, 'kreditka-thumb' )?>" alt="<?php echo $post_pro->post_title ?>">
						</div>
						<div class="col-md-6 project-content">
							<div class="project_item_row_header mb-2 d-flex">
								<div class="title">
								<?php echo $post_pro->post_title ?>
								</div>
								<div class="project_link">
									<a href="<?php echo get_post_meta( $post_pro->ID, 'link', true ); ?>"><?php echo get_post_meta( $post_pro->ID, 'text_link', true ); ?></a>
								</div>
							</div>
							<div class="project_item_row mb-4">
								<div class="project_cat mb-3">
									<?php echo $terms_pro; ?>
								</div>
								<div class="project_desc mb-4">
									<?php echo get_post_meta( $post_pro->ID, 'desc', true ); ?>
								</div>
							</div>
							<div class="project_item_row_footer">
								<a class="project_more cursor-pointer" href="<?php echo get_permalink( $post_pro->ID ); ?>">
									Подробнее
									<img class="ml-3" src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="">
								</a>
								<div class="project_logo">
									<img src="<?php  echo wp_get_attachment_image_url( get_post_meta( $post_pro->ID, 'logo', true ), 'full' ); ?>" >
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php } ?>
			</div>
		</section>
		<?php } ?>

		<section id="contacts">
			<div class="container">
				<div class="row">
					<div class="col-md-6 contacts-left">
						<h3 class="mb-5">Контакты</h3>
						<?php if ( (bool)get_post_meta( $post->ID, 'phone', true ) ) { ?>
						<div class="mb-5">
							<span class="d-block">Вы можете оставить заявку или позвонить по номеру</span> 
							<a href="tel:<?php echo str_replace( '+7', '8', str_replace( array( '-', ' ', '(', ')' ), '', get_post_meta( $post->ID, 'phone', true ) ) ); ?>"><?php echo get_post_meta( $post->ID, 'phone', true ); ?></a>
						</div>
						<?php } ?>

						<?php if ( (bool)get_post_meta( $post->ID, 'email', true ) ) { ?>
						<div class="mb-5">
							<span class="d-block">E-mail</span> 
							<a href="mailto:<?php echo get_post_meta( $post->ID, 'email', true ); ?>"><?php echo get_post_meta( $post->ID, 'email', true ); ?></a>
						</div>
						<?php } ?>

						<?php if ( (bool)get_post_meta( $post->ID, 'ip_text', true ) ) { ?>
						<div class="form_header">
							<?php echo get_post_meta( $post->ID, 'ip_text', true ); ?>
						</div>
						<?php } ?>
					</div>
					<div class="col-md-5 offset-md-1" id="contact-form">
						<h3 class="mb-5 color-white">Оставить заявку</h3>
						<?php if ( (bool)get_post_meta( $post->ID, 'cf7', true ) ) { ?>
							<div class="contact_form">
								<?php echo do_shortcode( get_post_meta( $post->ID, 'cf7', true ) ); ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>

		<?php

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
