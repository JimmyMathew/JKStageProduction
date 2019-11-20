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
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/2.jpg)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/3.jpg)"></div>
					<div class="home_container">
						<div class="home_container_inner d-flex flex-column align-items-center justify-content-center">
						</div>
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
								<div class="milestone_counter" data-end-value="3" data-sign-after="K">0</div>
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