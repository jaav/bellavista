<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php echo get_page_template_slug( $post->ID ); ?>
            <?php endwhile; // end of the loop. ?>
        </div>
    </div>
<?php get_footer(); ?>

