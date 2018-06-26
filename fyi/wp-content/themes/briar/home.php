<?php
/**
 * The home/blog template file.
 *
 * @package Briar
 * @since 1.0
 */

global $allowedposttags;

get_header(); ?>

	<div class="featured-hero">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<h2 class="featured-hero__title"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></h2>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.featured-hero -->

	<div class="container">
		<div class="row">
			<div class="<?php briar_main_class(); ?>">
				<div class="post-list" id="content" role="main">
					<?php
					$sticky_posts = get_option( 'sticky_posts' );
					$sticky_post_id = ! empty( $sticky_posts ) ? $sticky_posts[0] : 0;
					if ( ! empty( $sticky_posts ) && 1 === (int) max( 1, get_query_var( 'paged' ) ) ) :
						$sticky_post = get_post( $sticky_post_id );
						if ( ! empty( $sticky_post ) ) :
							$image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $sticky_post_id ), 'briar-featured-image' );
							$permalink = get_permalink( $sticky_post_id );
							$content = strip_tags( strlen( $sticky_post->post_excerpt ) > 0 ? $sticky_post->post_excerpt : $sticky_post->post_content );
							if ( strlen( $content ) > 140 ) {
								$content = substr( $content, 0, 140 ) . '...';
							}
						?>
					<div class="row">
						<div <?php post_class( array( 'post-item', 'clearfix' ), $sticky_post_id ); ?>>
							<div class="col-lg-12">
								<a href="<?php echo esc_url( $permalink ); ?>">
									<div class="post-item__img"<?php if ( ! empty( $image_url ) ) : ?> style="<?php echo esc_attr( 'background-image: url(' . $image_url[0] . ');' ); ?>"<?php endif; ?>>
										<div class="post-item__overlay"></div><!-- /.overlay -->

										<div class="post-item__content clearfix">
											<h3 class="post-item__title"><?php echo get_the_title( $sticky_post ); ?></h3>
											<?php if ( ! empty( $content ) ) : ?>

											<p><?php echo wp_kses( $content, $allowedposttags ); ?></p>

											<?php printf( '<div class="post-item__btn btn--transition">%s</div>', sprintf( esc_html__( 'Read more%s', 'briar' ), '<span class="screen-reader-text"> ' . get_the_title() . '</span>' ) ); ?>
											<?php endif; ?>
										</div><!-- /.content -->
									</div>
								</a>
							</div><!-- /.col -->
						</div><!-- /.news-block -->
					</div><!-- /.row -->
				<?php endif;
				endif; ?>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
						if ( get_the_id() !== $sticky_post_id ) {
							get_template_part( 'content', get_post_format() );
						}
						?>
					<?php endwhile; ?>

					<?php briar_pagination(); ?>
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
				</div>
			</div>

			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer();
