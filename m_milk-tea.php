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
    
     <!--  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;300&display=swap" rel="stylesheet">   <!--new-->
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
			font {
				font-family: 'Prompt', promptextralight, sans-serif;  
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
	          <li class="nav-item"><a href="Home.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown cta cta-colored">
              <a class="nav-link active dropdown-toggle cta cta-colored" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#FFFFFF; background-color: #82AE46"><strong>Category</strong></a>
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
	  <!--        <li class="nav-item"><a href="template/vegefoods/about.html" class="nav-link">About</a></li>				-->
	          <li class="nav-item"><a href="Status.php" class="nav-link">Status</a></li>
	          <li class="nav-item"><a href="Order.php" class="nav-link"><span class="icon-shopping_cart"></span></a></li>
	          <li class="nav-item"><a href="Logout.php" class="nav-link" style="color:#f0747a">Logout</a></li>																												   

	        </ul>
	      </div>
      </div>
	  </nav>
    <!-- END nav -->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  <!--    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">																-->
       <!--   	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>   -->
 <!--           <h1 class="mb-0 bread">Drink</h1>
          </div>
        </div>
      </div>
    </div>																													-->
	<?php
	require("Database_Connect.php");
	$sql = "select * from product WHERE pro_id = ".$_GET["pro_id"];
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	?>
    <section style="Margin-top: 60px;">
	<form action="Addcart.php" method="POST">
    	<div class="container">
    		<div class="row text-center">
    			<div class="col-lg-6 ftco-animate">
    				<a href="./image1/<?= $row["picture"] ?>" class="image-popup"><img src="./image1/<?= $row["picture"] ?>" alt="Colorlib Template" width="350" class="img-fluid"></a>
    			</div>
				<input type="text" name="proid" style="display:none" value="<?=$_GET["pro_id"]?>">
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?=$row["pro_name"]?></h3>
    				<div class="rating d-flex">
		
						</div>
    				<p class="price"><span><?=$row["pro_price"]?></span></p>
    				<p> <?=$row["Description"]?>
						</p>
						<div class="mt-4 text-center">
											
							<div class="w-100"></div>
								<div class="input-group d-flex mb-2 text-center">
										<span class="input-group-btn mr-2">
											<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
											<i class="ion-ios-remove"></i>
											</button>
										</span>
									<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
										<span class="input-group-btn ml-2">
											<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
											<i class="ion-ios-add"></i>
											</button>
										</span>
								</div>
							<br>
								<button class="bnt btn-light" type="submit">Add to Order</button>

							</div>
    					</div>
		</div>
		</form>
    </section>


  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>