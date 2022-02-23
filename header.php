<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="<?php echo esc_url(home_url()); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php echo bloginfo('description'); ?>" />
    <meta property="og:site_name" content="<?php echo bloginfo('name'); ?>" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/ogp.jpg" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/style.css">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" id="favicon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-180x180.png">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="header">
            <div class="header-title">
                <a href="<?php echo home_url() ?>">Yuma.H PORTFOLIO</a>
            </div>
            <ul class="header-menu">
                <li><a href="<?php echo home_url(); ?>">HOME</a></li>
                <li><a href="<?php echo home_url(); ?>/works">WORKS</a></li>
                <li><a href="<?php echo site_url(); ?>/about">ABOUT</a></li>
                <li><a href="<?php echo site_url(); ?>/skill">SKILL</a></li>
                <li><a href="<?php echo home_url(); ?>#service">SERVICE</a></li>
                <li><a href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
            </ul>
            <div class="mask"></div>
            <button class="header-humburger">
                <span></span>
            </button>
        </div>
    </header>
    <!-- パンクズリスト　-->
    <?php 
    if ( !is_front_page() && !is_home() ) :
        echo '<div id="breadcrumbs">';
        echo '<div itemscope itemtype="https://schema.org/discussionUrl" class="breadcrumbs-container">';
        $sep = ' ≫ ';
        echo '<a itemprop="correction" href="'.get_bloginfo('url').'" >HOME</a>';
        echo '<span itemprop="correction" class="breadcrumbs-delimiter">'.$sep.'</span>';
        if(is_singular()){
            echo the_title();
        }
        echo '</div>';
        echo '</div>';
    endif;
    ?>