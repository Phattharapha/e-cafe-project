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
    body,td,th {
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
	          <li class="nav-item"><a href="Order.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
	          <li class="nav-item"><a href="#" class="nav-link" style="color:#f0747a">Log-out</a></li>																												   

	        </ul>
	      </div>
      </div>
	  </nav>
    <!-- END nav -->

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
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/drink_1.jpg" class="image-popup"><img src="./image1/<?= $row["picture"] ?>" alt="Colorlib Template" width="350" class="img-fluid"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?=$row["pro_name"]?></h3>
    				<div class="rating d-flex">
		<!--					<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p> 
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
							</p>
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
							</p>																	-->
						</div>
    				<p class="price"><span><?=$row["pro_price"]?></span></p>
    				<p> ชานมไข่มุกสูตรพิเศษสำหรับคุณ
						</p>
						<div class="row mt-4">
							<div class="col-md-6">
			<!--					<div class="form-group d-flex">
		              <div class="select-wrap">
	                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                  <select name="" id="" class="form-control">
	                  	<option value="">Small</option>
	                    <option value="">Medium</option>
	                    <option value="">Large</option>
	                    <option value="">Extra Large</option>
	                  </select>
	                </div>
		            </div>									-->
							</div>
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
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
	          	<div class="w-100"></div>
	       <!--   	<div class="col-md-12">
	          		<p style="color: #000;">600 kg available</p>
	          	</div>														-->
          	</div>
          	<p><a href="Order.html" class="btn py-3 px-2 btn-success">Add to Order</a></p>
    			</div>
    		</div>
    	</div>
    </section>
<!--
    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Products</span>
            <h2 class="mb-4">Related Products</h2>
</div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="template/vegefoods/images/product-1.jpg" alt="Colorlib Template">
    						<span class="status">30%</span>
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Bell Pepper</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="template/vegefoods/images/product-2.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Strawberry</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="template/vegefoods/images/product-3.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Green Beans</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="template/vegefoods/images/product-4.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">Purple Cabbage</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>$120.00</span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
-->


  

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