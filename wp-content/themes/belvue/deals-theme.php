<?php
/**
 * Template Name: DEALS
 */
get_header();?>
    <div class="container special-deal">
        <div class="row">
            <h1><?php the_title();?></h1>
            <?php if( have_rows('special_deal') ): ?>
                <?php while (have_rows('special_deal')) : the_row(); ?>
                    <div class="col-full">
                        <h2><?php the_sub_field('name'); ?></h2>
                        <p class="description"><?php the_sub_field('description'); ?></p>
                        <p class="button"><a href="<?php the_sub_field('url'); ?>"><?php _e('Book now', 'belvue') ?></a></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer();?>

