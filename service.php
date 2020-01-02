<?php
include('head.php');
?>
 <link href="./plugins/ninja/ninja-slider.css" rel="stylesheet" type="text/css" />
      <link href="./plugins/ninja/thumbs.css" rel="stylesheet" type="text/css" />
      <script src="./plugins/ninja/ninjaVideoPlugin.js"></script>
      <script src="./plugins/ninja/ninja-slider.js" type="text/javascript"></script>
<style>
	.container-gap{
		padding-top: 130px;
	}
	.video-container{
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
.discs {
    background: #990531;
}
.disc a::before
{
	background: rgba(153,5,49,0.7);
	
}
.slide-imaes {
    background-image: url(./images/about/ImageSlider.jpg);
    background-repeat: repeat-x;
    animation: slideleft 9000s infinite linear;
    -webkit-animation: slideleft 9000s infinite linear;
    background-size: cover;
    min-height: 500px;
}
@keyframes slideleft {
    from {
        background-position: 0%;
    }

    to {
        background-position: 90000%;
    }
}

@-webkit-keyframes slideleft {
    from {
        background-position: 0%;
    }

    to {
        background-position: 90000%;
    }
}
@media only screen and (max-width: 320px) {
	.slide-imaes {
    background-image: url(./images/about/ImageSlider.jpg);
    background-repeat: repeat-x;
    animation: slideleft 50000s infinite linear;
    -webkit-animation: slideleft 50000s infinite linear;
    background-size: cover;
    min-height: 270px;
}
@keyframes slideleft {
    from {
        background-position: 0%;
    }

    to {
        background-position: 90000%;
    }
}

@-webkit-keyframes slideleft {
    from {
        background-position: 0%;
    }

    to {
        background-position: 90000%;
    }
}
}
@media only screen and (max-width: 480px) {
	.slide-imaes {
    background-image: url(./images/about/ImageSlider.jpg);
    background-repeat: repeat-x;
    animation: slideleft 50000s infinite linear;
    -webkit-animation: slideleft 50000s infinite linear;
    background-size: cover;
    min-height: 270px;
}
@keyframes slideleft {
    from {
        background-position: 0%;
    }

    to {
        background-position: 90000%;
    }
}

@-webkit-keyframes slideleft {
    from {
        background-position: 0%;
    }

    to {
        background-position: 90000%;
    }
}
}
	</style>



	<!-- Home -->
	<div class="home_single">
		<div class="home_inner_single">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/pages/service.jpg"  data-speed="0.8"></div>
			<div class="home_container_single">
				<div class="home_content text-center">
					<div class="title_text">Service</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Single -->

	<div class="single">
		<div class="container container-gap">
			<div class="row">
			
				<!-- Single Content -->
				<div class="col-lg-12 single_content_col">
					<div class="single_content">
						<div class="single_text">
						<h3><i class="fa fa-circle-o" style="font-size:15px"></i> Roofing Truss</h3><br/>
						<h3><i class="fa fa-circle-o" style="font-size:15px"></i> Stage Works</h3><br/>
						<h3><i class="fa fa-circle-o" style="font-size:15px"></i> Set Fabrication</h3><br/>
						<h3><i class="fa fa-circle-o" style="font-size:15px"></i> Stall & Exhibition</h3><br/>
						<h3><i class="fa fa-circle-o" style="font-size:15px"></i> Marriage Decor</h3><br/>
						<h3><i class="fa fa-circle-o" style="font-size:15px"></i> Product Unveiling Motorised</h3><br/>
						</div>
					
					</div>
				</div>

			</div>
		</div>
	</div>
	
	<div class="slide-imaes">
		</div>
		<?php
	include('foot.php');
	?>

	
