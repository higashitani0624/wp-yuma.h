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
    <!-- ????????????????????????-->
    <?php
        $home = '<li><a href="'.get_bloginfo('url').'">?????????</a></li>';
      
        // ???????????????????????????
        if ( is_front_page() ) {
      
        // ?????????????????????????????????
        } else if ( is_category() ) {
        echo '<ul id="breadcrumbs">';
        $cat = get_queried_object();
        $cat_id = $cat->parent;
        $cat_list = array();
        while($cat_id != 0) {
          $cat = get_category( $cat_id );
          $cat_link = get_category_link( $cat_id );
          array_unshift( $cat_list, '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
          $cat_id = $cat->parent;
        }
        echo $home;
        foreach ($cat_list as $value) {
          echo $value;
        }
        the_archive_title('<li>???', '</li>');
        echo '</ul>';
        // ?????????????????????????????????
        } else if ( is_archive() ) {
        echo '<ul id="breadcrumbs">';
        echo $home;
        the_archive_title('<li>', '</li>');
        echo '</ul>';
        // ????????????????????????
        } else if ( is_single() ) {
            echo '<ul id="breadcrumbs">';
        $cat = get_the_category();
        if( isset( $cat[0]->cat_ID ) ) $cat_id = $cat[0]->cat_ID;
        $cat_list = array();
        while( $cat_id != 0 ) {
          $cat = get_category( $cat_id );
          $cat_link = get_category_link( $cat_id );
          array_unshift( $cat_list, '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
          $cat_id = $cat->parent;
        }
        echo $home;
        foreach($cat_list as $value) {
          echo $value;
        }
        the_title('<li>???', '</li>');
        echo '</ul>';
        // ????????????????????????
        } else if ( is_page() ) {
            echo '<ul id="breadcrumbs">';
        echo $home;
        the_title('<li>???', '</li>');
        echo '</ul>';
        // ?????????????????????
        } else if ( is_search() ) {
            echo '<ul id="breadcrumbs">';
        echo $home;
        echo '<li>???'.get_search_query().'??????????????????</li>';
        echo '</ul>';
        // 404??????????????????
        } else if ( is_404() ) {
            echo '<ul id="breadcrumbs">';
        echo $home;
        echo '<li>?????????????????????????????????</li>';
        echo '</ul>';
        }
    ?>