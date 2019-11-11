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
	</style>
	<!-- Home -->
	<div class="home_single">
		<div class="home_inner_single">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/1.jpg" data-speed="0.8"></div>
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
<!-- Discs -->

<div class="discs">
		<div class="container">
			<div class="row discs_row">
				
				<!-- Disc -->
				<div class="col-xl-4 col-md-6">
					<div class="disc">
						<a href="#">
							<div class="disc_image"><img src="images/about/01.jpeg" alt="https://unsplash.com/@tanelah"></div>
							<div class="disc_container">
								<div>
								<div class="disc_content_1">
										<!-- <div class="disc_title">Name</div>
										<div class="disc_subtitle">Description</div> -->
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			<!-- Disc -->
			<div class="col-xl-4 col-md-6">
							<div class="disc">
								<a href="#">
									<div class="disc_image"><img src="images/about/02.jpeg" alt="https://unsplash.com/@tanelah"></div>
									<div class="disc_container">
										<div>
										<div class="disc_content_1">
												<!-- <div class="disc_title">Name</div>
												<div class="disc_subtitle">Description</div> -->
											</div>
										</div>
									</div>
								</a>
							</div>
						</div>
				<!-- Disc -->
				<div class="col-xl-4 col-md-6">
					<div class="disc">
						<a href="#">
							<div class="disc_image"><img src="images/about/03.jpeg" alt="https://unsplash.com/@tanelah"></div>
							<div class="disc_container">
								<div>
								<div class="disc_content_1">
										<!-- <div class="disc_title">Name</div>
										<div class="disc_subtitle">Description</div> -->
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Disc -->
				<div class="col-xl-4 col-md-6">
					<div class="disc">
						<a href="#">
							<div class="disc_image"><img src="images/about/04.jpeg" alt="https://unsplash.com/@tanelah"></div>
							<div class="disc_container">
								<div>
								<div class="disc_content_1">
										<!-- <div class="disc_title">Name</div>
										<div class="disc_subtitle">Description</div> -->
									</div>
								</div>
							</div>
						</a>
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
						<iframe width="560" height="315" src="https://www.youtube.com/embed/OsKLytDnKGA?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	include('foot.php');
	?>