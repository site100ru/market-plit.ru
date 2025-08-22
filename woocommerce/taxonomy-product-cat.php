<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product-cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     4.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


wc_get_template( 'archive-product.php' );


/* Выбераем шаблон для категории
// Получаем ID и название текущей категории
$obj = get_queried_object();
$cat_id = $obj->term_id;
$cat_name = $obj->name;

// Получаем название наивысшей родительской категории
$ancestors = get_ancestors( $cat_id, 'product_cat' ); // Получаем всех родителей
$ancestors_reverse = array_reverse( $ancestors ); // Изменяем порядок в массиве на обратный (от старшего к младшему)
$term = get_term( $ancestors_reverse[0] );
$parent_cat_name = $term->name; // Получаем название старшей категории

// Если текущая категория или ее наивысший родитель категория "Изделия из фанеры", то
if ( $cat_name == 'Изделия из фанеры' OR $parent_cat_name == 'Изделия из фанеры' ) { wc_get_template( 'archive-product-plywood.php' ); }
// Если текущая категория или ее наивысший родитель категория "Пиломатериалы", то
elseif ( $cat_name == 'Древесные плиты' OR $parent_cat_name == 'Древесные плиты' ) { wc_get_template( 'archive-product-lumber.php' ); }
// В другом случае...
else { wc_get_template( 'archive-product.php' ); } */
