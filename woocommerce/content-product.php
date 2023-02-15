<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
// if ( empty( $product ) || ! $product->is_visible() ) {
// 	return;
// }

$img_url = get_the_post_thumbnail_url( $product->get_id(), 'full' );
$img_url = ( !$img_url ) ? wc_placeholder_img_src() : $img_url;
$term_slug = 'pa_onlajn-platforma';
$attribute = $product->get_attribute($term_slug);
$schools = wc_get_product_terms( $product->get_id(), $term_slug, ['fields' => 'all'] );
$school = (isset($schools[0])) ? $schools[0] : null;
$school_img_id = get_field('img_school', $school);
$school_img_url = wp_get_attachment_image_url( $school_img_id, 'full' ); 
$school_img_url = ( !$school_img_url ) ? wc_placeholder_img_src() : $school_img_url;
$duration_course = get_field('duration_course');
$start_course = get_field('start_course');
?>

<div class="cat_item">
	<div class="cat_item_vn">
		<div class="row">
			<div class="cat_item_l"> 
				<div class="cat_img">
					<a href="<?php echo esc_url($product->get_permalink()); ?>">
						<img src="<?php echo $img_url; ?>" alt="<?php echo esc_url($product->get_name()); ?>" >
					</a>
				</div>
				
				<?php if ( $school ) : ?>
					<div class="cat_brand pk_vizible_flex">
						<a href="<?php echo esc_url($link); ?>" target="_blank">
							<img src="<?php echo esc_attr($school_img_url); ?>" <?php echo esc_attr($school->name); ?> >
						</a>
					</div>
				<?php endif; ?>
				
				<div class="cat_info pk_vizible_flex">
					<div class="cat_rating">
						<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.55163 0.908493C8.73504 0.53687 9.26496 0.53687 9.44837 0.908493L11.8226 5.71919C11.8954 5.86677 12.0362 5.96905 12.1991 5.99271L17.508 6.76415C17.9181 6.82374 18.0818 7.32772 17.7851 7.61699L13.9435 11.3616C13.8257 11.4765 13.7719 11.642 13.7997 11.8042L14.7066 17.0916C14.7766 17.5001 14.3479 17.8116 13.9811 17.6187L9.23267 15.1223C9.08701 15.0457 8.91299 15.0457 8.76733 15.1223L4.01888 17.6187C3.65207 17.8116 3.22335 17.5001 3.29341 17.0916L4.20028 11.8042C4.2281 11.642 4.17433 11.4765 4.05648 11.3616L0.21491 7.61699C-0.0818487 7.32772 0.0819064 6.82374 0.492017 6.76415L5.80094 5.99271C5.9638 5.96905 6.10458 5.86677 6.17741 5.71919L8.55163 0.908493Z" fill="#4967D0"/>
						</svg> 
						<span>4.9</span>
					</div>
					<div class="cat_coment">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M17.5 12.5C17.5 12.942 17.3244 13.366 17.0118 13.6785C16.6993 13.9911 16.2754 14.1667 15.8333 14.1667H5.83333L2.5 17.5V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V12.5Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg> 
						<span>126 отзывов о школе</span>
					</div>
				</div>
				
			</div>
			<div class="cat_item_c"> 
				<div class="cat_item_title">
					<a href="<?php echo esc_url($product->get_permalink()); ?>">
						<?php echo esc_html($product->get_name()); ?>
					</a>
				</div> 

				<div class="review_rating pk_vizible_flex">
				
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
					
					<div class="cat_coment">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M17.5 12.5C17.5 12.942 17.3244 13.366 17.0118 13.6785C16.6993 13.9911 16.2754 14.1667 15.8333 14.1667H5.83333L2.5 17.5V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V12.5Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg> 
						<span>12 отзывов о курсе</span>
					</div>  
				</div>  
				
				<?php if ( $product->get_short_description() ) : ?>
					<div class="cat_desk">
						<?php echo $product->get_short_description(); ?>
					</div> 
				<?php endif; ?>
				
				<div class="review_rating xs_vizible_flex">
				
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
					
					<div class="cat_coment">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M17.5 12.5C17.5 12.942 17.3244 13.366 17.0118 13.6785C16.6993 13.9911 16.2754 14.1667 15.8333 14.1667H5.83333L2.5 17.5V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V12.5Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg> 
						<span>12 отзывов о курсе</span>
					</div>  
				</div> 
				
			</div>
		
			<?php if ( $school ) : ?>
				<div class="cat_brand xs_vizible_flex">
					<a href="<?php echo esc_url($link); ?>" target="_blank">
						<img src="<?php echo esc_attr($school_img_url); ?>" <?php echo esc_attr($school->name); ?> >
					</a>
				</div>
			<?php endif; ?>
	
			<div class="cat_info xs_vizible_flex">
				<div class="cat_rating">
					<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M8.55163 0.908493C8.73504 0.53687 9.26496 0.53687 9.44837 0.908493L11.8226 5.71919C11.8954 5.86677 12.0362 5.96905 12.1991 5.99271L17.508 6.76415C17.9181 6.82374 18.0818 7.32772 17.7851 7.61699L13.9435 11.3616C13.8257 11.4765 13.7719 11.642 13.7997 11.8042L14.7066 17.0916C14.7766 17.5001 14.3479 17.8116 13.9811 17.6187L9.23267 15.1223C9.08701 15.0457 8.91299 15.0457 8.76733 15.1223L4.01888 17.6187C3.65207 17.8116 3.22335 17.5001 3.29341 17.0916L4.20028 11.8042C4.2281 11.642 4.17433 11.4765 4.05648 11.3616L0.21491 7.61699C-0.0818487 7.32772 0.0819064 6.82374 0.492017 6.76415L5.80094 5.99271C5.9638 5.96905 6.10458 5.86677 6.17741 5.71919L8.55163 0.908493Z" fill="#4967D0"/>
					</svg> 
					<span>4.9</span>
				</div>
				<div class="cat_coment">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M17.5 12.5C17.5 12.942 17.3244 13.366 17.0118 13.6785C16.6993 13.9911 16.2754 14.1667 15.8333 14.1667H5.83333L2.5 17.5V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V12.5Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg> 
					<span>126 отзывов о школе</span>
				</div>
			</div>
			
			<div class="cat_item_r">
				<div class="price">
					<?php echo wc_price($product->get_price()); ?>
				</div>
				<div class="cat_item_r_a">
					<a href="<?php echo esc_url($link); ?>" target="_blank" class="btn">На сайт курса</a>
					<a href="<?php echo esc_url($product->get_permalink()); ?>" class="btn_white">Подробнее</a>
				</div> 
				
				<?php if ( $duration_course && $start_course ) : ?>
					<div class="cat_item_data">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M15.8333 3.3335H4.16667C3.24619 3.3335 2.5 4.07969 2.5 5.00016V16.6668C2.5 17.5873 3.24619 18.3335 4.16667 18.3335H15.8333C16.7538 18.3335 17.5 17.5873 17.5 16.6668V5.00016C17.5 4.07969 16.7538 3.3335 15.8333 3.3335Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M13.3335 1.6665V4.99984" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M6.6665 1.6665V4.99984" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M2.5 8.3335H17.5" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
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
