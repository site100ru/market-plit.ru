<?
	
	// Template Name: Actions
	// Template Post Type: page

	get_header();
	
?>


<!-- Header -->
<header class="second-header">
	<div class="parallax"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col">
				<h1><?php the_title(); ?></h1>
				<!--p class="header-description"></p-->
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<!-- Actions -->
<section class="bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Наши акции</h2>
				<!--p class="section-description text-center mb-5"></p-->
				<div class="section-title-decoration-line m-auto mb-5">
					<div class="section-title-decoration-quadro" style="left: 0;"></div>
					<div class="section-title-decoration-quadro" style="left: 26px;"></div>
					<div class="section-title-decoration-quadro" style="right: 0px;"></div>
				</div>
				<div class="row">
					<div class="col-md-4 mb-5 project-entry">
						<a>
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-1.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-2">Транспортный распил</h3>
						<p>Если Вы решили забрать продукцию с нашего склада и Вам необходимо распилить лист на несколько частей для удобства транспортировки, мы сделаем это оперативно! Только не забудьте предупредить менеджера об этом!</p>
						<!--button type="button" class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#measurerModal">Вызвать замерщика</button-->
					</div>
					<!--div class="col-md-4 mb-5 project-entry">
						<a>
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-2.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-2">Доставка пополам</h3>
						<p>При заказе продукции на сумму от 100 тыс. рублей с доставкой по Москве и области, 50% стоимости доставки оплачиваем Мы. Акция действует до 01.11.2020г.</p>
					</div-->
					<!--div class="col-md-4 mb-5 project-entry">
						<a>
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-3.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-2">Скидка 3% на всю шлифованную ФСФ</h3>
						<p>До конца июля минус 3% на шлифованную фанеру ФСФ от 6,5 до 30 мм форматы 1250х2500 и 1500х3000</p>
					</div-->
					<div class="col-md-4 mb-5 project-entry">
						<a>
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/actions/action-3.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-2">Скидка 5% на фанеру ФСФ</h3>
						<p>Скидка 5% на фанеру ФСФ форматом 1500х3000 при покупке на складе по адресу: Москва, Открытое шоссе 15, до конца июня 2023г.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Actions -->


<?php get_footer(); ?>