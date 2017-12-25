<?php
/**
 * The template for display all single posts.
 * @package cosmos
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="main" role="main">
            <?php
            while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', get_post_type() );
            endwhile;
            ?>
        </main>
    </div><!--#primary-->
<?php
get_sidebar();
get_footer();