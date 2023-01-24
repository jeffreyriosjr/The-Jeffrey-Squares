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
  
    <!-- <div class ="container-fluid">
    <?php echo do_shortcode('[ninja_form id=1]'); ?>
  </div> -->
  

    <div class="generator">
    <div id="list1" class="left-numbers"></div>
    </div>
    <div class="generator">
    <div id="list2" class="top-numbers"></div>
    </div>
    <div id="output">
    <button id="myButton">Generate The Numbers!</button>

    </div>
    
		<div id="jeffsquares"></div>
	</div>



  

</main>

<script>
  var button = document.getElementById("myButton");
  var clickCount = 0;
  var list1 = [], list2 = [];
  button.addEventListener("click", function() {
    if (clickCount < 2) {
      var numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
      numbers.sort(function() {
        return 0.5 - Math.random();
      });
      if (clickCount === 0) {
        list1 = numbers;
      } else {
        list2 = numbers;
      }
      clickCount++;
    } else {
      button.disabled = true;
      alert("You can only generate 2 random lists.");
    }
    document.getElementById("list1").innerHTML = list1;
    document.getElementById("list2").innerHTML = list2;
    document.getElementById("list1").innerHTML = "";
    for (var i = 0; i < list1.length; i++) {
    var node = document.createElement("LI");
    var textnode = document.createTextNode(list1[i]);
    node.appendChild(textnode);
    document.getElementById("list1").appendChild(node);
    }

    document.getElementById("list2").innerHTML = "";
    list2.forEach(function(item) {
    var node = document.createElement("SPAN");
    var textnode = document.createTextNode(item);
    node.appendChild(textnode);
    document.getElementById("list2").appendChild(node);
    });



  });
</script>

<script>

const jeffsquares = document.getElementById("jeffsquares");
let filledSquares = 0;
const generatorButton = document.getElementById("myButton");
generatorButton.disabled = true;

function handleSquareClick() {
  if (!validateInput(this.input)) return;
  filledSquares++;
  if (filledSquares === 100) {
    generatorButton.disabled = false;
  }
  // rest of the code here
}

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

  const nameInput = document.getElementById("name");
const nicknameInput = document.getElementById("nickname");




  // create input and button element
  const input = document.createElement("input");
  input.setAttribute("maxlength", "12");
  const submitBtn = document.createElement("button");
  // set button text
  submitBtn.textContent = "Final pick?";
  //append input and button to square
  this.appendChild(input);
  this.appendChild(submitBtn);

  // Create the disappear button
  const disappearBtn = document.createElement("button");
  disappearBtn.textContent = "Are u Sure!?";
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
  function handleSquareClick() {
  if (!validateInput(this.input)) return;
  // rest of the code here
}

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
function validateInput(input) {
  if (input.value.trim() === "") {
    alert("Input is required");
    return false;
  }
  return true;
}
document.getElementById("user-form").addEventListener("submit", function(event) {
  event.preventDefault();
  const nameInput = document.getElementById("name");
  const nicknameInput = document.getElementById("nickname");

  if (!nameInput.value.trim() || !nicknameInput.value.trim()) {
    alert("Please fill out name and nickname form before selecting a square.");
    return;
  }
  // rest of the code
});

</script>

<?php
get_footer();
