<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
    <?php wp_head(); ?>
</head>




<body>

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="container-wrap">
            <div class="top-menu">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="<?php echo home_url(); ?>">Neat</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <?php wp_nav_menu([
                            'theme_location' => 'header-menu',
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>

