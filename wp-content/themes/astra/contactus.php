<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */
/* Template Name: contactus */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

	<header class="entry-header ast-no-thumbnail ast-no-meta">
	
			<h1 class="entry-title" itemprop="headline"><?php echo get_the_title(); ?></h1>	

	</header>
	<div class="entry-content clear" itemprop="text">

		
		<p><?php echo get_the_content(); ?></p>
		<p><?php echo do_shortcode('[contact-form-7 id="39" title="Contact form 1"]')?></p>

		
	</div>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
