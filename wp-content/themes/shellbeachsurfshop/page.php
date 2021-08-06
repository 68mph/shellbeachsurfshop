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
 * @package shellbeachsurfshop
 */

get_header();
?>
		<div class="hero">	<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
          
		  <div class="pageIntro" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat fixed center 0;background-size:cover;background-attachment:scroll;">
			 <section class="pagetitle">
			<div class="intro">	 
			  <h1><?php the_title(); ?></h1>
			  <h2><?php the_field('sub_title'); ?></h2>
			  <p><?php the_field('description'); ?></p>

				 <a class="button" href="#anchor">Learn More</a>
			</div>
			 </section>
		  </div>
		</div>


	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
