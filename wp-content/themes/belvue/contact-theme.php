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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1259.3678761071938!2d4.319498695703299!3d50.85457741557473!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c3f987841379%3A0x6ff843bf2a71cc4!2sRue+Pierre-J.+Demessemaeker+1%2C+1080+Molenbeek-Saint-Jean%2C+Belgia!5e0!3m2!1spl!2spl!4v1413192835280" width="100%" height="240" frameborder="0" style="border:0"></iframe>
                    <!-- <?php
                    /*                        $location = get_field('map');
                                            if( !empty($location) ):
                                                */?>
                            <div class="map">
                                <div class="marker" data-lat="<?php /*echo $location['lat']; */?>" data-lng="<?php /*echo $location['lng']; */?>"></div>
                            </div>
                        --><?php /*endif; */?>
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

