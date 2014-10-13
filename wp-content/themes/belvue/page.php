<?php get_header(); ?>
    <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php if (get_field('additional_top')): ?>
                <div class="row">
                    <div class="flex top">
                        <div class="grid-span-4">
                            <?php the_field('title_top'); ?>
                            <?php $links = get_field('links'); ?>
                            <?php if($links): ?>
                                <ul class="links">
                                <?php foreach($links as $link) :  ?>
                                    <?php $link_id = $link['link']->ID; ?>
                                    <?php $link_title = get_the_title($link_id); ?>
                                    <li><a href="<?php echo get_permalink($link_id) ?>"><?php echo $link_title;?></a></li>
                                <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div class="grid-span-6">
                            <?php the_post_thumbnail('slider', array('class' => 'img-responsive')); ?>
                        </div>
                    </div>
                </div>
            <?php endif ?>
            <div class="row">
                <div class="flex">
                    <h2 class="grid-span-4"><?php the_title(); ?></h2>
                    <div class="grid-span-6">
                        <?php the_content(); ?>
                    </div>
                </div>
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
        <?php endwhile; // end of the loop. ?>
    </div>
<?php get_footer(); ?>

