<?php include_once("includes/header.php"); ?>

<!-- Including menu File -->
<?php include_once("includes/menu.php"); ?>




    <div class='icon-scroll' id="icon-scroll">
        Press <div class="key"><i class="fas fa-arrow-up"></i></div> or <div class="key"><i class="fas fa-arrow-down"></i></div> to change slide.
    </div>

<!-- Slider Begins Here  -->
<div id="customSlider">
    <!-- Changing SVG Letter Animation Starts Here -->
    <div id="svg-change" class="svg-change">
     <svg viewBox="0 0 700 700" preserveAspectRatio="none"  width="100%" height="100%" >
        <path id="basesvg" class="letter-base letter-x" stroke-width="" fill="white" stroke="white" d="M474.903,549.682H186.096V110.5h131.222v329.531h196.587v109.65H474.903z" >
        </path>
        <path id="svgone" class="letter  letter-x" stroke-width="" fill="white" stroke="white" d="M474.903,549.682H186.096V110.5h131.222v329.531h196.587v109.65H474.903z" >
        </path>
         <!-- <path id="svgone-a" class="letter  letter-x" stroke-width="" fill="white" stroke="white" d="M260.9,330.5L74.7,49.1h174.1L352,220.7l100-171.6h173.2L441.5,333.7l208.2,317.2H475.7L345.5,437.8L221.9,650.9H50.3 L260.9,330.5z" > -->
        </path>
        <path id="svgtwo" class="letter letter-e"  fill="white" stroke-width="" stroke="white" d="M600.383,549.682H496.717l-29.545-229.988l-96.548,229.988h-41.248l-92.159-229.988l-33.936,229.988
            H99.617l67.412-399.364H269.56l81.211,212.995l85.9-212.995h103.665L600.383,549.682z" ></path>

       <!-- <path id="svgthree" class="letter letter-e" fill="white" stroke-width="" stroke="white" d="M130.12,50.07h440.1v130.5H284.92v99.9h279v131.4h-279v108h285.3v130.5H130.12Z" data-reactid=".0.$/.3.2.1.2.0.0" ></path> -->
      </svg>
    </div>
    <!-- Changing SVG letter Animation Ends Here -->

    <!-- Slide number one -->
    <div class="customSlider_slide   active-slide slide-a" >
        <!-- slider coloured wrapper background -->
        <div class="slide-wrapper">
            <div class="bg-color">
                <img src="assets/images/banner/b1-bac.png">
            </div>
        </div>
        <!-- slider coloured wrapper background Ends Here -->

        <!-- Parallax items begin here -->
        <div class="parallax-item ">
            <!-- scene item one -->
            <div class="scene-item scene-content" data-depth="1.1">
                <span>
                Lykan Media helps in establishing "right" connection between brands & audience <span class="white">brands & audience.</span>
                </span>
                <a href="#">About Lykan <i class="fas fa-arrow-right case-study-arrow"></i></a>
            </div>
            <!-- scene item two -->
            <div class="scene-item element-a-1" data-depth="0.5">
            </div>

            <!-- SVG Letter  -->
            <div class="svg-letter">
<!--              <svg viewBox="0 0 700 700" preserveAspectRatio="none" width="100%" height="100%" >
                <path id="one" class="letter-x" stroke-width="" stroke="black" d="M260.9,330.5L74.7,49.1h174.1L352,220.7l100-171.6h173.2L441.5,333.7l208.2,317.2H475.7L345.5,437.8L221.9,650.9H50.3 L260.9,330.5z" >
                </path></svg> -->
             <img src="assets/images/slider/l-image.png" >
            </div>
            <!-- scene item three -->
            <div class="scene-item element-a-3" data-depth="1">
            </div>

            <!-- scene item four -->
            <div class="scene-item element-a-2" data-depth="6">
            </div>

        </div>
    </div> <!-- Slide one ends here -->

    <!-- Slide Number Two -->
    <div class="customSlider_slide slide-b">
        <div class="slide-wrapper">
            <div class="bg-color">
                <img src="assets/images/banner/b2-bac-2.png">
            </div>
        </div>

        <div class="parallax-item">
            <div class="scene-item scene-content" data-depth="1.1">
                <span>
                Marketing is really just about sharing your passion. We are proud to say that we share such passion with <span class="white">all our clients</span>
                </span>
                <a href="#">Our Clients <i class="fas fa-arrow-right case-study-arrow"></i></a>
            </div>

            <div class="scene-item element-b-1" data-depth="1.5">
                
            </div>
            <div class="svg-letter ">
           <!--   <svg viewBox="0 0 700 700" preserveAspectRatio="none" width="100%" height="100%">
                <path class="letter-e" fill="black" stroke-width="" stroke="black" d="M378.38,50.5c126.81,0,205,62.54,247.55,134.63l-125.08,66c-23.45-38.22-67.75-68.62-122.47-68.62-94.68,0-161.56,73-161.56,167.64S283.7,517.8,378.38,517.8c45.17,0,86-15.64,109.44-34.74V434.42H354.93V310.21H634.62v226.7c-62.54,68.62-146.79,112.92-256.24,112.92-172.85,0-313.56-115.52-313.56-299.66S205.53,50.5,378.38,50.5Z" ></path>
            </svg> -->
             <img src="assets/images/slider/m-image.png" >
            </div>

            <div class="scene-item element-b-2" data-depth="6">
                
            </div>

            <div class="scene-item element-b-3" data-depth="4">
                
            </div>

            
        </div>
    </div> 
    <!-- Slide two ends here -->


    <!-- Slide Controls  begin here -->
    <div class="sliderControl">
        <div id="prevBtn" class="controlBtn">
            <i class="fa fa-chevron-circle-left"></i>
        </div>
        <div id="nextBtn" class="controlBtn">
            <i class="fa fa-chevron-circle-right"></i>
        </div>
    </div>
    <!-- Slide Controls End Here -->

