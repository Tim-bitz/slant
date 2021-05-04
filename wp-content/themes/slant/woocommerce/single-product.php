<?php
/* 
version: 1.6.4 */
?>
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
	
		<div class="product">
				<?php the_post(); ?>
			
				<?php wc_get_template_part( 'content', 'single-product' );?>

				<?php endwhile; // end of the loop. ?>

			</div>
			
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

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