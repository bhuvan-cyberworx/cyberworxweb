window.onload = function(){
  setTimeout(function(){
    $('#pre-loader').addClass('content-hidden');
  },1000);

  setTimeout(function(){ 
          preLoader();
          setTimeout(function(){
             $('.alert').addClass('alertShow');
             document.getElementById('plucky_audio').play();
           },1000);
  },2000);
  
}



function preLoader(){
    let preLoader = document.getElementById("pre-loader");
    preLoader.style.top = -100+'vh';
}


var hr = (new Date()).getHours();
var dn = document.getElementById("dn");



// Initializing Check Day and Night Function
checkDayNight();

function checkDayNight() {

  if(hr>7 && hr < 19){
    $('body').addClass('day');
    dn.checked = false;
  }
  else{
    $('body').addClass('night');
    dn.checked = true;
  }

 

}

$(".alert .close").on('click',function(){
  $('.alert').removeClass('alertShow');
  $('.alert').addClass('alertHide');
});

$(".toggleWrapper").on('click',toggleDayNight);

function toggleDayNight(){
  if(dn.checked){
    $('body').addClass('night');
    $('body').removeClass('day');
  }

  else{
    $('body').addClass('day');
    $('body').removeClass('night');
  }
}



// setTimeout(function(){
//     let preLoaderImage = document.getElementById("pre-loader-image");
    
// },1000);



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



// Process Slider Function Begins here
// Process Slider Function Begins here

let pi = 0; 
let currentProcessID = pi;
let nextProcessID; 
let previousProcessID;
let processHeading = document.getElementsByClassName("process-heading");
let slideContent  = document.getElementsByClassName("slide-content");
let processItem  = document.getElementsByClassName("process-item");


// Previous Slide Function
function prevProcess() {
  // changeSVG(i -= 1);
  processNumber(pi -= 1);
}

// Next slide function
function nextProcess() {
 processNumber(pi += 1);
}

function processNumber(processID){

   if(processID == processItem.length-1){
    changeProcess(processID);
    // pi -= 1;
    document.getElementById("nextProcess").style.display = "none";
  }
  else if(processID <= 0){
    changeProcess(processID);
    // pi += 1;
    document.getElementById("prevProcess").style.display = "none";


  }
  else{
    changeProcess(processID);
    document.getElementById("nextProcess").style.display = "block";
    document.getElementById("prevProcess").style.display = "block";
  }
  
}

processHeading[currentProcessID].style.opacity = "1";

slideContent[currentProcessID].style.opacity = "1";

processHeading[currentProcessID].style.marginLeft = "00px";

slideContent[currentProcessID].style.marginTop = "00px";

function changeProcess(nextProcessID){
 
    
setTimeout(function(){
    processHeading[currentProcessID].style.marginLeft = "-100px";
    processHeading[currentProcessID].style.opacity = "0";

  },00);

setTimeout(function(){
   
    
    slideContent[currentProcessID].style.opacity = "0";
    

  },00);

 setTimeout(function(){
    processHeading[nextProcessID].style.marginLeft = "0px";
    processHeading[nextProcessID].style.opacity = "1";
    
  },500);

setTimeout(function(){
   
    slideContent[nextProcessID].style.marginTop = "0px";
    slideContent[nextProcessID].style.opacity = "1";
    slideContent[currentProcessID].style.marginTop = "100px";

  },400);

  console.log(processHeading[currentProcessID]);
  console.log(processHeading[nextProcessID]);
  setTimeout(function(){
    previousProcessID = currentProcessID;
    currentProcessID = nextProcessID;
    
  },800);

}


let menuSlideContent = document.getElementsByClassName("menu-slide-content");
let navigationSectionInfoBox = document.getElementsByClassName("navigation-section-info-box");


document.addEventListener("mousemove", handler);
document.getElementById("prevProcess").addEventListener('click',prevProcess);
document.getElementById("nextProcess").addEventListener('click',nextProcess);


$(document).ready(function(){
  $('.menu-slider').slick({
     infinite: true,
      slidesToShow: 1,
      autoplay:true,
      autoplaySpeed:8000,

    prevArrow:'<div id="menuPrevBtn" class="controlBtn"><i class="fas fa-caret-left"></i></div>',
    nextArrow:'<div id="menuNextBtn" class="controlBtn"><i class="fas fa-caret-right"></i></div>'
  });
});


$(document).ready(function(){
  $('#open-menu,#menu-close').click(function(){
    $('#main-menu').toggleClass('active-menu');   

  });


});

// Exit intent Pop up Begins Here
var mouseX = 0;
var mouseY = 0;
var popupCounter = 0;

document.addEventListener("mousemove", function(e) {
    mouseX = e.clientX;
    mouseY = e.clientY;
    // document.getElementById("coordinates").innerHTML = "<br />X: " + e.clientX + "px<br />Y: " + e.clientY + "px";
});

$(document).mouseleave(function () {
    if (mouseY < 100) {
        if (popupCounter < 1) {
             $('body').addClass('popup-on');
        }
        popupCounter ++;
    }
});

$(".no-thanks span").on('click',function(){
  $('body').removeClass('popup-on');
  });


