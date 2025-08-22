<?
	
	// Template Name: Articles
	// Template Post Type: page

	get_header();
	
?>


<!-- Header -->
<header class="second-header">
	<div class="parallax"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col">
				<h1 class="mb-0"><?php the_title(); ?></h1>
				<!--p class="header-description"></p-->
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<!-- Payment shipping and returns section -->
<section class="bg-white">
	<div class="container">
		<div class="row">
			<div class="col py-5">
				<?php						// параметры по умолчанию
					$my_posts = get_posts( array(
						'numberposts' => 5,
						'category'    => 0,
						'orderby'     => 'date',
						'order'       => 'DESC',
						'include'     => array(),
						'exclude'     => array(),
						'meta_key'    => '',
						'meta_value'  =>'',
						'post_type'   => 'post',
						'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					) );

					global $post;

					foreach( $my_posts as $post ) {
						setup_postdata( $post ); ?>
						<div class="row mb-5">
							<div class="col-md-4 project-entry">
								<a a href="<?php the_permalink(); ?>">
									<div class="figure rounded shadow">
										<img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid">
									</div>
								</a>
							</div>
							<div class="col-md-8">
								<p class="mb-2"><small><?php echo get_the_date(); ?></small></p>
								<h3><?php the_title(); ?></h3>
								<?php the_excerpt() ?>
								<p><a href="<?php the_permalink(); ?>">Читать далее</a></p>
							</div>
						</div>
					<?php }

					wp_reset_postdata(); // сброс
				?>
			</div>
		</div>
	</div>
</section>
<!-- /Payment shipping and returns section -->


<?php get_footer(); ?>