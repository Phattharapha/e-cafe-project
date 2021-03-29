

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

            <a class="navbar-brand" href="template/vegefoods/index.html">Del Luna Cafe'</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">

                <span class="oi oi-menu"></span> Menu

            </button>



            <div class="collapse navbar-collapse" id="ftco-nav">

                <ul class="navbar-nav ml-auto">

                   

                    <!--    <li class="nav-item"><a href="template/vegefoods/about.html" class="nav-link">About</a></li> 		-->

                    <li class="nav-item active cta cta-colored"><a href="employee_status.php" class="nav-link" style="color:#FFFFFF; background-color: #82AE46">Status</a></li>

                    <!-- <li class="nav-item"><a href="Order.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li> -->

                    <li class="nav-item"><a href="Logout.php" class="nav-link" style="color:#f0747a;">Logout</a></li>



                </ul>

            </div>

        </div>

    </nav>

    <!-- END nav -->



    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">

        <div class="container">

            <div class="row no-gutters slider-text align-items-center justify-content-center">

                <div class="col-md-9 ftco-animate text-center">

                    <!--   	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>   -->

                    <h1 class="mb-0 bread">Tables Status</h1>

                </div>

            </div>

        </div>

    </div>



    <section class="ftco-section testimony-section">

        <div class="container">

            <div class=" justify-content-center mb-5 pb-3">



                <div>

                    <div style="margin-left: 10px; margin-right: 10px;" class="block-17">


                        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">



                        <div>

                            <table class="table-striped table-bordered" style="width: 100%;">

                                <thead>

                                    <tr>

                                        <!--	  <th class="th-sm">ID



        </th> -->



                                  

                                        <th width="60" scope="col"  class="text-center">Table </th>

                                        <th width="60" scope="col" class="text-center">Order ID </th>

                                        <th width="100" scope="col" class="text-center">Status </th>

                                        <th width="140" scope="col" class="text-center">Action </th>

                                   

                                    </tr>



                                </thead>

                                <tbody>





                                    <tr class="text-center">



                                        <!--  <td>2-01-001 </td> -->

                                        <?php

                                        require("Database_Connect.php");

                                        $sql = "select * from `order` order by `order`.`order_id` desc";

                                        $result = $conn->query($sql);

                                        ?>









                                        <?php foreach ($result as $row) { ?>





                                            <th class="text-center" height="34" width="100" scope="row"><?= $row["table_id"] ?></th>

                                            <th class="text-center" height="34" width="100" scope="row"><?= $row["order_id"] ?></th>

                                            <th class="text-center" height="34" width="100" scope="row"><?= $row["order_status"] ?></th>





                                            </td>



                                            <td class="text-center">

                                                <div class="btn-group-lg" role="group" aria-label="Vertical button group" style="border-bottom-color: aliceblue">

                                                <?php if($row["order_status"] != "Cancel" and $row["order_status"] != "Check Out") { ?>

                                                    <button type="button" class="btn-outline-info" style="background-color:" data-toggle="modal" data-target="#serviceModal" data-table_id="<?= $row["table_id"] ?>" data-order_id="<?= $row["order_id"] ?>">

                                                        <span class="icon-update" style="color: #000000"></span></button>



                                                    <button type="button" class="btn-outline-warning" style="background-color: " data-toggle="modal" data-target="#editModal" data-table_id="<?= $row["table_id"] ?>" data-order_id="<?= $row["order_id"] ?>">

                                                        <span class="icon-edit" style="color: #000000"></span> </button>


                                                <?php } ?>
                                                    <button type="button" class="btn-outline-danger" style="background-color: " data-toggle="modal" data-target="#checkoutModal" data-table_id="<?= $row["table_id"] ?>" data-order_id="<?= $row["order_id"] ?>">

                                                        <span class="icon-exit_to_app" style="color: #000000"></span> </button>







                                                </div>

                                            </td>



                                    </tr>



                                </tbody>

                                <tfoot>

                                <?php } ?>

                                </tfoot>

                            </table>

                        </div>

                    </div>



                </div>

    </section>





    <td class="text-center">

        <!-- Modal 111111111111111 -->

        <div class="modal" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header text-center">

                        <h4 class="modal-title w-100 font-weight-bold">Service</h4>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                        </button>

                    </div>



                    <div id="serviceOrderItem"></div>





                    <div class="modal-footer d-flex justify-content-center">

                        <button id="serviceConfirm" type="button" class="btn btn-outline-success">Confirm</button>



                        <button id="serviceServe" type="button" class="btn btn-outline-primary">Serve</button>

                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>



                    </div>

                </div>

            </div>

        </div>



        <!-- Modal 111111111111111 -->





        <!-- Modal 2222222222222222222 -->

        <div class="modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header text-center">

                        <h4 class="modal-title w-100 font-weight-bold">Edit</h4>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                        </button>

                    </div>



                    <div id="editOrderItem"></div>







                    <div class="modal-footer d-flex justify-content-center">

                        <button id="editConfirm" type="button" class="btn btn-outline-success">Confirm</button>

                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>



                    </div>

                </div>

            </div>

        </div>

        <!-- Modal 2222222222222222222 -->





        <!-- Modal 3333333333333333333 -->

        <div class="modal" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header text-center">

                        <h4 class="modal-title w-100 font-weight-bold">Checkout</h4>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                        </button>

                    </div>

                    <div id="checkoutOrderItem"></div>



                    <div class="modal-footer d-flex justify-content-center">

                        <button id="checkoutConfirm" type="button" class="btn btn-outline-success">Confirm</button>

                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>

                    </div>

                </div>

            </div>

        </div>



        <!-- Modal 3333333333333333333 -->

    </td>



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



    <script src="js/axios.js"></script>

    <script src="js/ddtf.js"></script>



 

    <script>

        var order_id;

        var tableId;

        $('[data-target="#serviceModal"]').click(function() {

            order_id = $(this).attr('data-order_id')

            tableId = $(this).attr('data-table_id')



            axios.get('./getOrderDetail.php?order_id=' + $(this).attr('data-order_id')).then(function(res) {

                console.log(res.data)

                let html = "";

                for (item of res.data) {    

                    html += '<div class="modal-body">'

                    html += `<h6>${item.pro_name}    ${item.amount}x    ${item.pro_price} ฿ <br>`

                    html += '<select name="status" id="status" class="form-dropdown validate[required] dropdown filterElements" data-proid="' + item.pro_id + '" data-tableid="' + tableId + '" data-orderid="'+item.order_id+'" tyle="width:200px" data-component="dropdown" required="active">'

                    html += '<option type="text" value="Available" ' + ((item.pro_status == "Available") ? 'selected' : '') + '> Available </option>'

                    html += '<option type="text" value="Unavailable" ' + ((item.pro_status == "Unavailable" || ' ') ? 'checked' : '') + '>Unavailable </option>'

                    html += '</select>'

                    html += '</h6>'

                    html += '</div>'

                }

                $("#serviceOrderItem").html(html)

            })

        })



        $('[data-target="#editModal"]').click(function() {

            order_id = $(this).attr('data-order_id')

            tableId = $(this).attr('data-table_id')

            axios.get('./getOrderDetail.php?order_id=' + $(this).attr('data-order_id')).then(function(res) {

                console.log(res.data)

                let html = "";

                for (item of res.data) {

                    html += '<div class="modal-body">'

                    html += `<h6>${item.pro_name}    ${item.amount}x     ${item.pro_price} ฿`

                    html += '</h6>'

                    html += '</div>'

                    html += '<div class="modal-body">'

                    html += '<h6>'

                    html += '<select data-orderItemId="'+item.orderitem_id+'" data-proid="' + item.pro_id + '" data-order_id="' + order_id + '" class="selectpicker">'

                    html += '<option value="">Choose reason </option>'

                    html += '<option value="Cancellation by Customer">Cancellation by Customer</option>'

                    html += '<option value="Ingredients Run Out">Ingredients Run Out</option>'

                    html += '<option value="Other">Other</option>'

                    html += '</select>'

                    html += '</h6>'

                    html += '</div>'



                }

                $("#editOrderItem").html(html)

            })

        })



        $('[data-target="#checkoutModal"]').click(function() {

            order_id = $(this).attr('data-order_id')

            tableId = $(this).attr('data-table_id')



            // console.log(tableId)

            axios.get('./getOrderDetail.php?order_id=' + $(this).attr('data-order_id')).then(function(res) {

                // console.log(res.data)

                let html = "";

                let total = 0;

                for (item of res.data) {

                    html += '<div class="modal-body">'

                    html += `<h6>${item.pro_name}    ${item.amount}x     ${item.pro_price} ฿`

                    html += '</h6>'

                    html += '</div>'

                    total += item.amount * item.pro_price



                }

                html += '<div class="modal-body">'

                html += `<h6>Total ${total} ฿ </h6>`

                html += '</div>'

                $("#checkoutOrderItem").html(html)

            })

        })



        $('#serviceConfirm').click(() => {

            var productItem = [];

            for (item of $("#serviceOrderItem").find('select')) {

                productItem.push({

                    pro_id: $(item).attr('data-proid'),

                    table_id: $(item).attr('data-tableid'),
                    order_id: $(item).attr('data-orderid'),

                    pro_status: $(item).val()

                })

            }

            axios.post('./OrderConfirm.php', JSON.stringify({

                productItem: productItem

            })).then(res => console.log(res.data))

            $("#serviceModal").modal('hide');

            location.reload();

        })



        $("#serviceServe").click(() => {

            axios.post("./OrderServe.php", JSON.stringify({

                order_id: order_id

            })).then(res => {

                console.log(res.data);

                $("#serviceModal").modal('hide');

                location.reload();

            })

        })

        $("#checkoutConfirm").click(() => {

            axios.post("./OrderCheckout.php", JSON.stringify({

                order_id: order_id

            })).then(res => {

                console.log(res.data);

                $("#checkoutModal").modal('hide');

                location.reload();

            })

        })



        $("#editConfirm").click(() => {

            var productItem = [];

            for (item of $("#editOrderItem").find('select')) {

                if ($(item).val() != "") {

                    productItem.push({

                        pro_id: $(item).attr('data-proid'),
                        order_item_id: $(item).attr('data-orderItemId'),

                        order_id: $(item).attr('data-order_id'),

                        remark: $(item).val()

                    })

                }

            }

            console.log(productItem)

            axios.post('./OrderEditConfirm.php', JSON.stringify({

                productItem: productItem

            })).then(res => {

                console.log(res.data)

                $("#editModal").modal('hide');

                location.reload();

            })

        })











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