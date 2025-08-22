<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

//get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' );

get_header();

?>
		
	
<header class="woocommerce-products-header second-header">
	<div class="parallax" <?php choose_background(); ?>></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col">
				<h1><?php echo woocommerce_page_title(); ?></h1>
				<p class="header-description">
					<?php do_action( 'woocommerce_archive_description' ); ?>
				</p>
			</div>
		</div>
	</div>
	<?php /*if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	//do_action( 'woocommerce_archive_description' );
	?>
</header>


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
					<div class="offset-md-3 col-md-6">
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<?php
							/**
							 * Hook: woocommerce_sidebar.
							 *
							 * @hooked woocommerce_get_sidebar - 10
							 */
							//do_action( 'woocommerce_sidebar' );
							
							
							echo do_shortcode('[fibosearch]'); // Поиск
							
							dynamic_sidebar( 'wsidebar-1' ); // Фильтр
						?>
						
						<!--h4 class="mt-4">Наименование</h4>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9">
							<label class="form-check-label" for="flexCheckDefault9">
								Фанера <span>(689)</span>
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault13">
							<label class="form-check-label" for="flexCheckDefault13">
								Фанера ФСФ <span>(129)</span>
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault14">
							<label class="form-check-label" for="flexCheckDefault14">
								Фанера ФСФ <span>(129)</span>
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault15">
							<label class="form-check-label" for="flexCheckDefault15">
								Фанера ФСФ <span>(129)</span>
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault16">
							<label class="form-check-label" for="flexCheckDefault16">
								Фанера ФСФ <span>(129)</span>
							</label>
						</div>
						<h4 class="mt-4">Наименование</h4>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault17">
							<label class="form-check-label" for="flexCheckDefault17">
								Фанера <span>(689)</span>
							</label>
						</div>
						<button type="button" class="btn btn-corporate-1 mt-4 mb-5 mb-md-0" style="width: 175px;">Показать</button-->
					</div>
					<div class="col-md-9 pt-3 pt-md-0">
						
						<div class="row">
							
							
							<?php /*
								if ( woocommerce_product_loop() ) {

									/**
									 * Hook: woocommerce_before_shop_loop.
									 *
									 * @hooked woocommerce_output_all_notices - 10
									 * @hooked woocommerce_result_count - 20
									 * @hooked woocommerce_catalog_ordering - 30
									 *
									do_action( 'woocommerce_before_shop_loop' ); */

									woocommerce_product_loop_start();

									if ( wc_get_loop_prop( 'total' ) ) {
										while ( have_posts() ) {
											the_post();

											/**
											 * Hook: woocommerce_shop_loop.
											 */
											do_action( 'woocommerce_shop_loop' );

											wc_get_template_part( 'content', 'product' );
										}
									}

									woocommerce_product_loop_end();

									/**
									 * Hook: woocommerce_after_shop_loop.
									 *
									 * @hooked woocommerce_pagination - 10
									 **/
									do_action( 'woocommerce_after_shop_loop' );
								/*} else {
									/**
									 * Hook: woocommerce_no_products_found.
									 *
									 * @hooked wc_no_products_found - 10
									 *
									do_action( 'woocommerce_no_products_found' );
								}

								/**
								 * Hook: woocommerce_after_main_content.
								 *
								 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
								 
								do_action( 'woocommerce_after_main_content' );**/

								 ?>
							
							
							
							
							<!--div class="col-md-4 mb-5">
								<div class="card">
									<a href="single-product.html">
										<img src="<?php echo get_template_directory_uri(); ?>/img/card-img.png" class="card-img-top p-3" alt="...">
									</a>
									<div class="card-body">
										<a href="single-product.html" class="text-decoration-none">
											<h3 class="card-title">Ламинированная фанера, толщина 12 мм, размер 1220х2440 мм, гл/гл, производство россия</h3>
										</a>
										<p class="text-center"><span class="old-price"><strike>2750 ₽</strike></span> <span class="price">2500 ₽</span></p>
										<div class="row">
											<div class="col-5">
												<div class="input-group">
													<button class="btn btn-sm btn-corporate-1" type="button" style="width: 30px;">+</button>
													
													<input type="number" step="1" min="1" max="999" id="" name="quantity" value="1" title="Qty" class="form-control form-control-sm text-center" placeholder="Recipient's username" aria-label="Recipient's username with two button addons" style="">
													
													<button class="btn btn-sm btn-corporate-1" type="button" style="width: 30px;">-</button>
												</div>
											</div>
											<div class="col-7">
												<button class="btn btn-sm btn-corporate-1" style="width: 100%;">В корзину</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 mb-5">
								<div class="card">
									<a href="single-product.html">
										<img src="<?php echo get_template_directory_uri(); ?>/img/card-img.png" class="card-img-top p-3" alt="...">
									</a>
									<div class="card-body">
										<a href="single-product.html" class="text-decoration-none">
											<h3 class="card-title">Ламинированная фанера, толщина 12 мм, размер 1220х2440 мм, гл/гл, производство россия</h3>
										</a>
										<p class="text-center"><span class="old-price"><strike>2750 ₽</strike></span> <span class="price">2500 ₽</span></p>
										<div class="row">
											<div class="col-5">
												<div class="input-group">
													<button class="btn btn-sm btn-corporate-1" type="button" style="width: 30px;">+</button>
													
													<input type="number" step="1" min="1" max="999" id="" name="quantity" value="1" title="Qty" class="form-control form-control-sm text-center" placeholder="Recipient's username" aria-label="Recipient's username with two button addons" style="">
													
													<button class="btn btn-sm btn-corporate-1" type="button" style="width: 30px;">-</button>
												</div>
											</div>
											<div class="col-7">
												<button class="btn btn-sm btn-corporate-1" style="width: 100%;">В корзину</button>
											</div>
										</div>
									</div>
								</div>
							</div-->

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
						<div class="row">
							<div class="col-3 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-1.png" class="img-fluid">
							</div>
							<div class="col-9">
								<!--h3>Вы связываетесь с нами любым удобным способом</h3-->
								<p class="mb-0">Товары только известных отечественных производителей.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
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
						<div class="row">
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
						<div class="row">
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
						<div class="row">
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
						<div class="row">
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


<!-- Process -->
<div id="process-sp" class="scroll-point"></div>
<section class="process-section bg-white py-5">
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

<?php get_footer(); ?>