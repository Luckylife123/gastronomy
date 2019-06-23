<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gastronomy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/bootstrap.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
		<a class="navbar-brand" href="<?php echo get_home_url()?>">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
	            <?php
                $orderby = 'name';
                $order = 'asc';
                $hide_empty = true;
                $cat_args = array(
                    'orderby'    => $orderby,
                    'order'      => $order,
                    'hide_empty' => $hide_empty,
                );
                $product_categories = get_terms( 'product_cat', $cat_args );
                foreach ($product_categories as $key => $category) : ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo get_term_link($category ) ?>">
                            <?php $thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                            $image = wp_get_attachment_url( $thumbnail_id ); ?>
							<img src="<?php echo $image ?>" alt="<?php echo $category->name ?>">
							<span><?php echo $category->name ?></span>
						</a>
					</li>
                <?php endforeach;?>
			</ul>
			<a class="phone" href="tel:+380638050005">+380 63 80 50 005</a>
			<div class="worktime">
				<span> працюємо Пн-Нд </span>
				<span>з 11:00 до 23:00</span>
			</div>
		</div>
	</nav>
</header>
<div class="container">