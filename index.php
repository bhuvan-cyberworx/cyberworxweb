<!-- Including Header File -->
<?php include_once("includes/header.php"); ?>
<div id="pre-loader">
    <div id="pre-loader-content">
        <div id="pre-loader-image" class="text-center">
            <img src="assets/images/logo.png" alt="logo" class="animated fadeInDown">
        </div>
        <div id="pre-loader-text">
            <h4 class="text text-center animated slideInUp">Cyberworx - Digital Solutions. <span style="color:#F0E500">Made </span>Easy.</h4>
        </div>
    </div>
</div>


<div id="customSlider">
    <div class="customSlider_slide">
        <div class="slide-wrapper">
            <div class="bg-color"></div>
        </div>
        <div class="parallax-item">
            <div class="scene-items scene-content">
                <span>
                Wij zijn jarig! Dit jaar vieren we ons 10 jarig jubileum. Vier jij met ons mee?
                </span>
                <a href="#">View Case Study Now -></a>
            </div>
            <div class="scene-item element-a-1">
                
            </div>
            <div class="svg-letter">
             <svg viewBox="0 0 700 700" preserveAspectRatio="none" width="100%" height="100%" data-reactid=".0.$/.3.0.1.1.0"><path class="letter-x" stroke-width="" stroke="black" d="M260.9,330.5L74.7,49.1h174.1L352,220.7l100-171.6h173.2L441.5,333.7l208.2,317.2H475.7L345.5,437.8L221.9,650.9H50.3 L260.9,330.5z" data-reactid=".0.$/.3.0.1.1.0.0"></path></svg>
             <img src="https://www.exitable.nl/dist/assets/img/slider/X.png" >
            </div>

            <div class="scene-item element-a-2">
                
            </div>

            <div class="scene-item element-a-3">
                
            </div>

        </div>
    </div>



</div>




<script>
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

    var pageX = e.pageX;
    var pageY = e.pageY;

    // IE 8
    if (pageX === undefined) {
        pageX = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
        pageY = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
    }

    console.log(pageX, pageY);
    
let sceneItem = document.getElementsByClassName("scene-item");
tXV = 1360 - pageX;
for(let i=0; i <sceneItem.length ; i++){
    console.log(tXV);
    sceneItem[i].style.transform = "translate3d(5.7px, 5px, 0px)";
    console.log(sceneItem[i].style.transform);
}
}

// attach handler to the click event of the document
if (document.attachEvent) document.attachEvent('mousemove', handler);
else document.addEventListener('mousemove', handler);


</script>

<!-- Icluding footer file -->
<?php include_once("includes/footer.php"); ?>
