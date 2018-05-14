// Declaring Variables
let i = 0; 
let currentID = i;
let previousID; 

// Getting all the elements with class name letter
let outerContainer = document.getElementById("outer-container");
let footerBottom = document.getElementById("footer-bottom");
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
  document.getElementById("icon-scroll").style.display ="none";
  //Parallax item exit function
  
  // parallaxItem[currentID].style.top = "20px";
    
  setTimeout(function(){
    // parallaxItem[currentID].style.opacity = "0";
    parallaxItem[currentID].style.top = "20px";
    parallaxItem[currentID].style.opacity = "0";
    // parallaxItem[currentID].classList.add("fadeOutDown");

    
  },00);

  setTimeout( function(){
    for (let i = 0; i < sceneItem.length; i++){
    sceneItem[i].style.transform = "translate3d(0px, 0px, 0px)";
  }
    document.removeEventListener("mousemove", handler);
  },400)
   

  // Slide wrapper exit function 
  setTimeout(function(){
    slideWrapper[currentID].style.right = '-100vw';
  },200);

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
      currentLetter.animate({ d: currentLetterPoints }, 400, mina.linear, toSimple);  
    }
    var toSimple = function(){
      currentLetter.animate({ d: nextLetterPoints }, 400, mina.linear); 
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
    parallaxItem[nextID].style.top = "00px";
    parallaxItem[nextID].style.opacity = "1";
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
let mainWrap = document.getElementById("main-wrap");
let logoImg = document.getElementById("logo-img");
let menuIcon = document.getElementById("menu-icon");

// check slide number status function
function slideNumber(slideID){
  if(slideID >= letter.length){
    i -= 1;
    console.log("slideNumber Script working");
    outerContainer.style.display = "block";
    document.body.style.overflow = "scroll";
    document.body.style.overflowX  = "hidden";
    let outerTop = outerContainer.offsetTop;
    scrollTo(document.documentElement, outerTop+20, 1250); 
    
    mainWrap.style.background = "#fff";
    mainWrap.style.borderBottom = "1px solid #eee";
    logoImg.src  = "assets/images/logo_new.png";
    menuIcon.style.color = "#333";
    setTimeout(function(){
        window.addEventListener("scroll",scrollSlideFunction);  
    },2500);
    
  }
  else if(slideID <0){
    i += 1;
  }
  else{
    changeSVG(slideID);
  }
  
}

  

    
function scrollTo(element, to, duration) {
    var start = element.scrollTop,
        change = to - start,
        currentTime = 0,
        increment = 20;
        
    var animateScroll = function(){        
        currentTime += increment;
        var val = Math.easeInOutQuad(currentTime, start, change, duration);
        element.scrollTop = val;
        if(currentTime < duration) {
            setTimeout(animateScroll, increment);
        }
    };
    animateScroll();
}

//t = current time
//b = start value
//c = change in value
//d = duration
Math.easeInOutQuad = function (t, b, c, d) {
  t /= d/2;
  if (t < 1) return c/2*t*t + b;
  t--;
  return -c/2 * (t*(t-2) - 1) + b;
};

// Previous Slide Function
function prevFunction() {
  // changeSVG(i -= 1);
  slideNumber(i -= 1);
}

// Next slide function
function nextFunction() {
 slideNumber(i += 1);
}



function scrollSlideFunction(){
  offTop =document.getElementById("outer-container").offsetTop;
  if(window.pageYOffset > (offTop*0.8) && window.pageYOffset < (offTop*0.85) ){
    console.log("scrollFunction Script working");
    scrollTo(document.documentElement, 0, 1250);
    setTimeout(function(){
      outerContainer.style.display = "none";
      document.body.style.overflow = "hidden";
      document.body.style.overflowX  = "hidden";
      mainWrap.style.background = "transparent";
      mainWrap.style.borderBottom = "0px";
      logoImg.src  = "assets/images/logo_white.png";
      menuIcon.style.color = "#fff";  

    },1250);

    // Remove the scroll up event Listener
    window.removeEventListener("scroll",scrollSlideFunction);
  }
}



// Initializing Event Listener Events 

document.getElementById("prevBtn").addEventListener('click', prevFunction );
document.getElementById("nextBtn").addEventListener('click', nextFunction );
