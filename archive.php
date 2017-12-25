<?php
/**
 * The template for archive pages
 *
 * @package cosmos
 */
while ( have_posts() ) : the_post();
    get_template_part('template-parts/content', get_post_type());
endwhile;