</div>

<!-- Slider ends here -->


<!-- Our Clients Section  -->
<div id="outer-container">
<div class="container demo pt80 pb80">
  <div class="demo-pattern left-pattern">
    <img src="assets/images/lbp-1.png" alt="">
  </div>
  <div class="demo-pattern right-pattern">
    <img src="assets/images/lbp-2.png" alt="">
  </div>
    <div>
        <h3 class="text-center title pb40">Our Clients</h3>
    </div>

    <div class="direction-reveal direction-reveal--3-grid-flexbox direction-reveal--demo-slide-push">

      <a href="#" class="direction-reveal__card">
        <img src="assets/images/clients/Wiley-Logo-White.png" alt="Image" class="direction-reveal__anim--out img-fluid">

        <div class="direction-reveal__overlay direction-reveal__anim--in">
           <img src="assets/images/clients/.png" alt="Image" class="img-fluid">
        </div>
      </a>

      <a href="#" class="direction-reveal__card">
        <img src="assets/images/clients/All_India_Institute_of_Medical_Sciences.png" alt="Image" class="direction-reveal__anim--out img-fluid">

        <div class="direction-reveal__overlay direction-reveal__anim--in">
           <img src="assets/images/clients/Logos4.png" alt="Image" class="img-fluid">
        </div>
      </a>

      <a href="#" class="direction-reveal__card">
        <img src="assets/images/clients/AzurePower.png" alt="Image" class="direction-reveal__anim--out img-fluid">

        <div class="direction-reveal__overlay direction-reveal__anim--in">
           <img src="assets/images/clients/Logos4.png" alt="Image" class="img-fluid">
        </div>
      </a>

      <a href="#" class="direction-reveal__card">
        <img src="assets/images/clients/BJP.png" alt="Image" class="direction-reveal__anim--out img-fluid">

        <div class="direction-reveal__overlay direction-reveal__anim--in">
           <img src="assets/images/clients/Logos4.png" alt="Image" class="img-fluid">
        </div>
      </a>

      <a href="#" class="direction-reveal__card">
        <img src="assets/images/clients/Conferro-Auctions.png" alt="Image" class="direction-reveal__anim--out img-fluid">

        <div class="direction-reveal__overlay direction-reveal__anim--in">
           <img src="assets/images/clients/Logos4.png" alt="Image" class="img-fluid">
        </div>
      </a>

      <a href="#" class="direction-reveal__card">
        <img src="assets/images/clients/Laborate-Pharamacuticals-India-Ltd.png" alt="Image" class="direction-reveal__anim--out img-fluid">

        <div class="direction-reveal__overlay direction-reveal__anim--in">
           <img src="assets/images/clients/Logos4.png" alt="Image" class="img-fluid">
        </div>
      </a>
      <a href="#" class="direction-reveal__card">
        <img src="assets/images/clients/DBS_Bank_logo_logotype.png" alt="Image" class="direction-reveal__anim--out img-fluid">

        <div class="direction-reveal__overlay direction-reveal__anim--in">
           <img src="assets/images/clients/Logos4.png" alt="Image" class="img-fluid">
        </div>
      </a>

      <a href="#" class="direction-reveal__card">
        <img src="assets/images/clients/grant-thornton-logo.png" alt="Image" class="direction-reveal__anim--out img-fluid">

        <div class="direction-reveal__overlay direction-reveal__anim--in">
           <img src="assets/images/clients/Logos4.png" alt="Image" class="img-fluid">
        </div>
      </a>

      <a href="#" class="direction-reveal__card">
        <img src="assets/images/clients/Singex.png" alt="Image" class="direction-reveal__anim--out img-fluid">

        <div class="direction-reveal__overlay direction-reveal__anim--in">
           <img src="assets/images/clients/Logos4.png" alt="Image" class="img-fluid">
        </div>
      </a>

      <a href="#" class="direction-reveal__card">
        <img src="assets/images/clients/iusstf.png" alt="Image" class="direction-reveal__anim--out img-fluid">

        <div class="direction-reveal__overlay direction-reveal__anim--in">
           <img src="assets/images/clients/Logos4.png" alt="Image" class="img-fluid">
        </div>
      </a>


     
      <a href="#" class="direction-reveal__card">
        <img src="assets/images/clients/MHRD.png" alt="Image" class="direction-reveal__anim--out img-fluid">

        <div class="direction-reveal__overlay direction-reveal__anim--in">
           <img src="assets/images/clients/Logos4.png" alt="Image" class="img-fluid">
        </div>
      </a>


      <a href="#" class="direction-reveal__card">
        <img src="assets/images/clients/Temasek-Holdings-logo.png" alt="Image" class="direction-reveal__anim--out img-fluid">

        <div class="direction-reveal__overlay direction-reveal__anim--in">
           <img src="assets/images/clients/Logos4.png" alt="Image" class="img-fluid">
        </div>
      </a>


      <a href="#" class="direction-reveal__card">
        <img src="assets/images/clients/MTS-hotel.png" alt="Image" class="direction-reveal__anim--out img-fluid">

        <div class="direction-reveal__overlay direction-reveal__anim--in">
           <img src="assets/images/clients/Logos4.png" alt="Image" class="img-fluid">
        </div>
      </a>

      <a href="#" class="direction-reveal__card">
        <img src="assets/images/clients/Soletanche-Freyssinet.png" alt="Image" class="direction-reveal__anim--out img-fluid">

        <div class="direction-reveal__overlay direction-reveal__anim--in">
           <img src="assets/images/clients/Logos4.png" alt="Image" class="img-fluid">
        </div>
      </a>
      
      <a href="#" class="direction-reveal__card">
        <img src="assets/images/clients/Honest-&-Young.png" alt="Image" class="direction-reveal__anim--out img-fluid">

        <div class="direction-reveal__overlay direction-reveal__anim--in">
           <img src="assets/images/clients/Logos4.png" alt="Image" class="img-fluid">
        </div>
      </a>

    </div>

    <div class="view-more text-center">
        <a href="">View All Clients</a>
    </div>

