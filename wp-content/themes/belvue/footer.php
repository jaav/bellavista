    </main>
    <footer>
        <div class="container">
            <div class="row">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav navbar-nav', 'container' => '', 'menu_id' => '', ) ); ?>
                   <?php if(get_field('social_links','options')): ?>
					<ul class="list-inline banner-social-buttons">
						<?php while(has_sub_field('social_links','options')): ?>
							<?php if (get_sub_field('facebook')): ?>
								<li><a href="<?php the_sub_field('facebook'); ?>" target="_blank">Facebook</a></li>
							<?php endif; ?>
							<?php if (get_sub_field('twitter')): ?>
								<li><a href="<?php the_sub_field('twitter'); ?>" target="_blank">Twitter</a></li>
							<?php endif; ?>
							<?php if (get_sub_field('gp')): ?>
								<li><a href="<?php the_sub_field('gp'); ?>" target="_blank">Google +</a></li>
							<?php endif; ?>
							<?php if (get_sub_field('blog')): ?>
								<li><a href="<?php the_sub_field('blog'); ?>">Blog</a></li>
							<?php endif; ?>
						<?php endwhile; ?>
					</ul>
				<?php endif;?>
                <p>© 2014  All Rights Reserved</p>
            </div>
        </div>
        <p id="scroll-top"><a class="btn-scroll" href="#page-top"><i class="fa fa-long-arrow-up animated"></i> top</a></p>
    </footer>
<?php wp_footer(); ?>
</body>
</html>