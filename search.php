<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package unreal-themes
 */

get_header();

// $category = get_queried_object();
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
// do_action( 'woocommerce_before_main_content' );
?>

<div class="container_di">
	<div class="row_di"> 
		<div class="page_header">  
			
			<?php // do_action( 'echo_kama_breadcrumbs' ); ?>
			
			<div class="page_title">
				<h1><?php woocommerce_page_title(); ?></h1>
				<!-- <h1><?php //woocommerce_page_title(); ?> (<?php //echo $category->count; ?>)</h1> -->
				<div class="page_title_desc">
					<?php
					/**
					 * Hook: woocommerce_archive_description.
					 *
					 * @hooked woocommerce_taxonomy_archive_description - 10
					 * @hooked woocommerce_product_archive_description - 10
					 */
					do_action( 'woocommerce_archive_description' );
					?>
				</div>
			</div> 
			
			<?php get_template_part('woocommerce/categories'); ?>
				
		</div> 

		<div class="row_di">   
	
			<?php get_template_part('woocommerce/loop/orderby', 'mobile'); ?>
					
			<div class="col_2_di sidebar">
				<div class="di_accordeon">
					<div id="accordion-js" class="accordion"> 

						<?php do_action( 'ut_main_filter_options' ); ?>

					</div>
				</div> 
			</div>

			<div class="col_1_di catalog_content">
				
				<?php do_action('woo_catalog_ordering'); ?>
				
				<div class="row_di more2">

					<?php
					if ( woocommerce_product_loop() ) {

						/**
						 * Hook: woocommerce_before_shop_loop.
						 *
						 * @hooked woocommerce_output_all_notices - 10
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						do_action( 'woocommerce_before_shop_loop' );

						woocommerce_product_loop_start();

						if ( wc_get_loop_prop( 'total' ) ) {
							while ( have_posts() ) {
								the_post();

								/**
								 * Hook: woocommerce_shop_loop.
								 */
								do_action( 'woocommerce_shop_loop' );

								wc_get_template_part( 'content', 'product' );
							}
						}

						woocommerce_product_loop_end();

						/**
						 * Hook: woocommerce_after_shop_loop.
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						do_action( 'woocommerce_after_shop_loop' );
					} else {
						/**
						 * Hook: woocommerce_no_products_found.
						 *
						 * @hooked wc_no_products_found - 10
						 */
						do_action( 'woocommerce_no_products_found' );
					}

					/**
					 * Hook: woocommerce_after_main_content.
					 *
					 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
					 */
					// do_action( 'woocommerce_after_main_content' );

					/**
					 * Hook: woocommerce_sidebar.
					 *
					 * @hooked woocommerce_get_sidebar - 10
					 */
					// do_action( 'woocommerce_sidebar' );
					?>

				</div> 
				
				<?php get_template_part('woocommerce/filter/school', 'rating'); ?>

				<?php get_template_part('woocommerce/filter/collection', 'rating'); ?>

				<?php get_template_part('woocommerce/filter/course', 'popular'); ?>

				<?php get_template_part('woocommerce/filter/course', 'review'); ?>

				<?php get_template_part('woocommerce/filter/info'); ?>

			</div>
		</div> 
	</div>
</div>  

<?php
get_footer();
