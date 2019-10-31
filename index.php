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
							<p> In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum. Nullam volutpat dui sem, ac congue purus luctus nec. Curabitur luctus luctus erat, sit amet facilisis quam congue quis. Quisque ornare luctus erat id dignissim. Nullam ac nunc quis ex porttitor luctus.</p>
							<p>Integer sed facilisis eros. In iaculis rhoncus velit in malesuada. In hac habitasse platea dictumst. Fusce erat ex, consectetur sit amet ornare suscipit, porta et erat. Donec nec nisi in nibh commodo laoreet. Mauris dapibus justo ut feugiat malesuada. Fusce ultricies ante tortor, non vestibulum est feugiat ut.</p>
						</div>
						<div class="artist_sig"><img src="images/sig.png" alt=""></div>
					
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