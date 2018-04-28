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



// // event handler function
// function handler(e) {
//     e = e || window.event;

//     let pageX = e.pageX;
//     let pageY = e.pageY;
//     let h = window.innerHeight;
//     let w = window.innerWidth;

//     // IE 8
//     if (pageX === undefined) {
//         pageX = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
//         pageY = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
//     }  

//     let sceneItem = document.getElementsByClassName("scene-item");
    
//     for (let i = 0; i < sceneItem.length; i++){
//         itemDepth =sceneItem[i].dataset.depth;
//         let tXV = ((w/2 - pageX)/w)  * 14 * itemDepth + 'px';
//         let tXY = ((h/2 - pageY)/h)  * 7 * itemDepth +'px';
//         sceneItem[i].style.transform = "translate3d("+ tXV + "," + tXY + ", 0px)";

//     }

// }


// // attach handler to the click event of the document
// if (document.attachEvent) document.attachEvent('mousemove', handler);
// else document.addEventListener('mousemove', handler);


// let slideIndex  = 0;
// // activeSlide(slideIndex);

// function prevSlide(){
//     slideIndex += -1 ;
//     activeSlide(slideIndex);
// }

// function nextSlide(){
//     slideIndex += 1 ;
//     activeSlide(slideIndex);
// }


// function activeSlide(n){
//     let customSlider_slide = document.getElementsByClassName('customSlider_slide');
//     let slideWrapper = document.getElementsByClassName('slide-wrapper');

//     if (n >= customSlider_slide.length) {slideIndex = 0} 
//     if (n < 0) {slideIndex = customSlider_slide.length-1}
//     console.log(customSlider_slide[slideIndex]);
    
    
//     for(let i=0; i < customSlider_slide.length; i++ ){
//      customSlider_slide[i].classList.remove("active_slide");
//      console.log(customSlider_slide[i]);
//     } 

//     // // customSlider_slide[slideIndex].classList.add("active_slide");

//     setTimeout(function () {
//         slideWrapper[i].style.right = '-100vw';
//     }, 100);

//     setTimeout(function () {
//         slideWrapper[i].style.right = '00vw';
//     }, 100);


//     setTimeout( function () { 
//     customSlider_slide[slideIndex].classList.add("active_slide");
//     }, 100);

//     // console.log(slideIndex);
//     // console.log(customSlider_slide[0]);
//     console.log(customSlider_slide[slideIndex]);
// }



// function changeSVG(){
    
// }



// document.getElementById("prevBtn").addEventListener('click',prevSlide);
// document.getElementById("nextBtn").addEventListener('click',nextSlide);
// window.addEventListener('click',changeSVG);