<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gastronomy
 */

?>
</div>
<footer>
	<div class="menu-footer container">
		<ul>
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
				<li>
					<a href="<?php echo get_term_link($category ) ?>">
						<span><?php echo $category->name ?></span>
					</a>
				</li>
            <?php endforeach;?>
		</ul>
		<div class="footer-contacts">
			<a href="mailto:<?php echo get_option( 'admin_email' ); ?>" target="_blank"><?php echo get_option( 'admin_email' ); ?></a>
			<a href="tel:+380638050005">+380 63 80 50 005</a>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory')?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/js/js.js"></script>
</body>
</html>
