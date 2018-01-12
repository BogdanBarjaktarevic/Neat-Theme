<?php
/**
 * Template Name: Home Page Template
 */
get_header();
?>

<div class="container-wrap">
    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('slides') ):

                // loop through the rows of data
                while ( have_rows('slides') ) : the_row();

                $sliderPicture = get_sub_field('slider_image');

                ?>




                <li style="background-image: url(<?= $sliderPicture['sizes']['slider-image-size'] ?>);">
                    <div class="overlay-gradient"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 slider-text">
                                <div class="slider-text-inner">
                                    <h1><?= get_sub_field('slider_title'); ?></h1>
                                    <?php $sliderLink = get_sub_field('slider_link'); ?>
                                    <h2><?= get_sub_field('slider_content'); ?></h2>
                                    <p>
                                        <?php $sliderFirstButton = get_sub_field('first_button'); ?>
                                        <?php $sliderSecondButton = get_sub_field('second_button'); ?>
                                        <a class="btn btn-primary btn-demo" href="<?=$sliderFirstButton['url']?>"></i><?=$sliderFirstButton['title']?></a>
                                        <a class="btn btn-primary btn-learn" href="<?=$sliderSecondButton['url']?>"><?=$sliderSecondButton['title']?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endwhile;
                        endif;
                ?>
            </ul>
        </div>
    </aside>
    <div id="fh5co-services">
        <div class="row">
            <div class="col-md-4 text-center animate-box">
                <div class="services">
						<span class="icon">
							<i class="icon-diamond"></i>
						</span>
                    <div class="desc">
                        <h3><a href="#">Brand Identity</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services">
						<span class="icon">
							<i class="icon-lab2"></i>
						</span>
                    <div class="desc">
                        <h3><a href="#">Web Design &amp; UI</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services">
						<span class="icon">
							<i class="icon-settings"></i>
						</span>
                    <div class="desc">
                        <h3><a href="#">Web Development</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-work" class="fh5co-light-grey">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Work</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="row">
            <?php
            $the_query = new WP_Query([
                'post_type' => 'work_projects',
                'orderby' => 'date',
                'order' => DESC,
                'posts_per_page' => 3
            ]);
            if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) :
            $the_query->the_post(); ?>
            <div class="col-md-4 text-center animate-box">
                <?php $projectHomeImage = get_field('work_project_image'); ?>
                <a href="<?php get_the_permalink(); ?>" class="work"  style="background-image: url(<?=$projectHomeImage['sizes']['large']?>);">
                    <div class="desc">
                <h3><?= get_the_title(); ?></h3>
                <?php
                foreach((get_the_category()) as $category) :
                    ?>
                    <span><?= $category->cat_name ?></span>
                <?php endforeach;?>
                    </div>
                </a>
            </div>
            <?php endwhile;
                    endif;
            // Restore original Post Data
            wp_reset_postdata();
            ?>
        </div>
    </div>

    <div id="fh5co-counter" class="fh5co-counters">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center animate-box">
                <p>We have a fun facts far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
    </div>

    <div id="fh5co-blog" class="blog-flex">
        <?php
        $the_query = new WP_Query([
            'post_type' => 'featured_post_type',
        ]);
        $the_query->the_post(); ?>
        <?php $featuredPostImage = get_field('blogpost_image'); ?>
        <div class="featured-blog" style="background-image: url(<?=$featuredPostImage['sizes']['blogpost-image-size']?>);">
            <div class="desc-t">
                <div class="desc-tc">
                    <span class="featured-head"><?=get_the_title();?></span>
                    <h3><a href="<?php get_the_permalink(); ?>"><?= get_the_content(); ?></a></h3>
                    <span><a href="<?php get_the_permalink(); ?>" class="read-button"><?= get_field('blogpost_button'); ?></a></span>
                </div>
            </div>
        </div>
        <div class="blog-entry fh5co-light-grey">
            <div class="row animate-box">
                <div class="col-md-12">
                    <h2>Latest Posts</h2>
                </div>
            </div>
            <div class="row">
                <?php
                $the_query = new WP_Query([
                    'post_type' => 'post',
                    'orderby' => 'date',
                    'order' => DESC,
                    'posts_per_page' => 3
                ]);
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) :
                $the_query->the_post(); ?>
                <div class="col-md-12 animate-box">
                    <a href="<?php get_the_permalink(); ?>" class="blog-post">
                        <?php $slikaHomePage = get_field('blogpost_image'); ?>
                        <span class="img" style="background-image: url(<?=$slikaHomePage['sizes']['large']?>);"></span>
                        <div class="desc">
                            <h3><?= get_the_title(); ?></h3>
                            <?php
                            foreach((get_the_category()) as $category) :
                                ?>
                                <span><?= $category->cat_name ?></span>
                            <?php endforeach;?>
                        </div>
                    </a>
                </div>
                <?php endwhile;
                        endif;
                // Restore original Post Data
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div><!-- END container-wrap -->
<?php get_footer(); ?>
