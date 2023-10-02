<?php
/**
 * Template for search results.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php get_header(); ?>
<section id="content" <?php Avada()->layout->add_class( 'content_class' ); ?> <?php Avada()->layout->add_style( 'content_style' ); ?>>
	<?php if ( have_posts() && 0 !== strlen( trim( get_search_query() ) ) ) : ?>

		<?php if ( 'bottom' === Avada()->settings->get( 'search_new_search_position' ) ) : ?>
			<?php get_template_part( 'templates/blog', 'layout' ); ?>
			<div class="fusion-clearfix"></div>
		<?php endif; ?>

		<?php if ( 'hidden' !== Avada()->settings->get( 'search_new_search_position' ) ) : ?>
			<div class="search-page-search-form search-page-search-form-<?php echo esc_attr( Avada()->settings->get( 'search_new_search_position' ) ); ?>">
				<?php
				/**
				 * Render the post title
				 */
				$title_size = ( false === avada_is_page_title_bar_enabled( 0 ) ? '1' : '2' );
				echo avada_render_post_title( 0, false, esc_html__( 'Need a new search?', 'Avada' ), $title_size ); // phpcs:ignore WordPress.Security.EscapeOutput
				?>
				<p><?php esc_html_e( 'If you didn\'t find what you were looking for, try a new search!', 'Avada' ); ?></p>
				<?php get_search_form(); ?>
			</div>
		<?php endif; ?>

		<?php if ( 'top' === Avada()->settings->get( 'search_new_search_position' ) || 'hidden' === Avada()->settings->get( 'search_new_search_position' ) ) : ?>
			<?php get_template_part( 'templates/blog', 'layout' ); ?>
		<?php endif; ?>

	<?php else : ?>

		<div class="post-content">

			<?php Avada()->template->title_template( esc_html__( 'Couldn\'t find what you\'re looking for!', 'Avada' ) ); ?>
			<div class="error-page">
				<div class="fusion-columns fusion-columns-3">
					<div class="fusion-column col-lg-6 col-md-6 col-sm-6 fusion-error-page-oops">
						<h1 class="oops"><?php esc_html_e( 'Oops!', 'Avada' ); ?></h1>
					</div>

					<div class="fusion-column col-lg-6 col-md-6 col-sm-6 fusion-error-page-search">
						<h3><?php esc_html_e( 'Try again', 'Avada' ); ?></h3>
						<p><?php esc_html_e( 'If you want to rephrase your query, here is your chance:', 'Avada' ); ?></p>
						<?php echo get_search_form( false ); ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</section>
<?php do_action( 'avada_after_content' ); ?>
<?php get_footer(); ?>
