<?php
/**
 * Template Name: Content With Sliders
 */
get_header();?>
<div class="container">
    <?php if ( have_posts() ) : ?>
    <div class="row">
        <div class="col-full">
            <?php while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title();?> </h1>
                <?php the_content();?>
            <?php endwhile; ?>
        </div>
    </div>
    <?php endif ?>
    <div class="row">
        <?php if( have_rows('description') ): ?>
            <?php while ( have_rows('description') ) : the_row(); ?>
                <div class="flex">
                    <?php if (get_sub_field('desc')): ?>
                        <div class="grid-span-6 desc">
                            <?php the_sub_field('desc'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (get_sub_field('photo')): ?>
                        <div class="grid-span-6 photo">
                            <?php $photo = get_sub_field('photo') ?>
                            <img src="<?php echo $photo['sizes']['slider'] ?>" alt="<?php echo $photo['alt'] ?>"/>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
      <!--  <div class="slider">
        <?php /*if( have_rows('explore') ): */?>
                <?php /*while ( have_rows('explore') ) : the_row(); */?>
                    <div class="flex">
                        <?php /*if (get_sub_field('desc')): */?>
                            <div class="grid-span-6 desc">
                                    <?php /*the_sub_field('desc'); */?>
                            </div>
                        <?php /*endif; */?>
                        <?php /*if (get_sub_field('photo')): */?>
                            <div class="grid-span-6 photo">
                                <?php /*$photo = get_sub_field('photo') */?>
                                <img src="<?php /*echo $photo['sizes']['slider'] */?>" alt="<?php /*echo $photo['alt'] */?>"/>
                            </div>
                        <?php /*endif; */?>
                    </div>
                <?php /*endwhile; */?>
        <?php /*endif; */?>
        <?php /*if( have_rows('carte') ): */?>
                <?php /*while ( have_rows('carte') ) : the_row(); */?>
                    <div class="flex">
                        <?php /*if (get_sub_field('photo')): */?>
                            <div class="grid-span-6 photo">
                                <?php /*$photo = get_sub_field('photo') */?>
                                <img src="<?php /*echo $photo['sizes']['slider'] */?>" alt="<?php /*echo $photo['alt'] */?>"/>
                            </div>
                        <?php /*endif; */?>
                        <?php /*if (get_sub_field('desc')): */?>
                            <div class="grid-span-6 desc">
                                    <?php /*the_sub_field('desc'); */?>
                            </div>
                        <?php /*endif; */?>
                    </div>
                <?php /*endwhile; */?>
        <?php /*endif; */?>
        </div>-->
</div>

<?php get_footer();?>

