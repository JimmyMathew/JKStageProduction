<?php
include('head.php');
?>
<style>
	body
{
	font-family: 'Futura', sans-serif;
	font-size: 14px;
	font-weight: 400;
	background: #000000;
	color: #FFFFFF;
}
.home {
    width: 100%;
	height: 947px;
}
	</style>
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div id="owlcarousel" class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/1.jpg)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
							<!-- <div class="home_content text-center">
								<div class="home_subtitle">New single release</div>
								<div class="home_title"><h1>Love is all around</h1></div>
								<div class="home_link"><a href="#">Listen on Soundcloud</a></div>
							</div> -->
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/2.jpg)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
							<!-- <div class="home_content text-center">
								<div class="home_subtitle">New single release</div>
								<div class="home_title"><h1>Love is all around</h1></div>
								<div class="home_link"><a href="#">Listen on Soundcloud</a></div>
							</div> -->
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/3.jpg)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
							<!-- <div class="home_content text-center">
								<div class="home_subtitle">New single release</div>
								<div class="home_title"><h1>Love is all around</h1></div>
								<div class="home_link"><a href="#">Listen on Soundcloud</a></div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="artist">
		<div class="container">
			<div class="row">

				<!-- Artist Image -->
				<div class="col-lg-4 artist_image_col">
					<div class="artist_image">
						<img src="images/artist.png" alt="">
					</div>
				</div>

				<!-- Artist Content -->
				<div class="col-lg-7 offset-lg-1">
					<div class="artist_content">
						<div class="section_title_container">
							<div class="section_subtitle">Events</div>
							<div class="section_title"><h1>The Artist</h1></div>
						</div>
						<div class="artist_text">
						<p>
							JK Stage Production was established in 2004. It is located in Chennai, Tamil Nadu with convenient transportation access.
						</p>

						<p>
							The company's factory environment is clean and tidy, high-quality management team, well-trained industrial workers, 
							fast information transmission and meticulous customer management system make the company basically 
							have the standards of modern production enterprises.
						</p>
						<p>
						The raw materials of all products are in accordance with the standards of international products and the quality 
						management system has passed ISO 0000:0000 certification.
						</p>

						<p>
							The company's main steel/aluminum alloy stage, steel/aluminum alloy truss, folding stage, wedding stage, lighting stand, 
							chorus, glass stage, grandstand and scaffolding and other products with very strong production capacity of large enterprises.
						</p>
						<p>
							Dedicated to strict quality control and thoughtful customer service, our experienced 
							staff members are always available to discuss your requirements and ensure full customer satisfaction. 
							In recent years, our company has introduced a series of advanced equipment.
						</p>
						</div>
						<div class="artist_sig"><img src="images/sig.png" alt=""></div>
					
					</div>
				</div>

			</div>
		</div>
	</div>
<!-- Milestones -->

<div class="milestones">
		<div class="milestones_container">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/milestones.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row milestones_row">
						<!-- Milestone -->
						<div class="col-xl-3 col-md-6 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<!-- <div class="milestone_icon"><img src="images/icon_4.svg" alt="https://www.flaticon.com/authors/smashicons"></div> -->
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="2002">0</div>
								<div class="milestone_text">Year Started</div>
							</div>
						</div>
					</div>
					<!-- Milestone -->
					<div class="col-xl-3 col-md-6 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<!-- <div class="milestone_icon"><img src="images/icon_1.svg" alt="https://www.flaticon.com/authors/smashicons"></div> -->
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="3000" data-sign-after="k">0</div>
								<div class="milestone_text">Setups</div>
							</div>
						</div>
					</div>

					<!-- Milestone -->
					<div class="col-xl-3 col-md-6 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<!-- <div class="milestone_icon"><img src="images/icon_2.svg" alt="https://www.flaticon.com/authors/smashicons"></div> -->
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="35">0</div>
								<div class="milestone_text">Team Members</div>
							</div>
						</div>
					</div>

					<!-- Milestone -->
					<div class="col-xl-3 col-md-6 milestone_col">
						<div class="milestone d-flex flex-row align-items-center justify-content-start">
							<!-- <div class="milestone_icon"><img src="images/icon_3.svg" alt="https://www.flaticon.com/authors/smashicons"></div> -->
							<div class="milestone_content">
								<div class="milestone_counter" data-end-value="4000" data-sign-after="Sq.Ft">0</div> 
								<div class="milestone_text">Godown</div>
							</div>
						</div>
					</div>

				

				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<?php
	include('foot.php');
	?>	
</div>
</body>
</html>