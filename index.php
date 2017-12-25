<?php
/**
 * The main template file.
 * @package cosmos
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="main" role="main">
            <?php if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content' );
                endwhile;
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif; ?>
        </main>
    </div><!-- #primary -->
<?php
get_sidebar();
get_footer();