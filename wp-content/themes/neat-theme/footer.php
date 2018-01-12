<div class="container-wrap">
    <footer id="fh5co-footer" role="contentinfo">
        <div class="row">
            <div class="col-md-3 fh5co-widget">
                <h4>About Neat</h4>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
            </div>
            <div class="col-md-3 col-md-push-1">
                <h4>Latest Posts</h4>
                <ul class="fh5co-footer-links">
                    <?php
                    $the_query = new WP_Query([
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order' => DESC,
                        'posts_per_page' => 5
                    ]);
                    if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) :
                    $the_query->the_post(); ?>

                    <li><a href="<?php get_the_permalink(); ?>"><?= get_the_title(); ?></a></li>

                    <?php endwhile;
                            endif;
                    ?>
                </ul>
            </div>

            <div class="col-md-3 col-md-push-1">
                <h4>Links</h4>
                <?php wp_nav_menu([
                    'theme_location' => 'footer-menu',
                    'container' => 'ul',
                    'menu_class' => 'fh5co-footer-links'
                ]) ?>
            </div>



            <div class="col-md-3">
                <h4>Contact Information</h4>
                <ul class="fh5co-footer-links">
                    <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
                    <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                    <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                    <li><a href="">gettemplates.co</a></li>
                </ul>
            </div>

        </div>

        <div class="row copyright">
            <div class="col-md-12 text-center">
                <p>
                    <small class="block">&copy; Cathy Griffin, Photographer.</small>
                    <small class="block">Designed by <a href="#" target="_blank">Studio 18</a></small>
                </p>
                <p>
                <ul class="fh5co-social-icons">
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                </ul>
                </p>
            </div>
        </div>
    </footer>
</div><!-- END container-wrap -->
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<?php wp_footer(); ?>

</body>
</html>
