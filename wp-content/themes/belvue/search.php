<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php if ( have_posts() ) : ?>
					<h1><?php printf( __( 'Search Results for: %s', 'belvue' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						<?php while ( have_posts() ) : the_post(); ?>
						<article>
							<h2><?php the_title(); ?></h2>
			                <?php the_content(); ?>
						</article>
						<?php endwhile; ?>
						<?php content_nav( 'nav-below' ); ?>
					<?php else : ?>
						<article>
							 <h2><?php _e( 'Nothing Found', 'belvue' ); ?></h2>
           					 <p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'belvue' ); ?></p>
						</article>
					<?php endif; ?>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>