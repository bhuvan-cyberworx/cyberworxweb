window.onload = function(){

        preLoader();
    }

    function preLoader(){
        let preLoader = document.getElementById("pre-loader");
        preLoader.style.top = -100+'vh';
    }

setTimeout(function(){
    let preLoaderImage = document.getElementById("pre-loader-image");
    preLoaderImage.style.animation = "preLoader 2s infinite";
},1000);



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
        sceneItem[i].style.transform = "translate3d("+ tXV + "," + tXY + ", 0px) !important";

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
  // if(processID = 0){
  //   document.getElementById("prevProcess").style.display = "none";
  //   changeProcess(processID);
  // }
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
    // parallaxItem[currentID].style.opacity = "0";
    processHeading[currentProcessID].style.marginLeft = "-100px";
    processHeading[currentProcessID].style.opacity = "0";

  },00);

setTimeout(function(){
   
    
    slideContent[currentProcessID].style.opacity = "0";
    

  },00);

 setTimeout(function(){
    // parallaxItem[currentID].style.opacity = "0";
    // processItem[nextProcessID].classList.add("process-active");
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

// Process Slider Function Ends here
// Process Slider Function Ends here



let menuSlideContent = document.getElementsByClassName("menu-slide-content");
let navigationSectionInfoBox = document.getElementsByClassName("navigation-section-info-box");

// function openMenu(){
//   document.getElementById("slider-section").style.left = "0";
//   document.getElementById("navigation-section").style.right = "0";
//   setTimeout(function(){
//   for(let msci = 0; msci < menuSlideContent.length; msci++){
//     menuSlideContent[msci].style.opacity = 1;
//   }
//   for(let nsib = 0; nsib < navigationSectionInfoBox.length; nsib++){
//     navigationSectionInfoBox[nsib].style.opacity = 1;
//     navigationSectionInfoBox[nsib].style.marginTop = "0px";
//   }
//   },800);
  
// }

// function closeMenu(){
//   document.getElementById("slider-section").style.left = "-50%";
//   document.getElementById("navigation-section").style.right = "-70%";
//   setTimeout(function(){
//   for(let msci = 0; msci < menuSlideContent.length; msci++){
//     menuSlideContent[msci].style.opacity = 0;
//   }
//   for(let nsib = 0; nsib < navigationSectionInfoBox.length; nsib++){
//     navigationSectionInfoBox[nsib].style.opacity = 0;
//     navigationSectionInfoBox[nsib].style.marginTop = "-20px";
//   }
//   },800);

// }
// document.getElementById("open-menu").addEventListener('click',openMenu);
// document.getElementById("menu-close").addEventListener('click',closeMenu);


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

    // $('#main-wrapper').toggleClass('shift-left');
    // $('#overlay-box').toggleClass('overlay-box-active');

  });



 
    // $(".back-button").click(function() {
    //   $(".segment").removeClass("active-segment");
    //   $(".main-blocks").removeClass("active-intro");
    //   setTimeout(function(){
    //     document.getElementById('main-blocks').style.zIndex = 51;
    //   },1600),
    //     $("#site-content").removeClass("active-site-content")

    // });

    // function changeSegment(t) {
    //   console.log(".segment#" + t);
    //    $(".main-blocks").addClass("active-intro"), 
    //    $("#site-content").addClass("active-site-content"), 
    //    $(".segment").removeClass("active-segment"), 
    //    $(".segment#" + t).addClass("active-segment")
      
    // }
});

// Elements motion function  ends here

