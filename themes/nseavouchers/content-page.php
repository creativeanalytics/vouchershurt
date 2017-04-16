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

get_header(); ?>



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

	<div class="main-page">
	
		<div id="form-section" class="site-form-section inner">
			<h5>TELL YOUR LEGISLATOR TO OPPOSE ESA VOUCHERS AND INVEST MORE MONEY IN NEVADA'S PUBLIC SCHOOLS</h5>
			<h6>Just fill out this form and send them a message!</h6>

			<div class="form-inner">
				<div id="mf_placeholder" 
					 data-formurl="http://districtwebdesign.com/form/embed.php?id=12283" 
					 data-formheight="622"  
					 data-paddingbottom="40">
				</div>
				<script type="text/javascript" src="http://districtwebdesign.com/form/js/jquery.min.js"></script>
				<script type="text/javascript" src="http://districtwebdesign.com/form/js/jquery.ba-postmessage.min.js"></script>
				<script type="text/javascript" src="http://districtwebdesign.com/form/js/machform_loader.js"></script>
			</div>
			
			
		</div>

	</div>


</div>

<?php
get_footer();
			
