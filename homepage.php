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
    const container = document.getElementById("container");

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

  // Append each square to the container element
  container.appendChild(square);

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
  const submitBtn = document.createElement("button");
  // set button text
  submitBtn.textContent = "Submit";
  //append input and button to square
  this.appendChild(input);
  this.appendChild(submitBtn);
  
  // Create the disappear button
  const disappearBtn = document.createElement("button");
  disappearBtn.textContent = "Thanks my GUY!";
  disappearBtn.onclick = function() {
    this.style.display = "none";
  };
  this.appendChild(disappearBtn);
  
  // keep track of input and button element
  inputs.push(input);
  buttons.push(submitBtn);
  // Add an event listener to the submit button that listens for a click event
  submitBtn.addEventListener("click", () => handleButtonClick(input, this, submitBtn, disappearBtn));
}


function handleButtonClick(input, square, button) {
  //get input value
  const name = input.value;
  if (!validateInput(input)) {
    //display error message and return;
    return;
  }
  // create text node
  const textNode = document.createTextNode(name);
  // append text node to square
  square.appendChild(textNode);
  // remove input and button
  square.removeChild(inputs[inputs.indexOf(input)]);
  square.removeChild(buttons[buttons.indexOf(button)]);
  square.classList.add("square-filled");
  square.filled = true;
  square.removeEventListener("click", handleSquareClick);
  if (document.querySelectorAll(".square-filled").length === 100) {
    //save feature code here
  }
}


</script>

<?php
get_footer();

  