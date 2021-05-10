<?php
/* 
version: 1.6.4 */
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/single-product.css' ?>">
<?php
get_header();
?>
<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
		?>



<?php while ( have_posts() ) : ?>
	<div class="superdiv">

	<?php the_post(); ?>
	<?php remove_action("woocommerce_after_single_product_summary","woocommerce_output_product_data_tabs",10)?>
	
	<?php add_action("woocommerce_after_single_product_summary","woocommerce_output_product_data_tabs", 14)?>
	
	
	<?php wc_get_template_part( 'content', 'single-product' );?>
	
	
	<?php endwhile; // end of the loop. ?>
	
	
	
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
		?>

	</div>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>



<?php
get_footer();
?>