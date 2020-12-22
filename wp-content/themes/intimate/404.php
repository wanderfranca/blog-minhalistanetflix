<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Intimate
 */

get_header();
?>
<section id="content" class="site-content posts-container">
	<div class="container-fluid">
		<div class="row">
			<div id="primary" class="col-md-12 page-404-container">
				<main id="main" class="site-main">
					<div class="page-404-content">
						<h1 class="error-code"><?php esc_html_e( '404', 'intimate' ); ?></h1>
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'intimate' ); ?></h1>
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'intimate' ); ?></p>
						<?php get_search_form(); ?>
						<div class="back_home">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html_e( 'Back to Home', 'intimate' ); ?></a>
						</div>
					</div><!-- .error-404 -->
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</section>
<?php
get_footer();
