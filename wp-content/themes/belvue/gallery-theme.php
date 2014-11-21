<?php
/**
 * Template Name: Gallery
 */
get_header();?>
<div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="row">
            <?php
            $images = get_field('gallery');
            if( $images ): ?>
                <div class="flex">
                    <h2 class="grid-span-4"><?php the_title(); ?></h2>
                    <div class="grid-span-6">
                        <ul class="gallery">
                            <?php foreach( $images as $image ): ?>
                                <li class="grid-span-3">
                                    <a href="<?php echo $image['url']; ?>">
                                        <img src="<?php echo $image['sizes']['gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php else :?>
                <div class="flex">
                    <h2 class="grid-span-4"><?php the_title(); ?></h2>
                    <div class="grid-span-6">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <?php if (get_field('title') || get_field('content')): ?>
            <div class="row">
                <div class="flex">
                    <h2 class="grid-span-4"><?php the_field('title'); ?></h2>
                    <div class="grid-span-6">
                        <?php the_field('content'); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>