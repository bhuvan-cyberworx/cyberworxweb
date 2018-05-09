// Menu Slider Function Begins here
// Menu Slider Function Begins here

let msi = 0; 
let currentMenuSlideID= msi;
let nextMenuSlideID; 
let previousMenuSlideID;
let processHeading = document.getElementsByClassName("process-heading");
let slideContent  = document.getElementsByClassName("slide-content");
let processItem  = document.getElementsByClassName("process-item");


// Previous Slide Function
function prevMenuSlide() {
  // changeSVG(i -= 1);
  MenuSlideNumber(msi -= 1);
}

// Next slide function
function nextMenuSlide() {
 MenuSlideNumber(msi += 1);
}

function MenuSlideNumber(processID){
  // if(processID = 0){
  //   document.getElementById("prevProcess").style.display = "none";
  //   changeProcess(processID);
  // }
   if(MenuSlideID == MenuSlideItem.length-1){
    changeProcess(MenuSlideID);
    // pi -= 1;
    document.getElementById("nextProcess").style.display = "none";
  }
  else if(MenuSlideID <= 0){
    changeProcess(MenuSlideID);
    // pi += 1;
    document.getElementById("prevProcess").style.display = "none";


  }
  else{
    changeProcess(MenuSlideID);
    document.getElementById("nextProcess").style.display = "block";
    document.getElementById("prevProcess").style.display = "block";
  }
  
}

processHeading[currentMenuSlideID].style.opacity = "1";

slideContent[currentMenuSlideID].style.opacity = "1";

processHeading[currentMenuSlideID].style.marginLeft = "00px";

slideContent[currentMenuSlideID].style.marginTop = "00px";

function changeProcess(nextMenuSlideID){
 
    
setTimeout(function(){
    // parallaxItem[currentID].style.opacity = "0";
    processHeading[currentMenuSlideID].style.marginLeft = "-100px";
    processHeading[currentMenuSlideID].style.opacity = "0";

  },00);

setTimeout(function(){
   
    
    slideContent[currentMenuSlideID].style.opacity = "0";
    

  },00);

 setTimeout(function(){
    // parallaxItem[currentID].style.opacity = "0";
    // processItem[nextMenuSlideID].classList.add("process-active");
    processHeading[nextMenuSlideID].style.marginLeft = "0px";
    processHeading[nextMenuSlideID].style.opacity = "1";
    
  },500);

setTimeout(function(){
   
    slideContent[nextMenuSlideID].style.marginTop = "0px";
    slideContent[nextMenuSlideID].style.opacity = "1";
    slideContent[currentMenuSlideID].style.marginTop = "100px";

  },400);

  console.log(processHeading[currentMenuSlideID]);
  console.log(processHeading[nextMenuSlideID]);
  setTimeout(function(){
    previousMenuSlideID = currentMenuSlideID;
    currentMenuSlideID = nextMenuSlideID;
    
  },800);

}

// Menu Slider Function Ends here
// Menu Slider Function Ends here
