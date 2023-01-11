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
		<div id="container"></div>
	</div>
</main>



<script>
	// Step 1: Get a reference to the container element
const container = document.getElementById("container");

// Step 2: Loop 100 times to create 100 div elements, each representing a square
for (let i = 0; i < 100; i++) {
  // Create the square element
  const square = document.createElement("div");
  
  // Step 3: Add a class to each square so that you can style it with CSS and give it a default appearance (e.g. empty)
  square.classList.add("square");
  
  // Step 4: Append each square to the container element
  container.appendChild(square);
  
  // Step 5: Add an event listener to each square that listens for a click event
  square.addEventListener("click", function() {
    if(this.classList.contains('square')){
      this.classList.remove('square');
      this.classList.add('square-filled');
    }else{
      this.classList.remove('square-filled');
      this.classList.add('square');
    }
    // Step 6: Implement a function that checks when the squares are filled up,
    //then implement a save feature 
    if(document.querySelectorAll(".square-filled").length === 100){
      //save feature code here
    }
  });
}

</script>
<?php
get_footer();

  