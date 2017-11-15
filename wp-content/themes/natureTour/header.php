<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>NATURETREK</title>
    <!--    externally linked css stylesheet-->
    <link href="<?php bloginfo('stylesheet_url'); ?>style.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/naturetrek.css?v1=yes" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <!--masthead including logo, sub nav, and main nav-->
    <div class="wrapper">
        <header>
            <div class="logo">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.png" alt="logo">
            </div>

            <!--            sub nav floated to the right of the page-->
            <div class="info">
                <p>For Friendly, Expert advice call</p>
                <p>12 (0) 1234 567890</p>
                <?php 
//                array for submenu, pages are assigned in WP menu option
                $subMenu = array(
                    'menu'            => 'Sub Menu',
                    'container'       => 'div',
                    'container_class' => 'menu-{menu slug}',
                );
                ?>
                <div class="subMenu">
                    <?php 
//                    display submenu
                    wp_nav_menu($subMenu) ?>
                </div>
            </div>

            <!--        navbar-->
            <?php 
//            array for mainmenu, pages are assigned in WP menu option            
            $mainMenu = array(
                    'menu'            => 'Main Menu',
                    'container'       => 'div',
                    'container_class' => 'menu-{menu slug}',
                );
                ?>
            <div class="nav">
                <?php 
//                display mainmenu
                wp_nav_menu($mainMenu) ?>
            </div>

            <!--        page location with link to return to home page-->
            <div class="page">
                <ul>
                    <li><a href="">Home</a></li>
                    <li>></li>
                    <li><a href="">Species</a></li>
                </ul>
            </div>

            <!--        filters to with search button -->
            <div class="filters">
                <ul>
                    <li>HOLIDAY SEARCH</li>
                    <li class="dropdown selected"><select>
                        <option>Select Region</option>
                    </select></li>
                    <li class="dropdown"><select>
                        <option>Select Category</option>
                    </select></li>
                    <li class="dropdown"><select>
                        <option>Select Date</option>
                    </select></li>
                    <li class="dropdown"><select>
                        <option>Select Price</option>
                    </select></li>
                    <li><a href=""><img src="<?php echo get_bloginfo('template_directory'); ?>/images/searchArrow.png" alt="search arrow"></a></li>
                </ul>
            </div>
        </header>
