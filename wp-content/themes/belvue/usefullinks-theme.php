<?php
/**
 * Template Name: Useful Links
 */
get_header();?>
<div class="container">
    <div class="row">
        <div class="flex">
            <div class="grid-span-4">
                <?php wp_nav_menu( array( 'theme_location' => 'usefullinks', 'menu_class' => 'usefullinks', 'container' => '', 'menu_id' => '', ) ); ?>
            </div>
            <div class="grid-span-6">
                <?php while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title();?> </h1>
                    <?php the_content();?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>