</div>




<!-- our services section ends here -->
<section id="our-portfolio">
    <div>
        <h3 class="text-center title ">Our Portfolio</h3>
    </div>
<ul id="og-grid" class="og-grid">
    
    <li>
        <a href="#" data-largesrc="assets/images/sbi.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
            <img src="assets/images/portfolio/leat-ani.gif" alt="img01"/>
            <span class="portfolio-data">
                <span>L:EAT </span>
                <h4>Brand Identity & Search Engine</h4>
            </span>
        </a>
    </li>
    <li>
        <a href="#" data-largesrc="assets/images/portfolio/sephora0.gif" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
            <img src="assets/images/portfolio/xelerate.gif" alt="img02"/>
            <span class="portfolio-data">
                <span>Xelerate India</span>
                <h4>Brand Activation</h4>
            </span>
        </a>
    </li>
    <li>
        <a href="#" data-largesrc="assets/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
            <img src="assets/images/portfolio/Lasosta.gif" alt="img03"/>
            <span class="portfolio-data">
                <span>Lasosta</span>
                <h4>SEO & SMO</h4>
            </span>
        </a>
    </li>
    <li>
        <a href="#" data-largesrc="assets/images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
            <img src="assets/images/portfolio/fiona.jpg" alt="img01"/>
            <span class="portfolio-data">
                <span>Fiona </span>
                <h4>Brand Identity & SMO</h4>
            </span>
        </a>
    </li>
    <li>
        <a href="#" data-largesrc="assets/images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
            <img src="assets/images/portfolio/innerchef.gif" alt="img02"/>
            <span class="portfolio-data">
                <span>Innerchef </span>
                <h4>Creatives</h4>
            </span>
        </a>
    </li>
    <li>
        <a href="#" data-largesrc="assets/images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
            <img src="assets/images/portfolio/hostle.jpg" alt="img03"/>
            <span class="portfolio-data">
                <span>HostelAvie </span>
                <h4>SEO, Search Marketing & Digital Media Buying</h4>
            </span>
        </a>
    </li>
    
    
   
   
