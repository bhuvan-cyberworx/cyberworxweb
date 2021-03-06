<!-- Including Header File -->
<?php include_once("includes/header.php"); ?>

<!-- Including menu File -->
<?php include_once("includes/menu-two.php"); ?>

<!-- <div id="pre-loader">
    <div id="pre-loader-content">
        <div id="pre-loader-image" class="text-center">
            <img src="assets/images/logo.png" alt="logo" class="animated fadeInDown">
        </div>
        <div id="pre-loader-text">
            <h4 class="text text-center animated slideInUp">Cyberworx - Digital Solutions. <span style="color:#F0E500">Made </span>Easy.</h4>
        </div>
    </div>
</div> -->

<!-- <section class="hero-banner" style="background: url('assets/images/about-img.png'); ">
	<div class="container">
		<div class="row">
			<div class="banner-title col-12">
				<h2>LET’S CRAFT BRILLIANCE 

</h2>
			</div>
			<div class="banner-info col-12">
				<ul class="about-info list-unstyled justify-content-center">
					<li>Get Started</li>
					
				</ul>
			</div>
		</div>
	</div>
</section> -->

<!-- <span class="enqiry-heading">Ready to work with us? Tell us more.</span> -->
<div class="contact-enquiry ">
<div>
    <h3 class="text-center title">Ready to work with us? Tell us more.</h3>
</div>
<div class="drop-line row">


