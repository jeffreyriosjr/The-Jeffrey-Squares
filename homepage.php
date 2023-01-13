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

<main id="primary" class="site-main square-main">
	<div class ="container-fluid">
		<header class="m-1 p-1">
				<h1 class="page-title m-5"><?php single_post_title();?>
				The-Jeffrey-Squares
				</h1>
		</header>
		<div id="jeffsquares"></div>
	</div>
</main>



<script>

const jeffsquares = document.getElementById("jeffsquares");

let buttons = [];
let inputs = [];

function validateInput(input) {
  // add your validation code here
  return true;
}

for (let i = 0; i < 100; i++) {
  // Create the square element
  const square = document.createElement("div");

  // Create the number element
  const number = document.createElement("span");
  number.textContent = i + 1;

  // Add a class to each square
  square.classList.add("square");

  // Append the number element to the square
  square.appendChild(number);

  // Append each square to the jeffs-squares element
  jeffsquares.appendChild(square);

  // Add an event listener to each square that listens for a click event
  square.addEventListener("click", handleSquareClick);
}

function handleSquareClick() {
  if (this.filled) return;
  // check if input and button already exists
  if (this.querySelector("input") || this.querySelector("button")) {
    return;
  }
  // create input and button element
  const input = document.createElement("input");
  input.setAttribute("maxlength", "12");
  const submitBtn = document.createElement("button");
  // set button text
  submitBtn.textContent = "confirm";
  //append input and button to square
  this.appendChild(input);
  this.appendChild(submitBtn);

  // Create the unclick button
  const unclickBtn = document.createElement("button");
  unclickBtn.textContent = "Unclick";
  unclickBtn.onclick = function() {
    handleUnclick(input, this.parentNode, submitBtn);
  };
  this.appendChild(unclickBtn);
  
  // keep track of input and button element
  inputs.push(input);
  buttons.push(submitBtn);
  // Add an event listener to the submit button that listens for a click event
  submitBtn.addEventListener("click", () => handleButtonClick(input, this, submitBtn, unclickBtn));
}

function handleUnclick(input, square, submitBtn) {
  // remove input and button
  square.removeChild(input);
  square.removeChild(submitBtn);
  square.removeChild(unclickBtn);
  square.classList.remove("square-filled");
  square.filled = false;
  square.addEventListener("click", handleSquareClick);
}



</script>

<?php
get_footer();