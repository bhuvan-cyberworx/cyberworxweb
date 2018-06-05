//Check if the device is desktop/laptop/tab
jQuery(document).ready(function(){
  if(/constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification))){

    alert("safari");

    keyFunction = function() {
      console.log("keyFunction Activated");
      $('html').on('mousewheel DOMMouseScroll wheel', function(e){
          if( e.originalEvent.wheelDelta < 0 ) {
              incrementSlide();
          } else if(e.originalEvent.wheelDelta > 0 ){
              decrementSlide();
          }   
      });
    }

//Method to increment the slide number 
var incrementSlide = function(){
  slideNumber(i += 1);
  
}

//Method to decrement the slide number 
var decrementSlide = function(){
  slideNumber(i -= 1);
  
}

keyFunction();

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
    // setTimeout(function(){
    //   $('html, body').animate({
    //     scrollTop: $('#outer-container').offset().top
    // }, 600);
    // },100);
    $('#customSlider').css('transform','translate3d(0,-98%,0)');
    $('#outer-container').css('transform','translate3d(0,-98vh,0)');
    $('#footer').css('margin-top','-98vh');
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
      keyFunction();
    },1200);
  }
}


function scrollSlideFunction(){ 
    if(window.pageYOffset <= 1 ){
    $('html').off();
    $('#customSlider').css('transform','translate3d(0,00%,0)');
    $('#outer-container').css('transform','translate3d(0,00vh,0)');
    $('#footer').css('margin-top','000vh');
    window.onwheel = function(){ return false; }

    setTimeout(function(){
      $('body').removeClass('home-slide-inactive');

    }, 700)
    setTimeout(function(){keyFunction();

    },1000)

    setTimeout(function(){
    window.onwheel = function(){ return true; }},700);
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


