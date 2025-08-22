<?
	
	// Template Name: Single post
	// Template Post Type: post

	get_header();
	
?>
		
		
<!-- Header -->
<header class="second-header">
	<div class="parallax"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col">
				<h1><?php the_title(); //echo wp_get_document_title(); // woocommerce_page_title();  ?></h1>
				<!--p class="header-description">Продажа ФСФ, ФК и ламинированной фанеры, оптом и в розницу. Распил, доставка по всей России. По Московской области доставим за 1 день. Все размеры, толщины, сорта в наличии на складе в гор. Химки. Все цены за лист на сайте актуальны. Производство — Россия.</p-->
			</div>
			<!--
			<div class="col-12 col-lg-4 offset-xxl-1 col-xxl-3">
				<form method="post" action="" class="header-form">
					<h5><strong class="d-block">Бесплатно сделаем</strong> дизайн-проект и&nbsp;расчет стоимости в&nbsp;течение 24&nbsp;часов!</h5>
					<input type="text" class="form-control-lightgrey" id="exampleFormControlInput1" placeholder="Имя">
					<input type="text" class="form-control-lightgrey telMask" id="exampleFormControlInput2" placeholder="Телефон*">
					<button type="button" class="d-block w-100 btn btn-lg btn-lightgrey mt-3">Рассчитать стоимость</button>
				</form>
			</div>
			-->
		</div>
	</div>
</header>
<!-- /Header -->


<!-- Payment shipping and returns section -->
<section class="bg-white">
	<div class="container">
		<div class="row">
			<div class="col py-5">
				<?php
					while( have_posts() ) { the_post();

						//the_title();
						
						the_content();
						
					}
				?>
			</div>
		</div>
	</div>
</section>
<!-- /Payment shipping and returns section -->


<?php get_footer(); ?>