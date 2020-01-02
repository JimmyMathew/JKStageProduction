<?php
include('head.php');
?>

<style>
	.container-gap{
		padding-top: 130px;
	}
	.video{
		padding-top: 80px;
    padding-bottom: 20px;
	}
	.title_text
{
	padding-top: 247px;
	font-size: 45px;
    margin-bottom: 43px;
    line-height: 0.75;
    white-space: nowrap;
}
	body
{
	font-family: 'Futura', sans-serif;
	font-size: 14px;
	font-weight: 400;
	background: #990531;
	color: #FFFFFF;
}
.contact_info_list ul li > div:first-child > div {
    width: 96px;
    color: #ffff;
}
.social ul li a i {
    font-size: 15px;
    padding: 5px;
    color: #ffff;
}
.contact_input:hover, .contact_input:focus {
    border-bottom: solid 3px #990531;
}
.contact_button {
    width: 173px;
    height: 50px;
    background: #343434;
    color: #FFFFFF;
    font-size: 14px;
    border: solid 3px #343434;
    outline: none;
    cursor: pointer;
    margin-top: 39px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.contact_button:hover
{
	background: #000;
	color: #FFFFFF;
}
.contact_input{
	color: #ffff;
}


/*********************************
6. Contact
*********************************/

.contact
{
	padding-top: 101px;
	padding-bottom: 105px;
}
.contact_title
{
	font-size: 36px;
	color: #FFFFFF;
	line-height: 1.2;
}
.contact_form
{
	display: block;
	width: 100%;
	margin-top: 59px;
}
.contact_input
{
	position: relative;
	width: 100%;
	height: 50px;
	background: #343434;
	border: none;
	outline: none;
	padding-left: 25px;
	border-bottom: solid 3px transparent;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.contact_textarea
{
	height: 161px;
	padding-top: 18px;
}
.contact_form input:not(:last-child)
{
	margin-bottom: 20px;
}
.contact_input::-webkit-input-placeholder
{
	font-size: 14px !important;
	font-weight: 400 !important;
	font-style: italic;
	color: #FFFFFF !important;
}
.contact_input:-moz-placeholder
{
	font-size: 14px !important;
	font-weight: 400 !important;
	font-style: italic;
	color: #FFFFFF !important;
}
.contact_input::-moz-placeholder
{
	font-size: 14px !important;
	font-weight: 400 !important;
	font-style: italic;
	color: #FFFFFF !important;
} 
.contact_input:-ms-input-placeholder
{ 
	font-size: 14px !important;
	font-weight: 400 !important;
	font-style: italic;
	color: #FFFFFF !important;
}
.contact_input::input-placeholder
{
	font-size: 14px !important;
	font-weight: 400 !important;
	font-style: italic;
	color: #FFFFFF !important;
}
.contact_text
{
	margin-top: 58px;
}
.contact_info_list
{
	margin-top: 17px;
	padding-left: 13px;
}
.contact_info_list ul li
{
	font-size: 16px;
	color: #aaaaaa;
}
.contact_info_list ul li:not(:last-of-type)
{
	margin-bottom: 24px;
}

.log_reg ul li a:hover
{
	color: #000;
}
.gmap_canvas {overflow:hidden;background:none!important;height:443px;width:600px;}
@media only screen and (max-width: 320px) {
	.gmap_canvas {
	    width: 287px;
	}
	.contact_title 
	{
	top: 30px;
	}
}
@media only screen and (max-width: 480px) {
	.gmap_canvas {
	    width: 287px;
	}
	.contact_title 
	{
	top: 30px;
	}
}

	</style>
	
	<!-- Home -->
	<div class="home_single">
		<div class="home_inner_single">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/pages/contact.jpg" data-speed="0.8"></div>
			<div class="home_container_single">
				<div class="home_content text-center">
					<div class="title_text">Contact us</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				
				<!-- Contact Form -->
				<div class="col-lg-6">
					<div class="contact_form_container">
						<div class="contact_title">Send us a message</div>
						<form action="mail.php" method="post" class="contact_form" id="contact_form">
							<input type="text" class="contact_input" placeholder="Name" required="required" name="fullName">
							<input type="email" class="contact_input" placeholder="E-mail" required="required" name="email">
							<input type="number" class="contact_input" placeholder="Mobile" required="required" name="mobile">
							<input type="text" class="contact_input" placeholder="Subject" name="subject">
							<textarea class="contact_input contact_textarea" placeholder="Message" required="required" name="message"></textarea>
							<button class="contact_button">Send Message</button>
						</form>
					</div>
				</div>

				<!-- Contact Info -->
				<div class="col-lg-6 contact_col">
					<div class="contact_info">
						<div class="contact_title">Where to find us</div>
						<div class="contact_text">
						<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="440" id="gmap_canvas" src="https://maps.google.com/maps?q=Gandhi%20Nagar%20Main%20Rd%20Palavakkam%20Tamil%20Nadu%20600041&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:443px;width:600px;}</style></div>
						</div>
						<div class="contact_info_list">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Address</div></div>
									<div>No 3/12, Gandhi Nagar Main Road, Palavakkam, Chennai-600 041</div>
									
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Phone</div></div>
									<div><b>JK: </b>+91 9841150504 <br/><b>Anand: </b>+91 7708050504, +91 9841657450</div>
									
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>E-mail</div></div>
									<div>info@jkstageproduction.com</div>
								</li>
							</ul>
						</div>
						<!-- <div class="social">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>


<?php
	include('foot.php');
	?>