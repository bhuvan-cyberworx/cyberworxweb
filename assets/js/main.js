// (function(){scrollTo(document.documentElement, 0, 0);})();

window.onload = function(){
  setTimeout(function(){
    $('#pre-loader').addClass('content-hidden');
    
  },100);

  setTimeout(function(){ 
    preLoader();
    setTimeout(function(){
       $('.alert').addClass('alertShow');
       document.getElementById('plucky_audio').play();
     },1000);
  },2000);
}

window.onbeforeunload = function () {
  scrollTo(document.documentElement, 0, 0);
}

function preLoader(){

    let preLoader = document.getElementById("pre-loader");
    // preLoader.style.top = -100+'vh';
    preLoader.style.opacity = 0;
    preLoader.style.zIndex = -1;
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

// if((/iPhone|iPad|iPod|Android|webOS|BlackBerry|Opera Mini|IEMobile/i.test(navigator.userAgent) )) {

//   alert("working");
// }

function mobileScroll(){
  if(window.pageYOffset>50){
     $('body').addClass('scrolled');
  }
  else{
    $('body').removeClass('scrolled');
  }
 
}
window.addEventListener('scroll', mobileScroll);



if(!(/iPhone|iPad|iPod|Android|webOS|BlackBerry|Opera Mini|IEMobile/i.test(navigator.userAgent) )) {

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
if($("#cookie-count").text() > 1){
  $(document).mouseleave(function () {
    if (mouseY < 100) {
        if (popupCounter < 1) {
             $('body').addClass('popup-on');
        }
        popupCounter ++;
    }
});
}

$(".no-thanks span, .close-popup").on('click',function(){
  $('body').removeClass('popup-on');
});




//Popup mail function 
function _(id){ return document.getElementById(id); }
// Regular Expression for validating email addressess
var regEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

function validate(){
  var count ;
  // Disabling the submit button and changing the form status
  _("submitPopupForm").disabled = true;
  
  
  // Validating email 
  if( (_("email").value).length == 0 || (regEmail.test(_("email").value) == false)){

    _("validate_email").innerHTML = "Please enter valid email id";
    count = 1;
    
  }
  else{
    _("validate_email").innerHTML = " ";
    count = 0;
  }

  //Validating mobile number 
  if((_("number").value).length != 10 ||  isNaN(_("number").value)){
    _("validate_number").innerHTML = "Please enter valid mobile number";
    count = 1;
  }
  else{
    _("validate_number").innerHTML = " ";
    count = 0;
  }

  // Enabling the submit button as errors occured
  _("submitPopupForm").disabled = false;

  // Initializing the sendMail function 
  if(count == 0){
    sendPopUpMail();
  }
  
}

// Function to send mail via ajax 
function sendPopUpMail(){

  // Setting the form status
  _("formStatus").innerHTML = 'please wait ...';
  
  // Creating a from variable and Initializing it with the form
  var form = _('popup-form');

  // Declaring a new formData object 

  var formdata = new FormData();

  // Appending the form variables to the declared formData variable 
  formdata.append( "email_id", _("email").value );
  formdata.append( "mobile_number", _("number").value );
  
  // Declaring a new XMLHttpRequest object
  var ajax = new XMLHttpRequest();

  // Opening the request 
  ajax.open( "POST", "mail.php" );

  ajax.onreadystatechange = function() {
      

    if(ajax.readyState == 4 && ajax.status == 200) {

      // If the ajax quesry responds with succeful sent message 
      if(ajax.responseText == "success"){
        _("formStatus").innerHTML = 'Thank you, we have recieved your mail.';
        form.reset();
        _("formStatus").classList.add("mailSuccess");
        _("formStatus").classList.remove("mailFail");
      } 
      else {
        _("formStatus").innerHTML = ajax.responseText;
        _("submitForm").disabled = false;
        _("formStatus").classList.add("mailFail");
        _("formStatus").classList.remove("mailSuccess");

      }
    }
  }

  // Sending the form via ajax
  ajax.send( formdata );
}