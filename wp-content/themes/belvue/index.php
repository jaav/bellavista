<?php get_header(); ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
           <h1><?php the_title();?> </h1>
           <?php the_content();?>
        <?php endwhile; ?>
    <?php else : ?>
        <article id="post-0" class="post no-results not-found">
        <?php if ( current_user_can( 'edit_posts' ) ) : ?>
            <h1><?php _e( 'No posts to display', 'belvue' ); ?></h1>
            <p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'belvue' ), admin_url( 'post-new.php' ) ); ?></p>
        <?php else :?>
            <h1><?php _e( 'Nothing Found', 'belvue' ); ?></h1>
            <p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'belvue' ); ?></p>
        <?php endif;?>
        </article>
    <?php endif; ?>
<?php get_footer(); ?>