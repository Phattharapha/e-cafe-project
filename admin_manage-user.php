
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
                    <li class="nav-item"><a href="Logout.php" class="nav-link" style="color:#f0747a;">Logout</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->


    <section class="testimony-section embed-responsive-item">

        <div class=" d-flex justify-content-center">

            <div class="container" >

                <br>
                <div class="d-flex justify-content-center">
                    <!-- <p class="h5 text-primary createShowP"> -->
                        <h3>Choose&ensp;</h3>
                     <!-- </p> -->
                    <div class="dropdown show">
                        <a class="btn btn-lg dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #A4E6E8"> Employee	 </a>
                        <div class="dropdown-menu">
                            <!--<a class="dropdown-item" href="#">Employee</a> -->
                            <a class="dropdown-item" href="admin_manage-table.php">Table</a>
                            
                        </div>
                    </div>
                </div>

                <br>

                <table class="text-center" width="100%" style="align-content: center">
                    <tr >
                        <th>&ensp;</th>
                        <th>
                            <h3>Employee <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tbModal">Add</button>
                            </h3>
                            <!--Start Forms-->
                      
                            <div class="modal" id="tbModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header ">
                                            <h4 class="modal-title w-100 font-weight-bold text-center">Add Employee</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
                                        </div>
                                        <form action="AdminEmp.php" method="POST">
                                        <div class="modal-body mx-3 " style="margin-left: 10px; margin-right: 10px;">
                                            <div class="md-form mb-3 text-center">
                                            <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Status</label> <span style="color: #FF0004">  *  </span> &ensp;
                                            
                                                <select class="btn btn-primary dropdown-toggle" name="statusemp">
                                                    <option type="text">Admin</option>
                                                    <option type="text">Waiter</option>
                                                </select>
                                            </div> 
                                        </div>
                                        
                                            <input type="text" name="empid" style="display:none">

                                            <div class="md-form mb-3 text-left" style="margin-left: 20px; margin-right: 20px;">
                                                <i class="fas fa-user prefix grey-text"></i>
                                                <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Name</label> <span style="color: #FF0004">  *  </span> &ensp;

                                                <input type="text"  name="empname" id="txt_name" class="form-control validate" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" data-component="textbox" aria-labelledby="txt_name" required="">
                                            </div>

                                            <div class="md-form mb-3 text-left"style="margin-left: 20px; margin-right: 20px;">
                                                <label data-error="wrong" data-success="right" for="form34" style="color: #000000">ID Card</label>
                                                <span style="color: #FF0004">  *  </span> &ensp;
                                                <br>
                                                <input type="numbet" name="idcardemp" id="id_card" style="width:200px" size="10" value="" data-numbermin="1" data-numbermax="999" data-component="number" aria-labelledby="label_15" required="" step="any">
                                            </div>

                                            <div class="md-form mb-3 text-left" style="margin-left: 20px; margin-right: 20px;">

                                                <label style="color: #000000"> Phone Number </label> <span style="color: #FF0004">  *  </span> &ensp;

                                                <div id="cid_37" class="form-input jf-required">
                                                    <span class="form-sub-label-container " style="vertical-align:top">
													<input type="tel" name="phoneemp" id="input_37_full" name="q37_phoneNumber[full]" data-type="mask-number" class="mask-phone-number form-textbox validate[required, Fill Mask]" autoComplete="off" data-masked="true" value="" placeholder="+66," data-component="phone" aria-labelledby="label_37" required="" />
													<label class="form-sub-label" for="input_37_full" id="sublabel_37_masked" style="min-height:13px" aria-hidden="false">  </label>
												  </span>
                                                </div>
                                            </div>

                                            <div class="md-form mb-3 text-left" style="margin-left: 20px; margin-right: 20px;">

                                                <label style="color: #000000"> Birth Date </label> <span style="color: #FF0004">  *  </span> &ensp; <br>

                                                <input type="date" class="icon-date_range" name= "birthdayemp">

                                            </div>

                                            <div class="md-form mb-3 text-left" style="margin-left: 20px; margin-right: 20px;">
                                                <label style="color: #000000"> Address </label> <span style="color: #FF0004">  *  </span> &ensp; <br>
                                                <textarea type="text" name="addressemp" id="form8" class="md-textarea form-control" rows="3"></textarea>

                                            </div>

                                            <div class="md-form mb-3 text-left" style="margin-left: 20px; margin-right: 20px;">

                                                <label style="color: #000000"> Start Date </label> <span style="color: #FF0004">  *  </span> &ensp; <br>

                                                <input type="date" class="icon-date_range" name="startdateemp">

                                            </div>

                                            <div class="md-form mb-3 text-left" style="margin-left: 20px; margin-right: 20px;">
                                                <i class="fas fa-user prefix grey-text"></i>
                                                <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Login Name</label> <span style="color: #FF0004">  *  </span> &ensp;

                                                <input type="text" name="loginnameemp" id="txt_name" class="form-control validate" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" data-component="textbox" aria-labelledby="txt_name" required="">
                                            </div>


                                            <div class="md-form mb-3 text-left" style="margin-left: 20px; margin-right: 20px;">
                                                <i class="fas fa-user prefix grey-text"></i>
                                                <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Password</label> <span style="color: #FF0004">  *  </span> &ensp;

                                                <input type="text" name="Passwordemp" id="txt_name" class="form-control validate" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" data-component="textbox" aria-labelledby="txt_name" required="">
                                            </div>


                                        
                                        <div class="modal-footer d-flex justify-content-center">
                                                <input type="submit" class="btn btn-success" id="submit">
                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>

                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                            <!--End Forms-->

                        </th>

                        

                    </tr>
                </table>
                <br>


                


                <!--  <div class="block my-4">
    <div class="d-flex justify-content-center">
      <p class="h5 text-primary createShowP"><h2></h2></p>
    </div>
  </div> -->

                <form>
                <table id="dtBasicExample" class="table-responsive-m table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>

                                            <tr>
                                                <th class="th-sm text-center">ID</th>

                                                <th class="th-sm text-center"  width="120px">Name</th>

                                                <th class="th-sm text-center">Manage</th>
                                            </tr>
                                        </thead>
                            <form>
                                <?php

                                require("Database_Connect.php");
                                $sql = "select * from employee";
                                $result = $conn->query($sql);
                                ?>


                            
                                

                                <?php foreach ($result as $row) { ?>

                                    <tr class="text-center">
                                    <th height="34" width="51" scope="row"><?= $row["emp_id"] ?></th>
                                    <th height="34" width="51" scope="row"><?= $row["emp_name"] ?></th>
                                    
                                    <th width="50">
                                    <button type="button" class="btn-outline-warning" style="background-color:" data-toggle="modal" data-target="#tableemp_edit" data-empid="<?= $row["emp_id"] ?>" >
                                    <span class="icon-edit" style="color: #000000"></span></button>
                                    <button type="button" class="btn-outline-danger" style="background-color:" data-toggle="modal" data-target="#tableemp_del" data-empid="<?= $row["emp_id"] ?>" > 
                                    <span class="icon-delete" style="color: #000000"></span></button>
                                    </th>
                                    </tr>
                                    


                                <?php } ?>
                </table>
                            </form>
                               
                               
                               <!-- Table Edit !!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
                            <form action = "UpdateEmp.php" method= "POST">
                                <div class="modal fade" id="tableemp_edit" tabindex="-1" role="dialog" aria-labelledby="tableemp_edit" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title w-100 font-weight-bold text-center" id="tableemp_edit">Edit</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" size="">
                                    <div class="md-form mb-3">
                                   <div class="text-center">
                                   <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Status</label> <span style="color: #FF0004">  *  </span> &ensp;

                                            <select class="btn btn-primary dropdown-toggle" name="statusemp" id="statusemp">
                                        <!-- <option selected>Status</option> -->
                                        <option type="text">Admin</option>
                                        <option type="text">Waiter</option>
                                        </select></div>
                                               

                                            </div>
                                            <input type="text" name="empid" id="empid" style="display:none">

                                            <div class="md-form mb-3">
                                                <i class="fas fa-user prefix grey-text"></i>
                                                <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Name</label> <span style="color: #FF0004">  *  </span> &ensp;

                                                <input type="text"  name="empname" id="empname" class="form-control validate" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" data-component="textbox" aria-labelledby="txt_name" required="">
                                            </div>

                                            <div class="md-form mb-3" >
                                                <label data-error="wrong" data-success="right" for="form34" style="color: #000000">ID Card</label>
                                                <span style="color: #FF0004">  *  </span> &ensp;
                                                <br>
                                                <input type="numbet" name="idcardemp" id="idcardemp" style="width:200px" size="10" value="" data-numbermin="1" data-numbermax="999" data-component="number" aria-labelledby="label_15" required="" step="any">
                                            </div>

                                            <div class="md-form mb-3">

                                                <label style="color: #000000"> Phone Number </label> <span style="color: #FF0004">  *  </span> &ensp;

                                                <div id="cid_37" class="form-input jf-required">
                                                    <span class="form-sub-label-container " style="vertical-align:top">
													<input type="tel" name="phoneemp" id="phoneemp" name="q37_phoneNumber[full]" data-type="mask-number" class="mask-phone-number form-textbox validate[required, Fill Mask]" autoComplete="off" data-masked="true" value="" placeholder="+66," data-component="phone" aria-labelledby="label_37" required="" />
													<label class="form-sub-label" for="input_37_full" id="sublabel_37_masked" style="min-height:13px" aria-hidden="false">  </label>
												  </span>
                                                </div>
                                            </div>

                                            <div class="md-form mb-3">

                                                <label style="color: #000000"> Birth Date </label> <span style="color: #FF0004">  *  </span> &ensp; <br>

                                                <input type="date" class="icon-date_range" id="birthdayemp" name= "birthdayemp">

                                            </div>

                                            <div class="md-form mb-3">
                                                <label style="color: #000000"> Address </label> <span style="color: #FF0004">  *  </span> &ensp; <br>
                                                <textarea type="text" id="addressemp" name="addressemp"  class="md-textarea form-control" rows="3"></textarea>

                                            </div>

                                            <div class="md-form mb-3">

                                                <label style="color: #000000"> Start Date </label> <span style="color: #FF0004">  *  </span> &ensp; <br>

                                                <input type="date" class="icon-date_range" id="startdateemp" name="startdateemp">

                                            </div>

                                            <div class="md-form mb-3">
                                                <i class="fas fa-user prefix grey-text"></i>
                                                <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Login Name</label> <span style="color: #FF0004">  *  </span> &ensp;

                                                <input type="text" id="loginnameemp" name="loginnameemp"  class="form-control validate" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" data-component="textbox" aria-labelledby="txt_name" required="">
                                            </div>


                                            <div class="md-form mb-3">
                                                <i class="fas fa-user prefix grey-text"></i>
                                                <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Password</label> <span style="color: #FF0004">  *  </span> &ensp;

                                                <input type="text" id="Passwordemp" name="Passwordemp" class="form-control validate" data-type="input-textbox" class="form-textbox validate[required]" size="50" value="" data-component="textbox" aria-labelledby="txt_name" required="">
                                            </div>


                                        
                  
                                </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Save</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </form>



              

            </div>

        </div>

    </section>


    
    <div class="modal fade" id="tableemp_del" tabindex="-1" role="dialog" aria-labelledby="tableemp_del" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                      <form action ="DeleteUser.php" method="POST">
                        <div class="modal-header">
                        <input type="text" id="empid1" name="empid" style="display:none;" >
                          <h5 class="modal-title" id="tableemp_del">Delete User</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Are you sure you want to delete this User  ?
                        </div>

                        <div class="modal-footer">
                            <button type="sumbit" class="btn btn-success">Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
        </form>


    <footer class="ftco-footer ftco-section">


    </footer>



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
 $('[data-target="#tableemp_del"]').click(function() {
      $('#empid1').val($(this).attr('data-empid'))
    })
    })

 

// $('[data-target="#table_edit"]').click(function() {
//   $('#table_edit').val($(this).attr('data-tableid'))
// })
// })
   
    
    $('[data-target="#tableemp_edit"]').click(function() {
      axios.get('./getEmp.php?empid=' + $(this).attr('data-empid')).then(function(res) {
        console.log(res.data)
        $('#empid').val(res.data.emp_id)
        $('#empname').val(res.data.emp_name)
        $('#addressemp').val(res.data.emp_address)
        $('#phoneemp').val(res.data.emp_phone)
        $('#birthdayemp').val(res.data.emp_birthday)
        $('#idcardemp').val(res.data.emp_idcard)
        $('#startdateemp').val(res.data.start_date)
        $('#statusemp').val(res.data.emp_status)
        $('#loginnameemp').val(res.data.login_name)
        $('#Passwordemp').val(res.data.password_emp)
      })
  
    })

 
</script>

</body>
</html>