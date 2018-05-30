<!-- Including Header File -->
<?php include_once("includes/header-open.php"); ?>

<!-- Including menu File -->
<?php include_once("includes/menu.php"); ?>

<div class="job-page container">
	<div class="mid-image">
		<img src="assets/images/career.jpg" alt="">
	</div>
	<div class="big-heading ">
		<p>Working at Lykan Media</p>
	    <h3 class=" title">Sales/Marketing Executive</h3>
	   
	</div>

	<div class="job-details">
		<p class="job-intro">We are looking for a competitive and trustworthy Sales/Marketing Executive to help us build up our business activities. You will be responsible for discovering and pursuing new sales prospects and maintaining customer satisfaction.

		The goal is to meet and surpass the company’s expectations to drive rapid and sustainable growth .
		</p>

		<ul class="responsible" >
			<h2>RESPONSIBILITIES</h2>
	        <li>Conduct market research to identify selling possibilities and evaluate customer needs</li>
	        <li>Actively seek out new sales opportunities through cold calling, networking and social media</li>
	        <li>Set up meetings with potential clients and listen to their wishes and concerns</li>
	        <li>Prepare and deliver appropriate presentations on products/ services</li>
	        <li>Negotiate/close deals and handle complaints or objections</li>
	        <li>Collaborate with other teams/companies to achieve better results</li>
	    </ul>

	    <ul class="responsible" >
	    	<h2>Requirements</h2>
            <li>Proven experience as a sales executive or relevant role</li>
            <li>Proficiency in English</li>
            <li>Excellent knowledge of MS Office</li>
            <li>Thorough understanding of marketing and negotiating techniques</li>
            <li>Fast learner and passion for sales</li>
            <li>Self-motivated with a results-driven approach</li>
            <li>Aptitude in delivering attractive presentations</li>
            <li>High school degree</li>
          </ul>

           
	</div>


	<div class="getin_touch">
		<div class="big-heading ">

		    <h3 class=" title">Apply For This Job</h3>
		   
		</div>
		<form action="action.php" method="post" class="contact_form" id="apply-job" novalidate="novalidate">
			<div class="form-group">
				<label class="animatelabel" for="name">Name</label>
				<input type="text" class="form-control" name="name" id="name" required="" aria-required="true">
				
			</div>
			<div class="form-group">
				<label class="animatelabel" for="email">Email</label>
				<input type="email" class="form-control" name="email" id="email" required="" aria-required="true">
				
			</div>
			<div class="form-group">
				<label class="animatelabel" for="number">Phone Number</label>
				<input type="text" class="form-control" name="number" id="number" required="" aria-required="true">
				
			</div>
			<div class="form-group">
				<label class="animatelabel" for="message">Why You?</label>
				<textarea class="form-control " rows="3" name="message" id="message" required="" aria-required="true"></textarea>
				
			</div>

			<div class="form-group">
				<label class="animatelabel" for="message">Attach Your Latest Resume</label>
				<input type="file" class="form-control select-res" name="resume" id="resume" required="" aria-required="true">
				
			</div>
			<div class="hiring-button job-button" style="text-align: left;">
				<input type="submit" class="hiring-btn" name="getintouch" value="Apply Now">
			</div>


		</form>											
	</div>
		<!-- End Form-->
	</div>

</div>


<section class="closing careers"><h4>Didn't find the job your were looking for?.</h4>
	<p>Send us your resume and we will get back to you wmjs;</p>

<div class="text-center col-12">
    <a href="/explore/" title="Explore Campaigns" class="cta button button--wayra button--border-thick button--text-upper text-center"><i class="fas fa-reply"></i> Send Resume</a>
</div> 
<!-- <h2 id="phoneNumbers" style="font-size: 26px;">610.952.1398   <span style="padding:0px 2.5%; display:inline-block;">|</span>   856.816.6159</h2> -->
</section>






<!-- Including the footer menu -->
<?php include_once("includes/footer-new.php"); ?>

<!-- Icluding footer file -->
<?php include_once("includes/footer.php"); ?>