<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 */



/**
 * Get permalink by template name
 */

function ut_get_permalik_by_template( $template ) {

	$result = '';

	if ( ! empty( $template ) ) {
		$pages = get_pages( [
		    'meta_key'   => '_wp_page_template',
		    'meta_value' => $template
		] );
		$template_id = $pages[0]->ID;
		$page = get_post( $template_id );
		$result = get_permalink( $page );
	}
	
	return $result;
}



/**
 * Get permalink by template name
 */

function ut_get_page_id_by_template( $template ) {

	$result = '';

	if ( ! empty( $template ) ) {
		$pages = get_pages( [
		    'meta_key'   => '_wp_page_template',
		    'meta_value' => $template
		] );
		$result = $pages[0]->ID;
	}
	
	return $result;
}



/**
 * Get name menu by location
 */

function ut_get_title_menu_by_location( $location ) {

    if ( empty( $location ) ) {
    	return false;
	}
    $locations = get_nav_menu_locations();

    if ( ! isset( $locations[ $location ] ) ) {
    	return false;
	}
    $menu_obj = get_term( $locations[ $location ], 'nav_menu' );

    return $menu_obj->name;
}



/** 
 * Admin footer modification
 */   

function ut_remove_footer_admin() {

    echo '<span id="footer-thankyou">Тема разработана <a href="https://unrealthemes.site/" target="_blank"><img src="' . THEME_URI . '/img/unreal.png" width="130"/></a></span>';
}
add_filter('admin_footer_text', 'ut_remove_footer_admin');



/** 
 * Add options page ACF pro
 */ 

if ( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}



/**
 * Style for repeater carbon fields
 */

function ut_admin_style() {

  	echo '<style>
		    body .cf-complex__group-head {
		        background: #363b3f;
		        color: #f9f9f9; 
		    }
		    body .carbon-groups-holder .carbon-row:last-child {
			    border: 2px solid #363b3f;
			}
		  </style>';
}
add_action( 'admin_head', 'ut_admin_style' ); 



function ut_get_the_category_list( $separator = '', $parents = '', $post_id = false ) {

	global $wp_rewrite;

	if ( ! is_object_in_taxonomy( get_post_type( $post_id ), 'category' ) ) {
		/** This filter is documented in wp-includes/category-template.php */
		return apply_filters( 'the_category', '', $separator, $parents );
	}

	/**
	 * Filters the categories before building the category list.
	 *
	 * @since 4.4.0
	 *
	 * @param WP_Term[] $categories An array of the post's categories.
	 * @param int|bool  $post_id    ID of the post we're retrieving categories for.
	 *                              When `false`, we assume the current post in the loop.
	 */
	$categories = apply_filters( 'the_category_list', get_the_category( $post_id ), $post_id );

	if ( empty( $categories ) ) {
		/** This filter is documented in wp-includes/category-template.php */
		return apply_filters( 'the_category', __( 'Uncategorized' ), $separator, $parents );
	}

	$rel = ( is_object( $wp_rewrite ) && $wp_rewrite->using_permalinks() ) ? 'rel="category tag"' : 'rel="category"';

	$thelist = '';
	if ( '' === $separator ) {
		$thelist .= '<ul class="post-categories">';
		foreach ( $categories as $category ) {
			$thelist .= "\n\t<li>";
			switch ( strtolower( $parents ) ) {
				case 'multiple':
					if ( $category->parent ) {
						$thelist .= get_category_parents( $category->parent, true, $separator );
					}
					$thelist .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" ' . $rel . '><span>' . $category->name . '</span></a></li>';
					break;
				case 'single':
					$thelist .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '"  ' . $rel . '><span>';
					if ( $category->parent ) {
						$thelist .= get_category_parents( $category->parent, false, $separator );
					}
					$thelist .= $category->name . '</span></a></li>';
					break;
				case '':
				default:
					$thelist .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" ' . $rel . '><span>' . $category->name . '</span></a></li>';
			}
		}
		$thelist .= '</ul>';
	} else {
		$i = 0;
		foreach ( $categories as $category ) {
			if ( 0 < $i ) {
				$thelist .= $separator;
			}
			switch ( strtolower( $parents ) ) {
				case 'multiple':
					if ( $category->parent ) {
						$thelist .= get_category_parents( $category->parent, true, $separator );
					}
					$thelist .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" ' . $rel . '><span>' . $category->name . '</span></a>';
					break;
				case 'single':
					$thelist .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" ' . $rel . '><span>';
					if ( $category->parent ) {
						$thelist .= get_category_parents( $category->parent, false, $separator );
					}
					$thelist .= "$category->name</span></a>";
					break;
				case '':
				default:
					$thelist .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" ' . $rel . '><span>' . $category->name . '</span></a>';
			}
			++$i;
		}
	}

	/**
	 * Filters the category or list of categories.
	 *
	 * @since 1.2.0
	 *
	 * @param string $thelist   List of categories for the current post.
	 * @param string $separator Separator used between the categories.
	 * @param string $parents   How to display the category parents. Accepts 'multiple',
	 *                          'single', or empty.
	 */
	return apply_filters( 'the_category', $thelist, $separator, $parents );
}



