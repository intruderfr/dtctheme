<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dtctheme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="bg-primary text-white pt-5">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-3 footer-left-col">
					<?php dynamic_sidebar( 'footer-widget-col-one' ); ?>
					</div>
					<div class="col-12 col-lg-9 footer-right-col w-80">
						<?php dynamic_sidebar( 'footer-widget-col-two' ); ?>
						<div class="row">
							<div class="col-12 col-lg-4">
							<?php dynamic_sidebar( 'footer-widget-col-three' ); ?>
							</div>
							<div class="col-12 col-lg-4">
							<?php dynamic_sidebar( 'footer-widget-col-four' ); ?>
							</div>
							<div class="col-12 col-lg-4">
							<?php dynamic_sidebar( 'footer-widget-col-five' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-primary text-white copyright-section">
			<div class="container pt-3 pb-2">
				<div class="row copyright-row d-flex align-item-center">
					<div class="col-12 col-lg-4">
					<p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' );?>. All Rights Reserved</a>
					</div>
					<div class="col-12 col-lg-8 h-25 d-inline-block text-end">
					<p>Designed by Batman</a>
					</div>
				</div>
			</div>
		</div>



</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
