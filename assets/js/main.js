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
        sceneItem[i].style.transform = "translate3d("+ tXV + "," + tXY + ", 0px)";

    }

}



// Process Slider Function Begins here

let pi = 0; 
let currentProcessID = pi;
let nextProcessID; 
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
  if(processID >= letter.processHeading){
    alert("i is greater");
    pi -= 1;
    console.log(pi);
  }
  else if(processID <0){
    alert("i is less");
    pi += 1;
    console.log(pi);

  }
  else{
    changeProcess(processID);
  }
  
}

processHeading[currentProcessID].style.opacity = "1";

slideContent[currentProcessID].style.opacity = "1";
    
function changeProcess(nextProcessID){
 
    
setTimeout(function(){
    // parallaxItem[currentID].style.opacity = "0";
    processHeading[currentProcessID].style.marginLeft = "-50px";
    processHeading[currentProcessID].style.opacity = "0";

  },00);

setTimeout(function(){
   
    slideContent[currentProcessID].style.marginTop = "50px";
    slideContent[currentProcessID].style.opacity = "0";
    

  },300);

 setTimeout(function(){
    // parallaxItem[currentID].style.opacity = "0";
    // processItem[nextProcessID].classList.add("process-active");
    processHeading[nextProcessID].style.marginLeft = "0px";
    processHeading[nextProcessID].style.opacity = "1";
    console.log(processHeading[nextProcessID]);
  },500);

setTimeout(function(){
   
    slideContent[nextProcessID].style.marginTop = "0px";
    slideContent[nextProcessID].style.opacity = "1";

  },800);

  
  

}



document.addEventListener("mousemove", handler);
document.getElementById("prevProcess").addEventListener('click',prevProcess);
document.getElementById("nextProcess").addEventListener('click',nextProcess);

// Elements motion function  ends here