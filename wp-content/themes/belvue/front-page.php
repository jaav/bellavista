<?php get_header(); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <section class="video">
           <div class="container">
                 <div class="row grid">
                     <div class="grid-span-10">
                         <?php $video = get_field('mp4_video'); $image = get_field('video_cover'); ?>
                         <h2><?php echo get_field('video_title'); ?></h2>
                         <video width="100%" height="auto" poster="<?php echo $image['url'] ?>" controls="controls" preload="none">
                             <source type="video/mp4" src="<?php echo $video['url']; ?>" />
                             <object width="320" height="240" type="application/x-shockwave-flash" data="flashmediaelement.swf">
                                 <param name="movie" value="flashmediaelement.swf" />
                                 <param name="flashvars" value="controls=true&file=<?php echo $video['url']; ?>" />
                                 <img src="<?php echo $image['url'] ?>" width="100%" height="auto" title="No video playback capabilities" />
                             </object>
                         </video>
                     </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <section class="home">
    <div class="container">
        <div class="row flex">
            <div class="grid-span-4">
                <div class="flex">
                    <div class="grid-span-5 snip">
                        <h2 class="xl">15%</h2>
                        <p>off best rate for citizens only</p>
                        <p>sign up here</p>
                    </div>
                    <div class="grid-span-5 snip">
                        <h2 class="xl ">XL</h2>
                        <p>huge soft XL sized beds</p>
                    </div>
                </div>
                <a href="/content/innovative-rooms" class="full-image flex">
                    <img data-width="767" data-height="767" src="http://lorempixel.com/479/479/" alt="citizenM Rooms">
                    <div class="flex fixed">
                        <div class="grid-span-5 tooltip">
                            <h2><em>citizenM says:</em> <br>our rooms bring you free wifi and free movies. So you’ll feel, well, freer</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-span-6">
                <a href="/content/the-citizenm-story" class="full-image flex">
                    <img data-width="719" data-height="479" src="http://lorempixel.com/719/479/" alt="citizenM - hotel of the future">
                    <div class="flex fixed rt">
                        <div class="grid-span-th tooltip">
                            <h2><em>citizenM says:</em> <br>even the hotel of the future has to start somewhere</h2>
                        </div>
                    </div>
                </a>
                <div class="flex">
                    <div class="grid-span-th snip be">
                        <h2 class="xxl">1</h2>
                        <p><em>Minute</em> check in/out</p>
                    </div>
                    <div class="grid-span-th snip be">
                        <h2 class="xxl t-red">free</h2>
                        <p>Wifi. <em>Always</em></p>
                    </div>
                    <div class="grid-span-th snip be">
                        <h2 class="xxl">24</h2>
                        <p>Hour Food &amp; Drinks</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row flex">
            <div class="grid-span-6">
                    <a href="/content/new-york" class="full-image flex">
                        <img data-width="719" data-height="0" src="<?php echo get_template_directory_uri()?>/img/flowers.jpg" alt="citizenM New York City">
                        <div class="flex fixed rb">
                            <div class="grid-span-th tooltip">
                                <h2><em>citizenM says: <br></em>to the city that never sleeps, we're here to help</h2>
                                <h2>citizenM New York Times Square</h2>
                                <p>Rooms starting at $199..</p>
                            </div>
                        </div>
                    </a>
                    <div class="owl twitter be">
                        <p><i class="fa fa-twitter"></i></p>
                        <div class="wrap">
                            <div class="item">
                                <h2><a href="https://twitteNY2SYSolo/status/460760356885786625">NY2SYSolo</a></h2>
                                <p>Looking foward to another stay at <a href="https://twitter.com/citizenM" target="_blank"><s>@</s><strong>citizenM</strong></a> Glasgow on Fri before flying out to New York to begin my Atlantic row :) <a href="http://t.co/ed4puq0q87" target="_blank" title="http://www.citizenm.com/glasgow/" rel="nofollow" data-expanded-url="http://www.citizenm.com/glasgow/"><span class="invisible">http://www.</span><span class="js-display-url">citizenm.com/glasgow/</span></a></p>
                            </div>
                            <div class="item">
                                <h2><a href="https://twittom/NY2SYSolo/status/460760356885786625">NY2SYSolo</a></h2>
                                <p>Looking foward to another stay at <a href="https://twitter.com/citizenM" target="_blank"><s>@</s><strong>citizenM</strong></a> Glasgow on Fri before flying out to New York to begin my Atlantic row :) <a href="http://t.co/ed4puq0q87" target="_blank" title="http://www.citizenm.com/glasgow/" rel="nofollow" data-expanded-url="http://www.citizenm.com/glasgow/"><span class="invisible">http://www.</span><span class="js-display-url">citizenm.com/glasgow/</span></a></p>
                            </div>
                            <div class="item">
                                <h2><a href="https://twitterm/NY2SYSolo/status/460760356885786625">NY2SYSolo</a></h2>
                                <p>Looking foward to another stay at <a href="https://twitter.com/citizenM" target="_blank"><s>@</s><strong>citizenM</strong></a> Glasgow on Fri before flying out to New York to begin my Atlantic row :) <a href="http://t.co/ed4puq0q87" target="_blank" title="http://www.citizenm.com/glasgow/" rel="nofollow" data-expanded-url="http://www.citizenm.com/glasgow/"><span class="invisible">http://www.</span><span class="js-display-url">citizenm.com/glasgow/</span></a></p>
                            </div>
                        </div>
                        <a href="http://twitter.com/citizenM">follow us</a>
                    </div>
                    <a href="/destinations/rotterdam/rotterdam-hotel" class="full-image flex" target="_blank">
                        <img data-width="719" data-height="0" src="<?php echo get_template_directory_uri()?>/img/ch32.jpg" alt="citizenM Rotterdam">
                        <div class="flex fixed rb">
                            <div class="grid-span-th tooltip">
                                <h2><em>citizenM says: </em>we have drowned hotel clichés in the Nieuwe Maas</h2>
                                <h2>citizenM Rotterdam</h2>
                                <p>Rooms starting at €69..</p>
                            </div>
                        </div>
                    </a>
            </div>
            <div class="grid-span-4">
                <div class="full-image flex">
                    <img data-width="767" data-height="1151" src="<?php echo get_template_directory_uri()?>/img/umbrella.jpg" alt="citizenM weekender">
                    <div class="flex fixed">
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
                        <div class="newsletter newsletter-subscription tooltip red grid-span-5">
                            <form method="post" action="http://belvue.dev/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">
                                <h2><em>subscribe to the </em> newsletter</h2>
                                <label>Get discounts, news and some (very) special treats</label>
                                <input class="newsletter-email" type="email" name="ne" size="30"  placeholder="Enter your email"  required>
                                <button class="newsletter-submit be" type="submit"><span><?php echo esc_attr_x( 'Sign me up', 'submit button', 'belvue' ); ?></span><i class="fa fa-angle-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <a href="/content/pariscdg" class="full-image flex">
                    <img data-width="767" data-height="767" src="<?php echo get_template_directory_uri()?>/img/plane.jpg" alt="citizenM Paris Charles de Gaulle Airport">
                    <div class="flex fixed br">
                        <div class="grid-span-5 tooltip br">
                            <h2><em>citizenM says: </em>bienvenue &agrave; Paris CdG!</h2>
                            <p>Rooms starting at &euro;79..</p>
                        </div>
                    </div>
                </a>
                <div class="flex reviews be">
                    <div class="grid-span-5 snip">
                        <p> <i class="fa fa-pencil-square-o"></i> &quot;These guys have it right in every way...&quot;</p>
                        <a href="" target="_blank">Read the entire review on Tripadvisor..</a>
                    </div>
                    <div class="grid-span-5 snip">
                        <p> <i class="fa fa-pencil-square-o"></i> &ldquo;Amazing room for a great price!&rdquo;</p>
                        <a href="" target="_blank">Read the entire review on Tripadvisor..</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>