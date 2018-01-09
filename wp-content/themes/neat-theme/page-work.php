<?php
/**
 * Template Name: Work Page Template
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
                                <h2><?= get_field('description_text');?><br><a href="<?=$link['url']?>"><?=$link['title']?></a></h2>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <div id="fh5co-work">
        <div class="row">

            <?php
                $args = [
                    'post_type' => 'work_projects',
                    'order_by' => 'id',
                    'order' => 'asc',
                ];
                // The Query
                $query = new WP_Query( $args );

                if ( $query->have_posts() ) :
                while ( $query->have_posts() ):
                $query->the_post();
            ?>

            <div class="col-md-4 text-center animate-box">
                <?php $projectImage = get_field('work_project_image'); ?>
                <a href="<?php the_permalink(); ?>" class="work" style="background-image: url(<?=$projectImage['sizes']['large']?>);">
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
