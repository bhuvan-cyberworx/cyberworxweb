<!-- Including Header File -->
<?php include_once("includes/header-open.php"); ?>

<!-- Including menu File -->
<?php include_once("includes/menu.php"); ?>


<div class="contact-enquiry ">
	
<div class="big-heading text-center">
    <h3 class=" title">Ready to work with us? Tell us more.</h3>
    <p class="sub-head">We will be in touch with you as soon as possible.</p>
</div>


<div class="container">
	<div class="row">
		<div class="col-12 form-container">
			<form class="row">
				<!-- Full Name -->
				<div class="form-group col-md-6">
					<label class="text-lable" for="fullname">Full Name *</label>
					<input type="text" class="form-control" id="fullname" aria-describedby="fullnameHelp" placeholder="Your Name">
				</div>
				
				<!-- Company Name -->
				<div class="form-group col-md-6">
					<label class="text-lable" for="companyname">Company Name *</label>
					<input type="text" class="form-control" id="companyname" aria-describedby="companynameHelp" placeholder="Your Company Name">
				</div>

				<!-- Work Email -->
				<div class="form-group col-md-6">
					<label class="text-lable" for="email">Your Email *</label>
					<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Your Email Id">
				</div>

				<!-- Mobile Number -->
				<div class="form-group col-md-6">
					<label class="text-lable" for="mobilenumber">Your Number</label>
					<input type="text" class="form-control" id="mobilenumber" aria-describedby="mobilenumberHelp" placeholder="Your Email Id">
				</div>


				<!-- Services Interested In -->

				<div class="col-md-12 ">
					<div class="service-title text-left">
						<label class="text-lable">Services Interested In *</label>
					</div>
					<div class="row col-sm-12">
						<div class="form-check service-tab col-md-4 pl0 ">
							<input class="form-check-input" type="checkbox" value="" id="seo">
							<label class="form-check-label" for="seo">
							Social Engine Optimization
							</label>
						</div>
						<div class="form-check service-tab col-md-4 ">
							<input class="form-check-input" type="checkbox" value="" id="dm">
							<label class="form-check-label" for="dm">
							Digital Marketing
							</label>
						</div>
						<div class="form-check service-tab col-md-4">
							<input class="form-check-input" type="checkbox" value="" id="so">
							<label class="form-check-label" for="so">
							Service One
							</label>
						</div>
					</div>
				</div>

				<!-- Description of project  -->
				<div class="col-sm-12 project-brief">
					<label class="text-lable">Brief About Your Project *</label>
					<textarea name="" id="" class="" placeholder="Please tell us something about your project."></textarea>
				</div>


			  <button type="submit" class="enquire-btn btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>


<!-- Including the footer menu -->
<?php include_once("includes/footer-menu.php"); ?>


<!-- Icluding footer file -->
<?php include_once("includes/footer.php"); ?>