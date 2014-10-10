    </main>
    <footer>
        <div class="container">
            <div class="row flex">
                <div class="grid-span-2 snip">
                    <h3>Some title</h3>
                    <?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => '', 'container' => '', 'menu_id' => '', ) ); ?>
                </div>
                <div class="grid-span-2 snip">
                    <h3>Some title</h3>
                    <?php wp_nav_menu( array( 'theme_location' => 'user', 'menu_class' => '', 'container' => '', 'menu_id' => '', ) ); ?>
                </div>
                <div class="grid-span-2 snip">
                    <h3>Subscribe</h3>
                    <script type="text/javascript">
                        //<![CDATA[
                        if (typeof newsletter_check !== "function") {
                            window.newsletter_check = function (f) {
                                var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
                                if (!re.test(f.elements["ne"].value)) {
                                    alert("The email is not correct");
                                    return false;
                                }
                                if (f.elements["ny"] && !f.elements["ny"].checked) {
                                    alert("You must accept the privacy statement");
                                    return false;
                                }
                                return true;
                            }
                        }
                        //]]>
                    </script>
                    <div class="newsletter newsletter-subscription">
                        <form method="post" action="http://belvue.dev/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">
                            <label>Get discounts, news and some (very) special treats</label>
                            <input class="newsletter-email" type="email" name="ne" size="30"  placeholder="Enter your email"  required>
                            <button class="newsletter-submit be" type="submit"><span><?php echo esc_attr_x( 'Sign me up', 'submit button', 'belvue' ); ?></span><i class="fa fa-angle-right"></i></button>
                        </form>
                    </div>
                </div>
                <div class="grid-span-2 snip">
                    <h3>citizenM social</h3>
                        <ul class="list-inline banner-social-buttons">
                            <?php if(get_field('social_links','options')): ?>
                            <?php while(has_sub_field('social_links','options')): ?>
                            <?php endwhile; ?>
                            <?php endif;?>
                            <li><a href="<?php the_sub_field('facebook');?>" target="_blank"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                            <li><a href="<?php the_sub_field('twitter'); ?>" target="_blank"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                            <li><a href="<?php the_sub_field('four'); ?>" target="_blank"><i class="fa fa-foursquare"></i> Fourquare</a></li>
                            <li><a href="<?php the_sub_field('yt'); ?>" target="_blank"><i class="fa fa-youtube"></i> Youtube</a></li>
                            <li><a href="<?php the_sub_field('gp'); ?>" target="_blank"><i class="fa fa-google-plus-square"></i> Google +</a></li>
                        </ul>

                    </ul>
                </div>
                <div class="grid-span-2 snip">
                    <h3>like us on</h3>
                    <h3>share this page on</h3>
                </div>
            </div>
            <div class="flex">
                <p class="grid-span-10">© citizenM 2014</p>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>