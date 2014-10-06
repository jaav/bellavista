<?php get_header(); ?>
<section>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="container">
        <div class="row">
            <article class="col-xs-12">
                <h1><?php the_title(); ?></h1>
                <p><time><?php the_time('F j/Y') ?></time> - By: <?php echo get_the_author(); ?></p>
                <?php the_content(); ?>
                <?php if( function_exists('ADDTOANY_SHARE_SAVE_KIT') ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
            </article>
            <!--
            <nav class="nav-single">
                <span class="nav-previous"><?php /*previous_post_link( '%link', '<span class="meta-nav">' . _e( '&larr;', 'Previous post link', 'finntheo' ) . '</span> %title' ); */?></span>
                <span class="nav-next"><?php /*next_post_link( '%link', '%title <span class="meta-nav">' . _e( '&rarr;', 'Next post link', 'finntheo' ) . '</span>' ); */?></span>
            </nav>-->
        </div>
    </div>
    <?php endwhile;?>
</section>
<?php get_footer(); ?>