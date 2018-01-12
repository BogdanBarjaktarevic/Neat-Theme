<?php
/**
 * Template Name: About Page Template
 */
get_header();
the_post();
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
                                <h2><?= get_field('description_text');?><br><a href="<?=$link['url']?>"><?=$link['title']?></a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
    </aside>
    <div id="fh5co-about">
        <div class="row animate-box">
            <?php
                $args = [
                'post_type' => 'history_post_type',
                ];
                // The Query
                $query = new WP_Query( $args );
                 if ( $query->have_posts() ) :
                 while ( $query->have_posts() ):
                 $query->the_post();
            ?>
            <div class="col-md-6 col-md-offset-3 text-center heading-section">
                <h3><?= get_the_title(); ?></h3>
                <p><?= get_the_excerpt(); ?></p>
            </div>
            <?php
                 endwhile;
                    endif;
                // Restore original Post Data
                wp_reset_postdata();
             ?>

        </div>

        <div class="row">

            <?php
                $args = [
                    'post_type' => 'about_me_type',
                    'order_by' => 'id',
                    'order' => 'asc',
                ];
                // The Query
                $query = new WP_Query( $args );

                if ( $query->have_posts() ) :
                while ( $query->have_posts() ):
                $query->the_post();
                $slika1 = get_field('about_image');
            ?>

            <div class="col-md-10 col-md-offset-1 text-center animate-box">
                <p><img src="<?= $slika1['sizes']['about-me-image-size']?>" alt="<?= $slika1['alt']?>" class="img-responsive"></p>
            </div>
            <div class="col-md-8 col-md-offset-2 text-center animate-box">
                <div class="about-desc">
                    <h3><?= get_the_title(); ?></h3>
                    <p><?= get_the_content(); ?></p>
                </div>
            </div>
            <?php
                endwhile;
                    endif;
                // Restore original Post Data
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div><!-- END container-wrap -->

<?php get_footer(); ?>
