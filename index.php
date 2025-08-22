<?
	
	/**
	 * Template Name: Home
	 * Template Post Type: page
	 */

	get_header();
	
?>

			
<!-- Header -->
<header>
	<div class="parallax" <?php choose_background(); ?>></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col">
				<h1><?php //bloginfo('name'); ?>Материалы для производства мебели</h1>
				<p class="header-description"><?php //bloginfo('description'); ?>ДСП, ЛДСП, МДФ, ЛМДФ, Кромка, Фанера, Глянцевые панели. Изготовление мебельных деталей любой сложности. Распил любого листового материала.</p>
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
		
		
<!-- Products -->
<!-- Catalogy section 2 -->
<section class="catalogy-section bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Ассортимент и цены</h2>
				<!--p class="section-description text-center mb-5">Представляем с гордостью!</p-->
				<div class="section-title-decoration-line m-auto mb-5">
					<div class="section-title-decoration-quadro" style="left: 0;"></div>
					<div class="section-title-decoration-quadro" style="left: 26px;"></div>
					<div class="section-title-decoration-quadro" style="right: 0px;"></div>
				</div>
				<div class="row">
					<div class="col-md-4 mb-5 project-entry">
						<a href="https://market-plit.ru/product-category/лдсп/?filter_производитель=egger&query_type_производитель=or">
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-cat-1.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-3">ЛДСП EGGER</h3>
						<div class="row align-items-center">
							<!--div class="col mb-3 mb-lg-0">
								<div class="old-price"><strike>от 490 руб</strike></div>
								<div class="price">от 490 руб</div>
							</div-->
							<div class="col text-lg-start"><!-- text-lg-end -->
								<a href="https://market-plit.ru/product-category/лдсп/?filter_производитель=egger&query_type_производитель=or" type="button" class="btn btn-corporate-color-1" style="width: 175px;">В каталог</a>
							</div>
						</div>	
					</div>
					<div class="col-md-4 mb-5 project-entry">
						<a href="https://market-plit.ru/product-category/лдсп/?filter_производитель=kronospan&query_type_производитель=or">
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-cat-2.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-3">ЛДСП Kronospan</h3>
						<div class="row align-items-center">
							<!--div class="col mb-3 mb-lg-0">
								<div class="old-price"><strike>от 490 руб</strike></div>
								<div class="price">от 490 руб</div>
							</div-->
							<div class="col text-lg-start">
								<a href="https://market-plit.ru/product-category/лдсп/?filter_производитель=kronospan&query_type_производитель=or" type="button" class="btn btn-corporate-color-1" style="width: 175px;">В каталог</a>
							</div>
						</div>	
					</div>
					<div class="col-md-4 mb-5 project-entry">
						<a href="https://market-plit.ru/product-category/лдсп/?query_type_производитель=or&filter_производитель=kronostar">
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-cat-3.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-3">ЛДСП Kronostar</h3>
						<div class="row align-items-center">
							<!--div class="col mb-3 mb-lg-0">
								<div class="old-price"><strike>от 490 руб</strike></div>
								<div class="price">от 490 руб</div>
							</div-->
							<div class="col text-lg-start">
								<a href="https://market-plit.ru/product-category/лдсп/?query_type_производитель=or&filter_производитель=kronostar" type="button" class="btn btn-corporate-color-1" style="width: 175px;">В каталог</a>
							</div>
						</div>	
					</div>					
					<div class="col-md-4 mb-5 project-entry">
						<a href="https://market-plit.ru/product-category/мдф/">
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-cat-4.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-3">МДФ (без покрытия)</h3>
						<div class="row align-items-center">
							<!--div class="col mb-3 mb-lg-0">
								<div class="old-price"><strike>от 490 руб</strike></div>
								<div class="price">от 490 руб</div>
							</div-->
							<div class="col text-lg-start">
								<a href="https://market-plit.ru/product-category/мдф/" type="button" class="btn btn-corporate-color-1" style="width: 175px;">В каталог</a>
							</div>
						</div>	
					</div>
					<div class="col-md-4 mb-5 project-entry">
						<a href="https://market-plit.ru/product-category/лмдф/">
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-cat-5.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-3">ЛМДФ</h3>
						<div class="row align-items-center">
							<!--div class="col mb-3 mb-lg-0">
								<div class="old-price"><strike>от 490 руб</strike></div>
								<div class="price">от 490 руб</div>
							</div-->
							<div class="col text-lg-start">
								<a href="https://market-plit.ru/product-category/лмдф/" type="button" class="btn btn-corporate-color-1" style="width: 175px;">В каталог</a>
							</div>
						</div>	
					</div>
					<div class="col-md-4 mb-5 project-entry">
						<a href="https://market-plit.ru/product-category/лмдф/?filter_поверхность=глянец&query_type_поверхность=or">
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-cat-6.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-3">МДФ (глянец)</h3>
						<div class="row align-items-center">
							<!--div class="col mb-3 mb-lg-0">
								<div class="old-price"><strike>от 490 руб</strike></div>
								<div class="price">от 490 руб</div>
							</div-->
							<div class="col text-lg-start">
								<a href="https://market-plit.ru/product-category/лмдф/?filter_поверхность=глянец&query_type_поверхность=or" type="button" class="btn btn-corporate-color-1" style="width: 175px;">В каталог</a>
							</div>
						</div>	
					</div>
					<div class="col-md-3 mb-5 project-entry">
						<a href="https://market-plit.ru/product-category/фанера/">
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-cat-7.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-3">Фанера</h3>
						<div class="row align-items-center">
							<!--div class="col mb-3 mb-lg-0">
								<div class="old-price"><strike>от 490 руб</strike></div>
								<div class="price">от 490 руб</div>
							</div-->
							<div class="col text-lg-start">
								<a href="https://market-plit.ru/product-category/фанера/" type="button" class="btn btn-corporate-color-1" style="width: 175px;">В каталог</a>
							</div>
						</div>	
					</div>
					<div class="col-md-3 mb-5 project-entry">
						<a href="https://market-plit.ru/product-category/фасады/">
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-cat-8.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-3">Фасады</h3>
						<div class="row align-items-center">
							<!--div class="col mb-3 mb-lg-0">
								<div class="old-price"><strike>от 490 руб</strike></div>
								<div class="price">от 490 руб</div>
							</div-->
							<div class="col text-lg-start">
								<a href="https://market-plit.ru/product-category/фасады/" type="button" class="btn btn-corporate-color-1" style="width: 175px;">В каталог</a>
							</div>
						</div>	
					</div>
					<div class="col-md-3 mb-5 project-entry">
						<a href="https://market-plit.ru/product-category/столешницы/">
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-cat-9.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-3">Столешницы</h3>
						<div class="row align-items-center">
							<!--div class="col mb-3 mb-lg-0">
								<div class="old-price"><strike>от 490 руб</strike></div>
								<div class="price">от 490 руб</div>
							</div-->
							<div class="col text-lg-start">
								<a href="https://market-plit.ru/product-category/столешницы/" type="button" class="btn btn-corporate-color-1" style="width: 175px;">В каталог</a>
							</div>
						</div>	
					</div>
					<div class="col-md-3 mb-5 project-entry">
						<a href="https://market-plit.ru/product-category/кромка/">
							<div class="figure rounded shadow">
								<img src="<?php echo get_template_directory_uri(); ?>/img/product-cat-10.jpg" class="img-fluid">
							</div>
						</a>
						<h3 class="mb-3">Кромка</h3>
						<div class="row align-items-center">
							<!--div class="col mb-3 mb-lg-0">
								<div class="old-price"><strike>от 490 руб</strike></div>
								<div class="price">от 490 руб</div>
							</div-->
							<div class="col text-lg-start">
								<a href="https://market-plit.ru/product-category/кромка/" type="button" class="btn btn-corporate-color-1" style="width: 175px;">В каталог</a>
							</div>
						</div>	
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Catalogy section 2 -->
<!-- /Products -->
		
		
<!-- Order section --
<section class="order-section bg-light">
	<div class="order-section-img d-none d-md-block" style="background: url(img/oredr-img-1.jpg) center; background-size: cover; right: 0%; left: 50%;"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-5 text-md-end">
				<h3 class="text-darkbrown">Бесплатно сделаем дизайн-проект и расчет стоимости в течение 24 часов!</h3>
				<p class="mb-4">Оставьте заявку на бесплатный дизайн-проект и расчет стоимости по-настоящему красивой и качественной мебели.</p>
				<form method="post" action="">
					<div class="row justify-content-end">
						<div class="col-md-6">
							<label class="form-label">Ваше имя</label>
							<input type="text" class="form-control-darkgrey" id="exampleFormControlInput1" placeholder="">
						</div>
						<div class="col-md-6">
							<label class="form-label">Ваш телефон*</label>
							<input type="text" class="form-control-darkgrey telMask" id="exampleFormControlInput2" placeholder="">
						</div>
						<div class="col-md-6 mb-5 mb-md-0">
							<button type="button" class="d-block w-100 btn btn-lg btn-darkgrey">Рассчитать стоимость</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<img src="img/oredr-img-1.jpg" class="img-fluid d-md-none">
			</div>
		</div>
	</div>
