<?php session_start();

if (!isset($_SESSION["table_id"])) {

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

          <li class="nav-item"><a href="Home.php" class="nav-link">Home</a></li>

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

          <li class="nav-item active cta cta-colored"><a href="Status.php" class="nav-link" style="color:#FFFFFF; background-color: #82AE46">Status</a></li>

          <li class="nav-item"><a href="Order.php" class="nav-link"><span class="icon-shopping_cart"></span></a></li>

          <li class="nav-item"><a href="Logout.php" class="nav-link" style="color:#f0747a;">Logout</a></li>



        </ul>

      </div>

    </div>

  </nav>

  <!-- END nav -->



  <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg')  ;">

    <div class="container">

      <div class="row no-gutters slider-text align-items-center justify-content-center">

        <div class="col-md-9 ftco-animate text-center">

          <!--   	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>   -->

          <h1 class="mb-0 bread">My Order Status</h1>

        </div>

      </div>

    </div>

  </div>



  <section class="">

    <div class="container">



      <?php

      require("Database_Connect.php");

      $sql = "select * from `order` where `order`.`table_id` = " . $_SESSION["table_id"] . " Order by order_id desc";

      $result1 = $conn->query($sql)->fetch_assoc();

      ?>

      <?php

      require("Database_Connect.php");

      $sql = "select * from `order` 
      left join orderitem on `order`.order_id = orderitem.order_id 
      left join product on product.pro_id = `orderitem`.`pro_id` 
      where `orderitem`.`CancelRemarks` = '' and 
      `order`.order_status <> 'Check Out' and
      `product`.pro_status <> 'Unavailable' and
      `order`.`table_id` = " . $_SESSION["table_id"];

      $result = $conn->query($sql);

      $total = 0;

      $averange = 0;


      ?>

      <div class="row justify-content-center">

        <div>

          <div class="cart-total mb-3">

            <h2><strong>Table <?= $_SESSION["table_id"] ?> </strong></h2>

            <strong>My Order Status</strong>

            <?php if (isset($result1["order_status"]) and mysqli_num_rows($result) > 0) { ?>

              <span class="text-center" style="font-size: 22px; color: #FFC400">

                <strong>..... <?= $result1["order_status"] ?> ......</strong>

              </span>

            <?php } ?>

            <!--			<p class="d-flex"> 

    						<span>Delivery</span>

    						<span>$0.00</span>

    					</p>								-->

            <!--				<p class="d-flex">

    						<span>Discount</span>

    						<span>0.00 ฿</span>

    					</p>								-->

            <hr>



          </div>

        </div>



      </div>

    </div>

  </section>





  <section>

    <div class="container">

      <div class="row justify-content-center mb-5 pb-3">



        <div>

          <div style="margin-left: 10px; margin-right: 10px;" class="block-17">

            <table class="table-striped table-bordered ">

              <thead>

                <tr>







                  <th width="120" scope="col" class="text-center">Order Name </th>

                  <th width="80" scope="col" class="text-center">Price </th>

                  <th width="80" scope="col" class="text-center">Amount </th>

                  <th width="80" scope="col" class="text-center">Total </th>

                </tr>



              </thead>

              <tbody>










                <script>
                  function myFunction() {

                    var x = document.getElementById("myDIV");

                    if (x.style.display === "none") {

                      x.style.display = "block";

                    } else {

                      x.style.display = "none";

                    }

                  }
                </script>



                <?php foreach ($result as $row) { ?>



                  <?php if ($row["order_status"] != "Check Out") { ?>



                    <?php if ($row["pro_status"] != "Unavailable") { ?>

                      <tr>

                        <th height="34" width="51" scope="row"><?= $row["pro_name"] ?></th>

                        <th class="text-right" height="34" width="51" scope="row"><?= $row["pro_price"] ?></th>

                        <th class="text-center" height="34" width="51" scope="row"><?= $row["amount"] ?></th>



                        <?php $averange = $row["pro_price"] * $row["amount"];

                        $averange = number_format($averange, 2, '.', '');  ?>



                        <th class="text-right" height="34" width="51" scope="row"><?= $averange ?> </th>





                        <?php $total += $row["pro_price"] * $row["amount"];

                        $total = number_format($total, 2, '.', '');  ?>



                      <tr>

                      <?php } ?>



                    <?php } ?>

                    <!--  <td>2-01-001 </td> -->



                  <?php } ?>







                      </tr>



              </tbody>



            </table>



            <div class="cart-wrap ftco-animate">

              <div class="cart-total mb-3">



                <hr>

                <p class="d-flex total-price">

                  <span>Grand Total</span>

                  <span><?= $total ?> ฿</span>

                </p>

              </div>

            </div>



          </div>

        </div>

      </div>

    </div>

  </section>



  <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">



  </section>





  <footer class="ftco-footer ftco-section">



  </footer>









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



  <script>
    $(document).ready(function() {



      var quantitiy = 0;

      $('.quantity-right-plus').click(function(e) {



        // Stop acting like a button

        e.preventDefault();

        // Get the field name

        var quantity = parseInt($('#quantity').val());



        // If is not undefined



        $('#quantity').val(quantity + 1);





        // Increment



      });



      $('.quantity-left-minus').click(function(e) {

        // Stop acting like a button

        e.preventDefault();

        // Get the field name

        var quantity = parseInt($('#quantity').val());



        // If is not undefined



        // Increment

        if (quantity > 0) {

          $('#quantity').val(quantity - 1);

        }

      });



    });
  </script>



</body>



</html>