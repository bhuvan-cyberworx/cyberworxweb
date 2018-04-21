
<style>
    .custom_slider {
        z-index: -1;
        max-height: 100vh;
        overflow: hidden;
        position: relative;
    }
    .row.expanded {
        max-width: none;
    }
    .custom_slider .custom_slider-slide {
    min-height: 100vh;
    width: 100vw;
    position: relative;
    background: #000;
    -webkit-transition: .2s;
    transition: .2s;
}
.custom_slider .custom_slider-slide .slide_wrap {
    position: absolute;
    height: 100%;
    width: 100%;
}
.parallax-scene {
    pointer-events: auto!important;
    position: relative;
}
.custom_slider .custom_slider-slide.project-x .bg_color {
    background: url(https://www.exitable.nl/dist/assets/img/x-background.png) center bottom no-repeat;
    background-size: cover;
    width: 100vw;
    right: -100vw;
}
.custom_slider .custom_slider-slide .slide_wrap .bg_color {
    height: 100%;
    position: absolute;
    width: 64vw;
    right: -64vw;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    -webkit-transition: .4s;
    transition: .4s;
    -webkit-transition-timing-function: linear;
    transition-timing-function: linear;
}

.custom_slider .custom_slider-slide.project-x .x-element-3 {
    left: 0!important;
    top: 0!important;
    width: 100vw!important;
    height: 100vh!important;
}
.custom_slider .custom_slider-slide .scene-items {
    padding-top: 5vh;
    opacity: 0;
    -webkit-backface-visibility: hidden;
    position: absolute;
    -webkit-transition: .3s;
    transition: .3s;
}

#letter-svg, .svg_letter {
    -webkit-backface-visibility: hidden;
    position: fixed;
    top: 10vh!important;
    left: 16vw!important;
    pointer-events: none;
}

.custom_slider .svg_letter {
    position: relative;
}

.custom_slider .svg_letter svg {
    height: 80vh;
    width: 80vh;
    max-width: 80vw;
    top: 0;
    left: 0;
}
.custom_slider .svg_letter svg {
    display: block;
    opacity: 0;
    position: relative;
}

#letter-svg img path, #letter-svg svg path, .svg_letter img path, .svg_letter svg path {
    stroke-dasharray: 0;
    stroke-dashoffset: 0;
}
*, ::after, ::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}

.custom_slider .custom_slider-slide.project-x.active_slide .svg_letter img {
    opacity: 1;
}
.custom_slider .custom_slider-slide.project-x .svg_letter img {
    opacity: 0;
    -webkit-transition: .5s;
    transition: .5s;
}
.custom_slider .svg_letter img {
    max-height: 100%;
    width: auto;
}
.custom_slider .svg_letter img {
    position: absolute;
    top: 0;
    height: 100%;
}
</style>

