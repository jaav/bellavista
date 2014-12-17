<?php
/**
 * Template Name: Home
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <section class="top">

        <div class="container">
            <div class="row flex">
                <div class="grid-span-10">
                    <?php the_post_thumbnail('home-thumb', array('class' => 'img-responsive')); ?>
                    <div class="flex fixed bl">
                        <div class="grid-span-4 tooltip bl">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
    <section class="advantages">

        <div class="container">
            <div class="row">
                <div class="flex be">
                    <div class="grid-span-2 snip be red">
                        <?php echo the_field('rooms'); ?>
                    </div>
                    <div class="grid-span-2 be snip">
                        <?php echo the_field('wifi'); ?>
                    </div>
                    <div class="grid-span-2 be snip">
                        <?php echo the_field('breakfasts'); ?>
                    </div>
                    <div class="grid-span-2 be snip">
                        <?php echo the_field('pay'); ?>
                    </div>
                    <div class="grid-span-2 be snip">
                        <?php echo the_field('price'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="room">

        <div class="container">
            <div class="row">
                <?php if (have_rows('description_r')): ?>
                    <?php while (have_rows('description_r')) : the_row(); ?>
                        <div class="flex">
                            <?php if (get_sub_field('desc')): ?>
                                <div class="grid-span-5 desc">
                                    <?php the_sub_field('desc'); ?>
                                    <a class="btn green trigger trigger_e"><span><?php _e('explore', 'belvue') ?></span>
                                        <i class="fa fa-angle-down"></i></a>
                                    <a class="btn green trigger trigger_c"><span><?php _e('Rooms à la carte', 'belvue') ?></span>
                                        <i class="fa fa-angle-down"></i></a>
                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('photo')): ?>
                                <div class="grid-span-5 photo">
                                    <?php $photo = get_sub_field('photo') ?>
                                    <img src="<?php echo $photo['sizes']['slider'] ?>"
                                         alt="<?php echo $photo['alt'] ?>"/>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!--<a class="btn green" href="">explore</a>-->
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if (have_rows('explore_r')): ?>
                    <div class="explore wrap">
                        <?php while (have_rows('explore_r')) : the_row(); ?>
                            <?php get_template_part('partials/carousel'); ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if (have_rows('carte_r')): ?>
                    <div class="carte wrap">
                        <?php while (have_rows('carte_r')) : the_row(); ?>
                            <?php get_template_part('partials/carousel'); ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="about">

        <div class="container">
            <div class="row">
                <div class="flex be">
                    <?php if (get_field('discount')): ?>
                        <div class="grid-span-4 snip be xxl">
                            <?php the_field('discount'); ?>
                        </div>
                    <?php endif ?>
                    <?php if (get_field('location')): ?>
                        <div class="grid-span-2 snip be xxl">
                            <?php the_field('location'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('area')): ?>
                        <div class="grid-span-2 snip be xxl">
                            <?php the_field('area'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="review grid-span-2 snip be">
                        <i class="fa fa-pencil-square-o"></i>
                        <a href="" target="_blank">“<?php _e('Amazing room for a great price!', 'belvue') ?>”</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="breakfast">

        <div class="container">
            <div class="row">
                <?php if (have_rows('description_b', 39)): ?>
                    <?php while (have_rows('description_b', 39)) : the_row(); ?>
                        <div class="flex">
                            <?php if (get_sub_field('photo')): ?>
                                <div class="grid-span-5 photo">
                                    <?php $photo = get_sub_field('photo') ?>
                                    <img src="<?php echo $photo['sizes']['slider'] ?>"
                                         alt="<?php echo $photo['alt'] ?>"/>
                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('desc')): ?>
                                <div class="grid-span-5 desc">
                                    <?php the_sub_field('desc'); ?>
                                    <a class="btn green trigger trigger_e"><span><?php _e('explore', 'belvue') ?></span>
                                        <i class="fa fa-angle-down"></i></a>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!--<a class="btn green" href="">explore</a>-->
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if (have_rows('explore_b', 39)): ?>
                    <div class="explore wrap">
                        <?php while (have_rows('explore_b', 39)) : the_row(); ?>
                            <div class="flex">
                                <?php if (get_sub_field('photo')): ?>
                                    <div class="grid-span-5 photo">
                                        <?php $photo = get_sub_field('photo') ?>
                                        <img src="<?php echo $photo['sizes']['slider'] ?>"
                                             alt="<?php echo $photo['alt'] ?>"/>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_sub_field('desc')): ?>
                                    <div class="grid-span-5 desc">
                                        <div class="tooltip red lt">
                                            <?php the_sub_field('desc'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="contact">

        <div class="container">
            <div class="row">
                <div class="flex be">
                    <div class="grid-span-6 snip map">
                        <a href="https://www.google.be/maps/@50.8497391,4.3401395,17z?hl=en" target="_blank"><img
                                src="<?php echo get_template_directory_uri() ?>/img/map.jpg" alt="map"/></a>
                    </div>
                    <div class="grid-span-2 snip be xxl">
                        <h2><?php _e('address', 'belvue') ?></h2>

                        <p><?php echo the_field('address'); ?></p>
                    </div>
                    <div class="grid-span-2 snip be xxl">
                        <h2><?php _e('contacts', 'belvue') ?></h2>

                        <p><a href="mailto:<?php echo the_field('email'); ?>"><?php echo the_field('email'); ?></a>
                            <?php echo the_field('phone'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="events">

        <div class="container">
            <div class="row">
                <?php if (have_rows('description_e')): ?>
                    <?php while (have_rows('description_e')) : the_row(); ?>
                        <div class="flex">
                            <?php if (get_sub_field('desc')): ?>
                                <div class="grid-span-5 desc">
                                    <?php the_sub_field('desc'); ?>
                                    <a class="btn green trigger trigger_e"><span><?php _e('explore', 'belvue') ?></span>
                                        <i class="fa fa-angle-down"></i></a>
                                    <a class="btn green trigger trigger_c"><span><?php _e('Set up à la carte', 'belvue') ?></span>
                                        <i class="fa fa-angle-down"></i></a>

                                    <ul class="tabs book-button">
                                        <li><a data-toggle="modal" data-target="#contact" href="#"><?php _e('Book a meeting','belvue')?></a></li>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <?php if (get_sub_field('photo')): ?>
                                <div class="grid-span-5 photo">
                                    <?php $photo = get_sub_field('photo') ?>
                                    <img src="<?php echo $photo['sizes']['slider'] ?>"
                                         alt="<?php echo $photo['alt'] ?>"/>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if (have_rows('explore_e')): ?>
                    <div class="explore wrap">
                        <?php while (have_rows('explore_e')) : the_row(); ?>
                            <div class="flex">
                                <?php if (get_sub_field('desc_e')): ?>
                                    <div class="grid-span-5 desc">
                                        <div class="tooltip red tr">
                                            <?php the_sub_field('desc_e'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_sub_field('photo_e')): ?>
                                    <div class="grid-span-5 photo">
                                        <?php $photo = get_sub_field('photo_e') ?>
                                        <img src="<?php echo $photo['sizes']['slider'] ?>"
                                             alt="<?php echo $photo['alt'] ?>"/>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if (have_rows('carte_e')): ?>
                    <div class="carte wrap">
                        <?php while (have_rows('carte_e')) : the_row(); ?>
                            <div class="flex">
                                <?php if (get_sub_field('desc_e')): ?>
                                    <div class="grid-span-5 desc">
                                        <div class="tooltip red tr">
                                            <?php the_sub_field('desc_e'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (get_sub_field('photo_e')): ?>
                                    <div class="grid-span-5 photo">
                                        <?php $photo = get_sub_field('photo_e') ?>
                                        <img src="<?php echo $photo['sizes']['slider'] ?>"
                                             alt="<?php echo $photo['alt'] ?>"/>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="slider">

        <div class="container">
            <div class="row">
                <div class="flex">
                    <div class="grid-span-6 photo">
                        <?php if (have_rows('slides')): ?>
                            <?php while (have_rows('slides')) : the_row(); ?>
                                <div class="full-image flex">
                                    <?php $photo = get_sub_field('slide') ?>
                                    <img src="<?php echo $photo['sizes']['slider-small'] ?>"
                                         alt="<?php echo $photo['alt'] ?>"/>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="grid-span-4 desc snip">
                        <?php the_field('about'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="discoveries">

        <div class="container">
            <div class="row">
                <div class="flex">
                    <div class="grid-span-4 desc snip">
                        <?php the_field('desc'); ?>
                    </div>
                    <div class="grid-span-6 photo">
                        <?php if (have_rows('pwt')): ?>
                            <?php while (have_rows('pwt')) : the_row(); ?>
                                <div class="full-image flex">
                                    <?php $photo = get_sub_field('photo') ?>
                                    <img src="<?php echo $photo['sizes']['slider-medium'] ?>"
                                         alt="<?php echo $photo['alt'] ?>"/>

                                    <div class="flex fixed">
                                        <div class="grid-span-2 snip tooltip red ">
                                            <p><?php the_sub_field('tooltip_1'); ?></p>
                                        </div>
                                        <div class="grid-span-2 snip tooltip red ">
                                            <p><?php the_sub_field('tooltip_2'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq">

        <div class="container">
            <div class="row">
                <h2><a href="<?php echo get_permalink('92') ?>"><?php _e('Belvue FAQ', 'belvue') ?></a></h2>

                <div class="flex">
                    <?php if (have_rows('faq', 92)): ?>
                        <?php $count = 0;
                        while (have_rows('faq', 92)): ?>
                            <?php
                            $count++;
                            if ($count > 5) {
                                break;
                            }
                            the_row();
                            ?>
                            <div class="grid-span-2 snip">
                                <h4><?php the_sub_field('title'); ?></h4>

                                <p><?php the_sub_field('content'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>