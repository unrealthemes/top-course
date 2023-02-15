<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header('shop'); 

while ( have_posts() ) :
	the_post();	
    $title_price = get_field('title_price');
    $installment_plan_main = get_field('installment_plan_main');
    $title_whoisthecoursefor = get_field('title_whoisthecoursefor');
    $desc_whoisthecoursefor = get_field('desc_whoisthecoursefor');
    $main_title_skills = get_field('main_title_skills');
    $title_skills = get_field('title_skills');
    $skills = get_field('skills');
    $title_certificates = get_field('title_certificates');
    $certificates = get_field('certificates');
    $title_program = get_field('title_program');
    $desc_program = get_field('desc_program');
    $duration_course = get_field('duration_course');
    $start_course = get_field('start_course');
?>

    <div class="container_di">
        <div class="row_di">

            <div class="page_header">   
            
                <?php do_action( 'echo_kama_breadcrumbs' ); ?>

                <div class="nazad"> 
                    <ul>
                        <li><a href="#" class="">Назад к списку статей</a></li> 
                    </ul> 
                </div>

                <div class="page_title pk_vizible">
                    <?php the_title('<h1>', '</h1>'); ?>
                    <div class="curs_page_item">
                        <div class="review_rating">
                            <!-- rating star -->
                            <div class="rating">                                
                                <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                    <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z"></path>
                                </symbol>
                                </svg>                                             
                                <div class="c-rate">
                                    <svg class="c-icon diactive" width="20" height="20">
                                        <use xlink:href="#star"></use>
                                    </svg>
                                    <svg class="c-icon diactive" width="20" height="20">
                                        <use xlink:href="#star"></use>
                                    </svg>
                                    <svg class="c-icon diactive" width="20" height="20">
                                        <use xlink:href="#star"></use>
                                    </svg>
                                    <svg class="c-icon diactive" width="20" height="20">
                                        <use xlink:href="#star"></use>
                                    </svg>
                                    <svg class="c-icon " width="20" height="20">
                                        <use xlink:href="#star"></use>
                                    </svg>
                                </div>
                                <span>4.0</span>   
                            </div>
                            <!-- rating star --> 
                            <div class="cat_coment">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 12.5C17.5 12.942 17.3244 13.366 17.0118 13.6785C16.6993 13.9911 16.2754 14.1667 15.8333 14.1667H5.83333L2.5 17.5V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V12.5Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg> 
                                <span>12 отзывов о курсе</span>
                            </div>

                            <?php if ( $duration_course && $start_course ) : ?>
                                <div class="cat_data">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.8333 3.33325H4.16667C3.24619 3.33325 2.5 4.07944 2.5 4.99992V16.6666C2.5 17.5871 3.24619 18.3333 4.16667 18.3333H15.8333C16.7538 18.3333 17.5 17.5871 17.5 16.6666V4.99992C17.5 4.07944 16.7538 3.33325 15.8333 3.33325Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13.333 1.66675V5.00008" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6.66699 1.66675V5.00008" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M2.5 8.33325H17.5" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> 
                                    <span>
                                        <?php echo esc_html($duration_course); ?>
                                        
                                        <?php if ( $start_course ) : ?>
                                            начало <?php echo esc_html($start_course); ?>
                                        <?php endif; ?>

                                    </span>
                                </div>  
                            <?php endif; ?>

                        </div>
                    </div> 
                </div>
            </div> 
                
            <div class="row_di">  
                
                <?php get_template_part('woocommerce/single-product/course', 'sidebar-mobile', []); ?>

                <div class="col_1_60_di curs_page_content">
                
                    <?php get_template_part('woocommerce/single-product/attributes'); ?>
                    
                    <?php if ( $title_price ) : ?>
                        <div class="price_tetle title_a">
                            <?php echo esc_html($title_price); ?>
                        </div>
                    <?php endif; ?>

                    <div class="price">
                        <?php echo wc_price($product->get_price()); ?>

                        <?php if ( $installment_plan_main ) : ?>
                            <span>Есть рассрочка</span>
                        <?php endif; ?>

                    </div>
         
                    <?php if ( $desc_whoisthecoursefor ) : ?>
                        <div class="text-container">

                            <?php if ( $title_whoisthecoursefor ) : ?>
                                <h4>
                                    <?php echo esc_html($title_whoisthecoursefor); ?>
                                </h4>
                            <?php endif; ?>

                            <div class="text_hide short-text">
                                <?php echo $desc_whoisthecoursefor; ?>
                            </div>
                            <div class="di-read-more">
                                <input type="button" value="Читать подробнее">
                            </div>
                        
                        </div>
                    <?php endif; ?>

                    <div class="chto">

                        <?php if ( $main_title_skills ) : ?>
                            <h4>
                                <?php echo esc_html($main_title_skills); ?>
                            </h4>
                        <?php endif; ?>
 
                        <?php if ( $skills ) : ?>
                            <div class="chto_content white_block">

                                <?php if ( $title_skills ) : ?>
                                    <h5>
                                        <?php echo esc_html($title_skills); ?>
                                    </h5>
                                <?php endif; ?>

                                <div class="chto_content_item">
                                    <ol>
                                        <?php foreach ( $skills as $skill ) : ?>

                                            <?php if ( $skill['txt_skills'] ) : ?>
                                                <li>
                                                    <?php echo esc_html($skill['txt_skills']); ?>
                                                </li>
                                            <?php endif; ?>

                                        <?php endforeach; ?> 
                                    </ol> 
                                </div> 
                            </div> 
                        <?php endif; ?>

                    </div>

                    <?php get_template_part('woocommerce/single-product/certificates', null, ['certificates' => $certificates]); ?>

                    <?php get_template_part('woocommerce/single-product/course', 'school', []); ?> 
         
                    <?php if ( $desc_program ) : ?>
                        <div class="text-container">

                            <?php if ( $title_program ) : ?>
                                <h4><?php echo esc_html($title_program); ?></h4>
                            <?php endif; ?>
                            
                            <div class="text_hide short-text">
                                <?php echo $desc_program; ?>
                            </div>
                            <div class="di-read-more">
                                <input type="button" value="Читать подробнее">
                            </div>
                            
                        </div>
                    <?php endif; ?>

                    <div class="rating_curse">
                        <h4>Рейтинг курса</h4>
                        
                        <!-- rating_curse_title -->
                        <div class="rating_curse_title">
                            <div class="ui-rating-leaves">
                                <svg class="ui-rating-leaves__icon" width="80" height="35" viewBox="0 0 80 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M58 30C58 31.0609 58.2107 32.0783 58.5858 32.8284L63.3999 28.4191L58 30Z" fill="#4967D0"></path>
                                <path d="M58.5858 32.8284C58.9609 33.5786 59.4696 34 60 34L79 34L71 20L79 6L60 6C59.4696 6 58.9609 6.42143 58.5858 7.17157C58.2107 7.92172 58 8.93913 58 10L58 30M58.5858 32.8284C58.2107 32.0783 58 31.0609 58 30M58.5858 32.8284L63.3999 28.4191L58 30" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M22 30C22 31.0609 21.7893 32.0783 21.4142 32.8284L16.6001 28.4191L22 30Z" fill="#4967D0"></path>
                                <path d="M21.4142 32.8284C21.0391 33.5786 20.5304 34 20 34L0.999998 34L9 20L0.999999 6L20 6C20.5304 6 21.0391 6.42143 21.4142 7.17157C21.7893 7.92172 22 8.93913 22 10L22 30M21.4142 32.8284C21.7893 32.0783 22 31.0609 22 30M21.4142 32.8284L16.6001 28.4191L22 30" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <rect x="16" y="1" width="48" height="28" rx="2" fill="#F8F8F8" stroke="#4967D0" stroke-width="2"></rect>
                                </svg> 
                                <div class="ui-rating-leaves__counter">
                                    4.8
                                </div> 
                            </div>
                        
                            <div class="rating">                                
                                <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                    <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z"></path>
                                </symbol>
                                </svg>                                             
                                <div class="c-rate">
                                    <svg class="c-icon diactive" width="20" height="20">
                                        <use xlink:href="#star"></use>
                                    </svg>
                                    <svg class="c-icon diactive" width="20" height="20">
                                        <use xlink:href="#star"></use>
                                    </svg>
                                    <svg class="c-icon diactive" width="20" height="20">
                                        <use xlink:href="#star"></use>
                                    </svg>
                                    <svg class="c-icon diactive" width="20" height="20">
                                        <use xlink:href="#star"></use>
                                    </svg>
                                    <svg class="c-icon diactive" width="20" height="20">
                                        <use xlink:href="#star"></use>
                                    </svg>
                                </div>  
                            </div>
                        </div>
                        <!-- end rating_curse_title -->
                            
                            <!-- rating -->
                            <div class="ui-rating-group">
                            
                            <!-- rating_item -->
                            <div class="rating_curse_star">
                                <div class="rating">                                
                                    <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                        <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z"></path>
                                    </symbol>
                                    </svg>                                             
                                    <div class="c-rate">
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </div>  
                                </div>
                                
                                <div class="ui-progress-bar ui-rating-item__progress">
                                    <div class="ui-progress-bar__inner" style="width:90%;"></div>
                                </div>
                                
                                <div class="ui-chip ui-rating-item__chip">
                                    <div class="ui-chip__value" data-v-42e56569="">14</div>
                                </div>
                            </div>
                            <!-- rating_item -->
                            
                            
                            <!-- rating_item -->
                            <div class="rating_curse_star">
                                <div class="rating">                                
                                    <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                        <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z"></path>
                                    </symbol>
                                    </svg>                                             
                                    <div class="c-rate">
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon " width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </div>  
                                </div>
                                
                                <div class="ui-progress-bar ui-rating-item__progress">
                                    <div class="ui-progress-bar__inner" style="width:10%;"></div>
                                </div>
                                
                                <div class="ui-chip ui-rating-item__chip">
                                    <div class="ui-chip__value" data-v-42e56569="">3</div>
                                </div>
                            </div>
                            <!-- rating_item -->
                            
                            <!-- rating_item -->
                            <div class="rating_curse_star">
                                <div class="rating">                                
                                    <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                        <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z"></path>
                                    </symbol>
                                    </svg>                                             
                                    <div class="c-rate">
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon " width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </div>  
                                </div>
                                
                                <div class="ui-progress-bar ui-rating-item__progress">
                                    <div class="ui-progress-bar__inner" style="width:0%;"></div>
                                </div>
                                
                                <div class="ui-chip ui-rating-item__chip">
                                    <div class="ui-chip__value" data-v-42e56569="">0</div>
                                </div>
                            </div>
                            <!-- rating_item -->  
                            
                            <!-- rating_item -->
                            <div class="rating_curse_star">
                                <div class="rating">                                
                                    <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                        <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z"></path>
                                    </symbol>
                                    </svg>                                             
                                    <div class="c-rate">
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon " width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </div>  
                                </div>
                                
                                <div class="ui-progress-bar ui-rating-item__progress">
                                    <div class="ui-progress-bar__inner" style="width:0%;"></div>
                                </div>
                                
                                <div class="ui-chip ui-rating-item__chip">
                                    <div class="ui-chip__value" data-v-42e56569="">0</div>
                                </div>
                            </div>
                            <!-- rating_item --> 
                            
                            <!-- rating_item -->
                            <div class="rating_curse_star">
                                <div class="rating">                                
                                    <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                        <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z"></path>
                                    </symbol>
                                    </svg>                                             
                                    <div class="c-rate">
                                        <svg class="c-icon diactive" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon" width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                        <svg class="c-icon " width="20" height="20">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </div>  
                                </div>
                                
                                <div class="ui-progress-bar ui-rating-item__progress">
                                    <div class="ui-progress-bar__inner" style="width:0%;"></div>
                                </div>
                                
                                <div class="ui-chip ui-rating-item__chip">
                                    <div class="ui-chip__value" data-v-42e56569="">0</div>
                                </div>
                            </div>
                            <!-- rating_item -->
                            
                            <a href="#" class="btn">Оставить отзыв</a>
                        </div>
                        <!-- rating --> 
                        
                    </div>
                    <!-- end rating_curse -->
                    
                                        
                    <!-- otziv -->
                    <div class="otziv">
                        <h4>Отзывы о курсе</h4>
                        
                        <form>
                            <div class="filter_search">
                                <input placeholder="Поиск по отзывам" class="l-filter__search full-width">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 17L13.1333 13.1333M15.2222 8.11111C15.2222 12.0385 12.0385 15.2222 8.11111 15.2222C4.18375 15.2222 1 12.0385 1 8.11111C1 4.18375 4.18375 1 8.11111 1C12.0385 1 15.2222 4.18375 15.2222 8.11111Z" stroke="#B8B9BA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg> 
                            </div>
                        </form>
                        
                        <div class="produkt_short">
                            <a href="#" class="active"><span>по рейтингу</span> 
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.22217 2.55566H15" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7.22217 5.66675H12.6666" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7.22217 8.77783H10.3333" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M1 11.8892L3.33334 14.2225L5.66668 11.8892" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M3.3335 12.6667V1.77783" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>  
                            </a> 
                            <a href="#">по дате</a> 
                        </div>
                        
                        <div class="row_di">
                            <!-- otziv item -->
                            <div class="item">
                                <div class="item_block_white">
                                
                                    <div class="row_di review_title">
                                        <div class="review_l">
                                            А
                                        </div>
                                        <div class="review_r">
                                            <div class="review_name">Александра К.</div>
                                            <div class="review_rating">
                                                <!-- rating star -->
                                                <div class="rating">                                
                                                    <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                                        <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z"></path>
                                                    </symbol>
                                                    </svg>                                             
                                                    <div class="c-rate">
                                                        <svg class="c-icon diactive" width="20" height="20">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon diactive" width="20" height="20">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon " width="20" height="20">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon " width="20" height="20">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon " width="20" height="20">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                    </div>   
                                                </div>
                                                <!-- rating star -->
                                                
                                                <div class="review_date">27.08.2022</div> 
                                            </div> 
                                        </div>
                                        
                                        <a href="#" class="option">
                                            <svg width="20" height="4" viewBox="0 0 20 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="18" cy="2" r="2" fill="#B8B9BA"></circle>
                                            <circle cx="10" cy="2" r="2" fill="#B8B9BA"></circle>
                                            <circle cx="2" cy="2" r="2" fill="#B8B9BA"></circle>
                                            </svg> 
                                        </a> 
                                    </div>
                                    
                                    <div class="review_desk">
                                        <div class="review_desk_title">Оправдались все ожидания!</div>
                                        <div class="review_desk_text">
                                            Благодарю команду Скиллбокс за качественно построенное обучения и поддержку на всем этапе обучения.В ноябре 2021 года я приобрел профессию Веб-разработчик. На тот момент мои представления о веб-разработки были незначительны. Но я четко поставил перед собой цель стать веб-разработчиком. А так как просто изучать ресурсы в интернете сложно себя заставить, мне была нужна именно программа обучения, где будет все последовательно выстроено и необходимый материал.
                                        </div>
                                    </div> 
                                    
                                    <div class="review_niz">
                                        <div class="review_niz_kto"><a href="#"><img src="<?php echo THEME_URI; ?>/img/otz.svg" alt=""></a> </div> 
                                        <div class="review_niz_kto_a"><a href="#">Источник</a></div> 
                                        <!-- + quantity_inner - -->
                                        <div class="quantity_inner">        
                                            <button class="bt_plus">
                                                <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 6.5L8 1.5L1 6.5" stroke="#4967D0" stroke-width="2"></path>
                                                </svg> 
                                            </button>
                                            <input type="text" class="quantity" value="0">
                                            <button class="bt_minus">
                                                <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 1.5L8 6.5L1 1.5" stroke="#4967D0" stroke-width="2"></path>
                                                </svg> 
                                            </button>
                                        </div>
                                        <!-- + quantity_inner - -->  
                                    </div>    
                                    
                                </div> 
                            </div>
                            <!-- end otziv item -->
                            
                            <!-- otziv item -->
                            <div class="item">
                                <div class="item_block_white">
                                
                                    <div class="row_di review_title">
                                        <div class="review_l">
                                            А
                                        </div>
                                        <div class="review_r">
                                            <div class="review_name">Александра К.</div>
                                            <div class="review_rating">
                                                <!-- rating star -->
                                                <div class="rating">                                
                                                    <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                                        <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z"></path>
                                                    </symbol>
                                                    </svg>                                             
                                                    <div class="c-rate">
                                                        <svg class="c-icon diactive" width="20" height="20">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon diactive" width="20" height="20">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon " width="20" height="20">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon " width="20" height="20">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon " width="20" height="20">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                    </div>   
                                                </div>
                                                <!-- rating star -->
                                                
                                                <div class="review_date">27.08.2022</div> 
                                            </div> 
                                        </div>
                                        
                                        <a href="#" class="option">
                                            <svg width="20" height="4" viewBox="0 0 20 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="18" cy="2" r="2" fill="#B8B9BA"></circle>
                                            <circle cx="10" cy="2" r="2" fill="#B8B9BA"></circle>
                                            <circle cx="2" cy="2" r="2" fill="#B8B9BA"></circle>
                                            </svg> 
                                        </a> 
                                    </div>
                                    
                                    <div class="review_desk">
                                        <div class="review_desk_title">Оправдались все ожидания!</div>
                                        <div class="review_desk_text">
                                            Благодарю команду Скиллбокс за качественно построенное обучения и поддержку на всем этапе обучения.В ноябре 2021 года я приобрел профессию Веб-разработчик. На тот момент мои представления о веб-разработки были незначительны. Но я четко поставил перед собой цель стать веб-разработчиком. А так как просто изучать ресурсы в интернете сложно себя заставить, мне была нужна именно программа обучения, где будет все последовательно выстроено и необходимый материал.
                                        </div>
                                    </div> 
                                    
                                    <div class="review_niz">
                                        <div class="review_niz_kto"><a href="#"><img src="<?php echo THEME_URI; ?>/img/otz.svg" alt=""></a> </div> 
                                        <div class="review_niz_kto_a"><a href="#">Источник</a></div> 
                                        <!-- + quantity_inner - -->
                                        <div class="quantity_inner">        
                                            <button class="bt_plus">
                                                <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 6.5L8 1.5L1 6.5" stroke="#4967D0" stroke-width="2"></path>
                                                </svg> 
                                            </button>
                                            <input type="text" class="quantity" value="0">
                                            <button class="bt_minus">
                                                <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 1.5L8 6.5L1 1.5" stroke="#4967D0" stroke-width="2"></path>
                                                </svg> 
                                            </button>
                                        </div>
                                        <!-- + quantity_inner - -->  
                                    </div>    
                                    
                                </div> 
                            </div>
                            <!-- end otziv item -->
                            
                            <!-- otziv item -->
                            <div class="item">
                                <div class="item_block_white">
                                
                                    <div class="row_di review_title">
                                        <div class="review_l">
                                            А
                                        </div>
                                        <div class="review_r">
                                            <div class="review_name">Александра К.</div>
                                            <div class="review_rating">
                                                <!-- rating star -->
                                                <div class="rating">                                
                                                    <svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
                                                    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                                                        <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z"></path>
                                                    </symbol>
                                                    </svg>                                             
                                                    <div class="c-rate">
                                                        <svg class="c-icon diactive" width="20" height="20">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon diactive" width="20" height="20">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon " width="20" height="20">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon " width="20" height="20">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                        <svg class="c-icon " width="20" height="20">
                                                            <use xlink:href="#star"></use>
                                                        </svg>
                                                    </div>   
                                                </div>
                                                <!-- rating star -->
                                                
                                                <div class="review_date">27.08.2022</div> 
                                            </div> 
                                        </div>
                                        
                                        <a href="#" class="option">
                                            <svg width="20" height="4" viewBox="0 0 20 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="18" cy="2" r="2" fill="#B8B9BA"></circle>
                                            <circle cx="10" cy="2" r="2" fill="#B8B9BA"></circle>
                                            <circle cx="2" cy="2" r="2" fill="#B8B9BA"></circle>
                                            </svg> 
                                        </a> 
                                    </div>
                                    
                                    <div class="review_desk">
                                        <div class="review_desk_title">Оправдались все ожидания!</div>
                                        <div class="review_desk_text">
                                            Благодарю команду Скиллбокс за качественно построенное обучения и поддержку на всем этапе обучения.В ноябре 2021 года я приобрел профессию Веб-разработчик. На тот момент мои представления о веб-разработки были незначительны. Но я четко поставил перед собой цель стать веб-разработчиком. А так как просто изучать ресурсы в интернете сложно себя заставить, мне была нужна именно программа обучения, где будет все последовательно выстроено и необходимый материал.
                                        </div>
                                    </div> 
                                    
                                    <div class="review_niz">
                                        <div class="review_niz_kto"><a href="#"><img src="<?php echo THEME_URI; ?>/img/otz.svg" alt=""></a> </div> 
                                        <div class="review_niz_kto_a"><a href="#">Источник</a></div> 
                                        <!-- + quantity_inner - -->
                                        <div class="quantity_inner">        
                                            <button class="bt_plus">
                                                <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 6.5L8 1.5L1 6.5" stroke="#4967D0" stroke-width="2"></path>
                                                </svg> 
                                            </button>
                                            <input type="text" class="quantity" value="0">
                                            <button class="bt_minus">
                                                <svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 1.5L8 6.5L1 1.5" stroke="#4967D0" stroke-width="2"></path>
                                                </svg> 
                                            </button>
                                        </div>
                                        <!-- + quantity_inner - -->  
                                    </div>    
                                    
                                </div> 
                            </div>
                            <!-- end otziv item -->
                            
                            <div class="home_more">
                                <a href="#" class="btn_white">Показать все отзывы</a>
                            </div> 
                        </div> 
                        
                    </div>
                    <!-- end otziv --> 
                </div>
                <!-- end page_content -->
                
                <?php get_template_part('woocommerce/single-product/course', 'sidebar-desctop', []); ?>

            </div> 
        </div>
    </div> 

<?php
endwhile;

get_footer('shop');