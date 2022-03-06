<!doctype html>
<html lang="ja">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-43PBYV1V3Z"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-43PBYV1V3Z');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-MBRCVZ9');</script>
    <!-- End Google Tag Manager -->
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
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MBRCVZ9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
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