function ut_comment( $comment, $args, $depth ) {

	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	}

	$classes = ' ' . comment_class( empty( $args['has_children'] ) ? 'row_di' : 'parent row_di', null, null, false );
	$count = get_comment_meta($comment->comment_ID, 'vote', true);
	$count = ( $count == '' ) ? 0 : $count;
	$disabled = ( isset($_COOKIE["vote-comment-" . $comment->comment_ID]) ) ? 'disabled' : '';
	?>

	<<?php echo $tag, $classes; ?> id="comment-<?php comment_ID(); ?>">
		<div class="comment_vn">

			<?php if ( 'div' != $args['style'] ) { ?>
				<div id="div-comment-<?php comment_ID(); ?>" class="comment-body">
			<?php } ?>

				<div class="row_di coments_title">
					<div class="coments_l">
						<?php echo mb_substr($comment->comment_author, 0, 1); ?>
					</div>
					<div class="coments_r">
						<div class="coments_name"><?php echo $comment->comment_author; ?></div> 
						<div class="data">
							<?php
							printf(
								__( '%1$s at %2$s' ),
								get_comment_date(),
								get_comment_time()
							); 
							?>
							<?php edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
						</div>
					</div>
					
					<div class="quantity_inner">        
						<button class="bt_plus" data-id="<?php comment_ID(); ?>" <?php echo $disabled; ?>>
							<svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15 6.5L8 1.5L1 6.5" stroke="#4967D0" stroke-width="2"></path>
							</svg> 
						</button>
						<input type="text" class="quantity" value="<?php echo esc_attr($count); ?>">
						<button class="bt_minus" data-id="<?php comment_ID(); ?>" <?php echo $disabled; ?>>
							<svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15 1.5L8 6.5L1 1.5" stroke="#4967D0" stroke-width="2"></path>
							</svg> 
						</button>
					</div>
				</div>
				
				<div class="coment_item_cintent">
					<?php comment_text(); ?>
				</div>
				
				<div class="coment_niz">
					<!-- <div class="coment_niz_edit"><a class="comment-reply-link" href="#">Ответить</a></div> -->
					<div class="coment_niz_edit reply">
						<?php
						comment_reply_link(
							array_merge(
								$args,
								[
									'add_below' => $add_below,
									'depth'     => $depth,
									'max_depth' => $args['max_depth']
								]
							)
						); ?>
					</div>
					<!-- <a href="#" class="option">
						<svg width="20" height="4" viewBox="0 0 20 4" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="18" cy="2" r="2" fill="#B8B9BA"></circle>
						<circle cx="10" cy="2" r="2" fill="#B8B9BA"></circle>
						<circle cx="2" cy="2" r="2" fill="#B8B9BA"></circle>
						</svg> 
					</a> -->
				</div>

			<?php if ( 'div' != $args['style'] ) { ?>
				</div>
			<?php } ?>

		</div>
<?php
}



add_filter( 'body_class','ut_class_names' );
function ut_class_names( $classes ) {

	if ( is_page_template('template-home.php') ) {
		$classes[] = 'home';
	} elseif ( is_singular('post') || is_page_template('template-blog.php') ) {
		$classes[] = 'blog';
	} elseif ( is_singular('product') ) {
		$classes[] = 'curs_page';
	}

	return $classes;
}