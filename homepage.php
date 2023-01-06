<?php
/**
 *
 * Template Name: Homepage Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package squares
 */

get_header();
?>

<main id="primary" class="site-main square-main container-fluid">
	<div class ="container-fluid ">
		<header class="m-5 p-5">
				<h1 class="page-title m-5"><?php single_post_title();?>
				The-Jeffrey-Squares
				</h1>
		</header>
			<div class="col-12"id="number-grid"></div>
	</div>
</main>



<script>
	for (let i = 1; i <= 100; i++) {
  const button = document.createElement('button');
  button.innerText = i;
  button.addEventListener('click', () => {
    console.log(`You clicked on number ${i}`);
  });
  document.getElementById('number-grid').appendChild(button);
}
</script>
<?php
get_footer();