</section>
<!-- /Order section -->


<!-- About us --
<div id="about-us-sp" class="scroll-point"></div>
<section class="about-us-section bg-light">
	<div class="about-us-section-img d-none d-md-block"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="offset-md-7 col-md-5">
				<h2 class="text-darkbrown mb-1">О нас</h2>
				<div class="title-line mb-5">
					<div class="title-quadro" style="left: 0;"></div>
					<div class="title-quadro" style="left: 25px;"></div>
					<div class="title-quadro" style="right: 0px;"></div>
				</div>
				<p>Мы производим кухни, шкафы-купе и другую корпусную мебель с 2011 года. Мы гордимся каждым из наших изделий. Нам нравится делать красивые вещи, нравится получать слова благодарности от наших клиентов. Приятно, когда твоя работа нравится людям!</p>
				<p class="mb-5 mb-md-0">Каждому нашему клиенту мы гарантируем: качественную, красивую продукцию и индивидуальный подход.</p>
			</div>
			<div class="col-md-6">
				<img src="img/about-us-img.jpg" class="img-fluid d-md-none">
			</div>
		</div>
	</div>
</section>
<!-- /About us -->
		
		
<!-- Process -->
<div id="process-sp" class="scroll-point"></div>
<section class="process-section bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Как у нас покупать</h2>
				<!--p class="section-description text-center mb-5">Представляем с гордостью!</p-->
				<div class="section-title-decoration-line m-auto mb-5">
					<div class="section-title-decoration-quadro" style="left: 0;"></div>
					<div class="section-title-decoration-quadro" style="left: 26px;"></div>
					<div class="section-title-decoration-quadro" style="right: 0px;"></div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/1.png" class="img-fluid">
							</div>
							<div class="col-10">
								<!--h3>Вы связываетесь с нами любым удобным способом</h3-->
								<p class="mb-0">Выбираете и добавляете товары в корзину.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/2.png" class="img-fluid">
							</div>
							<div class="col-10">
								<!--h3>Мы бесплатно сделаем дизайн проект будущего изделия</h3-->
								<p class="mb-0">Производите оформление заказа (пока без оплаты).</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/3.png" class="img-fluid">
							</div>
							<div class="col-10">
								<!--h3>Утверждение проекта и сроков исполнения</h3-->
								<p class="mb-0">Выбираете варианты доставки (доставка или самовывоз).</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/4.png" class="img-fluid">
							</div>
							<div class="col-10">
								<!--h3>Производство</h3-->
								<p class="mb-0">Выбираете варианты оплаты (оплата через сайт при оформлении заказа, оплата наличными при получении).</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/5.png" class="img-fluid">
							</div>
							<div class="col-10">
								<!--h3>Доставка и установка</h3-->
								<p class="mb-0">Получаете Ваш заказ выбранным способом (доставка или самовывоз).</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/6.png" class="img-fluid">
							</div>
							<div class="col-10">
								<!--h3>Доставка и установка</h3-->
								<p class="mb-0">Остались вопросы? Обязательно  задайте их нам любым удобным для Вас способом!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Process -->


