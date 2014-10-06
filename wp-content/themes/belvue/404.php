<?php get_header(); ?>
    <section id="error404 no-results not-found">
        <div class="container">
            <div class="row">
                <h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'belvue' ); ?></h1>
                <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'belvue' ); ?></p>
				<?php //get_search_form(); ?>
				<?php //the_widget( 'WP_Widget_Recent_Posts' ); ?>
				<?php if(categorized_blog()): ?>
				<div class="widget widget_categories">
					<h2><?php _e( 'Most Used Categories', 'belvue' ); ?></h2>
					<ul>
					<?php
						wp_list_categories( array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'show_count' => 1,
							'title_li'   => '',
							'number'     => 10,
						) );
					?>
					</ul>
				</div>
				<?php endif; ?>
				<?php
				$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'belvue' ), convert_smilies( ':)' ) ) . '</p>';
				the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
				?>
				<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>