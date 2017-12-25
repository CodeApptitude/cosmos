<?php
/**
 * The template for displaying 404 pages
 *
 * @package cosmos
 */

get_header(); ?>
<div>
<?php get_search_form(); ?>
    <h1><?php _e( 'Page Not Found', 'cosmos' ); ?></h1>
    <p><?php _e( 'Sorry, but the page you were trying to view does not exist.', 'cosmos' ); ?></p>
</div>
<?php get_footer();
