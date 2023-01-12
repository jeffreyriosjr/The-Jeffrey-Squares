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
 * @package squares
 */

get_header();
?>

	<main id="primary" class="site-main">

	<table>
  <tr>
    <td>AFC 1</td>
    <td>AFC 2</td>
	<td>AFC 3</td>
  </tr>
  <tr>
    <td>AFC 4</td>
    <td>AFC 5</td>
	<td>AFC 6</td>

  </tr>
  <tr>
    <td>NFC 1</td>
    <td>NFC 2</td>
    <td>NFC 3</td>

</tr>
  <tr>
    <td>NFC 4</td>
    <td>NFC 5</td>
	<td>NFC 6</td>
  </tr>
</table>




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
// get_sidebar();
// get_footer();
