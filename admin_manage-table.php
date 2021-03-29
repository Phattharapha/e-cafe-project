<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Del Luna Cafe'</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleap	is.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="template/vegefoods/css/open-iconic-bootstrap.min.css"> -->
    <link rel="stylesheet" href="template/vegefoods/css/animate.css">

    <link rel="stylesheet" href="template/vegefoods/css/owl.carousel.min.css">
    <link rel="stylesheet" href="template/vegefoods/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="template/vegefoods/css/magnific-popup.css">

    <link rel="stylesheet" href="template/vegefoods/css/aos.css">

    <link rel="stylesheet" href="template/vegefoods/css/ionicons.min.css">
    <!-- <link rel="stylesheet" href="template/vegefoods/css/bootstrap-datepicker.css"> -->
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
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
            <a class="navbar-brand" href="admin_Home.php"> Del Luna Cafe'</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
	      </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="admin_Home.php" class="nav-link">Home</a></li>

                    <li class="nav-item"><a href="admin_manage-menu.php" class="nav-link">Menu</a></li>
                    <li class="nav-item cta cta-colored"><a href="admin_manage-user.php" class="nav-link" style="color:#FFFFFF; background-color: #82AE46"><strong>User</strong></a></li>
                    <li class="nav-item"><a href="#" class="nav-link" style="color:#f0747a;">Log-out</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->


    <section class="testimony-section embed-responsive-item">

        <div class="row d-flex justify-content-center" style="overflow-x:auto;">

            <div class="block-22">

            <br>

            <div class="d-flex justify-content-center">
                    <p class="h5 text-primary createShowP">
                        <h2>Choose </h2>
                    </p>
                    <p> </p>
                    <div class="dropdown show">
                        <a class="btn btn-lg dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #A4E6E8"> Table	 </a>
                        <div class="dropdown-menu">
                            <!--<a class="dropdown-item" href="#">Employee</a> -->
                            <a class="dropdown-item" href="admin_manage-user.php">Employee</a>
                            		  
			     
                        </div>
                    </div>
                </div>
               
                <br>




                <table class="table-responsive-sm " width="100%" style="align-content: center">
                    <tr class="text-center">
                        <th>&ensp;</th>
                       
                        <th>
                            <h2>Table <button type="button" class="btn btn-info" data-toggle="modal" data-target="#empModal">Add</button>
