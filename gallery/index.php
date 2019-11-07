<!DOCTYPE HTML>

<html>
	<head>
		<title>Multiverse by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="../styles/bootstrap-4.1.2/bootstrap.min.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
		<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
		<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<style>
.fixed-side-navbar {
	position: fixed;
	top: 50%;
	right: 0;
	z-index: 99999;
	margin-top: -100px;
	text-align: right;
	padding: 30px 0;
	-webkit-transition: all .3s;
	transition: all .3s;
  }
  .fixed-side-navbar:hover {
	background: transparent;
  }
  .fixed-side-navbar:hover .nav > li > a > span {
	color: rgba(0, 0, 0, 0.5);
	display: block;
	background-color: #fff;
	text-align: center;
	text-transform: uppercase;
	font-size: 12px;
	padding: 2px 12px;
	border-radius: 15px;
  }
  .fixed-side-navbar .nav > li a.active {
	background-color: transparent;
	color: black;
  }
  .fixed-side-navbar .nav > li a.active:after {
	-webkit-transform: scale(0.9);
			transform: scale(0.9);
  }
  .fixed-side-navbar .nav > li a.active:before {
	content: '';
	position: absolute;
	top: 50%;
	right: 17px;
	margin-top: -8px;
	width: 16px;
	height: 16px;
	background: transparent;
	border: 2px solid #fff;
	border-radius: 10px;
  }
  .nav>li {
	position: relative;
	display: block;
  }
  .fixed-side-navbar .nav > li a {
	color: #fff;
	min-height: 32px;
	background: transparent;
	padding: 5px 45px 5px 25px;
	border-right: none;
  }
  .fixed-side-navbar .nav > li a span {
	display: none;
	-webkit-transition: all .2s;
	transition: all .2s;
  }
  .fixed-side-navbar .nav > li a:after {
	content: '';
	position: absolute;
	top: 50%;
	right: 20px;
	margin-top: -5px;
	width: 10px;
	height: 10px;
	border-radius: 10px;
	background: rgba(250, 250, 250, 0.75);
	-webkit-transition: all .3s;
	transition: all .3s;
	-webkit-transform: scale(0.6);
			transform: scale(0.6);
  }
  .fixed-side-navbar .nav > li a:hover {
	background-color: transparent;
	border-top-left-radius: 5px;
	border-bottom-left-radius: 5px;
	border-color: black;
	boder-right: 0;
  }
  .fixed-side-navbar .nav > li a:hover > span {
	color: black;
	display: block;
  }
  
  .fadeInRight {
	-webkit-animation-name: fadeInRight;
			animation-name: fadeInRight;
  }
  .footer
{
	background: #000000;
	padding-left: 50px;
	padding-right: 51px;
	padding-top:60px;
}
.newsletter_container
{
	width: 604px;
	padding-top: 103px;
}
.newsletter_title
{

}
.newsletter_form
{
	display: block;
	position: relative;
	width: 100%;
	margin-top: 30px;
}
.newsletter_input
{
	width: 100%;
	height: 50px;
	background: #545454;
	border: none;
	outline: none;
	padding-left: 23px;
}
.newsletter_input::-webkit-input-placeholder
{
	font-size: 12px !important;
	font-style: italic;
	color: #FFFFFF !important;
}
.newsletter_input:-moz-placeholder
{
	font-size: 12px !important;
	font-style: italic;
	color: #FFFFFF !important;
}
.newsletter_input::-moz-placeholder
{
	font-size: 12px !important;
	font-style: italic;
	color: #FFFFFF !important;
} 
.newsletter_input:-ms-input-placeholder
{ 
	font-size: 12px !important;
	font-style: italic;
	color: #FFFFFF !important;
}
.newsletter_input::input-placeholder
{
	font-size: 12px !important;
	font-style: italic;
	color: #FFFFFF !important;
}
.newsletter_button
{
	position: absolute;
	top: 0;
	right: 0;
	width: 139px;
	height: 50px;
	background: #990531;
	border: none;
	outline: none;
	cursor: pointer;
	color: #FFFFFF;
	font-size: 14px;
}
.footer_lists
{
	width: 575px;
	padding-top: 83px;
	padding-bottom: 5px;
}
.footer_list
{
	width: calc(100% / 3);
}
.footer_list_title
{
	font-size: 24px;
}
.footer_list ul
{
	margin-top: 23px;
}
.footer_list ul li:not(:last-of-type)
{
	margin-bottom: 9px;
}
.footer_list ul li a
{
	font-size: 14px;
	color: #6d6d6d;
}
.footer_list ul li a:hover
{
	color: #FFFFFF;
}
.copyright_bar
{
	width: 100%;
	height: 67px;
	background: #000000;
}
.copyright_bar span
{
	font-size: 14px;
	color: #6d6d6d;
	line-height: 67px;
}
  a.nav-link{
	  border: none;
  }
  .jklogo{
	width: 125px;
    height: 72px;
  }
			</style>
	</head>

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-center">
			<div class="logo"><a style= "border:none;" href="index.php"><img class="jklogo"src="../images/jklogo.png" alt="logo">  JK Stage Production</a></div>
		</div>
	</header>

		<!-- Wrapper -->
			<div id="wrapper">
					<!-- Header -->
	
		<!-- Menu -->
		<div class="fixed-side-navbar">
				<ul class="nav flex-column">
					<li class="nav-item"><a class="nav-link" href="../index.php"><span>Home</span></a></li>
					<li class="nav-item"><a class="nav-link" href="../about.php"><span>About us</span></a></li>
					<li class="nav-item"><a class="nav-link" href="../gallery"><span>Events</span></a></li>
					<li class="nav-item"><a class="nav-link" href="blog.php"><span>News</span></a></li>
					<li class="nav-item"><a class="nav-link" href="contact.php"><span>Contact Us</span></a></li>
				</ul>
			</div>
		<!-- End Menu -->

				<!-- Main -->
					<div id="main" style="margin-top: 75px;">
						<article class="thumb">
							<a href="images/fulls/01.jpg" class="image"><img src="images/thumbs/01.jpg" alt="" /></a>
							<h2>Magna feugiat lorem</h2>
							<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/02.jpg" class="image"><img src="images/thumbs/02.jpg" alt="" /></a>
							<h2>Nisl adipiscing</h2>
							<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/03.jpg" class="image"><img src="images/thumbs/03.jpg" alt="" /></a>
							<h2>Tempus aliquam veroeros</h2>
							<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/04.jpg" class="image"><img src="images/thumbs/04.jpg" alt="" /></a>
							<h2>Aliquam ipsum sed dolore</h2>
							<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/05.jpg" class="image"><img src="images/thumbs/05.jpg" alt="" /></a>
							<h2>Cursis aliquam nisl</h2>
							<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/06.jpg" class="image"><img src="images/thumbs/06.jpg" alt="" /></a>
							<h2>Sed consequat phasellus</h2>
							<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/07.jpg" class="image"><img src="images/thumbs/07.jpg" alt="" /></a>
							<h2>Mauris id tellus arcu</h2>
							<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/08.jpg" class="image"><img src="images/thumbs/08.jpg" alt="" /></a>
							<h2>Nunc vehicula id nulla</h2>
							<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/09.jpg" class="image"><img src="images/thumbs/09.jpg" alt="" /></a>
							<h2>Neque et faucibus viverra</h2>
							<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/10.jpg" class="image"><img src="images/thumbs/10.jpg" alt="" /></a>
							<h2>Mattis ante fermentum</h2>
							<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/11.jpg" class="image"><img src="images/thumbs/11.jpg" alt="" /></a>
							<h2>Sed ac elementum arcu</h2>
							<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
						</article>
						<article class="thumb">
							<a href="images/fulls/12.jpg" class="image"><img src="images/thumbs/12.jpg" alt="" /></a>
							<h2>Vehicula id nulla dignissim</h2>
							<p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
						</article>
					</div>

			
	</div>
	<footer class="footer">
		<div class="footer_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
			<div class="newsletter_container">
				<div class="newsletter_title"><h2>Subscribe to our newsletter</h2></div>
				<form action="#" id="newsletter_form" class="newsletter_form">
					<input type="email" class="newsletter_input" placeholder="Your E-mail" required="required">
					<button class="newsletter_button">Subscribe</button>
				</form>
			</div>
			<div class="footer_lists d-flex flex-sm-row  flex-column align-items-start justify-content-start ml-xl-auto">

				<!-- Useful Links -->
				<div class="footer_list">
					<div class="footer_list_title">Useful Links</div>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About us</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Music</a></li>
						<li><a href="blog.html">News</a></li>
					</ul>
				</div>

				<!-- Mixtape -->
				<div class="footer_list">
					<div class="footer_list_title">Mixtape</div>
					<ul>
						<li><a href="#">Music</a></li>
						<li><a href="#">PR & Marketing</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Testimonials</a></li>
					</ul>
				</div>

				<!-- Connect -->
				<div class="footer_list">
					<div class="footer_list_title">Connect</div>
					<ul>
						<li><a href="#">Returns</a></li>
						<li><a href="#">Shippings</a></li>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Social Media</a></li>
						<li><a href="#">Soundcloud</a></li>
					</ul>
				</div>

			</div>
		</div>
		<div class="copyright_bar">
			<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> | Developed by <a href="https://jimmymathew.in" target="_blank">Jimmy Mathew</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
		</div>
	</footer>
		<!-- Scripts -->
			<script src="../styles/bootstrap-4.1.2/popper.js"></script>
			<script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="../js/custom.js"></script>	