<!-- Order section --
<section class="order-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-5 text-md-end">
				<h3 class="text-darkbrown">Бесплатно сделаем дизайн-проект и расчет стоимости в течение 24 часов!</h3>
				<p class="mb-4">Оставьте заявку на бесплатный дизайн-проект и расчет стоимости по-настоящему красивой и качественной мебели.</p>
				<form method="post" action="">
					<div class="row justify-content-end">
						<div class="col-md-6">
							<label class="form-label">Ваше имя</label>
							<input type="text" class="form-control-darkgrey" id="exampleFormControlInput1" placeholder="">
						</div>
						<div class="col-md-6">
							<label class="form-label">Ваш телефон*</label>
							<input type="text" class="form-control-darkgrey telMask" id="exampleFormControlInput2" placeholder="">
						</div>
						<div class="col-md-6 mb-5 mb-md-0">
							<button type="button" class="d-block w-100 btn btn-lg btn-darkgrey">Рассчитать стоимость</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<img src="img/order-img.jpg" class="img-fluid rounded d-md-none">
			</div>
		</div>
	</div>
	<div class="order-section-img d-none d-md-block" style="background: url(img/order-img.jpg) center; background-size: cover; right: 50%; left: 0%;"></div>
</section>
<!-- /Order section -->


<!-- Order section -->
<section class="order-section bg-white">
	<div class="container">
		<div class="row align-items-center">
			<div class="offset-md-7 col-md-5">
				<h2 class="mb-3">О нашей компании</h2>
				<!--p class="section-description text-center mb-5">Представляем с гордостью!</p-->
				<div class="section-title-decoration-line mb-5">
					<div class="section-title-decoration-quadro" style="left: 0;"></div>
					<div class="section-title-decoration-quadro" style="left: 26px;"></div>
					<div class="section-title-decoration-quadro" style="right: 0px;"></div>
				</div>
				<p class="mb-4 mb-md-0">Компания "Плитный Маркет" - это молодой, амбициозный, проактивный коллектив, который с удовольствием поможет Вам в выборе необходимого товара или услуги. Знакомство с нашей компанией начинается с менеджеров, которые вникают в суть Вашей проблемы или задачи, консультируют и подбирают оптимальное для Вас решение. Далее в процесс включаются работники склада и водители, обеспечивающие оперативную сборку и доставку товара.</p>
				<!--p class="mb-4">Если ТЫ попал на наш сайт, ТЫ уже сделал первый шаг! Мы очень ценим людей, которые шагают нам на встречу! А дальше мы позаботимся о том, чтоб тебе все понравилось! СТОКЛАЙН – это одна из не многих компаний, которая действует по принципу: Клиент – всегда прав!</p>
				<p class="mb-4 mb-md-0">Молодой, амбициозный, проактивный коллектив нашей компании с удовольствием поможет в выборе необходимого товара или услуги. Знакомство с нашей компанией начинается с менеджеров, которые вникают в суть Вашей проблемы или задачи, консультируют и подбирают оптимальное для Вас решение. Далее в процесс включаются работники склада и водители, обеспечивающие оперативную сборку и доставку товара.</p-->
			</div>
			<div class="col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/order-img.jpg" class="img-fluid rounded d-md-none">
			</div>
		</div>
	</div>
	<div class="order-section-img d-none d-md-block" style="background: url(<?php echo get_template_directory_uri(); ?>/img/order-img.jpg) center; background-size: cover; right: 50%; left: 0%;"></div>
