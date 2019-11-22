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
	</style>



	<!-- Home -->
	<div class="home_single">
		<div class="home_inner_single">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
			<div class="home_container_single">
				<div class="home_content text-center">
					<div class="title_text">About us</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Single -->

	<div class="single">
		<div class="container container-gap">
			<div class="row">
				
				<!-- Single Info -->
				<div class="col-lg-5">
					<div class="single_info">
						<div class="single_image"><img src="images/single_image.jpg" alt=""></div>
					</div>
				</div>

				<!-- Single Content -->
				<div class="col-lg-7 single_content_col">
					<div class="single_content">
					<!-- <div class="single_title">About us</div> -->
						<div class="single_text">
						<p>
						JK Stage Production is a Lighting Truss Fabrication & Stage Truss Innovation. We provide a Standard or Customized Aluminum TRUSS used in
						 many applications such as Concert and Stage Lighting.  
						We build custom stage, roof system and platform. 
						</p>

						<p>
						Founded in 2002, has a large and modern fabrication. We have a skilled team of 35 
						members to deliver the highest quality service to our customers. 
						We have a large go down of 4000 sq ft. 
						</p>
						<p>
						JK Stage Production offers service throughout Tamil Nadu. Our TRUSS is safe, reliable and high quality.
						</p>

						<p>
						With innovative vision and superior customer service, JK Stage Production is ready meet the staging needs.
						</p>
						</div>
						<!-- <div class="logo_list d-flex flex-row align-items-center justify-content-start flex-wrap">
							<div><a href="#"><img src="images/logo_1.png" alt=""></a></div>
							<div><a href="#"><img src="images/logo_2.png" alt=""></a></div>
							<div><a href="#"><img src="images/logo_3.png" alt=""></a></div>
							<div><a href="#"><img src="images/logo_4.png" alt=""></a></div>
						</div> -->
					</div>
				</div>

			</div>
		</div>
	</div>
	
	<!-- Video -->
	
	<div class="video">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="video_container">
				
					<iframe width="560" height="315" src="https://www.youtube.com/embed/v4-OtHj-I3A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="video">
		<div class="container">
			<div class="row">
			<video width="560" height="315" controls>
						<source src="videos/jkvideo.mp4" type="video/mp4">
						Your browser does not support the video tag.
						</video>
</div></div></div> -->
		<!-- slides images -->
		<div class="slide-imaes">
		</div>


	

<?php
	include('foot.php');
	?>