</ul>
</section>


<div class="section process-section">
    <div class="container">
        <div class="">
            <div>
                <h3 class="text-center title ">Our Process</h3>
            </div>
                
                
                    <div class="process-slider " >

                        <div class="process-item " > 
                            
                            <h3 class="process-heading"><span class="number">01</span> Audience Identification</h3>
                            <div class="slide-content">
                                <p>Target Defined, we work round the clock, analyzing brand, defining service sets & mediums required for plotting right audience. Simultaneously constant updates on Brand's persona are being mined and forwarded on mediums to reach to creme da la creme in inspiring fashion. Output is premier brand positioning among all & proper audience
                                </p>
                            </div>
                        </div>

                         <div class="process-item " > 
                            
                            <h3 class="process-heading"><span class="number">02</span> Implementation</h3>
                            <div class="slide-content">
                                <p>Hovering from Audience Identification to implementation we diversify team into smaller sections with each of them working on specific steps to provide 360 degree positioning & the near impeccable implementation.
                                </p>
                            </div>
                        </div>

                         <div class="process-item" > 
                            
                            <h3 class="process-heading"><span class="number">03</span> Initial Result Analysis</h3>
                            <div class="slide-content">
                                <p>The most crucial step, initial results provide us the required practical ground results which are round the clock monitored and data mined by our team to realign certain aspects of implementation. All this to provide the best possible ROI on brand's campaign.
                                </p>
                            </div>
                        </div>

                        

                        <div class="process-slider-controls">
                            <i id='prevProcess' class='a-left control-c  slick-prev fas fa-arrow-left'></i>
                            <i id='nextProcess' class='a-left control-c  slick-next fas fa-arrow-right'></i>
                        </div>

                    </div>
                
            </div>
        </div>
    </div>



<!-- Blog section begins here -->
<!-- <img src="assets/images/img1.png" alt=""> -->
<div class="blog-container ">
    <div>
        <h3 class="text-center title pb40">Latest From Our Blog</h3>
    </div>
    <div class="col-md-12 row p0">
        <div class="col-md-4 p0 blog-tile">
            <div class="blog-image">
                <img src="assets/images/blogs/iot.png">
            </div>
            <div class="blog-content">
                <h4 class="blog-title">
                    Internet of Things: EXPLAINED
                </h4>
            </div>

            <!-- <div class="blog-admin">
                <span class="admin-image">
                    <img src="https://cdn2.hubspot.net/hubfs/2061749/Fotos%20collegas/bart.png" alt="">
                </span>
                <span class="admin-name">
                    Admin Two
                </span>
            </div> -->


        </div>
        <div class="col-md-4 blog-tile">
            <div class="blog-image">
                <img src="assets/images/blogs/mobile-app.png">
            </div>
            <div class="blog-content">
                <h4 class="blog-title">
                   Future of mobile application development
                </h4>
            </div>

            <!-- <div class="blog-admin">
                <span class="admin-image">
                    <img src="https://cdn2.hubspot.net/hubfs/2061749/Exitable%20Logo.png" alt="">
                </span>
                <span class="admin-name">
                    Admin Woman
                </span>
            </div> -->
        </div>
        <div class="col-md-4 blog-tile">
            <div class="blog-image">
                <img src="assets/images/blogs/domain.jpg">
            </div>
            <div class="blog-content">
                <h4 class="blog-title">
                   Domain name selection can make or break your business
                </h4>
            </div>

            <!-- <div class="blog-admin">
                <span class="admin-image">
                    <img src="https://cdn2.hubspot.net/hubfs/2061749/Fotos%20collegas/bart.png" alt="">
                </span>
                <span class="admin-name">
                    Admin Hola
                </span>
            </div> -->
        </div>
    </div>
</div>

<section class="closing"><h4>Join the agency that is committed to making a difference.</h4>

<div class="text-center col-12">
    <a href="/explore/" title="Explore Campaigns" class="cta button button--wayra button--border-thick button--text-upper text-center"><i class="fas fa-reply"></i> Get A Callback</a>
</div> 
<!-- <h2 id="phoneNumbers" style="font-size: 26px;">610.952.1398   <span style="padding:0px 2.5%; display:inline-block;">|</span>   856.816.6159</h2> -->
</section>
</div>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hi There!</strong> You can switch modes anytime.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>




<!-- Including the footer menu -->
<?php include_once("includes/footer-new.php"); ?>

<!-- Icluding footer file -->
<?php include_once("includes/home-footer.php"); ?>
