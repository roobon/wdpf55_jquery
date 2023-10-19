<!-- Footer -->
<footer id="footer">
    <div id="footer-widgets" class="themesflat-container title-style-1">
        <div class="themesflat-row gutter-30">

        <?php  dynamic_sidebar('Footer-1') ?>


             <!-- <div class="span_1_of_4 col">
                <div class="widget widget_text padding-left-7">
                    <div class="textwidget">
                        <p class="margin-bottom-22">
                            <img src="<?php //echo get_template_directory_uri() ?>/assets/img/logo-footer.png" width="226" height="50" alt="Finance" data-retina="assets/img/logo-footer@2x.png" data-width="226" data-height="50">
                        </p>
                        <p>We have a wide breadth of experience over 30 years providing financial services.</p>
                    </div>
                </div>

                <div class="widget widget_information padding-left-7">
                    <ul>
                        <li class="address clearfix">
                            <div class="inner">
                                <i class=" finance-icon-map"></i>
                                <span class="text">2835 Vidor Ave, San Antonio</span>
                            </div>
                        </li>
                        <li class="email clearfix">
                            <div class="inner">
                                <i class=" finance-icon-Email02"></i>
                                <span class="text">support@finance.com</span>
                            </div>
                        </li>
                        <li class="phone clearfix">
                            <div class="inner">
                                <i class=" finance-icon-Phone"></i>
                                <span class="text">+1 (100) 380-790 / 6:30 AM - 6:30 PM</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> -->

           


            <div class="span_1_of_4 col">
                <div class="widget widget_twitter margin-top-6 padding-left-13">
                    <h2 class="widget-title"><span>Recent tweets</span></h2>
                    <ul class="tweets clearfix">
                        <li class="item clearfix">
                            <div class="tweet-icon">
                                <i class="icon finance-icon-Twitter"></i>
                            </div><!-- /.thumb -->

                            <div class="texts">
                                <h3><a href="#">Life is a story, make yours the best seller</a></h3>
                                <span class="tweet-time"><span class="entry-date">15 June 2018</span></span>
                            </div><!-- /.texts -->
                        </li>

                        <li class="item clearfix">
                            <div class="tweet-icon">
                                <i class="icon finance-icon-Twitter"></i>
                            </div><!-- /.thumb -->

                            <div class="texts">
                                <h3><a href="#">Life is a story, make yours the best seller</a></h3>
                                <span class="tweet-time"><span class="entry-date">17 June 2018</span></span>
                            </div><!-- /.texts -->
                        </li>
                    </ul>
                </div><!-- /.widget_recent_news -->
            </div><!-- /.span_1_of_4 -->

            <div class="span_1_of_4 col">
                <div class="widget widget_tag_cloud margin-top-6 padding-left-9">
                    <h2 class="widget-title margin-bottom-43"><span>Popular Tags</span></h2>
                    <div class="tagcloud">
                        <a href="#">Estate</a>
                        <a href="#">Education</a>
                        <a href="#">Taxes</a>
                        <a href="#">Loan</a>
                        <a href="#">Crow</a>
                        <a href="#">Insurance</a>
                        <a href="#">Income</a>
                        <a href="#">Plan</a>
                        <a href="#">Consulting</a>
                    </div>
                </div><!-- /.widget_tag_cloud -->
            </div><!-- /.span_1_of_4 -->

            <div class="span_1_of_4 col">
                <div class="widget widget_flickr margin-top-6 padding-left-6">
                    <h2 class="widget-title"><span>Photostream</span></h2>

                    <div class="flickr-wrap clearfix col3 g12">
                        <div class="flickr_badge_image">
                            <a href="#" target="_blank">
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/1.jpg" alt="Image">
                                </div>
                            </a>
                        </div>

                        <div class="flickr_badge_image">
                            <a href="#" target="_blank">
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/2.jpg" alt="Image">
                                </div>
                            </a>
                        </div>

                        <div class="flickr_badge_image">
                            <a href="#" target="_blank">
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/3.jpg" alt="Image">
                                </div>
                            </a>
                        </div>

                        <div class="flickr_badge_image">
                            <a href="#" target="_blank">
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/4.jpg" alt="Image">
                                </div>
                            </a>
                        </div>

                        <div class="flickr_badge_image">
                            <a href="#" target="_blank">
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/5.jpg" alt="Image">
                                </div>
                            </a>
                        </div>

                        <div class="flickr_badge_image">
                            <a href="#" target="_blank">
                                <div class="item">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram/6.jpg" alt="Image">
                                </div>
                            </a>
                        </div>
                    </div><!-- /.instagram-wrap -->
                </div><!-- /.widget_instagram -->
            </div><!-- /.span_1_of_4 -->
        </div><!-- /.themesflat-row -->

    </div><!-- /#footer-widgets -->
</footer><!-- /#footer -->

<!-- Bottom -->
<div id="bottom" class="clearfix style-1">
    <div id="bottom-bar-inner" class="themesflat-container">
        <div class="bottom-bar-inner-wrap">
            <div class="bottom-bar-content">
                <div id="copyright" class="padding-left-9">
                    &copy; <a href="#">COPYRIGHT FINANCE</a>. DESIGN BY @DOANDU WITH LOVE.
                </div><!-- /#copyright -->
            </div><!-- /.bottom-bar-content -->
<!-- 
            <div class="bottom-bar-menu">
                <ul class="bottom-nav">
                    <li class="menu-item"><a href="#">About Us</a></li>
                    <li class="menu-item"><a href="#">Terms</a></li>
                    <li class="menu-item"><a href="#">Services</a></li>
                    <li class="menu-item"><a href="#">Contacts</a></li>
                </ul>
            </div> -->
<!-- /.bottom-bar-menu -->

            <?php
            wp_nav_menu(array(
                'menu'                => "Footer Menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                'menu_class'        => "bottom-nav", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                'menu_id'            => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
                'container'            => "div", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                'container_class'    => "bottom-bar-menu", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                'container_id'        => "", // (string) The ID that is applied to the container.
                // 'fallback_cb'        => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
                // 'before'            => "", // (string) Text before the link markup.
                // 'after'                => "", // (string) Text after the link markup.
                // 'link_before'        => "", // (string) Text before the link text.
                // 'link_after'        => "", // (string) Text after the link text.
                // 'echo'                => "", // (bool) Whether to echo the menu or return it. Default true.
                // 'depth'                => "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                // 'walker'            => "", // (object) Instance of a custom walker class.
                'theme_location'    => "footer_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be 
            ));

            ?>
        </div>
    </div>
</div><!-- /#bottom -->
</div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- Javascript -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/animsition.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/countto.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/magnific.popup.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/equalize.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/typed.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/vegas.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/shortcodes.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>

<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZ2z7aoo8okwvyHbaxfKwUi-sblBj5QYk"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/gmap3.min.js"></script>

<!-- Revolution Slider -->
<script src="<?php echo get_template_directory_uri() ?>/includes/rev-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/includes/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/rev-slider.js"></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
<script src="<?php echo get_template_directory_uri() ?>/includes/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/includes/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/includes/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/includes/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/includes/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/includes/rev-slider/js/extensions/revolution.extension.video.min.js"></script>


<?php wp_footer() ?>
</body>

</html>