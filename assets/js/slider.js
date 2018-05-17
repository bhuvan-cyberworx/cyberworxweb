// (function(){
// 	$('.active-slide .scene-item').css('transition-delay','0s');
// })();


// var wheelFunction = function() {$("#customSlider").on('wheel', function(event) {
//     if (event.originalEvent.deltaY  < 1) {
//         slideNumber(i -= 1);
//         console.log(i);
//     }
//     else {
//         slideNumber(i += 1);
//         console.log(i);
//     }
// });
// };


$('html').keydown(function(e){
       if(e.which == 38){
        slideNumber(i -= 1);
        console.log(i);
       }
       if(e.which == 40){
        slideNumber(i += 1);
        console.log(i);
       }
});

// wheelFunction();

let outerContainer = document.getElementById("outer-container");
let outerTop = outerContainer.offsetTop;
let i = 0; 
let letter = document.getElementsByClassName("letter");
function slideNumber(slideID){
	if(slideID >= letter.length){
		i -= 1;
		console.log("slideNumber Script working");
		$('body').addClass('home-slide-inactive');
		$("#customSlider").off();
		scrollTo(document.documentElement, outerTop+20, 1250); 
		setTimeout(function(){
		    window.addEventListener("scroll",scrollSlideFunction);  
		},2500);

	}

	else if(slideID <0){
		i += 1;
	}
	else{
		changeSlide(slideID);
	}
}

function scrollSlideFunction(){

  if(window.pageYOffset < (outerTop*0.75) ){
  	wheelFunction();
    console.log("scrollFunction Script working");
    scrollTo(document.documentElement, 0, 1250);
    setTimeout(function(){
   		$('body').removeClass('home-slide-inactive');
    },1250);

    // Remove the scroll up event Listener
    window.removeEventListener("scroll",scrollSlideFunction);
  }

}


function popUpMail(){

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
			$('#svg-change').css('transition','0.8s');
			$('#svg-change').css('opacity',0);
			$(slide[nextID]).removeClass('transition');
			// $('.active-slide .scene-item').css('transition-delay','0s');
		},200);

		// setTimeout(function(){
			
		// },200);

	},1000);
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
    console.log("I value inside :" + i);
    console.log(currentLetterPoints);
    console.log(nextLetterPoints);
} 

