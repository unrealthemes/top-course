<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package unreal-themes
 */

get_header();

while ( have_posts() ) :
	the_post();	
?>

	<div class="container_di">
		<div class="row_di">  
			<div class="statick_page"> 
				<div class="page_header">    
					<div class="page_title">
						<?php the_title('<h1>', '</h1>'); ?>
					</div>
				</div> 

				<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
			
			</div> 

		</div>
	</div>  

<?php
endwhile;

get_footer();