<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/png">
    <title>Oddbee</title>
    <?php wp_head() ?>
</head>
<!--
/**
 * @license
 * MyFonts Webfont Build ID 4104040, 2021-06-15T15:35:27-0400
 * 
 * The fonts listed in this notice are subject to the End User License
 * Agreement(s) entered into by the website owner. All other parties are 
 * explicitly restricted from using the Licensed Webfonts(s).
 * 
 * You may obtain a valid license at the URLs below.
 * 
 * Webfont: Jeko-SemiBold by EllenLuff
 * URL: https://www.myfonts.com/fonts/ellenluff/jeko/semi-bold/
 * 
 * Webfont: Jeko-ExtraBold by EllenLuff
 * URL: https://www.myfonts.com/fonts/ellenluff/jeko/extra-bold/
 * 
 * 
 * Webfonts copyright: Copyright © 2020 by Ellen Luff &amp; Tom Anders Watkins. All rights reserved.
 * 
 * © 2021 MyFonts Inc
*/-->

<body data-url-to-theme="<?php echo get_template_directory_uri(); ?>" data-site-url="<?php echo site_url() ?>">
    <div class="transition-pages">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/favicon.svg" alt="" class="transition-pages-logo">
    </div>
    <div class="transition-pages-up">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/favicon.svg" alt="" class="transition-pages-logo">
    </div>
    <div class="mob-menu-wrap">
            <div class="mob-header">
            </div>
            <div class="mob-menu-and-button">
            <?php
                wp_nav_menu( [
                    'theme_location'  => 'main_menu',
                    'menu'            => 'Main menu',
                    'container'       => false,
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'mob-menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] );

                ?>
                <button class="contact-us-btn mob-header-btn button">Contact us</button>
            </div>

            <div class="mob-menu-socials">
                <a href="" target="_blank">Facebook</a>
                <a href="" target="_blank">Instagram</a>
                <a href="" target="_blank">Twitter</a>
            </div>

        </div>
        <header class="header">

            <div class="container-full">
                <div class="header-content">
                    <?php 
                     $post_id = get_the_ID();
                     $btn_bg = get_field('btn_color', $post_id);
                     $btn_text = get_field('text_btn_color', $post_id);
                     $menu_color = get_field('menu_color', $post_id);
                     $logo_color = get_field('logo_color', $post_id);
                    ?>

<a href="<?php echo site_url() ?>" class="logo-link">


<?php $post_type = get_post_type( $post_id ); ?>


<div class="logo-anim" data-color="<?php echo $logo_color ?>"></div>

         
</a>
                    <div class="navgation-wrap">
                        <div class="mob-menu-icon">
                            <div style="background-color: <?php echo ($logo_color) ? $logo_color : '#222'; ?>"></div>
                            <div style="background-color: <?php echo ($logo_color) ? $logo_color : '#222'; ?>"></div>
                        </div>
                        <nav class="nav" style="color: red">
                       <?php
                    
                        if($menu_color): ?>
                        <style>
                            .header-menu li a{
                                color: <?php echo $menu_color; ?>
                            }
                        </style>
                        <?php endif; ?>
                                   
                        <?php

                           wp_nav_menu( [
                                'theme_location'  => 'main_menu',
                                'menu'            => 'Main menu',
                                'container'       => false,
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'header-menu',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => '',
                            ] );

                        ?>
                        </nav>
                        
                        <span class="header-btn-wrap">
                            <button class="contact-us-btn button header-btn"
                            <?php
                            if($btn_bg || $btn_text): ?>
                                style="background-color: <?php echo $btn_bg; ?>; color: <?php echo $btn_text; ?>"
                           <?php endif; ?>
                            >Contact us</button>
                        </span>

                    </div>

                </div>
            </div>
        </header>


    <main>
