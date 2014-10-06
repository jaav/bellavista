<?php
/**
 * Template Name: sample
 */
get_header();?>
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
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <ul>
                    <?php
                    $args = array( 'posts_per_page' => -1 );
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                        <li>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                            <p><time><?php the_time('F j/Y') ?></time> - By: <?php echo get_the_author(); ?></p>
                        </li>
                    <?php endforeach;
                    wp_reset_postdata();?>

                </ul>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>

