<?php
/* Template Name: Content Page */
?>
<?php
/**
 * The front page template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NSEA_Vouchers_Campaign
 */

get_header('content'); ?>



	<div id="primary" class="content-area">
		
	
		<main id="main" class="site-main" role="main">

				<div class="left-content-area">
					<img src="<?php the_field('left_content_image'); ?>">
				
				</div>
				
				<div class="right-content-area">
<?php the_field('main_content'); ?>					
				</div>


			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
				</div><!-- #content -->
		</div>
	</div>

	
		<div id="prefooter-area">
		<div id="prefooter-wrap">
			<section id="prefooter-1">
			<p class="tinywhite">3511 E. Harmon Ave.</br> 
					Las Vegas, NV 89121</br> 
					702-733-7330</br>
					800-248-6732</br>
					Fax: 702-733-6004</p>
			</section>
			<section id="prefooter-2">
			<p class="tinywhite">1890 Donald Street</br> 
					Reno, NV 89502</br> 
					775-828-6732</br>
					800-232-6732</br>
					Fax: 775-828-6745</p>
			</section>
			<aside id="prefooter-3">
			<p class="tinywhite">557 W. Silver, Suite 203</br> 
					Elko, NV 89801</br> 
					775-777-8361</br>
					888-673-2004</br>
					Fax: 775-777-8362</p>
			</aside>
		</div>
		</div>

<?php
get_footer();
			
