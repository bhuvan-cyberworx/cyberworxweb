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
    <path id="basesvg" class="letter-base  letter-x" stroke-width="" fill="white" stroke="white" d="M474.903,549.682H186.096V110.5h131.222v329.531h196.587v109.65H474.903z" >
    </path>
    <path id="one" class="letter  letter-x" stroke-width="" fill="white" stroke="white" d="M474.903,549.682H186.096V110.5h131.222v329.531h196.587v109.65H474.903z" >
    </path>
    <path id="two" class="letter letter-e" fill="black" fill="white" stroke-width="" stroke="white" d="M600.383,549.682H496.717l-29.545-229.988l-96.548,229.988h-41.248l-92.159-229.988l-33.936,229.988
            H99.617l67.412-399.364H269.56l81.211,212.995l85.9-212.995h103.665L600.383,549.682z" ></path>

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
  
  
  var svg = document.getElementById("svg-letter");
  var s = Snap(svg);
  var currentLetter = Snap.select('#basesvg');
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
    setTimeout(function(){
      changeSVG(slideID);
    },500);
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

