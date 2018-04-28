<!-- Including Header File -->
<?php include_once("includes/header.php"); ?>

    <style type="text/css">
    	body {
  padding: 0;
  margin: 0;
  font-family: "Roboto", sans-serif;
  color: white;
  overflow: hidden;
  background-color: #1b1b1b;
/*   display: flex; */
  justify-content: center;
/*   flex-direction: column; */
/*   align-items: center; */

}
/*svg {
  width: 200px;
  height:200px;
}*/


path{
  width:100px;
  height:100px;
}

#svg-letter{
    position: absolute;
    width: 600px;
    height: 600px;
    left: 15vw;
    top: 15vh;
    z-index: 1;
    transition: 0.35s;
}

.letter{
  display: none;
}
</style>


<div id="svg-letter">
 <svg viewBox="0 0 700 700" preserveAspectRatio="none"  width="100%" height="100%" >
    <path id="one" class="letter  letter-x" stroke-width="" fill="white" stroke="white" d="M260.9,330.5L74.7,49.1h174.1L352,220.7l100-171.6h173.2L441.5,333.7l208.2,317.2H475.7L345.5,437.8L221.9,650.9H50.3 L260.9,330.5z" >
    </path>
    <path id="two" class="letter letter-e" fill="black" fill="white" stroke-width="" stroke="white" d="M378.38,50.5c126.81,0,205,62.54,247.55,134.63l-125.08,66c-23.45-38.22-67.75-68.62-122.47-68.62-94.68,0-161.56,73-161.56,167.64S283.7,517.8,378.38,517.8c45.17,0,86-15.64,109.44-34.74V434.42H354.93V310.21H634.62v226.7c-62.54,68.62-146.79,112.92-256.24,112.92-172.85,0-313.56-115.52-313.56-299.66S205.53,50.5,378.38,50.5Z" ></path>

   <path id="three" class="letter letter-e" fill="white" stroke-width="" stroke="white" d="M130.12,50.07h440.1v130.5H284.92v99.9h279v131.4h-279v108h285.3v130.5H130.12Z" data-reactid=".0.$/.3.2.1.2.0.0" ></path>
  </svg>
</div>

 <!-- Slide Controls  -->
 <div class="sliderControl">
  <div id="prevBtn" class="controlBtn">
      <i class="fa fa-chevron-circle-left"></i>
  </div>
  <div id="nextBtn" class="controlBtn">
      <i class="fa fa-chevron-circle-right"></i>
  </div>
</div>
    
<script src="https://cdn.jsdelivr.net/kute.js/1.5.0/kute.min.js"></script> <!-- core KUTE.js -->

<script src="https://cdn.jsdelivr.net/kute.js/1.5.0/kute-svg.min.js"></script> <!-- SVG Plugin -->
<!-- <script type="text/javascript" src="assets/js/main.js"> </script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js"></script>

<script type="text/javascript">
  let i = 0;
  
  let currentID = i;
  // let nextID = 1;
  let previousID; 

  let letter = document.getElementsByClassName("letter");
  document.getElementById(letter[currentID].id).style.display = "block";

function changeSVG(nextID){
  if(i>letter.length)
  var svg = document.getElementById("svg-letter");
  var s = Snap(svg);
  // var simpleCup = Snap.select('#simple-cup');
  // var fancyCup = Snap.select('#fancy-cup');

  var currentLetter = Snap.select('#'+letter[currentID].id);
  var nextLetter =  Snap.select('#'+letter[nextID].id);
  var currentLetterPoints = currentLetter.node.getAttribute('d');
  var nextLetterPoints = nextLetter.node.getAttribute('d');
  var toFancy = function(){
    currentLetter.animate({ d: currentLetterPoints }, 500, mina.linear, toSimple);  
  }
  var toSimple = function(){
    currentLetter.animate({ d: nextLetterPoints }, 500, mina.linear); 
  }
  setTimeout(function(){
    toSimple();
  },0);
  console.log("I value inside :" + i);
}

// check slide number status function

function slideNumber(slideID){
  if(slideID >= letter.length){
    alert("i is greater");
    i -= 1;
    console.log(i);
  }
  else if(slideID <0){
    alert("i is less");
    i += 1;
    console.log(i);

  }
  else{
    changeSVG(slideID);
  }
  
}
// Previous Slide Function
function prevFunction() {
  // changeSVG(i -= 1);
  slideNumber(i -= 1);
}

// Next slide function
function nextFunction() {
 slideNumber(i += 1);
}

document.getElementById("prevBtn").addEventListener('click', prevFunction );
document.getElementById("nextBtn").addEventListener('click', nextFunction );

// window.addEventListener('click',changeSVG);

</script>
</body>
</html>

