<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Del Luna Cafe'</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="template/vegefoods/css/open-iconic-bootstrap.min.css"> -->
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="template/vegefoods/css/animate.css">

	<link rel="stylesheet" href="template/vegefoods/css/owl.carousel.min.css">
	<link rel="stylesheet" href="template/vegefoods/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="template/vegefoods/css/magnific-popup.css">

	<link rel="stylesheet" href="template/vegefoods/css/aos.css">

	<link rel="stylesheet" href="template/vegefoods/css/ionicons.min.css">

	<link rel="stylesheet" href="template/vegefoods/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="template/vegefoods/css/jquery.timepicker.css">


	<link rel="stylesheet" href="template/vegefoods/css/flaticon.css">
	<link rel="stylesheet" href="template/vegefoods/css/icomoon.css">
	<link rel="stylesheet" href="template/vegefoods/css/style.css">
	<style type="text/css">
		body,
		td,
		th {
			font-family: Poppins, Arial, sans-serif;
		}
	</style>
</head>

<body class="goto-here">
	<div class="py-1 bg-primary">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block"> </div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<img src="images/logo.jpg" class="img-thumbnail img-fluid" alt="Placeholder image" width="70" height="40">
			<a class="navbar-brand" href="Home.php">Del Luna Cafe'</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active cta cta-colored"><a href="Home.php" class="nav-link" style="color:#FFFFFF; background-color: #82AE46"><strong>Home</strong></a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="Category-Milk.php">Milk</a>
							<a class="dropdown-item" href="Category-Smoothie.php">Smoothie</a>
							<a class="dropdown-item" href="Category-Italian.php">Italian soda</a>
							<a class="dropdown-item" href="Category-Bingsu.php">Bingsu</a>
							<a class="dropdown-item" href="Category-Toast.php">Toast</a>
							<a class="dropdown-item" href="Category-Roti.php">Roti</a>
							<a class="dropdown-item" href="Category-Shavedice.php">Shaved ice &amp; Bread</a>
							<a class="dropdown-item" href="Category-RoastedBread.php">Roasted Bread</a>
							<a class="dropdown-item" href="Category-IceCream.php">Ice Cream Homemade</a>
							<a class="dropdown-item" href="Category-Topping.php">Topping</a>
							<a class="dropdown-item" href="Category-Snack.php">Snack</a>
						</div>

					</li>
					<!--    <li class="nav-item"><a href="template/vegefoods/about.html" class="nav-link">About</a></li> 		-->
					<li class="nav-item"><a href="Status.php" class="nav-link">Status</a></li>
					<li class="nav-item"><a href="Order.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
					<li class="nav-item"><a href="#" class="nav-link" style="color:#f0747a;">Log-out</a></li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
			<div class="slider-item" style="background-image: url('images/bg_1.jpg');">
				<div class="overlay"></div>
				<div class="container">
					<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

						<div class="col-md-12 ftco-animate text-center">
							<h1 class="mb-2">Welcome to Del Luna Cafe'</h1>
							<!--       <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
	             <p><a href="#" class="btn btn-primary">View Details</a></p>						 		-->
						</div>

					</div>
				</div>
			</div>

			<div class="slider-item" style="background-image: url('images/bg_2.jpg');">
				<div class="overlay"></div>
				<div class="container">
					<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

						<div class="col-sm-12 ftco-animate text-center">
							<h1 class="mb-2">"Life is uncertain. <br>
								Eat dessert first."</h1>
							<h2 class="subheading mb-4">Ernestine Ulmer</h2>
							<p><a href="#" class="btn btn-primary">Let's make your orders</a></p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-category ftco-no-pt">


		<div class="container">
			<?php

			require("Database_Connect.php");
			$sql = "select * from product WHERE recommend = 'Recommended' ";
			$result = $conn->query($sql);
			$count = 1;
			?>




			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-6 order-md-last align-items-stretch d-flex">
							<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: src=template/vegefoods/images/category.jpg);">
								<div class="text text-center">
									<h1>Recommend</h1>
									<p>Sweet is Life</p>
									<p><a href="#" class="btn btn-primary">Order now</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<?php foreach ($result as $row) { ?>
								<?php if ($count % 2 == 1) { ?>
									<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url('./image1/<?= $row["picture"] ?>');">
										<!---<a href="m_milk-tea.php" class="img-prod"> <img class="img-fluid" src="./image1/<?= $row["picture"] ?>" alt="Colorlib Template" > -->
										<div class="text px-3 py-1">
											<h2 class="mb-0"><a href="m_milk-tea.php?pro_id=<?=$row["pro_id"]?>"><?= $row["pro_name"] ?></a></h2>
										</div>
									</div>
								<?php }
								$count++; ?>
							<?php } ?>

							<!-- <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url('images/drink_1.jpg');">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Drink</a></h2>
									</div>
								</div> -->

						</div>
					</div>
				</div>

				<div class="col-md-4">
					<?php 
					$count = 1;
					foreach ($result as $row) { ?>
						<?php if ($count % 2 == 0) { ?>
							<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url('./image1/<?= $row["picture"] ?>');">
								<div class="text px-3 py-1">
									<h2 class="mb-0"><a href="m_milk-tea.php?pro_id=<?=$row["pro_id"]?>"><?= $row["pro_name"] ?></a></h2>
								</div>
							</div>
						<?php }
						$count++; ?>
					<?php } ?>
					<!-- <div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url('images/bingsu_1.jpg');">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Bingsu</a></h2>								
							</div>		
						</div> -->
				</div>
			</div>

		</div>
	</section>

	

            
	

	</p>
	</div>
	</div>
	</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


	<script src="template/vegefoods/js/jquery.min.js"></script>
	<script src="template/vegefoods/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="template/vegefoods/js/popper.min.js"></script>
	<!-- <script src="template/vegefoods/js/bootstrap.min.js"></script> -->
	<script src="js/bootstrap-4.3.1.js"></script>
	<script src="template/vegefoods/js/jquery.easing.1.3.js"></script>
	<script src="template/vegefoods/js/jquery.waypoints.min.js"></script>
	<script src="template/vegefoods/js/jquery.stellar.min.js"></script>
	<script src="template/vegefoods/js/owl.carousel.min.js"></script>
	<script src="template/vegefoods/js/jquery.magnific-popup.min.js"></script>
	<script src="template/vegefoods/js/aos.js"></script>
	<script src="template/vegefoods/js/jquery.animateNumber.min.js"></script>
	<script src="template/vegefoods/js/bootstrap-datepicker.js"></script>
	<script src="template/vegefoods/js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="template/vegefoods/js/google-map.js"></script>
	<script src="template/vegefoods/js/main.js"></script>

</body>

</html>