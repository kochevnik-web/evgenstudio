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
						<h2>Интернет-решения для развития вашего бизнеса</h2>
					</div>
					<div class="col-md-7">
						<img class="imgList1" src="<?php echo get_template_directory_uri() . '/img/main-list.png'; ?>" alt="">
					</div>
				</div>
				<div class="row main-content">
					<div class="col-md-5 mb-4">
						<h3 class="mb-4">Мы</h3>
						<p>
						Cплоченная и опытная команда квалифицированных специалистов в области обслуживания компьютерной техники, построения и администрирования компьютерных сетей, создании и администрировании сайтов и индивидуальных интернет-решений любой сложности.
						</p>
						<p>
Более 5 лет предоставляем услуги IT-аутсорсинга от Юга до Севера нашей страны и за её пределами. В настоящий момент в нашем портфолио компании из Москвы и Московской области, Краснодара и Краснодарского края, Норильска и Красноярского края, а также Кипра.
						</p>
						<h3 class="mb-4 mt-5">Наше преимущество</h3>
						<p>
						Это грамотный подход к обслуживанию информационной структуры предприятия, созданию и развитию интернет-проектов.  Мы подбираем оптимальную по цене и возможностям для вас схему сотрудничества. Вы сможете сократить затраты на IT, но при этом застраховать себя от проблем, вызванных простоем CRM или отключением сервера, потерей информации или атакой хакеров, «падением» сайта или неправильной работой хостинга.</p>
<p>
Хотите сосредоточиться на решении актуальных бизнес-задач и не вспоминать об IT в вашей компании? Поручите нам обслуживание вашей IT инфраструктуры!</p>


					</div>
					<div class="col-md-7 pt-5">
						<img class="imgList2" src="<?php echo get_template_directory_uri() . '/img/list-2.png'; ?>" alt="">
					</div>
				</div>
			</div>
		</section>

		<section id="uslugi" class="mt-5">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h3 class="mb-4">Наши услуги</h3>
						<div class="uslugi-item mb-5">
							<div class="title mb-2">
								Сопровождение и управление интернет-проектами
							</div>
							<div class="link">
								<span class="cursor-pointer mr-3">Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
							</div>
						</div>
						<div class="uslugi-item mb-5">
							<div class="title mb-2">
								Разработка сайтов под ключ
							</div>
							<div class="link">
								<span class="cursor-pointer mr-3">Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
							</div>
						</div>
						<div class="uslugi-item mb-5">
							<div class="title mb-2">
								Сопровождение и управление интернет-проектами
							</div>
							<div class="link">
								<span class="cursor-pointer mr-3">Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
							</div>
						</div>
						<div class="uslugi-item mb-5">
							<div class="title mb-2">
								IT-аутсорсинг
							</div>
							<div class="link">
								<span class="cursor-pointer mr-3">Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<img class="imgList3" src="<?php echo get_template_directory_uri() . '/img/list-3.png'; ?>" alt="">
					</div>
				</div>
			</div>
		</section>
		<section class="mt-5">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h3 class="mb-4">Наши услуги</h3>
						<div class="uslugi-item mb-5">
							<div class="title mb-2">
								Сопровождение и управление интернет-проектами
							</div>
							<div class="link">
								<span class="cursor-pointer mr-3">Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
							</div>
						</div>
						<div class="uslugi-item mb-5">
							<div class="title mb-2">
								Разработка сайтов под ключ
							</div>
							<div class="link">
								<span class="cursor-pointer mr-3">Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
							</div>
						</div>
						<div class="uslugi-item mb-5">
							<div class="title mb-2">
								Сопровождение и управление интернет-проектами
							</div>
							<div class="link">
								<span class="cursor-pointer mr-3">Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
							</div>
						</div>
						<div class="uslugi-item mb-5">
							<div class="title mb-2">
								IT-аутсорсинг
							</div>
							<div class="link">
								<span class="cursor-pointer mr-3">Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
							</div>
						</div>
					</div>
					<div class="col-md-7">
						
					</div>
				</div>
			</div>
		</section>
		<section class="mt-5">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h3 class="mb-4">Наши услуги</h3>
						<div class="uslugi-item mb-5">
							<div class="title mb-2">
								Сопровождение и управление интернет-проектами
							</div>
							<div class="link">
								<span class="cursor-pointer mr-3">Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
							</div>
						</div>
						<div class="uslugi-item mb-5">
							<div class="title mb-2">
								Разработка сайтов под ключ
							</div>
							<div class="link">
								<span class="cursor-pointer mr-3">Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
							</div>
						</div>
						<div class="uslugi-item mb-5">
							<div class="title mb-2">
								Сопровождение и управление интернет-проектами
							</div>
							<div class="link">
								<span class="cursor-pointer mr-3">Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
							</div>
						</div>
						<div class="uslugi-item mb-5">
							<div class="title mb-2">
								IT-аутсорсинг
							</div>
							<div class="link">
								<span class="cursor-pointer mr-3">Подробнее</span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg">
							</div>
						</div>
					</div>
					<div class="col-md-7">
						
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
