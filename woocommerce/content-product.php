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
if ( empty( $product ) /*|| ! $product->is_visible()*/ ) {
	return;
}

$img_url = get_the_post_thumbnail_url( $product->get_id(), 'full' );
$img_url = ( !$img_url ) ? wc_placeholder_img_src() : $img_url;
$term_slug = 'pa_onlajn-platforma';
$attribute = $product->get_attribute($term_slug);
$schools = wc_get_product_terms( $product->get_id(), $term_slug, ['fields' => 'all'] );
$school = (isset($schools[0])) ? $schools[0] : null;
$school_img_id = get_field('img_school', $school);
$school_img_url = wp_get_attachment_image_url( $school_img_id, 'full' ); 
$school_img_url = ( !$school_img_url ) ? wc_placeholder_img_src() : $school_img_url;
$school_link = ut_get_permalik_by_template('template-school.php') . '?slug=' . $school->slug . '#reviews';
$course_link = get_field('link_course');
$duration_course = get_field('duration_course');
$start_course = get_field('start_course');
$rating_data = ut_help()->school_review->get_rating($school->term_id);
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

				<?php if ( $schools ) : ?>
					<div class="cat_brand pk_vizible_flex">
						<?php 
						foreach ( $schools as $_school ) : 
							$_school_img_id = get_field('img_school', $_school);
							$_school_img_url = wp_get_attachment_image_url( $_school_img_id, 'full' ); 
							$_school_link = ut_get_permalik_by_template('template-school.php') . '?slug=' . $_school->slug . '#reviews';
							if (! $school_img_url) continue;
						?>
							<a href="<?php echo esc_url($_school_link); ?>">
								<img src="<?php echo esc_attr($_school_img_url); ?>" <?php echo esc_attr($_school->name); ?> >
							</a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				
				<?php 
				get_template_part(
					'woocommerce/loop/school', 
					'rating', 
					[
						'class' => 'pk_vizible_flex',
						'rating_data' => $rating_data,
						'school_link' => $school_link,
					]
				); 
				?> 
				
			</div>
			<div class="cat_item_c"> 
				<div class="cat_item_title">
					<a href="<?php echo esc_url($product->get_permalink()); ?>">
						<?php echo esc_html($product->get_name()); ?>
					</a>
				</div> 

				<?php 
				get_template_part(
					'woocommerce/loop/course', 
					'rating', 
					[
						'class' => 'pk_vizible_flex',
						'course_link' => $product->get_permalink() . '#reviews',
					]
				); 
				?> 
				
				<?php if ( $product->get_short_description() ) : ?>
					<div class="cat_desk">
						<?php echo $product->get_short_description(); ?>
					</div> 
				<?php endif; ?>
				
				<?php 
				get_template_part(
					'woocommerce/loop/course', 
					'rating', 
					[
						'class' => 'xs_vizible_flex',
						'course_link' => $product->get_permalink() . '#reviews',
					]
				); 
				?> 
				
			</div>
		
			<?php if ( $schools ) : ?>
				<div class="cat_brand xs_vizible_flex">
					<?php 
					foreach ( $schools as $_school ) : 
						$_school_img_id = get_field('img_school', $_school);
						$_school_img_url = wp_get_attachment_image_url( $_school_img_id, 'full' ); 
						$_school_link = ut_get_permalik_by_template('template-school.php') . '?slug=' . $_school->slug . '#reviews';
						if (! $school_img_url) continue;
					?>
						<a href="<?php echo esc_url($_school_link); ?>">
							<img src="<?php echo esc_attr($_school_img_url); ?>" <?php echo esc_attr($_school->name); ?> >
						</a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
	
			<?php 
			get_template_part(
				'woocommerce/loop/school', 
				'rating', 
				[
					'class' => 'xs_vizible_flex',
					'rating_data' => $rating_data,
					'school_link' => $school_link,
				]
			); 
			?> 
			
			<div class="cat_item_r">
				<div class="price">
					<?php echo wc_price($product->get_price()); ?>
				</div>
				<div class="cat_item_r_a">

					<?php if ( $course_link ) : ?>
						<a href="<?php echo esc_url($course_link); ?>" target="_blank" class="btn">
							На сайт курса
						</a>
					<?php endif; ?>

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
