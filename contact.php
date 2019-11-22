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
	margin-top: 30px;
}
.contact_info_list
{
	margin-top: 84px;
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


	</style>
	
	<!-- Home -->
	<div class="home_single">
		<div class="home_inner_single">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
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
						<form action="#" class="contact_form" id="contact_form">
							<input type="text" class="contact_input" placeholder="Name" required="required">
							<input type="email" class="contact_input" placeholder="E-mail" required="required">
							<input type="text" class="contact_input" placeholder="Subject">
							<textarea class="contact_input contact_textarea" placeholder="Message" required="required"></textarea>
							<button class="contact_button">Send Message</button>
						</form>
					</div>
				</div>

				<!-- Contact Info -->
				<div class="col-lg-6 contact_col">
					<div class="contact_info">
						<div class="contact_title">Where to find us</div>
						<div class="contact_text">
							<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec. Curabitur luctus luctus erat, sit amet facilisis quam congue quis. Quisque ornare luctus erat id dignissim. Nullam ac nunc quis ex porttitor luctus.</p>
						</div>
						<div class="contact_info_list">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Address</div></div>
									<div>No 3/12, Gandhi Nagar Main Road, Palavakkam, Chennai-600 041</div>
									
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Phone</div></div>
									<div>+53 345 7953 32453</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>E-mail</div></div>
									<div>yourmail@gmail.com</div>
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