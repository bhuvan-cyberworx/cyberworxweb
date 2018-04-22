window.onload = function(){

        preLoader();
    }

    function preLoader(){
        let preLoader = document.getElementById("pre-loader");
        preLoader.style.top = -100+'vh';
    }


// event handler function
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



// attach handler to the click event of the document
if (document.attachEvent) document.attachEvent('mousemove', handler);
else document.addEventListener('mousemove', handler);


let slideIndex  = 0;
// activeSlide(slideIndex);

function prevSlide(){
    slideIndex += -1 ;
    activeSlide(slideIndex);
}

function nextSlide(){
    slideIndex += 1 ;
    activeSlide(slideIndex);
}


function activeSlide(n){
    let customSlider_slide = document.getElementsByClassName('customSlider_slide');
    let slideWrapper = document.getElementsByClassName('slide-wrapper');

    if (n >= customSlider_slide.length) {slideIndex = 0} 
    if (n < 0) {slideIndex = customSlider_slide.length-1}
    console.log(customSlider_slide[slideIndex]);
    
    
    for(let i=0; i < customSlider_slide.length; i++ ){
     customSlider_slide[i].classList.remove("active_slide");
     console.log(customSlider_slide[i]);
    } 

    // // customSlider_slide[slideIndex].classList.add("active_slide");

    setTimeout(function () {
        slideWrapper[0].style.right = '-100vw';
    }, 500);

    setTimeout(function () {
        slideWrapper[0].style.right = '00vw';
    }, 1000);

    setTimeout( function () { 
    customSlider_slide[slideIndex].classList.add("active_slide");
    }, 2000);



    


    

    // console.log(slideIndex);
    // console.log(customSlider_slide[0]);
    console.log(customSlider_slide[slideIndex]);
}



function changeSVG(){
    // let lx = document.getElementsByClassName('letter-x');
    // let bh = lx[0].getAttribute('d');
    // // alert(bh);
    // lx[0].setAttribute('d','M378.38,50.5c126.81,0,205,62.54,247.55,134.63l-125.08,66c-23.45-38.22-67.75-68.62-122.47-68.62-94.68,0-161.56,73-161.56,167.64S283.7,517.8,378.38,517.8c45.17,0,86-15.64,109.44-34.74V434.42H354.93V310.21H634.62v226.7c-62.54,68.62-146.79,112.92-256.24,112.92-172.85,0-313.56-115.52-313.56-299.66S205.53,50.5,378.38,50.5Z' ) ;
    // alert(lx[0].getAttribute('d'));

    var tween = KUTE.to('#one', { path: '#two' }, {
      duration: 500,
      morphPrecision: 4,
      morphIndex: 16,
      yoyo: true,
      repeat: 0,
      
    });

    tween.start();


}



document.getElementById("prevBtn").addEventListener('click',prevSlide);
document.getElementById("nextBtn").addEventListener('click',nextSlide);
// window.addEventListener('click',changeSVG);