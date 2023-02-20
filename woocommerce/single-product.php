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

                <!-- <div class="nazad"> 
                    <ul>
                        <li><a href="#" class="">Назад к списку статей</a></li> 
                    </ul> 
                </div> -->

                <div class="page_title pk_vizible">
                    <?php the_title('<h1>', '</h1>'); ?>
                    <div class="curs_page_item">
                        <div class="review_rating">

                            <?php get_template_part('woocommerce/single-product/rating', '', []); ?>

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

                    <?php get_template_part('woocommerce/single-product/course', 'rating', []); ?> 

                    <?php get_template_part('woocommerce/single-product/course', 'review', []); ?> 
                                     
                </div>
                
                <?php get_template_part('woocommerce/single-product/course', 'sidebar-desctop', []); ?>

            </div> 
        </div>
    </div> 

    <?php get_template_part('template-parts/modals/add-review', '', []); ?>

<?php
endwhile;

get_footer('shop');