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
    </aside>
    <div id="fh5co-blog">
        <div class="row">
            <?php
            $the_query = new WP_Query([
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => DESC
            ]);
            if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) :
            $the_query->the_post(); ?>
            <div class="col-md-4">
                <?php $slika2 = get_field('blogpost_image'); ?>
                <div class="fh5co-blog animate-box">
                    <a href="<?php get_the_permalink(); ?>" class="blog-bg" style="background-image: url(<?=$slika2['sizes']['blogpost-image-size']?>);"></a>
                    <div class="blog-text">
                        <?php $datum = strtotime(get_the_date()); ?>
                        <span class="posted_on"><?=date('M jS Y', $datum)?></span>
                        <h3><a href="<?php get_the_permalink(); ?>"><?= get_the_title(); ?></a></h3>
                        <p><?= get_the_content(); ?></p>
                        <ul class="stuff">
                            <!-- <li><i class="icon-heart3"></i>249</li> -->
                            <!-- <li><i class="icon-eye2"></i>1,308</li> -->
                            <li><a href="<?php get_the_permalink(); ?>"><?= get_field('blogpost_button')?><i class="icon-arrow-right22"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endwhile;
                    endif;
            // Restore original Post Data
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div><!-- END container-wrap -->

<?php get_footer(); ?>
