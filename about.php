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
	</style>



	<!-- Home -->
	<div class="home_single">
		<div class="home_inner_single">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/pages/about.jpg"  data-speed="0.8"></div>
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
				<!-- Single Content -->
				<div class="col-lg-12 single_content_col">
					<div class="single_content">
					<!-- <div class="single_title">About us</div> -->
						<div class="single_text">
						<p>
						JK Stage Production is a Lighting Truss Fabrication & Stage Truss Innovation.
						We provide a Standard or Customized Aluminum TRUSS used in many applications such as Concert and Stage Lighting. 
						We build custom stage, roof system and platform.
						</p>
						<p>
						JK Stage Production was established in 2001. It is located in Chennai, Tamil Nadu with convenient transportation access. 
						</p>
						<p>
						The company's factory environment is clean and tidy, high-quality management team, well-trained industrial workers, 
						fast information transmission and meticulous customer management system make the company basically 
						have the standards of modern production enterprises.
						</p>
						<p>	
						The company's main steel/aluminum alloy stage, steel/aluminum alloy truss, folding stage, wedding stage, lighting stand, 
						chorus, glass stage, grandstand and scaffolding and other products with very strong production capacity of large enterprises.
						</p>
						<p>
						Dedicated to strict quality control and thoughtful customer service, our experienced staff members are always available 
						to discuss your requirements and ensure full customer satisfaction. In recent years, our company has introduced a series of advanced equipment.
						</p>
						<p>
						Our TRUSS is safe, reliable and high quality. With innovative vision and superior customer service, JK Stage Production is ready meet the staging needs.
						</p>
						<p>
						With innovative vision and superior customer service, JK Stage Production is ready meet the staging needs.
						</p>
						</div>
					
					</div>
				</div>

			</div>
		</div>
	</div>
	
	<!-- Video -->
	
	<div class="video-container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div id='ninja-slider'>
                                             <div class="slider-inner">
                                                   <ul>
                                                      <!-- For Youtube videos, use this link -->
                                                      <!-- <li>
                                                         <div class="video">
                                                         <iframe width="560" height="315" src="https://www.youtube.com/embed/_dlBmu51E7g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                         </div>
                                                         <a class="ns-img" href="img/2.jpg"></a>
                                                         <div class="caption">Supports Youtube, Vimeo and HTML video/audio</div>
                                                         <div class="video-playbutton-layer"></div>
                                                      </li> -->
                                                         <li>
                                                            <div class="video">
                                                                  <video controls data-autoplay="false">
                                                                     <source src="./videos/video1.mp4" type="video/mp4" />
                                                                  </video>
                                                            </div>
                                                            <a class="ns-img" href="./videos/thumbs/1.jpg"></a>
                                                            <div class="video-playbutton-layer"></div>
                                                         </li>
                                                         <li>
                                                            <div class="video">
                                                                  <video controls data-autoplay="false">
                                                                     <source src="./videos/video2.mp4" type="video/mp4" />
                                                                  </video>
                                                            </div>
                                                            <a class="ns-img" href="./videos/thumbs/2.jpg"></a>
                                                            <div class="video-playbutton-layer"></div>
                                                         </li>
                                                  
                                                   </ul>
                                                   <!-- <div class="fs-icon"></div> -->
                                             </div>
                                             <div id="thumbs">
                                                  
                                                   <span onclick="nslider.playVideo(0)"><img src="./videos/thumbs/1.jpg" /><span class="playvideo">AUTO</span></span>
                                                   <span onclick="nslider.playVideo(1)"><img src="./videos/thumbs/2.jpg" /><span class="playvideo">AUTO</span></span>
                                             </div>
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