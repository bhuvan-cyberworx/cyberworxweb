// var keyFunction = function() {$('html').on('keydown', function(e){
       
//        if(e.which == 38){
//         slideNumber(i -= 1);
//         $('html').off();
//         setTimeout(function(){
//           keyFunction();
//         },1500);
//        }

//        if(e.which == 40){
//         slideNumber(i += 1);
//         $('html').off();
//         setTimeout(function(){
//           keyFunction();
//         },1500);
//        }
// });
// }


var isChrome = !!window.chrome && !!window.chrome.webstore;

if(isChrome){
var keyFunction = function() {$('html').on('mousewheel DOMMouseScroll wheel', function(e){
          if( e.originalEvent.wheelDelta < 0 ) {
              incSlideNumber();
              console.log(e.originalEvent.wheelDelta);
          } else if(e.originalEvent.wheelDelta > 0 ){
              decSlideNumber();
              console.log(e.originalEvent.wheelDelta);

          }   
      });
}
console.log(isChrome);

}

else{
  var keyFunction = function() {$('html').on('mousewheel DOMMouseScroll wheel', function(e){
          if( e.originalEvent.detail > 0) {
              incSlideNumber();
              
          } else if( e.originalEvent.detail < 0 ){
              decSlideNumber();
              
          }   
      });

}
console.log(isChrome);
}

function incSlideNumber(){
  slideNumber(i += 1);
  
}

function decSlideNumber(){
  slideNumber(i -= 1);
}


keyFunction();

let outerContainer = document.getElementById("outer-container");
let outerTop = outerContainer.offsetTop;
let i = 0; 
let letter = document.getElementsByClassName("letter");

function slideNumber(slideID){
    if(slideID >= letter.length){
        i -= 1;
    console.log(slideID);
        
      $('html').off();
      
    
    
        $('body').addClass('home-slide-inactive');
    $('#icon-scroll').css('display','none');
        scrollTo(document.documentElement, outerTop+20, 800); 
        setTimeout(function(){
            window.addEventListener("scroll",scrollSlideFunction);  
        },1000);

    }

    else if(slideID <0){
        i += 1;
  
    }
    else{
        changeSlide(slideID);
    $('html').off();
    setTimeout(function(){
      keyFunction();
    },1500);
    }
}

function scrollSlideFunction(){

  if(window.pageYOffset < outerTop ){
    
    console.log("scrollFunction Script working");
    // $('#icon-scroll').css('display','block');
    scrollTo(document.documentElement, 0, 600);
    setTimeout(function(){
        $('body').removeClass('home-slide-inactive');
    },000);
    setTimeout(function(){keyFunction();},500)
    // // Remove the scroll up event Listener
    window.removeEventListener("scroll",scrollSlideFunction);  
  }
}


Math.easeInOutQuad = function (t, b, c, d) {
  t /= d/2;
  if (t < 1) return c/2*t*t + b;
  t--;
  return -c/2 * (t*(t-2) - 1) + b;
};


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

let currentID = i, prevID, nextID ;
let slide = document.getElementsByClassName('customSlider_slide');

function changeSlide(nextID){

    $('#icon-scroll').css('display','none');
    $(slide[currentID]).removeClass('active-slide');
    $('#svg-change').css('opacity',1);
    $(slide[nextID]).addClass('transition');

    setTimeout(function(){
        changeSVG(nextID);
    },500);

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

        // setTimeout(function(){
            
        // },200);

    },800);
}

// Change SVG function 


function changeSVG(nextID){
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

