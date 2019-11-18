<!DOCTYPE HTML>

<html>
	<head>
		<title>JK Stage Production</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="../styles/bootstrap-4.1.2/bootstrap.min.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
		<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
		<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<style>
	body {
    padding: 0 0 0 0; 
}
.header
{
	position: fixed;
	left: 0;
	top: 0;
	width: 100%;
	background: #000000;
	z-index: 100;
	-webkit-transition: all 400ms ease;
	-moz-transition: all 400ms ease;
	-ms-transition: all 400ms ease;
	-o-transition: all 400ms ease;
	transition: all 400ms ease;
}
.header.scrolled
{
	background: #000000;
	opacity: 0.5;  
}
.header_content
{
	width: 100%;
	height: 75px;
	padding-left: 51px;
	padding-right: 52px;
	-webkit-transition: all 400ms ease;
	-moz-transition: all 400ms ease;
	-ms-transition: all 400ms ease;
	-o-transition: all 400ms ease;
	transition: all 400ms ease;
}
.header.scrolled .header_content
{
	height: 70px;
}
.logo
{
	position: absolute;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	left: 51px;
}
.logo a
{
	font-family: 'Futura', sans-serif;
	font-size: 30px;
	color: #FFFFFF;
}
.log_reg
{
	position: absolute;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	right: 52px;
}
.log_reg ul li
{
	position: relative;
}
.log_reg ul li:not(:last-child)::after
{
	display: inline-block;
	content: '/';
	font-size: 14px;
	color: #FFFFFF;
	margin-left: 6px;
	margin-right: 6px;
}
.log_reg ul li a
{
	font-size: 14px;
	color: #FFFFFF;
}
.log_reg ul li a:hover
{
	color: #de4f33;
}
.main_nav ul li:not(:last-child)
{
	margin-right: 24px;
}
.main_nav ul li
{
	position: relative;
}
.main_nav ul li a
{
	position: relative;
	font-size: 16px;
	color: #FFFFFF;
	padding-left: 26px;
	padding-right: 23px;
	z-index: 1;
}
.main_nav ul li a::after
{
	display: block;
	position: absolute;
	left: 0;
	bottom: -20px;
	width: 100%;
	height: 17px;
	background: #525252;
	content: '';
	z-index: -1;
	visibility: hidden;
	opacity: 0;
	-webkit-transition: all 400ms ease;
	-moz-transition: all 400ms ease;
	-ms-transition: all 400ms ease;
	-o-transition: all 400ms ease;
	transition: all 400ms ease;
}
.main_nav ul li.active a::after,
.main_nav ul li a:hover::after
{
	bottom: -5px;
	visibility: visible;
	opacity: 1;
}
.hamburger
{
	display: none;
	width: 50px;
	height: 24px;
	cursor: pointer;
	padding: 5px;
	right: -5px;
}
.hamburger > div
{
	width: 100%;
	height: 100%;
}
.hamburger > div > div
{
	height: 2px;
	background: #FFFFFF;
	-webkit-transition: all 400ms ease;
	-moz-transition: all 400ms ease;
	-ms-transition: all 400ms ease;
	-o-transition: all 400ms ease;
	transition: all 400ms ease;
}
.hamburger > div > div:first-child
{
	width: 90%;
}
.hamburger > div > div:nth-child(2)
{
	width: 50%;
}
.hamburger > div > div:nth-child(3)
{
	width: 70%;
}
.hamburger:hover > div > div
{
	width: 100%;
}

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

  .jklogo{
	width: 125px;
    height: 72px;
  }
  .newsletter_button{
	height: 39px;
  }

  a:link {
    border: none;
  }

			</style>
	</head>

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-center">
			<div class="logo"><a style= "border:none;" href="../index.php"><img class="jklogo"src="../images/jklogo.png" alt="logo">  JK Stage Production</a></div>
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
					<!-- <li class="nav-item"><a class="nav-link" href="blog.php"><span>News</span></a></li> -->
					<li class="nav-item"><a class="nav-link" href="../contact.php"><span>Contact Us</span></a></li>
				</ul>
			</div>
		<!-- End Menu -->

				<!-- Main -->
					<div id="main" style="margin-top: 75px;">
						<article class="thumb">
							<a href="images/fulls/01.jpg" class="image"><img src="images/thumbs/01.jpg" alt="" /></a>
							
						</article>
						<article class="thumb">
							<a href="images/fulls/02.jpg" class="image"><img src="images/thumbs/02.jpg" alt="" /></a>
							
						</article>
						<article class="thumb">
							<a href="images/fulls/03.jpg" class="image"><img src="images/thumbs/03.jpg" alt="" /></a>
							
						</article>
						<article class="thumb">
							<a href="images/fulls/04.jpg" class="image"><img src="images/thumbs/04.jpg" alt="" /></a>
							
						</article>
						<article class="thumb">
							<a href="images/fulls/05.jpg" class="image"><img src="images/thumbs/05.jpg" alt="" /></a>
							
						</article>
						<article class="thumb">
							<a href="images/fulls/06.jpg" class="image"><img src="images/thumbs/06.jpg" alt="" /></a>
						
						</article>
						<article class="thumb">
							<a href="images/fulls/07.jpg" class="image"><img src="images/thumbs/07.jpg" alt="" /></a>
							
						</article>
						<article class="thumb">
							<a href="images/fulls/08.jpg" class="image"><img src="images/thumbs/08.jpg" alt="" /></a>
							
						</article>
						<article class="thumb">
							<a href="images/fulls/09.jpg" class="image"><img src="images/thumbs/09.jpg" alt="" /></a>
							
						</article>
						<article class="thumb">
							<a href="images/fulls/10.jpg" class="image"><img src="images/thumbs/10.jpg" alt="" /></a>
							
						</article>
						<article class="thumb">
							<a href="images/fulls/11.jpg" class="image"><img src="images/thumbs/11.jpg" alt="" /></a>
							
						</article>
						<article class="thumb">
							<a href="images/fulls/12.jpg" class="image"><img src="images/thumbs/12.jpg" alt="" /></a>
						</article>
					</div>

			
	</div>
	<footer class="footer">
		
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
