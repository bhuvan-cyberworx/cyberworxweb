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

document.addEventListener("mousemove", handler);



// Elements motion function  ends here