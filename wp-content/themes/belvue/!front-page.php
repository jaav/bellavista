<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <section class="col-sm-12">gri</section>
        </div>
    </div>
<section id="intro" data-speed="0.1">
    <div class="container dimfull">
        <div class="row">
            <div class="col-sm-12">
                <?php $post_id = 61; $my_post = get_post($post_id);?>
                <?php echo $my_post->post_content; ?>
                <?php wp_reset_postdata(); ?>
                <a href="#portfolio" class="btn-scroll">
                    <i class="fa fa-long-arrow-down animated"></i>
                    Check out our work
                </a>
            </div>
        </div>
    </div>
</section>
<?php $args = array(
    'post_type'		=> 'portfolio',
    'numberposts'	=> 6,
); $portfolio = get_posts($args); ?>
<?php if ($portfolio):?>
<section id="portfolio">
    <div class="container" data-speed="1.2">
        <div class="row">
            <div class="col-xs-12">
                <div id="slider">
                    <?php foreach($portfolio as $post): setup_postdata($post); ?>
                        <?php if( have_rows('portfolio') ): ?>
                                <?php while ( have_rows('portfolio') ) : the_row(); ?>
                                    <article>
                                        <div class="desc col-md-4 col-sm-6 pull-right">
                                            <h2><?php the_title();?></h2>
                                            <?php the_content();?>
                                            <h3>What We Did:</h3>
                                            <?php if(get_sub_field('what_we_did')): ?>
                                                <ul>
                                                    <?php while(has_sub_field('what_we_did')): ?>
                                                        <li>
                                                            <?php the_sub_field('task'); ?>
                                                        </li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            <?php endif; ?>
                                            <h3>Testimonial:</h3>
                                            <blockquote><em><?php echo get_sub_field('testimonial'); ?></em></blockquote>
                                            <a href="<?php echo get_sub_field('link'); ?>" target="_blank">Visit the site</a>
                                        </div>
                                        <div class="photo col-md-8 col-sm-6 col-xs-12">
                                            <?php $img = get_sub_field('image') ?>
                                            <img src="<?php echo $img['sizes']['portfolio'] ?>" alt="<?php echo $img['alt'] ?>" />
                                        </div>
                                    </article>
                                <?php endwhile;?>
                        <?php endif; ?>
                    <?php wp_reset_postdata(); endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; //portfolio ?>
<section id="about">
    <div class="container">
        <div class="row">
            <article>
                <?php $post_id = 115; $my_post = get_post($post_id);?>
                <div class="col-sm-7 pull-right">
                    <?php echo $my_post->post_content; ?>
                </div>
                <div class="col-sm-5">
                    <?php echo get_the_post_thumbnail($my_post->ID); ?>
                </div>
                <?php wp_reset_postdata(); ?>
            </article>
        </div>
    </div>
</section>
<section id="touch">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2><?php echo get_field('about',  19); ?></h2>
                <a href="#contact" class="btn btn-default btn-lg btn-scroll animated">get in touch</a>
            </div>
        </div>
    </div>
</section>
<section id="services">
    <header>
        <div class="container">
            <div class="row">
                <?php $post_id = 19; $my_post = get_post($post_id); $title = $my_post->post_title; ?>
                <?php echo $my_post->post_content; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if( have_rows('service', 19) ): ?>
                    <?php while ( have_rows('service', 19) ) : the_row(); ?>
                        <article class="col-sm-6">
                            <h3><?php the_sub_field('title');?></h3>
                            <div class="desc"> <?php the_sub_field('desc');?></div>
                            <a class="more">Learn more</a>
                        </article>
                    <?php endwhile;?>
                <?php endif; ?>
                <a href="<?php echo get_permalink(21); ?>" class="btn-scroll">
                    <i class="fa fa-long-arrow-down animated"></i>
                    Check out my results
                </a>
            </div>
        </div>
    </div>
</section>
    <section id="success">
        <?php $post_id = 21;
        $my_post = get_post($post_id);
        $title = $my_post->post_title; ?>
        <header data-speed="0.1">
            <div class="container">
                <div class="row">
                    <h2><?php echo $my_post->post_title; ?></h2>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <article>
                        <header>
                            <h3 class="col-md-5"><?php echo get_field('subtitle', 21); ?></h3>
                            <?php $img = get_field('thumbnail', 21);?>
                            <img src="<?php echo $img['sizes']['logo'] ?>" class="img-responsive col-md-7" alt="<?php the_sub_field('subtitle'); ?>" />
                        </header>
                        <?php echo $my_post->post_content; ?>
                        <?php wp_reset_postdata(); ?>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <?php if(get_field('testimonial', 21)): ?>
                        <?php while(has_sub_field('testimonial', 21)): ?>
                            <article>
                                <div class="desc col-md-9 pull-right">
                                    <p> <?php the_sub_field('desc'); ?></p>
                                    <strong> <?php the_sub_field('name'); ?> <em> <?php the_sub_field('position'); ?></em></strong>
                                </div>
                                <div class="col-md-3 photo">
                                    <?php $face = get_sub_field('thumbnail');?>
                                    <img src="<?php echo $face['sizes']['testimonial'] ?>" class="img-responsive" alt="<?php the_sub_field('subtitle'); ?>" />
                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
    <section id="blog">
        <header>
            <h1>~ Blog ~</h1>
        </header>
        <div id="categories">
            <div class="container">
                <div class="row">
                    <ul>
                        <li class="col-sm-4">
                            <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="name">Categories</span>
                                <span class="trigger"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <?php wp_list_categories('hide_empty=1&title_li'); ?>
                                <?php if(count($customPostTaxonomies) > 0) {
                                    foreach($customPostTaxonomies as $tax)
                                    {
                                        $args = array(
                                            'orderby' => 'name',
                                            'show_count' => 0,
                                            'pad_counts' => 0,
                                            'hierarchical' => 1,
                                            'taxonomy' => $tax,
                                            'title_li' => ''
                                        );

                                        wp_list_categories( $args );
                                    }
                                } ?>
                            </ul>
                        </li>
                        <li class="col-sm-4">
                            <a href="<?php echo get_permalink(39); ?>">Recent posts</a>
                        </li>
                        <li class="col-sm-4"><a href="http://finntheo.us2.list-manage.com/subscribe?u=95304b096a0ce803358467e45&id=f52d9bce54">Sign-up</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <ul>
                        <?php while (have_posts()): the_post(); ?>
                            <li>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                                <p><time><?php the_time('F j/Y') ?></time> - By: <?php echo get_the_author(); ?></p>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <?php $post_id = 23; $my_post = get_post($post_id); ?>
                <?php echo $my_post->post_content; ?>
                <?php echo do_shortcode( '[contact-form-7 id="38" title="Contact form"]' ); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>