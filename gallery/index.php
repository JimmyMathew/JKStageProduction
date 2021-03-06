<!DOCTYPE HTML>

<html>
	<head>
		<title>JK Stage Production</title>
		<link rel="apple-touch-icon" sizes="180x180" href="../images/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../images/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../images/favicons/favicon-16x16.png">
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
	background: #990531;
	z-index: 100;
	-webkit-transition: all 400ms ease;
	-moz-transition: all 400ms ease;
	-ms-transition: all 400ms ease;
	-o-transition: all 400ms ease;
	transition: all 400ms ease;
}
.header.scrolled
{
	background: rgb(153,5,49,0.85);
}
.header_content
{
	width: 100%;
	height: 74px;
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
	font-size: 18px;
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
	color: #000;
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
	width: 150px;
    height: 30px;
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
	width: 20px;
	height: 20px;
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
	background: #990531;;
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
	background: #990531;
}
.copyright_bar span
{
	font-size: 14px;
	color: #fff;
	line-height: 67px;
}

.jklogo{
	width: 125px;
    height: 60px;
}
.menu-custom{
	padding-top: 5px;
	font-size: 15px;
}
  .newsletter_button{
	height: 39px;
  }

  a:link {
    border: none;
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
	content: ' ';
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
.social ul li a i:hover
{
	color: #000;
}
.social-icon{
	width: 20px;
    height: 20px;
}
/* Mobile responsive queries  */
@media only screen and (max-width: 320px) {
	.copyright_bar span {
	font-size: 6px;
	}
	.logo a {
		font-size: 8px;
	}
	.jklogo {
		width: 96px;
		height: 49px;
	}
	.log_reg {
		top: 73%;
		right: 68px;
	}
	.social-icon {
		width: 16px;
		height: 16px;
	}
}
@media only screen and (max-width: 480px) {
	.copyright_bar span {
	font-size: 6px;
	}
	.logo a {
		font-size: 8px;
	}
	.jklogo {
		width: 96px;
		height: 49px;
	}
	.log_reg {
		top: 73%;
		right: 68px;
	}
	.social-icon {
		width: 16px;
		height: 16px;
	}
}
			</style>
	</head>

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-center">
		<div class="logo"><a href="../index.php"><img class="jklogo"src="../images/logo/logo1.png" alt="logo"> Where You Can Trust On Truss…</a></div>
			<div class="log_reg">
				<ul class="d-flex flex-row align-items-start justify-content-start">
				<div class="social">
							<ul class="d-flex flex-row align-items-center justify-content-start">
							<li><a href="https://www.facebook.com/profile.php?id=833951729" target="_blank"><img class="social-icon" src="../images/social/facebook.png" alt="Facebook"/></a></li>	
							<li><a href="https://www.instagram.com/jkstageproduction/" target="_blank"><img class="social-icon" src="../images/social/instagram.png" alt="Instagram"/></a></li>
							<!-- <li><a href="#"><img class="social-icon" src="../images/social/twitter.png" alt="Twitter"/></a></li> -->
							</ul>
						</div>
				</ul>
			</div>
		</div>
	</header>

		<!-- Wrapper -->
			<div id="wrapper">
					<!-- Header -->
	
		<!-- Menu -->
		<div class="fixed-side-navbar">
				<ul class="nav flex-column">
				<li class="nav-item"><a class="nav-link" href="../index.php"><span style="padding-top: 5px;font-size: 15px;">Home</span></a></li>
					<li class="nav-item"><a class="nav-link" href="../about.php"><span style="padding-top: 5px;font-size: 15px;">About us</span></a></li>
					<li class="nav-item"><a class="nav-link" href="../service.php"><span style="padding-top: 5px;font-size: 15px;">Service</span></a></li>
					<li class="nav-item"><a class="nav-link" href="./"><span style="padding-top: 5px;font-size: 15px;">Events</span></a></li>
					<li class="nav-item"><a class="nav-link" href="../contact.php"><span style="padding-top: 5px;font-size: 15px;">Contact Us</span></a></li>
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
						<article class="thumb">
							<a href="images/fulls/13.jpg" class="image"><img src="images/thumbs/13.jpg" alt="" /></a>
						</article>
						<article class="thumb">
							<a href="images/fulls/14.jpg" class="image"><img src="images/thumbs/14.jpg" alt="" /></a>
						</article>
						<article class="thumb">
							<a href="images/fulls/15.jpg" class="image"><img src="images/thumbs/15.jpg" alt="" /></a>
						</article>
						<article class="thumb">
							<a href="images/fulls/16.jpg" class="image"><img src="images/thumbs/16.jpg" alt="" /></a>
						</article>
						<article class="thumb">
							<a href="images/fulls/17.jpg" class="image"><img src="images/thumbs/17.jpg" alt="" /></a>
						</article>
						<article class="thumb">
							<a href="images/fulls/18.jpg" class="image"><img src="images/thumbs/18.jpg" alt="" /></a>
						</article>
						<article class="thumb">
							<a href="images/fulls/19.jpg" class="image"><img src="images/thumbs/19.jpg" alt="" /></a>
						</article>
						<article class="thumb">
							<a href="images/fulls/20.jpg" class="image"><img src="images/thumbs/20.jpg" alt="" /></a>
						</article>
						<article class="thumb">
							<a href="images/fulls/21.jpg" class="image"><img src="images/thumbs/21.jpg" alt="" /></a>
						</article>
						<article class="thumb">
							<a href="images/fulls/22.jpg" class="image"><img src="images/thumbs/22.jpg" alt="" /></a>
						</article>
						<article class="thumb">
							<a href="images/fulls/23.jpg" class="image"><img src="images/thumbs/23.jpg" alt="" /></a>
						</article>
						<article class="thumb">
							<a href="images/fulls/24.jpg" class="image"><img src="images/thumbs/24.jpg" alt="" /></a>
						</article>
					</div>

			
	</div>
	<footer class="footer">
		
		<div class="copyright_bar">
			<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by Viral BrainZ Digital Marketing Solution.
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
