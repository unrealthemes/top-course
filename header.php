<?php 
$txt_logo = get_field('txt_logo', 'option');
$logo_id = get_field('logo_header', 'option');
$txt_menu = get_field('txt_menu_header', 'option');


?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#4967D0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" sizes="32x32"> 
	<?php wp_head(); ?>
</head> 
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

    <header> 

        <div id="site-header" class="sticky">  
            <div class="container">
                <div class="row header_top">
                    
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
                        
                    <div class="catalog_btn"> 
                        <div class="cd-dropdown-wrapper">
                            <a class="cd-dropdown-trigger" href="#0">

                                <?php if ( $txt_menu ) : ?>
                                    <span><?php echo $txt_menu; ?></span>
                                <?php endif; ?>

                            </a>
                        </div> 
                    </div> 

                    <div class="header_search"> 
                        
                        <form class="searchform pk_vizible" role="search" method="get" action="<?php echo home_url('/'); ?>">
                            <input  class="search_input" 
                                    type="search" 
                                    value="<?php echo get_search_query(); ?>"  
                                    name="s" 
                                    id="s"
                                    placeholder="Что будем искать?" 
                                    required>
                            <input type="submit" class="submit " value="Найти"> 
                        </form>

                        <div class="xs_vizible search_xs">
                            <i class="submit click_open"></i>
                            <div class="mobile_search">
                                <form class="xs_vizible" role="search" method="get" action="<?php echo home_url('/'); ?>">
                                    <input  class="search_input" 
                                            type="search" 
                                            value="<?php echo get_search_query(); ?>"  
                                            name="s" 
                                            id="s"
                                            placeholder="Что будем искать?" 
                                            required>
                                    <input type="submit" class="submit" value="Найти">
                                </form>
                            </div>
                        </div>

                    </div>  
  
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
                    
                    <div class="login pk_vizible">
                        <a href="" class="btn_white">Войти</a>
                    </div> 
                    
                    <?php get_template_part('template-parts/mega-menu'); ?>
                    
                </div> 
            </div>  
        </div> 
        
        <div class="header_catalog_menu row_di">
            <div class="di_fon_nav"></div>
        </div>
    </header>

    <main>