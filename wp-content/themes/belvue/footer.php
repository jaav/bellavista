    </main>
    <footer>
        <div class="container">
            <div class="row flex">
                <div class="grid-span-2 snip">
                    <h3><?php _e('about Belvue','belvue')?></h3>
                    <?php wp_nav_menu( array( 'theme_location' => 'user', 'menu_class' => '', 'container' => '', 'menu_id' => '', ) ); ?>
                </div>
                <div class="grid-span-2 snip">
                    <h3><?php _e('more','belvue')?></h3>
                    <?php wp_nav_menu( array( 'theme_location' => 'membership', 'menu_class' => '', 'container' => '', 'menu_id' => '', ) ); ?>
                </div>
                <div class="grid-span-2 snip">
                    <h3>Subscribe</h3>
                    <script type="text/javascript">
                        //<![CDATA[
                        if (typeof newsletter_check !== "function") {
                            window.newsletter_check = function (f) {
                                var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
                                if (!re.test(f.elements["ne"].value)) {
                                    alert("<?php _e('The email is not correct','belvue')?>");
                                    return false;
                                }
                                if (f.elements["ny"] && !f.elements["ny"].checked) {
                                    alert("<?php _e('You must accept the privacy statement','belvue')?>");
                                    return false;
                                }
                                return true;
                            }
                        }
                        //]]>
                    </script>
                    <div class="newsletter newsletter-subscription">
                        <form method="post" action="<?php echo plugins_url();?>/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">
                            <label><?php _e('Get discounts, news and some (very) special treats','belvue')?></label>
                            <input class="newsletter-email" type="email" name="ne" size="30"  placeholder="Enter your email"  required>
                            <button class="newsletter-submit be" type="submit"><span><?php echo esc_attr_x( 'Sign me up', 'submit button', 'belvue' ); ?></span><i class="fa fa-angle-right"></i></button>
                        </form>
                    </div>
                </div>
                <div class="grid-span-2 snip">
                    <h3><?php _e('Belvue social','belvue')?></h3>
                        <ul class="list-inline banner-social-buttons">
                            <li><a href="<?php the_field('facebook', 7);?>" target="_blank"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                            <li><a href="<?php the_field('twitter', 7); ?>" target="_blank"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                            <li><a href="<?php the_field('four', 7); ?>" target="_blank"><i class="fa fa-foursquare"></i> Fourquare</a></li>
                            <li><a href="<?php the_field('yt', 7); ?>" target="_blank"><i class="fa fa-youtube"></i> Youtube</a></li>
                            <li><a href="<?php the_field('gp', 7); ?>" target="_blank"><i class="fa fa-google-plus-square"></i> Google +</a></li>
                        </ul>
                </div>
                <div class="grid-span-2 snip">
                    <h3>like us on</h3>
                    <h3><?php _e('>share this page on','belvue')?></h3>
                    <ul class="list-inline banner-social-buttons">
                        <li><a href="<?php the_field('facebook', 7);?>" target="_blank"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                        <li><a href="<?php the_field('twitter', 7); ?>" target="_blank"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                        <li><a href="<?php the_field('gp', 7); ?>" target="_blank"><i class="fa fa-google-plus-square"></i> Google +</a></li>
                    </ul>
                </div>
            </div>
            <div class="flex">
                <p class="grid-span-10">© HOTEL BELVUE 2014</p>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="reservation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"><?php _e('Book a room','belvue');?></h4>
                </div>
                <div class="modal-body">
                    <p>Sample modal text</p>
                </div>
            </div>
        </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>