
let i = 0; 

function slideNumber(slideID){
	changeSlide(slideID);
}

let currentID = i, prevID, nextID ;
let slide = document.getElementsByClassName('customSlider_slide');
function changeSlide(nextID){
	$(slide[currentID]).removeClass('active-slide');
	$('#svg-change').css('opacity',1);

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
	},200);
	},1000);

}


// Change SVG function 
let letter = document.getElementsByClassName("letter");

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