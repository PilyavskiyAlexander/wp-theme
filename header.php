<!DOCTYPE html lang="en-US">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php bloginfo('title'); wp_title(); ?></title>

    

    
    <?php wp_head(); ?>
</head>

<body class="home blog">

    <!-- Start Header -->
    <div class="container zerogrid">
        <div class="col-full"><div class="wrap-col">
            <div id="header-nav-container">

                <a href="#">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo.png" id="logo" />
                </a>

                <!-- Navigation Menu -->
            <?php wp_nav_menu(array('theme_location' => 'sf-menu', 'container' => false)); ?>
                <!-- <ul class="sf-menu">
                    <li class="menu-item"><a href="#">Работы</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="http://calma.od.ua/" target="_blank">Массажный салон</a></li>
                            <li class="menu-item"><a href="http://rtggroup.in.ua/" target="_blank">Программы международного обмена</a></li>
                            <li class="menu-item"><a href="http://cherga.in.ua/" target="_blank">Сайт объявлений</a></li>
                        </ul>
                    </li>
                    <li class="menu-item current-menu-item"><a href="index.html">Главная</a></li>
                    <li class="menu-item"><a href="blog.html">Блог</a></li>
                    
                </ul>	 -->
                <!-- End Navigation Menu -->

                <div class="clear"></div>

            </div>
            </div>
        </div>
        <div class="clear"></div> 
    </div>
    <div class="spacing-30"></div>
    <!-- End Header -->