<div id="myElement" class="row expanded collapse custom_slider" data-reactid=".0.$/.3"><div class="custom_slider-slide project-x" data-slide="0" data-reactid=".0.$/.3.0"><div class="slide_wrap" data-reactid=".0.$/.3.0.0"><div class="bg_color" data-reactid=".0.$/.3.0.0.0"></div></div><div class="parallax-scene" id="scene0" data-reactid=".0.$/.3.0.1" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;"><div class="scene-items x-element-3" data-depth="0.05" data-reactid=".0.$/.3.0.1.0" style="transform: translate3d(1.6px, 0.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><img src="/dist/assets/img/x-element-3.png" data-reactid=".0.$/.3.0.1.0.0"></div><div class="svg_letter" data-reactid=".0.$/.3.0.1.1" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><svg viewBox="0 0 700 700" preserveAspectRatio="none" width="100%" height="100%" data-reactid=".0.$/.3.0.1.1.0"><path class="letter-x" stroke-width="" stroke="black" d="M260.9,330.5L74.7,49.1h174.1L352,220.7l100-171.6h173.2L441.5,333.7l208.2,317.2H475.7L345.5,437.8L221.9,650.9H50.3 L260.9,330.5z" data-reactid=".0.$/.3.0.1.1.0.0"></path></svg><img src="/dist/assets/img/slider/X.png" data-reactid=".0.$/.3.0.1.1.1"></div><div class="scene-items x-element-1" data-depth="0.3" data-reactid=".0.$/.3.0.1.2" style="transform: translate3d(9.6px, 1.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="/dist/assets/img/x-element-2.png" data-reactid=".0.$/.3.0.1.2.0"></div><div class="scene-items x-element-2" data-depth="0.05" data-reactid=".0.$/.3.0.1.3" style="transform: translate3d(1.6px, 0.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="/dist/assets/img/x-element-1.png" data-reactid=".0.$/.3.0.1.3.0"></div><div class="scene-items scene-content" data-depth="0.1" data-reactid=".0.$/.3.0.1.4" style="transform: translate3d(3.2px, 0.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><p data-reactid=".0.$/.3.0.1.4.0"><span data-reactid=".0.$/.3.0.1.4.0.0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">We are celebrating his birthday! </font><font style="vertical-align: inherit;">This year we celebrate our 10th anniversary. </font></font></span><span class="white" data-reactid=".0.$/.3.0.1.4.0.1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Do you celebrate with us?</font></font></span></p><a href="https://10jaar.exitable.nl/" target="_blank" class="bekijk-case " data-reactid=".0.$/.3.0.1.4.1"><span data-reactid=".0.$/.3.0.1.4.1.0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">FELICITE EXITABLE! </font></font></span><img src="/dist/assets/img/arrow-right.svg" data-reactid=".0.$/.3.0.1.4.1.1"></a></div></div></div><div class="custom_slider-slide project-koenenenco" data-slide="1" data-reactid=".0.$/.3.1"><div class="slide_wrap" data-reactid=".0.$/.3.1.0"><div class="bg_color" data-reactid=".0.$/.3.1.0.0"></div></div><div class="parallax-scene" id="scene1" data-reactid=".0.$/.3.1.1" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;"><div class="scene-items koenenenco-4" data-depth=".1" data-reactid=".0.$/.3.1.1.0" style="transform: translate3d(3.2px, 0.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><img src="/dist/assets/img/koenenenco-4.png" data-reactid=".0.$/.3.1.1.0.0"></div><div class="svg_letter" data-reactid=".0.$/.3.1.1.1" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><svg viewBox="0 0 700 700" preserveAspectRatio="none" width="100%" height="100%" data-reactid=".0.$/.3.1.1.1.0"><path class="letter-k" stroke-width="" stroke="black" d="M103.3,47.4h153.9v271.2L429,47.4h161.2L391.5,347.1L610.6,650H423.3L257.2,389.4V650H103.3V47.4z" data-reactid=".0.$/.3.1.1.1.0.0"></path></svg><img src="/dist/assets/img/slider/K.png" data-reactid=".0.$/.3.1.1.1.1"></div><div class="scene-items koenenenco-1" data-depth="0.3" data-reactid=".0.$/.3.1.1.2" style="transform: translate3d(9.6px, 0.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="/dist/assets/img/koenenenco-1.png" data-reactid=".0.$/.3.1.1.2.0"></div><div class="scene-items koenenenco-2" data-depth="0.05" data-reactid=".0.$/.3.1.1.3" style="transform: translate3d(1.6px, 0.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="/dist/assets/img/koenenenco-2.png" data-reactid=".0.$/.3.1.1.3.0"></div><div class="scene-items koenenenco-3" data-depth="0.05" data-reactid=".0.$/.3.1.1.4" style="transform: translate3d(1.6px, 0.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="/dist/assets/img/koenenenco-3.png" data-reactid=".0.$/.3.1.1.4.0"></div><div class="scene-items scene-content" data-depth="0.1" data-reactid=".0.$/.3.1.1.5" style="transform: translate3d(3.2px, 0.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><p data-reactid=".0.$/.3.1.1.5.0"><span data-reactid=".0.$/.3.1.1.5.0.0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Together with Koenen and Co we make the digital difference for </font></font></span><span class="white" data-reactid=".0.$/.3.1.1.5.0.1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">entrepreneurs in the Southern Netherlands</font></font></span></p><a class="bekijk-case case-koenenco" data-reactid=".0.$/.3.1.1.5.1"><span data-reactid=".0.$/.3.1.1.5.1.0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">View case</font></font></span><img src="/dist/assets/img/arrow-right.svg" data-reactid=".0.$/.3.1.1.5.1.1"></a></div></div></div><div class="custom_slider-slide project-eindhoven" data-slide="2" data-reactid=".0.$/.3.2"><div class="slide_wrap" data-reactid=".0.$/.3.2.0"><div class="bg_color" data-reactid=".0.$/.3.2.0.0"></div></div><div class="parallax-scene" id="scene2" data-reactid=".0.$/.3.2.1" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;"><div class="scene-items eindhoven-1" data-depth="0.2" data-reactid=".0.$/.3.2.1.0" style="transform: translate3d(6.4px, 0.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><img src="/dist/assets/img/eindhoven-1.png" data-reactid=".0.$/.3.2.1.0.0"></div><div class="scene-items eindhoven-2" data-depth="0.05" data-reactid=".0.$/.3.2.1.1" style="transform: translate3d(1.6px, 0.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="/dist/assets/img/eindhoven-2.png" data-reactid=".0.$/.3.2.1.1.0"></div><div class="svg_letter" data-reactid=".0.$/.3.2.1.2" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><svg viewBox="0 0 700 700" preserveAspectRatio="none" width="100%" height="100%" data-reactid=".0.$/.3.2.1.2.0"><path class="letter-e" fill="black" stroke-width="" stroke="black" d="M130.12,50.07h440.1v130.5H284.92v99.9h279v131.4h-279v108h285.3v130.5H130.12Z" data-reactid=".0.$/.3.2.1.2.0.0"></path></svg><img src="/dist/assets/img/slider/E2.png" data-reactid=".0.$/.3.2.1.2.1"></div><div class="scene-items eindhoven-3" data-depth="0.1" data-reactid=".0.$/.3.2.1.3" style="transform: translate3d(3.2px, 0.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="/dist/assets/img/eindhoven-3.png" data-reactid=".0.$/.3.2.1.3.0"></div><div class="scene-items eindhoven-4" data-depth="0.15" data-reactid=".0.$/.3.2.1.4" style="transform: translate3d(4.8px, 0.3px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="/dist/assets/img/eindhoven-4.png" data-reactid=".0.$/.3.2.1.4.0"></div><div class="scene-items eindhoven-5" data-depth="0.3" data-reactid=".0.$/.3.2.1.5" style="transform: translate3d(9.6px, 0.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="/dist/assets/img/eindhoven-5.png" data-reactid=".0.$/.3.2.1.5.0"></div><div class="scene-items scene-content" data-depth="0.1" data-reactid=".0.$/.3.2.1.6" style="transform: translate3d(3.2px, 0.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><p data-reactid=".0.$/.3.2.1.6.0"><span data-reactid=".0.$/.3.2.1.6.0.0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Together with Eindhoven Sport we make the digital difference for   </font></font></span><span class="white" data-reactid=".0.$/.3.2.1.6.0.1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sports Eindhoven</font></font></span></p><a class="bekijk-case  case-eindhoven-sport" data-reactid=".0.$/.3.2.1.6.1"><span data-reactid=".0.$/.3.2.1.6.1.0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">View case</font></font></span><img src="/dist/assets/img/arrow-right.svg" data-reactid=".0.$/.3.2.1.6.1.1"></a></div></div></div><div class="custom_slider-slide project-gilde active_slide" data-slide="3" data-reactid=".0.$/.3.3"><div class="slide_wrap" data-reactid=".0.$/.3.3.0"><div class="bg_color" data-reactid=".0.$/.3.3.0.0"></div></div><div class="parallax-scene" id="scene3" data-reactid=".0.$/.3.3.1" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;"><div class="scene-items gilde-1" data-depth="0.2" data-reactid=".0.$/.3.3.1.0" style="transform: translate3d(6.4px, 0.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><img src="/dist/assets/img/gilde-1.png" data-reactid=".0.$/.3.3.1.0.0"></div><div class="scene-items gilde-2" data-depth="0.3" data-reactid=".0.$/.3.3.1.1" style="transform: translate3d(9.6px, 0.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="/dist/assets/img/gilde-2.png" data-reactid=".0.$/.3.3.1.1.0"></div><div class="svg_letter" data-reactid=".0.$/.3.3.1.2" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><svg viewBox="0 0 700 700" preserveAspectRatio="none" width="100%" height="100%" data-reactid=".0.$/.3.3.1.2.0"><path class="letter-e" fill="black" stroke-width="" stroke="black" d="M378.38,50.5c126.81,0,205,62.54,247.55,134.63l-125.08,66c-23.45-38.22-67.75-68.62-122.47-68.62-94.68,0-161.56,73-161.56,167.64S283.7,517.8,378.38,517.8c45.17,0,86-15.64,109.44-34.74V434.42H354.93V310.21H634.62v226.7c-62.54,68.62-146.79,112.92-256.24,112.92-172.85,0-313.56-115.52-313.56-299.66S205.53,50.5,378.38,50.5Z" data-reactid=".0.$/.3.3.1.2.0.0"></path></svg><img src="/dist/assets/img/slider/G2.png" data-reactid=".0.$/.3.3.1.2.1"></div><div class="scene-items gilde-3" data-depth="0.1" data-reactid=".0.$/.3.3.1.3" style="transform: translate3d(3.2px, 0.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="/dist/assets/img/gilde-3.png" data-reactid=".0.$/.3.3.1.3.0"></div><div class="scene-items scene-content" data-depth="0.1" data-reactid=".0.$/.3.3.1.4" style="transform: translate3d(3.2px, 0.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><p data-reactid=".0.$/.3.3.1.4.0"><span data-reactid=".0.$/.3.3.1.4.0.0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Together with Gilde Opleidingen we make the digital difference for </font></font></span><span class="white" data-reactid=".0.$/.3.3.1.4.0.1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3400 students </font></font></span><span data-reactid=".0.$/.3.3.1.4.0.2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">.</font></font></span></p><a class="bekijk-case case-gildeopleidingen" data-reactid=".0.$/.3.3.1.4.1"><span data-reactid=".0.$/.3.3.1.4.1.0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">View case</font></font></span><img src="/dist/assets/img/arrow-right.svg" data-reactid=".0.$/.3.3.1.4.1.1"></a></div></div></div><div class="svg_letter" data-reactid=".0.$/.3.4"><svg id="letter-svg" viewBox="0 0 700 700" preserveAspectRatio="none" width="100%" height="100%" data-reactid=".0.$/.3.4.0" class="" style="opacity: 0;"><path id="letter" stroke-width="0" stroke="white" fill="rgba(255,255,255,1)" d="M378.38,50.5C505.19,50.5,583.38,113.03999999999999,625.9300000000001,185.13C625.9300000000001,185.13,500.8500000000001,251.13,500.8500000000001,251.13C477.4000000000001,212.91,433.1000000000001,182.51,378.3800000000001,182.51C283.7000000000001,182.51,216.8200000000001,255.51,216.8200000000001,350.15C216.8200000000001,444.78999999999996,283.7,517.8,378.38,517.8C423.55,517.8,464.38,502.15999999999997,487.82,483.05999999999995C487.82,483.05999999999995,487.82,434.42,487.82,434.42C487.82,434.42,354.93,434.42,354.93,434.42C354.93,434.42,354.93,310.21,354.93,310.21C354.93,310.21,634.62,310.21,634.62,310.21C634.62,310.21,634.62,536.91,634.62,536.91C572.08,605.53,487.83000000000004,649.8299999999999,378.38,649.8299999999999C205.53,649.8299999999999,64.82,534.31,64.82,350.1699999999999C64.82,166.02999999999986,205.53,50.5,378.38,50.5C378.38,50.5,378.38,50.5,378.38,50.5" data-reactid=".0.$/.3.4.0.0"></path><desc>Created with Snap</desc><defs></defs></svg></div></div>