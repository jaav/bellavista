<?php
/**
 * Template Name: Contact
 */
get_header();?>
<div class="container">
    <div class="row">
        <h2 class="grid-span-4"><?php the_title(); ?></h2>
        <div class="grid-span-6">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="flex">
                <div class="grid-span-6 snip map">
                    <img src="<?php echo get_template_directory_uri()?>/img/map.jpg" alt="map"/>
                </div>
                <div class="grid-span-2 snip be xxl">
                    <h2><?php _e('address','belvue')?></h2>
                    <p><?php echo the_field('address'); ?></p>
                </div>
                <div class="grid-span-2 snip be xxl">
                    <h2><?php _e('contacts','belvue')?></h2>
                    <p><a href="mailto:"><?php echo the_field('email'); ?></a>
                        <?php echo the_field('phone'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>