</section>
<!-- /Order section -->


<!-- Advantages -->
<div id="advantages-sp" class="scroll-point"></div>
<section class="advantages bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Наши преимущества</h2>
				<!--p class="section-description text-center mb-5">Представляем с гордостью!</p-->
				<div class="section-title-decoration-line m-auto mb-5">
					<div class="section-title-decoration-quadro" style="left: 0;"></div>
					<div class="section-title-decoration-quadro" style="left: 26px;"></div>
					<div class="section-title-decoration-quadro" style="right: 0px;"></div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-4 mb-5">
						<div class="row align-items-md-center">
							<div class="col-3 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-1.png" class="img-fluid">
							</div>
							<div class="col-9">
								<!--h3>Вы связываетесь с нами любым удобным способом</h3-->
								<p class="mb-0">Товары только высокого качества от проверенных производителей.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row align-items-md-center">
							<div class="col-3 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-2.png" class="img-fluid">
							</div>
							<div class="col-9">
								<!--h3>Мы бесплатно сделаем дизайн проект будущего изделия</h3-->
								<p class="mb-0">Любая форма оплаты (с НДС и без).</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row align-items-md-center">
							<div class="col-3 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-3.png" class="img-fluid">
							</div>
							<div class="col-9">
								<!--h3>Утверждение проекта и сроков исполнения</h3-->
								<p class="mb-0">Оперативная доставка по Москве, МО, России.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row align-items-md-center">
							<div class="col-3 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-4.png" class="img-fluid">
							</div>
							<div class="col-9">
								<!--h3>Производство</h3-->
								<p class="mb-0">Продукция имеет все необходимые сертификаты.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row align-items-md-center">
							<div class="col-3 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-5.png" class="img-fluid">
							</div>
							<div class="col-9">
								<!--h3>Доставка и установка</h3-->
								<p class="mb-0">Бесперебойное снабжение. Отгрузка от 1 листа.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row align-items-md-center">
							<div class="col-3 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-6.png" class="img-fluid">
							</div>
							<div class="col-9">
								<!--h3>Доставка и установка</h3-->
								<p class="mb-0">Индивидуальный подход. Распил плит согласно размерам заказчика.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Advantages -->
		

<?php get_footer(); ?>