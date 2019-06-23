<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gastronomy
 */

get_header();
?>

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

<?php
get_footer();
