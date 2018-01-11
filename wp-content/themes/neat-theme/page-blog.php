<?php
/**
 * Template Name: Blog Page Template
 */
get_header();
?>

<div class="container-wrap">
    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
                <?php $slika = get_field('hero_image'); ?>
                <li style="background-image: url(<?=$slika['sizes']['hero-image-size']?>);">
                    <div class="overlay-gradient"></div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
                            <div class="slider-text-inner text-center">
                                <h1><?= get_field('title_text'); ?></h1>
                                <?php $link = get_field('link'); ?>
                                <h2><?= get_field('description_text');?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <div id="fh5co-blog">
        <div class="row">
            <div class="col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="blog-single.html" class="blog-bg" style="background-image: url(images/blog-1.jpg);"></a>
                    <div class="blog-text">
                        <span class="posted_on">Feb. 15th 2016</span>
                        <h3><a href="blog-single.html">Photoshoot On The Street</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="stuff">
                            <!-- <li><i class="icon-heart3"></i>249</li> -->
                            <!-- <li><i class="icon-eye2"></i>1,308</li> -->
                            <li><a href="blog-single.html">Read More<i class="icon-arrow-right22"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="blog-single.html" class="blog-bg" style="background-image: url(images/blog-2.jpg);"></a>
                    <div class="blog-text">
                        <span class="posted_on">Feb. 15th 2016</span>
                        <h3><a href="blog-single.html">Surfing at Philippines</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="stuff">
                            <!-- <li><i class="icon-heart3"></i>249</li> -->
                            <!-- <li><i class="icon-eye2"></i>1,308</li> -->
                            <li><a href="blog-single.html">Read More<i class="icon-arrow-right22"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="blog-single.html" class="blog-bg" style="background-image: url(images/blog-3.jpg);"></a>
                    <div class="blog-text">
                        <span class="posted_on">Feb. 15th 2016</span>
                        <h3><a href="blog-single.html">Focus On Uderwater</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="stuff">
                            <!-- <li><i class="icon-heart3"></i>249</li> -->
                            <!-- <li><i class="icon-eye2"></i>1,308</li> -->
                            <li><a href="blog-single.html">Read More<i class="icon-arrow-right22"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="blog-single.html" class="blog-bg" style="background-image: url(images/blog-1.jpg);"></a>
                    <div class="blog-text">
                        <span class="posted_on">Feb. 15th 2016</span>
                        <h3><a href="blog-single.html">Photoshoot On The Street</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="stuff">
                            <!-- <li><i class="icon-heart3"></i>249</li> -->
                            <!-- <li><i class="icon-eye2"></i>1,308</li> -->
                            <li><a href="blog-single.html">Read More<i class="icon-arrow-right22"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="blog-single.html" class="blog-bg" style="background-image: url(images/blog-2.jpg);"></a>
                    <div class="blog-text">
                        <span class="posted_on">Feb. 15th 2016</span>
                        <h3><a href="blog-single.html">Surfing at Philippines</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="stuff">
                            <!-- <li><i class="icon-heart3"></i>249</li> -->
                            <!-- <li><i class="icon-eye2"></i>1,308</li> -->
                            <li><a href="blog-single.html">Read More<i class="icon-arrow-right22"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="blog-single.html" class="blog-bg" style="background-image: url(images/blog-3.jpg);"></a>
                    <div class="blog-text">
                        <span class="posted_on">Feb. 15th 2016</span>
                        <h3><a href="blog-single.html">Focus On Uderwater</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="stuff">
                            <!-- <li><i class="icon-heart3"></i>249</li> -->
                            <!-- <li><i class="icon-eye2"></i>1,308</li> -->
                            <li><a href="blog-single.html">Read More<i class="icon-arrow-right22"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- END container-wrap -->

<?php get_footer(); ?>
