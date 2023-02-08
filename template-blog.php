<?php
/**
 * Template name: Blog
 */

$i = 0;
$count_posts = get_option('posts_per_page');
$sticky = get_option( 'sticky_posts' );
$args = [
    'ignore_sticky_posts' => 1,
    'post_type' => 'post',
    'post_status' => 'publish',
];
    
if ( ! empty($sticky) ) {
    $args['posts_per_page'] = -1;
    $args['post__in'] = $sticky;
    $sticky_query = new WP_Query( $args );
    $args['post__not_in'] = $sticky;
    unset($args['post__in']);
}

$args['posts_per_page'] = -1; // $count_posts;

get_header(); 
?>

<div class="container_di">
		<div class="row_di">
		
			<div class="blog_cat">
			
				<div class="page_header">    
					<div class="page_title">
						<?php the_title('<h1>', '</h1>'); ?>
					</div>
				</div>
					
				<div class="row_di more"> 
					<div class="row_10_di">

						<?php
						if ( ! empty($sticky) && $sticky_query->have_posts() ) :
							while ($sticky_query->have_posts()) : $sticky_query->the_post();
								get_template_part('template-parts/content', get_post_type());
								$i++;
							endwhile;
						endif;
						wp_reset_query();
						
						$query = new WP_Query( $args );
						
						if ($query->have_posts()) :
							while ($query->have_posts()) : $query->the_post();
								get_template_part('template-parts/content', get_post_type());
								$i++;
							endwhile;
						else :
							get_template_part('template-parts/content', 'none');
						endif;
						wp_reset_query();
						?>

						</div>
				</div>
				
				<?php if ( $i > 8 ) : ?>
					<div class="blog_btn_more">
						<a href="#" id="loadMore" class="btn_white">Показать еще статьи</a>
					</div>
				<?php endif; ?>

			</div> 

		</div>
	</div>  

<?php

get_footer();