<div class="col-md-10 offset-md-1" style="padding: 50px; padding-top: 0">
<form action="/project-enquiry" enctype="multipart/form-data" method="post" novalidate="novalidate" style="    background: #f5f5f5;    padding: 50px; padding-bottom: 135px;">        
	<span class="enqiry-heading">Little about you</span>
        <section class="content row">

        	<!-- Your Name Field -->
            <div class="col-md-6 p0">
               <span class="input input--jiro">
					<input class="input__field input__field--jiro" type="text" id="input-10" />
					<label class="input__label input__label--jiro" for="input-10">
						<span class="input__label-content input__label-content--jiro">Your Name</span>
					</label>
				</span>
                <span class="pErrorMessage" id="p_1194_error" style=""><span class="field-validation-valid" data-valmsg-for="projectEnquiryModel.Name" data-valmsg-replace="true"></span></span>
            </div>

			<!-- Your Company Name Field -->
            <div class="col-md-6 p0">
                <span class="input input--jiro">
                    <input class="input__field input__field--jiro reqire-fld" data-val="true" data-val-required="Please enter your company." id="input-4" maxlength="500" name="projectEnquiryModel.Company" type="text" value="">
                    
                    <label class="input__label input__label--jiro input__label--jiro-color-1" for="input-4"> <span class="input__label-content input__label-content--jiro">Your Company</span> </label>
                </span>
                <span class="pErrorMessage" id="p_1194_error" style=""><span class="field-validation-valid" data-valmsg-for="projectEnquiryModel.Company" data-valmsg-replace="true"></span></span>
            </div>
            <div class="col-md-6 p0">
                <span class="input input--jiro">
                    <input class="input__field input__field--jiro reqire-fld email-required" data-val="true" data-val-email="The Email field is not a valid e-mail address." data-val-required="Please enter a valid email address." id="input-4" maxlength="500" name="projectEnquiryModel.Email" type="text" value="">
                    
                    <label class="input__label input__label--jiro input__label--jiro-color-1" for="input-4"> <span class="input__label-content input__label-content--jiro">Email Address</span> </label>
                </span>
                <span class="pErrorMessage" id="p_1194_error" style=""><span class="field-validation-valid" data-valmsg-for="projectEnquiryModel.Email" data-valmsg-replace="true"></span></span>
            </div>
            <div class="col-md-6 p0">
                <span class="input input--jiro">
                    <input class="input__field input__field--jiro reqire-fld" data-val="true" data-val-required="Please enter your phone number." id="input-4" maxlength="500" name="projectEnquiryModel.Phone" type="text" value="">
                    
                    <label class="input__label input__label--jiro input__label--jiro-color-1" for="input-4"> <span class="input__label-content input__label-content--jiro">Phone number</span> </label>
                </span>
                <span class="pErrorMessage" id="p_1194_error" style=""><span class="field-validation-valid" data-valmsg-for="projectEnquiryModel.Phone" data-valmsg-replace="true"></span></span>
            </div>
            <!--<button class="button button--ujarak button--border-thin button--text-thick">
            SENT
            </button>-->
        </section>
        <!-- START ABOUT PROJECT -->
        <div class="clearfix mt60" ></div>
        <span class="enqiry-heading">About your Project.</span>
        <h5 class="enqiry-subheading">What can we craft for you?</h5>
			<div class="lp-form clearfix">
            <div class="cbox">
                <input type="checkbox" name="aboutProject" value="Mobile" id="thing1">
                <label for="thing1"> <span class="checked">MOBILE</span> </label>
                <!-- <span class="checked">Thing</span> -->
            </div>
            <div class="cbox">
                <input type="checkbox" name="aboutProject" value="Web" id="thing2">
                <label for="thing2"> <span class="checked">WEB</span> </label>
                <!-- <span class="checked">Thing</span> -->
            </div>
            <div class="cbox">
                <input type="checkbox" name="aboutProject" value="User Experience" id="thing3">
                <label for="thing3"> <span class="checked">USER EXPERIENCE</span> </label>
                <!-- <span class="checked">Thing</span> -->
            </div>
		</div>
        <!-- END ABOUT PROJECT -->
		<div class="clearfix mt60" ></div>
       <span class="enqiry-heading">Expected Timeline.</span>
        <section class="content row ">
            <div class="col-md-6 ">
               <span class="input input--jiro ml0">
                    <input class="input__field input__field--jiro reqire-fld"  id="start-date" maxlength="500" name="projectEnquiryModel.Phone" type="text" value="">
                    
                    <label class="input__label input__label--jiro input__label--jiro-color-1" for="input-4"> <span class="input__label-content input__label-content--jiro">Ideal Start Date</span> </label>
                </span>
            </div>
            <div class="col-md-6 ">
                <span class="input input--jiro ml0">
                    <input class="input__field input__field--jiro reqire-fld"  id="end-date" maxlength="500" name="projectEnquiryModel.Phone" type="text" value="">
                    
                    <label class="input__label input__label--jiro input__label--jiro-color-1" for="input-4"> <span class="input__label-content input__label-content--jiro">Ideal End Date</span> </label>
                </span>
            </div>
            <!--<button class="button button--ujarak button--border-thin button--text-thick">
            SENT
            </button>-->
        </section>
        <div class="clearfix mt60" ></div>
       <span class="enqiry-heading">Project Summary</span>
        <section class="content project-summary clearfix">
            <div class="col-md-12 p0">
                <span class="input input--jiro ml0 ">
                    <textarea class="input__field input__field--jiro" cols="80" id="input-4" maxlength="10000" name="ProjectSummary" rows="3.5"></textarea>
                    
                    <label class="input__label input__label--jiro input_label_position input__label--jiro-color-1" for="input-4"> <span class="input__label-content input__label-content--jiro">Project summary: Share your thoughts on your project</span> </label>
                </span>
            </div>
        </section>
						<div class="clearfix"></div>
                <div class="col-md-12 p0 ml0">
                    <div class="g-recaptcha" data-sitekey="6LeJFBEUAAAAAHgZByQaAOH1yWXTwBWA_YY2eFHB"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeJFBEUAAAAAHgZByQaAOH1yWXTwBWA_YY2eFHB&amp;co=aHR0cHM6Ly9sb2xseXBvcC5iaXo6NDQz&amp;hl=en&amp;v=v1525468050349&amp;size=normal&amp;cb=awqblxib7by7" width="304" height="78" role="presentation" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div>
                        <span class="recaptcha-error" style="color:red;display:none">Invalid reCAPTCHA</span>
                </div>
                <div class="clearfix"></div>
    <div class="lp-enquiry-btn  p0" id="projectsection" style="margin-top:25px;">
        
		<button class="ml0 button button--ujarak button--border-thin button--text-thick" id="submit">SEND US YOUR PROJECT</button>
        
        <!--<span class="lp-fnt14">Filling all fields wont do any harm. Promise!</span><br />-->

    </div>
<input name="ufprt" type="hidden" value="B6FD2498170FDED6E7D1E62CF0DBF39AF909AC105D682C957D8D4E4CE96EC2EFDEADE3697A57D7B7F86FA1DF3035110745919630D9EA16066B3DFC6547F345DEDEA21ED2C40E9D2942C9C3C93F419EA722B0E49433AC770662C313CE870C06E73B512B1B6839469D9C52EBE6E54E7000610F2A9A8A369A2864AC83CCD75C37B030C420A6E7781F87471F127988B2B7257F746E5C9A688A4EF0789F559676C7C898766FE07232A9E8691D4B60D40A4A3B"></form>     
    </div>                               
							</div>
						
											
	
	



<!-- Including the footer menu -->
<?php include_once("includes/footer-menu.php"); ?>


<!-- Icluding footer file -->
<?php include_once("includes/footer.php"); ?>
