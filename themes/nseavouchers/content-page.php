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
	
<div class="form-area full">

	
		<div id="prefooter-wrap" class="prefooter-area">
			<div id="prefooter-1">
			<p>3511 E. Harmon Ave.</br> 
					Las Vegas, NV 89121</br> 
					702-733-7330</br>
					800-248-6732</br>
					Fax: 702-733-6004</p>
			</div>
			<div id="prefooter-2">
			<p>3511 E. Harmon Ave.</br> 
					Las Vegas, NV 89121</br> 
					702-733-7330</br>
					800-248-6732</br>
					Fax: 702-733-6004</p>
			</div>
			<div id="prefooter-3">
			<p>3511 E. Harmon Ave.</br> 
					Las Vegas, NV 89121</br> 
					702-733-7330</br>
					800-248-6732</br>
					Fax: 702-733-6004</p>
			</div>
			</div>


</div>

<?php
get_footer();
			
