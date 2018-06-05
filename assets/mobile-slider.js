jQuery(document).ready(function(){
  if($(window).width() < 560){

let outerContainer = document.getElementById("outer-container");
let outerTop = outerContainer.offsetTop;
let i = 0; 
let letter = document.getElementsByClassName("letter");


slideNumber = function(slideID){

  if(slideID >= letter.length){
    i -= 1;
    $('body').addClass('home-slide-inactive');
    $('#icon-scroll').css('display','none');
    setTimeout(function(){
      $('html, body').animate({
        scrollTop: $('#outer-container').offset().top
    }, 600);
    },100);
  }

  else if(slideID <0){
    i += 1;
  }

  else{
    changeSlide(slideID);
  }
}

function scrollSlideFunction(){ 
    if(window.pageYOffset < outerTop ){
    $('html, body').animate({
        scrollTop: $('#customSlider').offset().top
      }, 600)
   
    setTimeout(function(){
      $('body').removeClass('home-slide-inactive');

    }, 600)

    // // Remove the scroll up event Listener
    window.removeEventListener("scroll",scrollSlideFunction);  
      }
    }


let currentID = i, prevID, nextID ;
let slide = document.getElementsByClassName('customSlider_slide');

function changeSlide(nextID){
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

// Previous Slide Function
function prevFunction() {
  slideNumber(i -= 1);
}

// Next slide function
function nextFunction() {
  slideNumber(i += 1);
}

document.getElementById("prevBtn").addEventListener('click', prevFunction );
document.getElementById("nextBtn").addEventListener('click', nextFunction );
window.addEventListener('scroll', addEventScroll );

}

});
