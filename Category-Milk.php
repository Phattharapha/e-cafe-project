<?php
session_start();
if(!isset($_SESSION["table_id"])){
  echo "<script type='text/javascript'>";
  echo "alert('Unauthorized');";
  echo "window.location = 'Home-login.php'; ";
  echo "</script>";
}
?>
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
          <li class="nav-item"><a href="Home.php" class="nav-link"  >Home</a></li>
                <li class="nav-item active dropdown  cta cta-colored">
                <a class="nav-link dropdown-toggle" style="color:#FFFFFF; background-color: #82AE46" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong>Category</strong></a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item active" href="Category-Milk.php">Milk</a>
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
					<li class="nav-item"><a href="Order.php" class="nav-link"><span class="icon-shopping_cart"></span></a></li>
					<li class="nav-item"><a href="Logout.php" class="nav-link" style="color:#f0747a;">Logout</a></li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="hero-bread">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<!--   	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>   -->
					<h1 class="mb-0 bread">Milk</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="align-content-center">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 mb-5 text-center">
					<ul class="product-category">
						<li><a href="Category-Milk.php" class="active">Milk</a></li> <!--  Active = ???????????????????????????????????????????????? -->
						<li><a href="Category-Smoothie.php">Smoothie</a></li>
						<li><a href="Category-Italian.php">Italian soda</a></li>
						<li><a href="Category-Bingsu.php">Bingsu</a></li>
						<li><a href="Category-Toast.php">Toast</a></li>
						<li><a href="Category-Roti.php">Roti</a></li>
						<li><a href="Category-Shavedice.php">Shaved ice &amp; Bread</a></li>
						<li><a href="Category-RoastedBread.php">Roasted Bread</a></li>
						<li><a href="Category-IceCream.php">Ice Cream Homemade</a></li>
						<li><a href="Category-Topping.php">Topping</a></li>
						<li><a href="Category-Snack.php">Snack</a></li>
					</ul>
				</div>
			</div>

<!--Start MENU -->			
			<?php

			require("Database_Connect.php");
			$sql = "select * from product WHERE pro_type = 'Milk'";
			$result = $conn->query($sql);
			$count = 1;
			?>

			<div class="row text-center">

				<?php foreach ($result as $row) { ?>
					<?php if ($row["pro_status"] != "Unavailable") { ?>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="product">
							<a href="m_milk-tea.php?pro_id=<?=$row["pro_id"]?>" class="img-prod"><img class="img-fluid" src="./image1/<?= $row["picture"] ?>" alt="Colorlib Template" height="40">
								<!---<span class="status">30%</span>		-->
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3 text-center">

								<h3><a href="m_milk-tea.php?pro_id=<?=$row["pro_id"]?>"><?= $row["pro_name"] ?></a></h3>
								<div class="d-flex">
									<div class="pricing">
										<!--			<p class="price"><span class="mr-2 price-dc">$120.00</span>	-->
										<p><span class="price-sale"><?= $row["pro_price"] ?></span>   ???</p>
									</div>
								</div>

								<div class="bottom-area d-flex px-3">
									<div class="m-auto d-flex">
										<!--				<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>		-->
										<a href="m_milk-tea.php?pro_id=<?=$row["pro_id"]?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
											<span><i class="ion-ios-cart"></i></span>
										</a>
										<!--				<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>		-->
									</div>

								</div>
							</div>
						</div>
					</div>
					<?php }?>
				<?php } ?>

<!--End MENU -->

			
			</div>
			
	


	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


	<script src="template/vegefoods/js/jquery.min.js"></script>
	<script src="template/vegefoods/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="template/vegefoods/js/popper.min.js"></script>
	<script src="template/vegefoods/js/bootstrap.min.js"></script>
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