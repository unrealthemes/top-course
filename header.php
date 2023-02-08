<?php 
$txt_logo = get_field('txt_logo', 'option');
$logo_id = get_field('logo_header', 'option');
$txt_menu = get_field('txt_menu_header', 'option');

// echo '<pre>';
// print_r( $logo_id );
// echo '</pre>';
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#4967D0">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" sizes="32x32"> 
	<?php wp_head(); ?>
</head> 
<body <?php body_class('home'); ?>>
	<?php wp_body_open(); ?>

    <!-- HEADER start -->
    <header> 
        <!-- sticky HEADER -->
        <div id="site-header" class="sticky">  
            <div class="container">
                <div class="row header_top">
                    
                    <!-- logo -->
                    <div class="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">

                            <?php if ( $txt_logo ) : ?>
                                <span><?php echo $txt_logo; ?></span>
                            <?php endif; ?>

                            <?php 
                            if ( $logo_id ) : 
                                $logo_url = wp_get_attachment_url( $logo_id, 'full' );
                                if ( get_post_mime_type($logo_id) == 'image/svg+xml' ) :
                                    echo file_get_contents( $logo_url );
                                else :
                                    echo '<img src="' . $logo_url . '" alt="' . $txt_logo . '">';
                                endif;
                            endif; 
                            ?>

                        </a>
                    </div> 
                        
                    <!-- catalog button -->
                    <div class="catalog_btn"> 
                        <div class="cd-dropdown-wrapper">
                            <a class="cd-dropdown-trigger" href="#0">

                                <?php if ( $txt_menu ) : ?>
                                    <span><?php echo $txt_menu; ?></span>
                                <?php endif; ?>

                            </a>
                        </div> 
                    </div> 

                    <!-- search -->
                    <div class="header_search">  
                        <form method="get" class="searchform pk_vizible" id="searchform" action="#">
                            <input type="text" class="search_input" name="s" autocomplete="off" placeholder="Что будем искать?">
                            <input type="submit" class="submit " value="Найти"> 
                        </form>
                        <div class="xs_vizible search_xs">
                            <i class="submit click_open"></i>
                            <div class="mobile_search">
                                <form method="get" class="xs_vizible" action="#">
                                    <input type="text" class="search_input" name="s" autocomplete="off" placeholder="Что будем искать?">
                                    <input type="submit" class="submit " value="Найти"> 
                                </form>
                            </div>
                        </div>
                    </div>  
  
  
                    <!-- header menu2 -->
                    <div class="header_menu2">
                        <div class="mobile_menu_btn">
                            <a class="header_menu_btn" id="nav-icon4" href="#" onclick="return false">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        
                        <nav class="row header_nav">  
                            <?php
                            if ( has_nav_menu('header') ) {
                                wp_nav_menu( [
                                    'theme_location' => 'header',
                                    'container'      => false,
                                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                ] );
                            }
                            ?>
                            <div class="login">
                                <a href="" class="btn_white">Войти</a>
                            </div>
                        </nav>
                    </div>      
                    
                    <!-- login --> 
                    <div class="login pk_vizible">
                        <a href="" class="btn_white">Войти</a>
                    </div> 
                    
                    <!-- end nav-dropdow -->
                    <nav class="cd-dropdown">  
                        <a href="#0" class="cd-close">Close</a>
                        <ul class="cd-dropdown-content">
                            <!-- catalog item-->
                            <li class="has-children">
                                <a href="#">
                                    <img src="<?php echo THEME_URI; ?>/img/1.svg" alt="">
                                    <span>Программирование</span>
                                </a> 
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#0">Назад</a></li>
                                    <li><a href="#">Java-разработка</a></li>
                                    <li><a href="#">Информационная безопасность</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Golang-разработка</a></li>
                                    <li><a href="#">Робототехника</a></li>
                                    <li><a href="#">Web-разработка</a></li>
                                    <li><a href="#">Django</a></li><li><a href="#y">Чат-боты</a></li>
                                    <li><a href="#">Основы программирования</a></li>
                                    <li><a href="#">Tkinter</a></li>
                                    
                                    <div class="clear"></div>
                                    <div class="menu_btand">
                                        <a href="#"><img src="<?php echo THEME_URI; ?>/img/r1.svg" alt=""></a>
                                        <a href="#"><img src="<?php echo THEME_URI; ?>/img/r2.svg" alt=""></a>
                                        <a href="#"><img src="<?php echo THEME_URI; ?>/img/r3.svg" alt=""></a>
                                        <a href="#"><img src="<?php echo THEME_URI; ?>/img/r4.svg" alt=""></a>
                                        <a href="#"><img src="<?php echo THEME_URI; ?>/img/r1.svg" alt=""></a>
                                        <a href="#"><img src="<?php echo THEME_URI; ?>/img/r2.svg" alt=""></a>
                                        <a href="#"><img src="<?php echo THEME_URI; ?>/img/r3.svg" alt=""></a>
                                        <a href="#"><img src="<?php echo THEME_URI; ?>/img/r4.svg" alt=""></a> 
                                    </div> 
                                    
                                </ul>
                            </li>
                            <!-- end catalog item-->
                            
                            <!-- catalog item-->
                            <li class="has-children">
                                <a href="#">
                                    <img src="<?php echo THEME_URI; ?>/img/2.svg" alt="">
                                    <span>Управление</span>
                                </a> 
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#0">Назад</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Golang-разработка</a></li>
                                    <li><a href="#">Робототехника</a></li>
                                    <li><a href="#">Web-разработка</a></li>
                                    <li><a href="#">Django</a></li><li><a href="#y">Чат-боты</a></li>
                                    <li><a href="#">Основы программирования</a></li>
                                    <li><a href="#">Tkinter</a></li>
                                    <li><a href="#">Ручное тестирование</a></li>
                                    <li><a href="#">Тестирование мобильных приложений</a></li>  
                                </ul>
                            </li>
                            <!-- end catalog item-->

                            <!-- catalog item-->
                            <li class="has-children">
                                <a href="#">
                                    <img src="<?php echo THEME_URI; ?>/img/3.svg" alt="">
                                    <span>Маркетинг</span>
                                </a> 
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#0">Назад</a></li>
                                    <li><a href="#">Python-разработка</a></li>
                                    <li><a href="#">QA-тестирование</a></li>
                                    <li><a href="#">1C-разработка</a></li>
                                    <li><a href="#">Java-разработка</a></li>
                                    <li><a href="#">Информационная безопасность</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Golang-разработка</a></li>
                                    <li><a href="#">Робототехника</a></li>
                                    <li><a href="#">Web-разработка</a></li>
                                    <li><a href="#">Django</a></li><li><a href="#y">Чат-боты</a></li>
                                    <li><a href="#">Основы программирования</a></li>
                                    <li><a href="#">Tkinter</a></li>
                                </ul>
                            </li>
                            <!-- end catalog item-->    
                            
                            <!-- catalog item-->
                            <li class="has-children">
                                <a href="#">
                                    <img src="<?php echo THEME_URI; ?>/img/4.svg" alt="">
                                    <span>Дизайн и создание контента</span>
                                </a> 
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#0">Назад</a></li>
                                    <li><a href="#">Информационная безопасность</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Golang-разработка</a></li>
                                    <li><a href="#">Робототехника</a></li>
                                    <li><a href="#">Web-разработка</a></li>
                                    <li><a href="#">Django</a></li>
                                    <li><a href="#y">Чат-боты</a></li>
                                    <li><a href="#">Основы программирования</a></li>
                                    <li><a href="#">Tkinter</a></li>
                                </ul>
                            </li>
                            <!-- end catalog item-->                
                            
                            
                            <!-- catalog item-->
                            <li class="has-children">
                                <a href="#">
                                    <img src="<?php echo THEME_URI; ?>/img/5.svg" alt="">
                                    <span>Аналитика</span>
                                </a> 
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#0">Назад</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Golang-разработка</a></li>
                                    <li><a href="#">Робототехника</a></li>
                                    <li><a href="#">Web-разработка</a></li> 
                                    <li><a href="#">Информационная безопасность</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Django</a></li>
                                    <li><a href="#y">Чат-боты</a></li>
                                    <li><a href="#">Основы программирования</a></li>
                                    <li><a href="#">Tkinter</a></li>
                                </ul>
                            </li>
                            <!-- end catalog item-->      
                            
                            <!-- catalog item-->
                            <li class="has-children">
                                <a href="#">
                                    <img src="<?php echo THEME_URI; ?>/img/6.svg" alt="">
                                    <span>Общие навыки</span>
                                </a> 
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#0">Назад</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Golang-разработка</a></li>
                                    <li><a href="#">Робототехника</a></li>
                                    <li><a href="#">Web-разработка</a></li>
                                    <li><a href="#">Django</a></li><li><a href="#y">Чат-боты</a></li>
                                    <li><a href="#">Основы программирования</a></li>
                                    <li><a href="#">Tkinter</a></li>
                                    <li><a href="#">Ручное тестирование</a></li>
                                    <li><a href="#">Тестирование мобильных приложений</a></li>  
                                </ul>
                            </li>
                            <!-- end catalog item-->

                            <!-- catalog item-->
                            <li class="has-children">
                                <a href="#">
                                    <img src="<?php echo THEME_URI; ?>/img/7.svg" alt="">
                                    <span>Творчество</span>
                                </a> 
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#0">Назад</a></li>
                                    <li><a href="#">Python-разработка</a></li>
                                    <li><a href="#">QA-тестирование</a></li>
                                    <li><a href="#">1C-разработка</a></li>
                                    <li><a href="#">Java-разработка</a></li>
                                    <li><a href="#">Информационная безопасность</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Golang-разработка</a></li>
                                    <li><a href="#">Робототехника</a></li>
                                    <li><a href="#">Web-разработка</a></li>
                                    <li><a href="#">Django</a></li><li><a href="#y">Чат-боты</a></li>
                                    <li><a href="#">Основы программирования</a></li>
                                    <li><a href="#">Tkinter</a></li>
                                </ul>
                            </li>
                            <!-- end catalog item-->    
                            
                            <!-- catalog item-->
                            <li class="has-children">
                                <a href="#">
                                    <img src="<?php echo THEME_URI; ?>/img/8.svg" alt="">
                                    <span>Профессиональное</span>
                                </a> 
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#0">Назад</a></li>
                                    <li><a href="#">Информационная безопасность</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Golang-разработка</a></li>
                                    <li><a href="#">Робототехника</a></li>
                                    <li><a href="#">Web-разработка</a></li>
                                    <li><a href="#">Django</a></li>
                                    <li><a href="#y">Чат-боты</a></li>
                                    <li><a href="#">Основы программирования</a></li>
                                    <li><a href="#">Tkinter</a></li>
                                </ul>
                            </li>
                            <!-- end catalog item-->                
                            
                            
                            <!-- catalog item-->
                            <li class="has-children">
                                <a href="#">
                                    <img src="<?php echo THEME_URI; ?>/img/9.svg" alt="">
                                    <span>Иностранные языки</span>
                                </a> 
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#0">Назад</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Golang-разработка</a></li>
                                    <li><a href="#">Робототехника</a></li>
                                    <li><a href="#">Web-разработка</a></li> 
                                    <li><a href="#">Информационная безопасность</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Django</a></li>
                                    <li><a href="#y">Чат-боты</a></li>
                                    <li><a href="#">Основы программирования</a></li>
                                    <li><a href="#">Tkinter</a></li>
                                </ul>
                            </li>
                            <!-- end catalog item-->   
                            
                            <!-- catalog item-->
                            <li class="has-children">
                                <a href="#">
                                    <img src="<?php echo THEME_URI; ?>/img/10.svg" alt="">
                                    <span>Детское образование</span>
                                </a> 
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="#0">Назад</a></li>
                                    <li><a href="#">Информационная безопасность</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Системное администрирование</a></li>
                                    <li><a href="#">JavaScript-разработка</a></li>
                                    <li><a href="#">Frontend-разработка</a></li>
                                    <li><a href="#">Data Science</a></li>
                                    <li><a href="#">DevOps</a></li>
                                    <li><a href="#">Golang-разработка</a></li>
                                    <li><a href="#">Робототехника</a></li>
                                    <li><a href="#">Web-разработка</a></li>
                                    <li><a href="#">Django</a></li>
                                    <li><a href="#y">Чат-боты</a></li>
                                    <li><a href="#">Основы программирования</a></li>
                                    <li><a href="#">Tkinter</a></li>
                                </ul>
                            </li>
                            <!-- end catalog item-->    
                                       
                        </ul> 
                    </nav> <!-- end nav-dropdow -->
                </div> 
            </div>  
        </div> <!-- end sticky HEADER -->
        
        <!-- catalog menu_fon-->
        <div class="header_catalog_menu row_di">
            <div class="di_fon_nav"></div>
        </div>
    </header>
    <!-- HEADER end --> 

    <!--  Main start -->
    <main>