
// Declaring Variables
let i = 0; 
let currentID = i;
let previousID; 

// Getting all the elements with class name letter
let letter = document.getElementsByClassName("letter");
let slideWrapper  = document.getElementsByClassName("slide-wrapper");
let parallaxItem = document.getElementsByClassName("parallax-item");
let svgLetter = document.getElementsByClassName("svg-letter");
let slider = document.getElementsByClassName("customSlider_slide");
// Initializing the display property of every letter class element as block
document.getElementById(letter[currentID].id).style.display = "block";

let sceneItem = document.getElementsByClassName("scene-item");

// Main slider function 
function changeSVG(nextID){
  for (let i = 0; i < sceneItem.length; i++){
    sceneItem[i].style.transform = "translate3d(0px, 0px, 0px)";
  }
    document.removeEventListener("mousemove", handler);
  //Parallax item exit function
  
  // parallaxItem[currentID].style.top = "20px";
    
  setTimeout(function(){
    // parallaxItem[currentID].style.opacity = "0";
    parallaxItem[currentID].style.top = "20px";
    parallaxItem[currentID].style.display = "none";
    // parallaxItem[currentID].classList.add("fadeOutDown");

    
  },400);

  // Slide wrapper exit function 
  setTimeout(function(){
    slideWrapper[currentID].style.right = '-100vw';
  },400);

  // SVG Letter Exit Function 
  setTimeout(function(){
    // console.log(svgLetter[currentID]);
    svgImg = svgLetter[currentID].getElementsByTagName('img');
    svgImg[0].style.display = "none";
  },800);
  setTimeout(function(){
    slider[currentID].classList.remove("active_slide");
    // slider[nextID].classList.add("active_slide");
  },850 );
  
  //SVG letter change effect function 
  setTimeout(function(){
    var svg = document.getElementById("svg-change");
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
      toSimple();
      console.log("I value inside :" + i);
      console.log(currentLetterPoints);
    console.log(nextLetterPoints);
  },900);

  setTimeout(function(){
    slider[nextID].classList.add("active_slide");
  },1800 );

  // Next Slide Wrapper Entry Function
  setTimeout(function(){
    // slideWrapper[nextID].style.display = "block";
    slideWrapper[nextID].style.right = '0vw';
    console.log(slideWrapper[nextID]);
  },1600);

  // Next Parralex Item Entry Function
  setTimeout(function(){
    parallaxItem[nextID].style.display = "block";
  },2000);

  // Next SVG Letter entry function
  setTimeout(function(){
    // console.log(svgLetter[nextID]);
    svgImg = svgLetter[nextID].getElementsByTagName('img');
    svgImg[0].style.display = "block";
  },1400);
  console.log(currentID);
  console.log(nextID);

  // Changing the currentID value
  setTimeout(function(){
    currentID = nextID;
    document.addEventListener("mousemove", handler);
  },2300);
  

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


// Initializing Event Listener Events 
document.getElementById("prevBtn").addEventListener('click', prevFunction );
document.getElementById("nextBtn").addEventListener('click', nextFunction );