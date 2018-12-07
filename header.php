<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- <link rel="profile" href="http://gmgp.org/xfn/11"> -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <?php wp_head(); ?>
 </head>
 
 <body <?php body_class(); ?>>
    <div class="header">
        <div class="container">
            <div class="logo">
                <?php 
                    printf('<a href="%1$s"><img src="https://news.mediado.info/wp-content/uploads/2017/12/logo_bkwh-1.jpg" alt="media-logo" class="md-logo"></a>',get_bloginfo('url'));
                ?>          
            </div>         
        </div>
    </div>
    <div class="container menu-area">
        <div class="collapse">
            <div id="collapse-button" onclick="onCollapse()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <?php portal_menu('primary-menu') ?>
    </div>