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
						We would like to introduce ourself . 
						We are JK Stage Productions based out of Chennai and we specialise on all kind of event and wedding fabrication. 
						We have been in the production industry for last 20 years and we have executed projects across india for various corporates and event agencies. 
						We would like to share our key areas where we specialise in giving various solutions for fabrication and custom made setups. 
						The following are our strengths and specialities. 
						</p>
						<p>
						1. Complete staging solutions starting from 1 feet to 8 feet height. Double reinforced wooden base and metal structure to ensure heavy load on stage.
						</p>
						<p>
						2. We provide all kind of fabrication on metal, ply, mdf and we have a strength of 35 plus skilled labour to execute flawless implementation of any design.
						</p>
						<p>	
						3. We have an extensive list of hydraulic motors which can support launch events and with a capacity of 3 tons of weight load.
						</p>
						<p>
						4. We have in-house electrical team and R&D team to ensure we use the latest technology on decorative lights like LED, NEON.....
						</p>
						<p>
						5. We have three fabrication units in chennai with a span of over 15000 sqft working area.
						</p>
						<p>
						6. We have produced and executed event fabrication for more than 3000 events across India and abroad. 
						</p>
						<p>
						7. We were the pioneer in providing fabrication solution using metal frames in early 2000 to all events in south. 
						</p>
						<p>
						8. Today we have the largest Span of stage roofing and trussing in chennai. 
						We are the proud to announce that we use UNIVERSAL Trussing solution and the size are 80x60 ft and 60x40 ft. 
						The details of the same will be shared in the attached PDF with all our work which we have executed in the past years. 
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