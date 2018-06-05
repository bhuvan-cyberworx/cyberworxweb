//Check if the device is desktop/laptop/tab
jQuery(document).ready(function(){
  if($(window).width() > 560){
// Declaring slider class
function Slider() {
   var isBrowser, keyFunction;   
}


    

// Method to check browser type and fire related function for mousewheel event
Slider.prototype.checkBrowser = function() {

    // Chrome Browser Check
    if(!!window.chrome && !!window.chrome.webstore){
      this.isBrowser = "isChrome";
    }

    // Firefox Browser Check
    else if(typeof InstallTrigger !== 'undefined'){
      this.isBrowser = "isFirefox";
    }

    // Safari Browser Check
    else if(/constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification))){
      this.isBrowser = "isSafari";
    }

     // Internet Explorer 6-11
    else if(/*@cc_on!@*/false || !!document.documentMode){
      this.isBrowser = "isIE";
    }


    else if(!isIE && !!window.StyleMedia){
      // Edge 20+
      this.isBrowser = isEdge ;
    }
    
    // Creating mousewheel event function based on browser type
    switch(this.isBrowser) {
      case 'isChrome':
      case 'isSafari':
      case 'isEdge':
      case 'isIE':
      this.keyFunction = function() {
        console.log("keyFunction Activated");
        $('html').on('mousewheel DOMMouseScroll wheel', function(e){
            if( e.originalEvent.wheelDelta < 0 ) {
                incrementSlide();
            } else if(e.originalEvent.wheelDelta > 0 ){
                decrementSlide();
                
            }   

        });
      }

      break;

      case 'isFirefox':
       this.keyFunction = function() {
        $('html').on('mousewheel DOMMouseScroll wheel', function(e){
          if( e.originalEvent.detail > 0) {
              incrementSlide();
             
          } else if( e.originalEvent.detail < 0 ){
              decrementSlide();
             
          }   

        });
      }

      break;

      default:
      console.log("none");
    }

    
}

//Method to increment the slide number 
var incrementSlide = function(){
  slideNumber(i += 1);
  
}

//Method to decrement the slide number 
var decrementSlide = function(){
  slideNumber(i -= 1);
  
}

var NewSlide = new Slider();
NewSlide.checkBrowser();
NewSlide.keyFunction();

let outerContainer = document.getElementById("outer-container");
let outerTop = outerContainer.offsetTop;
let i = 0; 
let letter = document.getElementsByClassName("letter");


slideNumber = function(slideID){

  if(slideID >= letter.length){
    i -= 1;
    $('html').off();
     window.onwheel = function(){ return false; }
    $('body').addClass('home-slide-inactive');
    $('#icon-scroll').css('display','none');
    setTimeout(function(){
      $('html, body').animate({
        scrollTop: $('#outer-container').offset().top
    }, 600);
    },100);

    setTimeout(function(){
        window.onwheel = function(){ return true; }  
    },700);

  }

  else if(slideID <0){
    i += 1;
  
  }
  else{
    changeSlide(slideID);
    $('html').off();
    setTimeout(function(){
      NewSlide.keyFunction();
    },1200);
  }
}


function scrollSlideFunction(){ 
    if(window.pageYOffset < outerTop ){
    $('html').off();
    $('html, body').animate({
        scrollTop: $('#customSlider').offset().top
      }, 600)
    window.onwheel = function(){ return false; }

    setTimeout(function(){
      $('body').removeClass('home-slide-inactive');

    }, 600)
    setTimeout(function(){NewSlide.keyFunction();

    },1000)

    setTimeout(function(){
    window.onwheel = function(){ return true; }},600);
        // // Remove the scroll up event Listener
        window.removeEventListener("scroll",scrollSlideFunction);  
      }
    }

let currentID = i, prevID, nextID ;
let slide = document.getElementsByClassName('customSlider_slide');

function changeSlide(nextID){
  console.log("change-slide");
  $('#icon-scroll').css('display','none');
  $(slide[currentID]).removeClass('active-slide');
  $('#svg-change').css('opacity',1);
  $(slide[nextID]).addClass('transition');

  setTimeout(function(){
    changeSVG(nextID);
  },300);

  setTimeout(function(){

  $(slide[nextID]).addClass('active-slide');
  currentID = nextID;
  // $('#svg-change').css('transition-delay','5s');
  setTimeout(function(){
    $('#svg-change').css('opacity',0);
    $('#svg-change').css('transition','0.5s');
    $(slide[nextID]).removeClass('transition');
    // $('.active-slide .scene-item').css('transition-delay','0s');
  },200);

  },600);
}

// Change SVG function 
function changeSVG(nextID){
  console.log("change-svg");
    var svg = document.getElementById("svg-change");
    var s = Snap(svg);
    var currentLetter = Snap.select('#basesvg');
    var nextLetter =  Snap.select('#'+letter[nextID].id);
    var currentLetterPoints = currentLetter.node.getAttribute('d');
    var nextLetterPoints = nextLetter.node.getAttribute('d');
    var toFancy = function(){
      currentLetter.animate({ d: currentLetterPoints }, 450, mina.linear, toSimple);  
    }
    var toSimple = function(){
      currentLetter.animate({ d: nextLetterPoints }, 450, mina.linear); 
    }
    toSimple(); 
} 



function addEventScroll(){
  if(window.pageYOffset >= outerTop){
    window.addEventListener("scroll",scrollSlideFunction);
  }
}

window.addEventListener('scroll', addEventScroll );


//End of main if statement
  }
});
