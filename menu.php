<!-- Including Header File -->
<?php include_once("includes/header.php"); ?>


<section class="menu-section">
	<div class="open-menu" id="open-menu">
		<i class="fas fa-bars"></i>
	</div>
	<div class="">
		<div class="row" id="main-menu">
			<div class="col-md-5 slider-section" id="slider-section">
				
				<div class="menu-slider">
					<!-- Slide One  -->
					<div class="menu-slider-item">
						<div class="menu-slide-image">
							<img src="https://big-daddy-kane.s3.amazonaws.com/uploads/projects/media/featured-mobile/FEwx35noHP3KzHMo.jpg" alt="">
						</div>
						<div class="menu-slide-content">
							<div class="menu-slide-title"><span class="menu-slide-number">02. </span> opus grows</div>
							<div class="menu-slide-desciption">Selling premium organic soil online.</div>
							<div class="menu-slide-button btn">
								<div class="menu-slide-button-text">enter case study <i class="fas fa-arrow-right case-study-arrow"></i></div></div>
						</div>
					</div>

					<!-- Slide Two  -->
					<!-- <div class="menu-slider-item">
						<div class="menu-slide-image">
							<img src="https://big-daddy-kane.s3.amazonaws.com/uploads/projects/media/featured-mobile/jIA_3OhMroKib5Ws.jpg" alt="">
						</div>
						<div class="menu-slide-content">
							<div class="menu-slide-title"><span class="menu-slide-number">01. </span> lensabl</div>
							<div class="menu-slide-desciption">Prescription lenses directly to your door.</div>
							<div class="menu-slide-button btn">
								<div class="menu-slide-button-text">enter case study <i class="fas fa-arrow-right case-study-arrow"></i></div></div>
						</div>
					</div> -->


					<div class="menu-slider-control">
						<div id="menuPrevBtn" class="controlBtn">
				            <i class="fas fa-caret-left"></i>
				        </div>
				        <div id="menuNextBtn" class="controlBtn">
				            <i class="fas fa-caret-right"></i>
				        </div>
					</div>
				</div>

				

					

			</div>
			<div class="col-md-7 navigation-section" id="navigation-section">
				<div class="navigation-section-header row">
					<div class="col-md-4 menu-logo">
						<img src="" alt="">Lykan Media
					</div>
					<div class="col-md-2 offset-md-6 menu-close text-right" id="menu-close">
						<i class="fas fa-times-circle"></i>
					</div>
				</div>
				<div class="navigation-section-links">
					<ul class="list-unstyled">
						<li class="list-unstyled-item"><a href="">Home<span class="menu_period">.</span></a></li>
						<li class="list-unstyled-item"><a href="">Work<span class="menu_period">.</span></a></li>
						<li class="list-unstyled-item"><a href="">Our Story<span class="menu_period">.</span></a></li>
						<li class="list-unstyled-item"><a href="">Services<span class="menu_period">.</span></a></li>
						<li class="list-unstyled-item"><a href="">Enquire Now<span class="menu_period">.</span></a></li>
						<li class="list-unstyled-item"><a href="">Contact<span class="menu_period">.</span></a></li>
					</ul>			
				</div>

				<div class="navigation-section-info row p0">
					<div class="col-md-6 navigation-section-info-left">
						<div class="navigation-section-info-box">
							<div class="navigation-section-info-title">
								<h6>Email Us</h6>
							</div>
							<div class="navigation-section-info-text">
								<p>info@lykanmedia.com</p>
							</div>
						</div>
						<div class="navigation-section-info-box">
							<div class="navigation-section-info-title">
								<h6>Call Us Anytime</h6>
							</div>
							<div class="navigation-section-info-text">
								<p>+91 9865895669
								<br> +91 2653625636</p>
							</div>
						</div>
					</div>

					<div class="col-md-6 navigation-section-info-right">
						<div class="navigation-section-info-box text-right">
							<div class="navigation-section-info-title">
								<h6>Reach Us At</h6>
							</div>
							<div class="navigation-section-info-text">
								<p>12655 W Jefferson Blvd
									<br>
									Los Angeles, CA.
								</p>
							</div>
						</div>
						<div class="navigation-section-info-box text-right">
							<div class="navigation-section-info-title">
								<h6>Follow Us</h6>
							</div>
							<div class="navigation-section-info-text">
								 <ul class="list-unstyled list-inline social-links" >
							       
							        <li class="list-inline-item"><a ><i class="fab fa-facebook-f"></i></a></li>
							        <li class="list-inline-item"><a ><i class="fab fa-twitter"></i></a></li>
							        <li class="list-inline-item"><a ><i class="fab fa-google-plus-g"> </i></a></li>
							        <li class="list-inline-item"><a ><i class="fab fa-linkedin-in"> </i></a></li>
							      </ul>
							</div>
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<style>
	
</style>

<script>

let menuSlideContent = document.getElementsByClassName("menu-slide-content");
let navigationSectionInfoBox = document.getElementsByClassName("navigation-section-info-box");

function openMenu(){
  document.getElementById("slider-section").style.left = "0";
  document.getElementById("navigation-section").style.right = "0";
  setTimeout(function(){
  	for(let msci = 0; msci < menuSlideContent.length; msci++){
  	menuSlideContent[msci].style.opacity = 1;
  }
  for(let nsib = 0; nsib < navigationSectionInfoBox.length; nsib++){
  	navigationSectionInfoBox[nsib].style.opacity = 1;
  	navigationSectionInfoBox[nsib].style.marginTop = "0px";
  }
  },800);
  
}
function closeMenu(){
  document.getElementById("slider-section").style.left = "-50%";
  document.getElementById("navigation-section").style.right = "-70%";
  setTimeout(function(){
  	for(let msci = 0; msci < menuSlideContent.length; msci++){
  	menuSlideContent[msci].style.opacity = 0;
  }
  for(let nsib = 0; nsib < navigationSectionInfoBox.length; nsib++){
  	navigationSectionInfoBox[nsib].style.opacity = 0;
  	navigationSectionInfoBox[nsib].style.marginTop = "-20px";
  }
  },800);

}
document.getElementById("open-menu").addEventListener('click',openMenu);
document.getElementById("menu-close").addEventListener('click',closeMenu);
</script>

<!-- Icluding footer file -->
<?php include_once("includes/footer.php"); ?>