</h2>  
                            <!--Start Forms !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

                            <div class="modal" id="empModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Add Table</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
                                        </div>
                                        <form action="Adminaddtable.php" method="POST">
                                            <div class="modal-body mx-3">

                                                <!-- <div class="md-form mb-3">
                                                <i class="fas fa-user prefix grey-text"></i>
                                                <label data-erro="wrong" data-success="right" for="form34" style="color: #000000" name="tablename">Table Name</label> <span style="color: #FF0004">  *  </span> &ensp;

                                                <input type="text" id="txt_name" class="form-control validate" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" data-component="textbox" aria-labelledby="txt_name" required="">
                                             </div> -->

                                                <div class="md-form mb-3">
                                                    <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Seat Amount</label>
                                                    <span style="color: #FF0004">  *  </span> &ensp;
                                                    <br>
                                                    <input name="seatamount" type="text" id="id_card" style="width:200px" size="10" data-numbermin="1" data-numbermax="999" data-component="number" aria-labelledby="label_15" required="" step="any">
                                                </div>


                                                <div class="md-form mb-3">
                                                    <i class="fas fa-user prefix grey-text"></i>
                                                    <label data-error="wrong" data-success="right" for="form34" style="color: #000000">User Name</label> <span style="color: #FF0004">  *  </span> &ensp;

                                                    <input name="username" type="text" id="txt_name" class="form-control validate" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" data-component="textbox" aria-labelledby="txt_name" required="">
                                                </div>

                                                <div class="md-form mb-3">
                                                    <i class="fas fa-user prefix grey-text"></i>
                                                    <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Password</label> <span style="color: #FF0004">  *  </span> &ensp;

                                                    <input name="passwordtb" type="text" id="txt_name" class="form-control validate" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" data-component="textbox" aria-labelledby="txt_name" required="">
                                                </div>




                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <input type="submit" class="btn btn-success" id="submit">
                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>

                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!--End Forms-->


                        </th>

                    </tr>
                </table>

                

                <!--  <div class="block my-4">
            <div class="d-flex justify-content-center">
            <p class="h5 text-primary createShowP"><h2></h2></p>
            </div>
        </div> -->

        <form>
                <table id="dtBasicExample" class="table-responsive-m table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>

                                            <tr>
                                                <th class="th-sm text-center">ID Table

                                                </th>

                                                <th class="th-sm text-center">Seat Amount

                                                </th>

                                                <th class="th-sm text-center">Manage


                                                </th>
                                            </tr>
                                        </thead>



                         <form>
                                <?php

                                require("Database_Connect.php");
                                $sql = "select * from tb";
                                $result = $conn->query($sql);
                                ?>


                            
                                

                                <?php foreach ($result as $row) { ?>

                                    <tr class="text-center">
                                    <th height="34" width="51" scope="row"><?= $row["table_id"] ?></th>
                                    <th height="34" width="51" scope="row"><?= $row["seat_amount"] ?></th>
                                    
                                    <th width="50">
                                    <button type="button" class="btn-outline-warning" style="background-color:" data-toggle="modal" data-target="#table_edit" data-tableid="<?= $row["table_id"] ?>" >
                                    <span class="icon-edit" style="color: #000000"></span></button>
                                    <button type="button" class="btn-outline-danger" style="background-color: " data-toggle="modal" data-target="#table_del"    data-tableid="<?= $row["table_id"] ?>" >
                                    <span class="icon-delete" style="color: #000000"></span></button>
                                    </th>
                                    </tr>
                                    


                                <?php } ?>
                </table>
                            </form>
                               
                               
                               <!-- Table Edit !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                            <form action = "Updatetable.php" method= "POST">
                                <div class="modal fade" id="table_edit" tabindex="-1" role="dialog" aria-labelledby="table_edit" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="table_edit">Edit</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" size="">
                                    <div class="md-form mb-3">
                                    <input type="text" id="tableid" name="tableid" style ="display:none">
                                                    <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Seat Amount</label>
                                                    <span style="color: #FF0004">  *  </span> &ensp;
                                                    <br>
                                                    <input id="seatamount" name="seatamount" type="text"  style="width:200px" size="10" data-numbermin="1" data-numbermax="999" data-component="number" aria-labelledby="label_15" required="" step="any">
                                                </div>


                                                <div class="md-form mb-3">
                                                    <i class="fas fa-user prefix grey-text"></i>
                                                    <label data-error="wrong" data-success="right" for="form34" style="color: #000000">User Name</label> <span style="color: #FF0004">  *  </span> &ensp;

                                                    <input id="username" name="username" type="text" class="form-control validate" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" data-component="textbox" aria-labelledby="txt_name" required="">
                                                </div>

                                                <div class="md-form mb-3">
                                                    <i class="fas fa-user prefix grey-text"></i>
                                                    <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Password</label> <span style="color: #FF0004">  *  </span> &ensp;

                                                    <input id="passwordtb" name="passwordtb" type="text"  class="form-control validate" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" data-component="textbox" aria-labelledby="txt_name" required="">
                                                </div>


                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </form>
                               
                                 <!-- Table Edit !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                               
                                <!-- Modal Delete !!!!!!!!!!!!!!!!!!!!!!!!!!!-->
                                
                                <div class="modal fade" id="table_del" tabindex="-1" role="dialog" aria-labelledby="oper_del" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">

                                <form action ="DeleteTable.php" method="POST">
                                    <div class="modal-header">
                                        <input type="text" id="tableid1" name="tableid" style="display:none" >
                                    <h5 class="modal-title" id="table_del">Delete</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    ต้องการยืนยันการลบหรือไม่ ?
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                    <button type="sumbit" class="btn btn-danger">ยืนยัน</button>
                                    </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </form>
                            <!-- Modal Delete !!!!!!!!!!!!!!!!!!!!!!!!!!!-->
                        
     <!-- </form>      -->
     </section> 
                                
    




    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="template/vegefoods/js/jquery.min.js"></script>
    <script src="template/vegefoods/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="template/vegefoods/js/popper.min.js"></script>
    <!-- <script src="template/vegefoods/js/bootstrap.min.js"></script> -->
    <script src="template/vegefoods/js/jquery.easing.1.3.js"></script>
    <script src="template/vegefoods/js/jquery.waypoints.min.js"></script>
    <script src="template/vegefoods/js/jquery.stellar.min.js"></script>
    <script src="template/vegefoods/js/owl.carousel.min.js"></script>
    <script src="template/vegefoods/js/jquery.magnific-popup.min.js"></script>
    <script src="template/vegefoods/js/aos.js"></script>
    <script src="template/vegefoods/js/jquery.animateNumber.min.js"></script>
    <!-- <script src="template/vegefoods/js/bootstrap-datepicker.js"></script> -->
    <script src="js/bootstrap-4.3.1.js"></script>
    <script src="template/vegefoods/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="template/vegefoods/js/google-map.js"></script>
    <script src="template/vegefoods/js/main.js"></script>

    <script type="text/javascript" src="js/contact.js"></script>







<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- <script src="js/bootstrap-4.3.1.js"></script> -->
<script src="js/axios.js"></script>
<script>
 

 
 $(function() {
 $('[data-target="#table_del"]').click(function() {
      $('#tableid1').val($(this).attr('data-tableid'))
    })
    })

//  $(function() {

// $('[data-target="#table_edit"]').click(function() {
//   $('#table_edit').val($(this).attr('data-tableid'))
// })
// })
   
    
    $('[data-target="#table_edit"]').click(function() {
      axios.get('./getTable.php?tableid=' + $(this).attr('data-tableid')).then(function(res) {
        console.log(res.data)
        $('#tableid').val(res.data.table_id)
        $('#username').val(res.data.login_tb)
        $('#passwordtb').val(res.data.password_tb)
        $('#seatamount').val(res.data.seat_amount)
       
      })
  
    })

   

  

    
    
 
</script>






</body>

</html>