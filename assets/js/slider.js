// Elements motion function 
function handler(e) {
    e = e || window.event;

    let pageX = e.pageX;
    let pageY = e.pageY;
    let h = window.innerHeight;
    let w = window.innerWidth;

    // IE 8
    if (pageX === undefined) {
        pageX = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
        pageY = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
    }  

    let sceneItem = document.getElementsByClassName("scene-item");
    
    for (let i = 0; i < sceneItem.length; i++){
        itemDepth =sceneItem[i].dataset.depth;
        let tXV = ((w/2 - pageX)/w)  * 14 * itemDepth + 'px';
        let tXY = ((h/2 - pageY)/h)  * 7 * itemDepth +'px';
        sceneItem[i].style.transform = "translate3d("+ tXV + "," + tXY + ", 0px)";

    }

}

// Elements motion function  ends here


// Declaring Variables
let i = 0; 
let currentID = i;
let previousID; 

// Getting all the elements with class name letter
let letter = document.getElementsByClassName("letter");
let slideWrapper  = document.getElementsByClassName("slide-wrapper");
let parallaxItem = document.getElementsByClassName("parallax-item");
var svgLetter = document.getElementsByClassName("svg-letter");

// Initializing the display property of every letter class element as block
document.getElementById(letter[currentID].id).style.display = "block";


// Main slider function 
function changeSVG(nextID){
  
  //Parallax item exit function
  setTimeout(function(){
    parallaxItem[currentID].style.display = "none";
    // parallaxItem[nextID].style.display = "block";
  },100);

  // Slide wrapper exit function 
  setTimeout(function(){
    // slideWrapper[currentID].style.display = "none";
    slideWrapper[currentID].style.right = '-100vw';
  },300);

  // SVG Letter Exit Function 
  setTimeout(function(){
    console.log(svgLetter[currentID]);
    svgImg = svgLetter[currentID].getElementsByTagName('img');
    svgImg[0].style.display = "none";
  },600);

  //SVG letter change effect function 
  setTimeout(function(){
    var svg = document.getElementById("svg-change");
    var s = Snap(svg);
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
      toSimple();
      console.log("I value inside :" + i);
  },900);

  // Next Slide Wrapper Entry Function
  setTimeout(function(){
    // slideWrapper[nextID].style.display = "block";
    slideWrapper[nextID].style.right = '0vw';
  },1500);

  // Next Parralex Item Entry Function
  setTimeout(function(){
    parallaxItem[nextID].style.display = "block";
  },1800);

  // Next SVG Letter entry function
  setTimeout(function(){
    console.log(svgLetter[nextID]);
    svgImg = svgLetter[nextID].getElementsByTagName('img');
    svgImg[0].style.display = "block";
  },2000);
  console.log(currentID);
  console.log(nextID);

  // Changing the currentID value
  setTimeout(function(){
    currentID = nextID;
  },2100);
  

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