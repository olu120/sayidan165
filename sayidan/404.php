<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Sayidan
 */

get_header(); ?>

	<div id="primary" class="site-content content-wrapper">
		<main id="main" class="container error-404 not-found" role="main">

					<?php
                        get_template_part( 'template-parts/content', 'none' );
					?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
