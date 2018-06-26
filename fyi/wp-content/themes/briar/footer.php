<?php
/**
 * The template for displaying the footer.
 *
 * @package Briar
 * @since 1.0
 */

?>

 	<footer class="footer" id="footer" role="contentinfo">
		<div class="container">
			<div class="row">
			<?php
			$social_icons = briar_get_social_icons();
			if ( ! empty( $social_icons ) ) : ?>
				<div class="col-md-6">
			<?php briar_social_icons( $social_icons ); ?>
				</div>

				<div class="col-md-6">
			<?php else : ?>
				<div class="col-md-12">
			<?php endif; ?>
					<div class="footer__copyright">
						<p><?php printf( esc_html__( '%1$s @ Copyright %2$s. - Created by %3$s', 'briar' ), esc_html( get_bloginfo( 'name' ) ), esc_html( date( 'Y' ) ), '<a href="http://slicejack.com" title="WordPress Development Agency" rel="designer">SliceJack</a>' ); ?></p>
					</div><!-- /.copyright -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</footer>

	<?php wp_footer(); ?>

</body>
</html>
