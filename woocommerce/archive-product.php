<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header();

$category = get_queried_object();
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
		<!-- page_header -->
		<div class="page_header">  
			
			<?php do_action( 'echo_kama_breadcrumbs' ); ?>
			
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
	
			<div class="mobile_short xs_vizible">

				<?php do_action( 'ut_sort_products' ); ?>

				<!-- <a href="#" class="block_button" onclick="return false">
					<span>по популярности</span>
					
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9.22266 4.55566H17.0005" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M9.22266 7.6665H14.6671" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M9.22266 10.7778H12.3338" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M3 13.8892L5.33334 16.2225L7.66668 13.8892" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M5.33301 14.6667V3.77783" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg> 
				
					<svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1.5L8 6.5L15 1.5" stroke="#4967D0" stroke-width="2"/>
					</svg> 
				
				</a> 
				<div class="big white_block">
					<a href="#">по рейтингу</a>
					<a href="#">по цене</a>
					<a href="#">по отзывам</a>
					<a href="#">по дате начала</a>
					<a href="#">бесплатные</a>
				</div>   -->
			</div> 
			
			<a class="sidebar_btn" href="#" onclick="return false"> 
				<span>фильтры</span> 
				<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M13.9997 2.6665H9.33301" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M6.66667 2.6665H2" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M14 8H8" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M5.33333 8H2" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M14.0003 13.3335H10.667" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M8 13.3335H2" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M9.33301 1.3335V4.00016" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M5.33301 6.6665V9.33317" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M10.667 12V14.6667" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg> 
			</a> 
				 
			<div class="col_2_di sidebar">
					
				<div class="di_accordeon">
					<div id="accordion-js" class="accordion"> 

						<?php do_action( 'ut_main_filter_options' ); ?>

						<!-- <a class="header_menu2_close">
							<span>Закрыть</span>
							<svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1.69678L11.6066 12.3034" stroke="#4967D0" stroke-width="2"/>
							<path d="M11.6064 1.69678L0.999844 12.3034" stroke="#4967D0" stroke-width="2"/>
							</svg>
						</a>
						
						<div class="filter_info">
							<div class="filter_info_title">Фильтры (2)</div>
							<a href="#" class="filter_info_refreh">Сбросить все</a>
						</div>
						
						<div class="filter_option">
							<div class="f_chip" >
								<span>Уровень сложности (1)</span>
								<a href="#">
									<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9 9L5 5M5 5L1 9M5 5L1 1M5 5L9 1" stroke="#4967D0" stroke-width="2" stroke-linecap="round"/>
									</svg>
								</a> 
							</div>
							
							<div class="f_chip" >
								<span>Разработчик онлайн курса (3)</span>
								<a href="#">
									<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9 9L5 5M5 5L1 9M5 5L1 1M5 5L9 1" stroke="#4967D0" stroke-width="2" stroke-linecap="round"/>
									</svg>
								</a> 
							</div> 
						</div>
						
						<div class="di_obertka">
							<div class="heading">
								<span>Уровень сложности</span>
								<svg width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M1.5 7L8.5 2L15.5 7" stroke="#4967D0" stroke-width="2"/>
								</svg> 
							</div>
							<div class="accordion_content"> 
								<div class="filter_input">
									<input id="1" type="checkbox" name="1" value="1"> 
									<label for="1"><span></span>
											<div class="label_name">Начинающий</div>
									</label>  
								</div> 
								<div class="filter_input">
									<input id="2" type="checkbox" name="1" value="1"> 
									<label for="2"><span></span>
											<div class="label_name">Продвинутый</div>
									</label>  
								</div>   
							</div>
						</div>
						 
						<div class="di_obertka">
							<div class="heading">
								<span>Цена (₽)</span>
								<svg width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M1.5 7L8.5 2L15.5 7" stroke="#4967D0" stroke-width="2"/>
								</svg> 
							</div>
							<div class="accordion_content"> 
								<div class="row formCost"> 
									<input type="text" id="minCost" placeholder="0" value=""/>
									<label for="maxCost"><span class="glyphicon glyphicon-minus"></span></label> 
									<input type="text" id="maxCost"  placeholder="1000" value=""/>  
								</div>
								<div class="sliderCont">
									<div id="slider"></div>
								</div>
									
								<div class="filter_input">
									<input id="4" type="checkbox" name="1" value="1"> 
									<label for="4"><span></span>
											<div class="label_name">Только бесплатные</div>
									</label>  
								</div>   
							</div>
						</div>
						
						<div class="di_obertka">
							<div class="heading">
								<span>Онлайн платформа</span>
								<svg width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M1.5 7L8.5 2L15.5 7" stroke="#4967D0" stroke-width="2"/>
								</svg> 
							</div>
							<div class="accordion_content"> 
								<form>
									<div class="filter_search">
										<input placeholder="Поиск" class="l-filter__search full-width">
										<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M17 17L13.1333 13.1333M15.2222 8.11111C15.2222 12.0385 12.0385 15.2222 8.11111 15.2222C4.18375 15.2222 1 12.0385 1 8.11111C1 4.18375 4.18375 1 8.11111 1C12.0385 1 15.2222 4.18375 15.2222 8.11111Z" stroke="#B8B9BA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg> 
									</div>
								</form>
								
								<div class="auto_height">
									<div class="filter_input">
										<input id="5" type="checkbox" name="1" value="1"> 
										<label for="5"><span></span>
												<div class="label_name">Alfa Campus</div>
										</label>  
									</div> 
									<div class="filter_input">
										<input id="6" type="checkbox" name="1" value="1"> 
										<label for="6"><span></span>
												<div class="label_name">Code Breakers</div>
										</label>  
									</div>   
									<div class="filter_input">
										<input id="66" type="checkbox" name="1" value="1"> 
										<label for="66"><span></span>
												<div class="label_name">Elbrus coding bootcamp</div>
										</label>  
									</div> 
									<div class="filter_input">
										<input id="7" type="checkbox" name="1" value="1"> 
										<label for="7"><span></span>
												<div class="label_name">HTML Academy</div>
										</label>  
									</div>   
									<div class="filter_input">
										<input id="8" type="checkbox" name="1" value="1"> 
										<label for="8"><span></span>
												<div class="label_name">IBS Training Center</div>
										</label>  
									</div> 
									<div class="filter_input">
										<input id="9" type="checkbox" name="1" value="1"> 
										<label for="9"><span></span>
												<div class="label_name">IThub</div>
										</label>  
									</div>      
									<div class="filter_input">
										<input id="10" type="checkbox" name="1" value="1"> 
										<label for="10"><span></span>
												<div class="label_name">Kata Academy</div>
										</label>  
									</div> 
									<div class="filter_input">
										<input id="11" type="checkbox" name="1" value="1"> 
										<label for="11"><span></span>
												<div class="label_name">Loft School</div>
										</label>  
									</div>   
									<div class="filter_input">
										<input id="12" type="checkbox" name="1" value="1"> 
										<label for="12"><span></span>
												<div class="label_name">HTML Academy</div>
										</label>  
									</div>   
									<div class="filter_input">
										<input id="13" type="checkbox" name="1" value="1"> 
										<label for="13"><span></span>
												<div class="label_name">IBS Training Center</div>
										</label>  
									</div> 
									<div class="filter_input">
										<input id="14" type="checkbox" name="1" value="1"> 
										<label for="14"><span></span>
												<div class="label_name">IThub</div>
										</label>  
									</div>      
									<div class="filter_input">
										<input id="15" type="checkbox" name="1" value="1"> 
										<label for="15"><span></span>
												<div class="label_name">Kata Academy</div>
										</label>  
									</div> 
									<div class="filter_input">
										<input id="16" type="checkbox" name="1" value="1"> 
										<label for="16"><span></span>
												<div class="label_name">Loft School</div>
										</label>  
									</div>   
								</div>
							</div>
						</div>    
						
						<div class="di_obertka filter_checkbox">
							<div class="heading">
								<span>С сертификатом</span> 
								<div class="filter_input filter_checkbox">
									<input id="17" type="checkbox" name="1" value="1"> 
									<label for="17"><span></span></label>  
								</div>  
							</div> 
						</div>
						
						<div class="di_obertka filter_checkbox">
							<div class="heading">
								<span>Другой текст</span> 
								<div class="filter_input filter_checkbox">
									<input id="18" type="checkbox" checked="" name="1" value="1"> 
									<label for="18"><span></span></label>  
								</div>  
							</div> 
						</div>
						
						<div class="di_obertka filter_checkbox">
							<div class="heading">
								<span>Совсем другой текст</span> 
								<div class="filter_input filter_checkbox">
									<input id="19" type="checkbox" checked="" name="1" value="1"> 
									<label for="19"><span></span></label>  
								</div>  
							</div> 
						</div> -->
					</div>
				</div> 
			</div>
			<!-- end sidebar -->
			
			<!-- catalog_content -->
			<div class="col_1_di catalog_content">
				
				<!-- produkt_short -->
				<div class="produkt_short pk_vizible">

					<?php do_action( 'ut_sort_products' ); ?>

					<!-- <a href="#" class="active"><span>по популярности</span> 
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M7.22217 2.55566H15" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M7.22217 5.66675H12.6666" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M7.22217 8.77783H10.3333" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M1 11.8892L3.33334 14.2225L5.66668 11.8892" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M3.3335 12.6667V1.77783" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>  
					</a> 
					<a href="#">по рейтингу</a>
					<a href="#">по цене</a>
					<a href="#">по отзывам</a>
					<a href="#">по дате начала</a>
					<a href="#">бесплатные</a>   -->
				</div> 
				
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
					do_action( 'woocommerce_after_main_content' );

					/**
					 * Hook: woocommerce_sidebar.
					 *
					 * @hooked woocommerce_get_sidebar - 10
					 */
					do_action( 'woocommerce_sidebar' );
					?>

					<!-- cat_item -->
					<div class="cat_item">
						<div class="cat_item_vn">
							<div class="row">
								<div class="cat_item_l"> 
									<div class="cat_img">
										<a href="#"> <img src="img/cat1.jpg" alt="" > </a>
									</div>
									
									<div class="cat_brand pk_vizible_flex">
										<a href="#"> <img src="img/r3.svg" alt="" > </a>
										<a href="#"> <img src="img/r2.svg" alt="" > </a>
									</div>
									
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
										<a href="#">Специалист по Data Science</a>
									</div> 
									<div class="review_rating pk_vizible_flex">
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
											<path d="M17.5 12.5C17.5 12.942 17.3244 13.366 17.0118 13.6785C16.6993 13.9911 16.2754 14.1667 15.8333 14.1667H5.83333L2.5 17.5V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V12.5Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											</svg> 
											<span>12 отзывов о курсе</span>
										</div>  
									</div>  
									
									<!-- cat_desk --> 
									<div class="cat_desk">
										На Python создают веб-приложения и нейросети, проводят научные вычисления и автоматизируют процессы. Вы научитесь программировать на востребованном языке с нуля, напишете Telegram-бота для турагентства
									</div> 
									
									<div class="review_rating xs_vizible_flex">
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
											<path d="M17.5 12.5C17.5 12.942 17.3244 13.366 17.0118 13.6785C16.6993 13.9911 16.2754 14.1667 15.8333 14.1667H5.83333L2.5 17.5V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V12.5Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
											</svg> 
											<span>12 отзывов о курсе</span>
										</div>  
									</div> 
									
								</div>
							
								<div class="cat_brand xs_vizible_flex">
									<a href="#"> <img src="img/r3.svg" alt="" > </a>
									<a href="#"> <img src="img/r2.svg" alt="" > </a>
								</div>
						
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
									<div class="price">640 000 ₽</div>
									<div class="cat_item_r_a">
										<a href="#" class="btn">На сайт курса</a>
										<a href="#" class="btn_white">Подробнее</a>
									</div> 
									
									<div class="cat_item_data">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M15.8333 3.3335H4.16667C3.24619 3.3335 2.5 4.07969 2.5 5.00016V16.6668C2.5 17.5873 3.24619 18.3335 4.16667 18.3335H15.8333C16.7538 18.3335 17.5 17.5873 17.5 16.6668V5.00016C17.5 4.07969 16.7538 3.3335 15.8333 3.3335Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M13.3335 1.6665V4.99984" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M6.6665 1.6665V4.99984" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M2.5 8.3335H17.5" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg> 
										<span>12 недель, начало 29 ноября</span>
									</div>
								</div>
							</div>
						</div> 
					</div>
					<!-- end cat_item -->
					 
						
					<!-- blog_btn_more -->
					<!-- <div class="blog_btn_more">
						<a href="#" id="loadMore" class="btn_white">Показать еще статьи</a>
					</div> -->
					<!-- end blog_btn_more --> 
				</div> 
				
				<!-- rating_schol -->
				<div class="rating_schol">
					<h3>Рейтинг школ: Программирование</h3>
					
					<div class="row_di carousel_v2 rating_schol_carusel"> 
						<div class="rating_schol_list owl-carousel owl-theme gallery"> 
							<ul>
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">1. IThub</a>
										</div>
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
										</div>
									</div>
								</li>

							
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">2. Shultais education</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item -->
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">3. GeekBrains</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item --> 
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">4. Санкт-Петербургский государственный университет</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item -->
								
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">5. Skillbox</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item -->
							</ul>


							
							<ul>
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">6. Национальный исследовательский университет</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item -->
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">7. SkillFactory</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item -->
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">8. Нетология</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item -->
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">9. Skypro</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item -->                                        
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">10. Otus</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item --> 
							</ul>
								

							<ul>
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">11. Национальный исследовательский университет</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item -->
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">12. SkillFactory</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item -->
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">13. Нетология</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item -->
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">14. Skypro</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item -->                                        
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">15. Otus</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item --> 
							</ul>
							
							
							<ul>
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">16. IThub</a>
										</div>
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
										</div>
									</div>
								</li>

							
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">17. Shultais education</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item -->
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">18. GeekBrains</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item --> 
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">19. Санкт-Петербургский государственный университет</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item -->
								
								<!-- item -->
								<li>
									<div class="carousel_item">
										<div class="carousel_item_title title_a">
											<a href="#">20. Skillbox</a>
										</div>
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
										</div>
									</div>
								</li>
								<!-- item -->
							</ul>
						</div>
						<div class="owl_navigation"></div>
					</div> 
					
				</div>
				<!-- end rating_schol -->
				
				<!-- courses__rating -->
				<div class="b-courses__rating">
					<div class="b-courses__rating-page">
						<div class="b-courses__rating-page_l">
							<div class="ui-rating-leaves">
								<svg class="ui-rating-leaves__icon" width="80" height="35" viewBox="0 0 80 35" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M58 30C58 31.0609 58.2107 32.0783 58.5858 32.8284L63.3999 28.4191L58 30Z" fill="#4967D0"/>
								<path d="M58.5858 32.8284C58.9609 33.5786 59.4696 34 60 34L79 34L71 20L79 6L60 6C59.4696 6 58.9609 6.42143 58.5858 7.17157C58.2107 7.92172 58 8.93913 58 10L58 30M58.5858 32.8284C58.2107 32.0783 58 31.0609 58 30M58.5858 32.8284L63.3999 28.4191L58 30" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M22 30C22 31.0609 21.7893 32.0783 21.4142 32.8284L16.6001 28.4191L22 30Z" fill="#4967D0"/>
								<path d="M21.4142 32.8284C21.0391 33.5786 20.5304 34 20 34L0.999998 34L9 20L0.999999 6L20 6C20.5304 6 21.0391 6.42143 21.4142 7.17157C21.7893 7.92172 22 8.93913 22 10L22 30M21.4142 32.8284C21.7893 32.0783 22 31.0609 22 30M21.4142 32.8284L16.6001 28.4191L22 30" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<rect x="16" y="1" width="48" height="28" rx="2" fill="#F8F8F8" stroke="#4967D0" stroke-width="2"/>
								</svg>

								<div class="ui-rating-leaves__counter">
									4.8
								</div>
							
							</div>
							<div class="rating_text">Рейтинг подборки</div>
						</div>
						
						<div class="b-courses__rating-page_r">
							
							<!-- rating star -->
							<div class="rating">                                
								<svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
								<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
									<path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z"></path>
								</symbol>
								</svg>                                             
								<div class="c-rate">
									<svg class="c-icon" width="25" height="25">
										<use xlink:href="#star"></use>
									</svg>
									<svg class="c-icon" width="25" height="25">
										<use xlink:href="#star"></use>
									</svg>
									<svg class="c-icon" width="25" height="25">
										<use xlink:href="#star"></use>
									</svg>
									<svg class="c-icon" width="25" height="25">
										<use xlink:href="#star"></use>
									</svg>
									<svg class="c-icon " width="25" height="25">
										<use xlink:href="#star"></use>
									</svg>
								</div>
									
							</div>
							<span class="rating_text">Ваша оценка</span> 
							<!-- rating star --> 
						</div>
					</div>
				</div>
				<!-- end courses__rating -->
				
				<!-- popular block -->
				<div class="popular">
					<h3>Популярные курсы: Программирование</h3>
					<div class="popular_desk">
						В подборке ТОП-1038 лучших курсов по программированию на Ноябрь 2022, обучение с нуля и до Профи уровня. Стоимость курсов от 690 рублей и до 800000 рублей. Средний рейтинг курсов по программированию - 4.07 балла, на основании 586 реальных отзывов от студентов.
					</div>
					
					<div class="list_list">
						<ul>
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
							<li><a href="#">Django</a></li><li><a href="python-razrabotka/chat-boty">Чат-боты</a></li>
							<li><a href="#">Основы программирования</a></li>
							<li><a href="#">Tkinter</a></li>
							<li><a href="#">Ручное тестирование</a></li>
							<li><a href="#">Тестирование мобильных приложений</a></li>  
							<li><a href="#">Разработка на Swift</a></li>
							<li><a href="#">Разработка на Kotlin</a></li>
							<li><a href="#">Управление разработкой и IT</a></li>
							<li><a href="#">Fullstack-разработка</a></li>
							<li><a href="#">Аналитика данных</a></li>
							<li><a href="#">ЕГЭ</a></li>
							<li><a href="#">Машинное обучение</a></li>
							<li><a href="#">ООП</a></li>
							<li><a href="#">Алгоритмы и структуры данных</a></li>
							<li><a href="#">Django</a></li><li><a href="python-razrabotka/chat-boty">Чат-боты</a></li>
							<li><a href="#">Основы программирования</a></li>
							<li><a href="#">Tkinter</a></li>
							<li><a href="#">Ручное тестирование</a></li>
							<li><a href="#">Тестирование мобильных приложений</a></li>  
						</ul>
					</div> 
				</div>
				<!-- end popular block -->
				
				
				<!-- di_review block -->
				<div class="di_review">
					<h3>Отзывы о курсах</h3>
					<div class="row_di carousel_v2 rating_schol_carusel"> 
						<div class="di_review_list owl-carousel owl-theme gallery"> 
							<!-- item -->
							<div class="item">
								<div class="item_block_white">
								
									<div class="row_di review_title">
										<div class="review_l">
											И
										</div>
										<div class="review_r">
											<div class="review_name">Иван Васильевич</div>
											<div class="review_rating">
												<!-- rating star -->
												<div class="rating">                                
													<svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
													<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
														<path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z" />
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
												<!-- rating star -->
												
												<div class="review_date">27.08.2022</div> 
											</div> 
										</div>
										
										<a href="#" class="option">
											<svg width="20" height="4" viewBox="0 0 20 4" fill="none" xmlns="http://www.w3.org/2000/svg">
											<circle cx="18" cy="2" r="2" fill="#B8B9BA"/>
											<circle cx="10" cy="2" r="2" fill="#B8B9BA"/>
											<circle cx="2" cy="2" r="2" fill="#B8B9BA"/>
											</svg> 
										</a> 
									</div>
									
									<div class="review_desk">
										<div class="review_desk_title">Профессиональное обучение, в котором чувствуется любовь к делу <3</div>
										<div class="review_desk_text">
											Благодарю команду Скиллбокс за качественно построенное обучения и поддержку на всем этапе обучения.
												и были незначительны. 
											
										</div>
									</div> 
									
									<div class="review_niz">
										<div class="review_niz_kto"><a href="#"><img src="img/otz.svg" alt="" ></a> </div> 
										<div class="review_niz_kto_a"><a href="#">Источник</a></div> 
										<!-- + quantity_inner - -->
										<div class="quantity_inner">        
											<button class="bt_plus">
												<svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15 6.5L8 1.5L1 6.5" stroke="#4967D0" stroke-width="2"/>
												</svg> 
											</button>
											<input type="text" class="quantity" value="0">
											<button class="bt_minus">
												<svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15 1.5L8 6.5L1 1.5" stroke="#4967D0" stroke-width="2"/>
												</svg> 
											</button>
										</div>
										<!-- + quantity_inner - -->  
									</div>    
									
								</div> 
							</div>
							<!-- item -->
							
							<!-- item -->
							<div class="item">
								<div class="item_block_white">
								
									<div class="row_di review_title">
										<div class="review_l">
											A
										</div>
										<div class="review_r">
											<div class="review_name">Александра К.</div>
											<div class="review_rating">
												<!-- rating star -->
												<div class="rating">                                
													<svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
													<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
														<path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z" />
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
														<svg class="c-icon" width="20" height="20">
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
											<circle cx="18" cy="2" r="2" fill="#B8B9BA"/>
											<circle cx="10" cy="2" r="2" fill="#B8B9BA"/>
											<circle cx="2" cy="2" r="2" fill="#B8B9BA"/>
											</svg> 
										</a> 
									</div>
									
									<div class="review_desk">
										<div class="review_desk_title">Оправдались все ожидания!</div>
										<div class="review_desk_text">
											Благодарю команду Скиллбокс за качественно построенное обучения и поддержку на всем этапе обучения.
											В ноябре 2021 года я приобрел профессию Веб-разработчик. На тот момент мои представления о веб-разработки были незначительны. 
											Но я четко поставил...
										</div>
									</div> 
									
									<div class="review_niz">
										<div class="review_niz_kto"><a href="#"><img src="img/otz.svg" alt="" ></a> </div> 
										<div class="review_niz_kto_a"><a href="#">Источник</a></div> 
										<!-- + quantity_inner - -->
										<div class="quantity_inner">        
											<button class="bt_plus">
												<svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15 6.5L8 1.5L1 6.5" stroke="#4967D0" stroke-width="2"/>
												</svg> 
											</button>
											<input type="text" class="quantity" value="0">
											<button class="bt_minus">
												<svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15 1.5L8 6.5L1 1.5" stroke="#4967D0" stroke-width="2"/>
												</svg> 
											</button>
										</div>
										<!-- + quantity_inner - -->  
									</div>    
									
								</div> 
							</div>
							<!-- item -->
							
							<!-- item -->
							<div class="item">
								<div class="item_block_white">
								
									<div class="row_di review_title">
										<div class="review_l">
											М
										</div>
										<div class="review_r">
											<div class="review_name">Макаренко М.</div>
											<div class="review_rating">
												<!-- rating star -->
												<div class="rating">                                
													<svg class="none" width="0" height="0" xmlns="http://www.w3.org/2000/svg">
													<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
														<path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z" />
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
											<circle cx="18" cy="2" r="2" fill="#B8B9BA"/>
											<circle cx="10" cy="2" r="2" fill="#B8B9BA"/>
											<circle cx="2" cy="2" r="2" fill="#B8B9BA"/>
											</svg> 
										</a> 
									</div>
									
									<div class="review_desk">
										<div class="review_desk_title">Оправдались все ожидания!</div>
										<div class="review_desk_text">
											Благодарю команду Скиллбокс за качественно построенное обучения и поддержку на всем этапе обучения.
											В ноябре 2021 года я приобрел профессию Веб-разработчик. На тот момент мои представления о веб-разработки были незначительны. 
											Но я четко поставил...
										</div>
									</div> 
									
									<div class="review_niz">
										<div class="review_niz_kto"><a href="#"><img src="img/otz.svg" alt="" ></a> </div> 
										<div class="review_niz_kto_a"><a href="#">Источник</a></div> 
										<!-- + quantity_inner - -->
										<div class="quantity_inner">        
											<button class="bt_plus">
												<svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15 6.5L8 1.5L1 6.5" stroke="#4967D0" stroke-width="2"/>
												</svg> 
											</button>
											<input type="text" class="quantity" value="0">
											<button class="bt_minus">
												<svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15 1.5L8 6.5L1 1.5" stroke="#4967D0" stroke-width="2"/>
												</svg> 
											</button>
										</div>
										<!-- + quantity_inner - -->  
									</div>    
									
								</div> 
							</div>
							<!-- item -->      
						</div> 
						<div class="owl_navigation"></div>   
					</div>                           
					<div class="home_more">
						<a href="#" class="btn_white">Показать все отзывы</a>
					</div>                      
				</div>
				
				<div class="cat_text">
					<h2>Топ-2 учебных курса: Курсы по программированию</h2> 
					<p>Выбирайте лучшие курсы по программированию. Под руководством практикующих специалистов вы познакомитесь со специальными инструментами разработки и научитесь писать код на одном из востребованных языков, например, Java, JavaScript или Python.</p>
					<p>По окончании курса обучения программированию вы соберете портфолио и получите сертификат, подтверждающий ваши новые компетенции. Сможете работать в штате компании или вести проекты на фрилансе.</p>
					<p>Онлайн-курсы для IT-специалистов будут полезны не только новичкам, но и опытным программистам. Они помогут прокачать hard skills, расширить спектр услуг и повысить квалификацию, стать более востребованными и получать выгодные заказы.</p>
				</div> 
			</div>
			<!-- end catalog_content --> 
		</div>
		<!-- catalog --> 
	</div>
</div>  

<?php
get_footer();
