<?php get_header(); ?>
<section>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="container">
        <div class="row">
            <article class="col-xs-12">
                <h1><?php the_title(); ?></h1>
                <p><time><?php the_time('F j/Y') ?></time> - By: <?php echo get_the_author(); ?></p>
                <?php the_content(); ?>
            </article>
        </div>
    </div>
    <?php endwhile;?>
</section>
<?php get_footer(); ?>