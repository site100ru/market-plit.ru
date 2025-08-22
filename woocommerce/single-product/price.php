<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Если цены нет, то пишем "цена по запросу"
if ( $product->get_price_html() == null ) {
	$product_price = 'Цена по запросу';
	echo '<p>'.$product_price.'</p>';

// Если цена есть, то
// Проверяем категорию
} else {	
	global $post;
	$terms = get_the_terms( $post->ID, 'product_cat' );
	foreach ( $terms as $term ) {
		$cat_name = $term->name;
		break;
	}
	
	// Если категория "Фасады", то пишем цену "от"
	if ( $cat_name == 'Фасады' ) { ?>
		<span class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>">
			<span style="font-family: HelveticaNeueCyr-Light; color: #323232; font-size: 18px;">от </span>
			<?php echo $product->get_price_html(); ?>
			<span style="font-family: HelveticaNeueCyr-Light; color: #323232; font-size: 18px;">руб/м<sup>2</sup></span>
		</span>
	<?php } else { ?>
		<span class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>">
			<?php echo $product->get_price_html(); ?>
			<span style="font-family: HelveticaNeueCyr-Light; color: #323232; font-size: 18px;">руб</span>
		</span>
	<?php } ?>
<?php }
