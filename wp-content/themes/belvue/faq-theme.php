<?php
/**
 * Template Name: FAQ
 */
get_header();?>
    <div class="container faq">
        <div class="row">
            <h1><?php the_title();?></h1>
            <?php if( have_rows('faq') ): ?>
                <?php while (have_rows('faq')) : the_row(); ?>
                    <div class="col-full">
                        <h2><?php the_sub_field('title'); ?></h2>
                        <p><?php the_sub_field('content'); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer();?>

