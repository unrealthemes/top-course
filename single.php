<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package unreal-themes
 */

get_header();

while ( have_posts() ) :
	the_post();	
?>

	<div class="container_di">
		<div class="row_di">
		 
			<div class="blog_post">
			
				<div class="page_header">   
					<div class="nazad"> 
						<ul>
							<li>
								<a href="<?php echo ut_get_permalik_by_template('template-blog.php'); ?>" class="">
									Назад к списку статей
								</a>
							</li> 
						</ul> 
					</div> 
				</div>
			
				<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
				
				<div class="container_di_640 article_niz">
					<div class="row_di">

						<?php get_template_part( 'template-parts/content', 'share' ); ?>

						<?php 
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>        
						
					</div>
				</div>
			</div>
			
		</div>
	</div>

<?php
endwhile;

get_footer();