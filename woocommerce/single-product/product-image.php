<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);


$attachment_ids = $product->get_gallery_image_ids();
// Если есть фото в галереи, то показываем галереию
if ( $attachment_ids != null ) { ?>
	<div id="carousel-<?php the_ID(); ?>" class="carousel slide mb-3 mb-md-0" data-bs-ride="carousel"  data-bs-interval="1000000">
		<div class="carousel-inner shadow rounded">
			
			<?php
				$attachment_ids = $product->get_gallery_image_ids();
				$count = false;
				foreach ( $attachment_ids as $attachment_id ) {
			?>
				<div class="carousel-item<?php if ( $count == false ) { echo ' active'; $count = true; } ?>">
					<a href="#" onClick="galleryOn('gallery-<?php the_ID(); ?>');">
						<div class="single-product-img"><!-- .approximation -->
							<img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" class="d-block w-100" loading="lazy" alt="...">
							<div class="magnifier"></div>
						</div>
					</a>
				</div>
			<?php } ?>
		</div>
		<?php 
			$count = 0;
			foreach ( $attachment_ids as $attachment_id ) {
				$count = $count + 1;
			}
			if ( $count > 1 ) { ?>
				<button class="carousel-control-prev" type="button" data-bs-target="#carousel-<?php the_ID(); ?>"  data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carousel-<?php the_ID(); ?>"  data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			<?php }
		?>
	</div>
<?php } else { // Если нет фото в галереи, то показываем миниатюру ?>
	<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 1; transition: opacity .25s ease-in-out;">
		<figure class="woocommerce-product-gallery__wrapper">
			<?php
			if ( $post_thumbnail_id ) {
				$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
			} else {
				$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
				$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
				$html .= '</div>';
			}

			echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

			do_action( 'woocommerce_product_thumbnails' );
			?>
		</figure>
	</div>
<?php } ?>