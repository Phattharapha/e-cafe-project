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
    <link rel="stylesheet" href="template/vegefoods/css/animate.css">

    <link rel="stylesheet" href="template/vegefoods/css/owl.carousel.min.css">
    <link rel="stylesheet" href="template/vegefoods/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="template/vegefoods/css/magnific-popup.css">

    <link rel="stylesheet" href="template/vegefoods/css/aos.css">

    <link rel="stylesheet" href="template/vegefoods/css/ionicons.min.css">
    <!-- <link rel="stylesheet" href="template/vegefoods/css/bootstrap-datepicker.css"> -->
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="template/vegefoods/css/jquery.timepicker.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>


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
                    <li class="nav-item cta cta-colored"><a href="admin_manage-menu.php" class="nav-link" style="color:#FFFFFF; background-color: #82AE46"><strong>Menu</strong></a></li>
                    <li class="nav-item"><a href="admin_manage-user.php" class="nav-link">User</a></li>

                    <li class="nav-item"><a href="Logout.php" class="nav-link" style="color:#f0747a;">Logout</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- END nav -->


    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">

                <div>
                    <div>

                        <div class="d-flex justify-content-center">

                            <p class="h5 text-primary createShowP">
                                <h2>Menu &ensp;</h2>
                            </p>
                            <button type="button" class="btn btn-lg btn-info" data-toggle="modal" data-target="#newMenuModal">New</button>


                            <!-- Start From New Menu -->
                            <div class="modal" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">New Menu</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body mx-3">
                                            <form action="AddminMenu.php" method="POST" enctype="multipart/form-data">
                                                <div class="md-form mb-3">
                                                    <label style="color: #000000">Select Category</label> <span style="color: #FF0004"> * &ensp; </span>
                                                    <select name="category" id="category" class="form-dropdown validate[required] dropdown filterElements" tyle="width:200px" data-component="dropdown" required="active">
                                                        <option type="text" value="Milk"> Milk </option>
                                                        <option type="text" value="Smoothie"> Smoothie </option>
                                                        <option type="text" value="Italian"> Italian soda </option>
                                                        <option type="text" value="Bingsu"> Bingsu </option>
                                                        <option type="text" value="Toast"> Toast </option>
                                                        <option type="text" value="Roti"> Roti </option>
                                                        <option type="text" value="Shaved ice &amp; Bread"> Shaved ice &amp; Bread </option>
                                                        <option type="text" value="Roasted Bread"> Roasted Bread </option>
                                                        <option type="text" value="Ice Cream Homemade"> Ice Cream Homemade </option>
                                                        <option type="text" value="Topping"> Topping </option>
                                                        <option type="text" value="Snack"> Snack </option>
                                                    </select>
                                                </div>

                                                <div class="md-form mb-3">
                                                    <input name="proid" style="display:none">
                                                    <i class="fas fa-user prefix grey-text"></i>
                                                    <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Name</label> <span style="color: #FF0004"> * </span><br>
                                                    <input name="txtname" type="text" id="form34" class="form-control validate" data-type="input-textbox" class="form-textbox validate[required]" size="20" value="" data-component="textbox" aria-labelledby="label_12" required="">
                                                </div>
                                                <div class="md-form mb-3">

                                                    <i class="fas fa-user prefix grey-text"></i>
                                                    <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Price (THB.)</label> <span style="color: #FF0004"> * </span>
                                                    <input name="txtprice" type="numbet" id="form34" class="form-control validate" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:100px" size="10" value="" data-numbermin="0" data-numbermax="999" data-component="number" aria-labelledby="label_15" required="" step="any">

                                                </div>


                                                <div class="md-form mb-3">
                                                    <label class="form-label form-label-left form-label-auto" id="label_11" for="input_11" style="color: #000000">
                                                        Image
                                                        <span style="color: #FF0004"> * </span>
                                                    </label>
                                                    <img id="myImgup" src="#" alt="your image" height=100 width=100>
                                                    <div id="cid_11" class="form-input jf-required">
                                                        <div data-wrapper-react="true">
                                                            <input type="file" name="fileToUpload" id="fileUpload">
                                                        </div>
                                                        (*.jpg, *.png - Max file size: 5 MB)
                                                    </div>
                                                </div>


                                                <div class="md-form">
                                                    <i class="fas fa-pencil prefix grey-text"></i>
                                                    <label data-error="wrong" data-success="right" for="form8" style="color: #000000">Description</label>
                                                    <textarea name="txtDescription" type="text" id="form8" class="md-textarea form-control" rows="3"></textarea>

                                                </div>

                                                <br>

                                                <div class="md-form mb-3">
                                                    <label style="color: #000000">Status</label> <span style="color: #FF0004"> * &ensp; </span>
                                                    <select name="status" id=" " class="form-dropdown validate[required] dropdown filterElements" tyle="width:200px" data-component="dropdown" required="active">
                                                        <option type="text" value="Available"> Available </option>
                                                        <option type="text" value="Unavailable">Unavailable</option>
                                                    </select>

                                                    <br>

                                                    <label style="color: #000000">Recommendation</label> <span style="color: #FF0004"> * &ensp; </span>
                                                    <select name="txtrec" id=" " class="form-dropdown validate[required] dropdown filterElements" tyle="width:200px" data-component="dropdown" required="active">
                                                        <option type="text" value="Normal">Normal</option>
                                                        <option type="text" value="Recommended"> Recommended </option>
                                                    </select>

                                                </div>




                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <input type="submit" class="btn btn-success" id="submit" onClick="this.form.action='AddminMenu.php';submit()">
                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>

                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End From New Menu 						  
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
						  </div>-->
						</div>
					  </div>
                        </div>
                        



                        </div>
                        <br>


                        <div class="d-flex justify-content-center">
                            <p class="h4 createShowP" style="color: black;">
                                Choose &ensp; </p>
                            <select name="category" id="categoryselect" class="form-dropdown validate[required] dropdown filterElements">
                                <option type="text" value="All"> All </option>
                                <option type="text" value="Milk"> Milk </option>
                                <option type="text" value="Smoothie"> Smoothie </option>
                                <option type="text" value="Italian"> Italian soda </option>
                                <option type="text" value="Bingsu"> Bingsu </option>
                                <option type="text" value="Toast"> Toast </option>
                                <option type="text" value="Roti"> Roti </option>
                                <option type="text" value="Shaved ice &amp; Bread"> Shaved ice &amp; Bread </option>
                                <option type="text" value="Roasted Bread"> Roasted Bread </option>
                                <option type="text" value="Ice Cream Homemade"> Ice Cream Homemade </option>
                                <option type="text" value="Topping"> Topping </option>
                                <option type="text" value="Snack"> Snack </option>
                            </select>

                        </div>
                        <br>
                        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


                        <div>

                            <table id="myTable" class="table-striped table-bordered" width="100%;">
                                <thead>
                                    <div style="margin-left: 10px; margin-right: 10px;" class="block-17" width="100%;">
                                        <tr class="text-center">
                                            <th scope="col" width="30%;">Name </th>
                                            <th scope="col" width="20%;">Price </th>

                                            <th scope="col" width="35%;">Status </th>
                                            <th scope="col" width="15%;">Manage </th>
                                        </tr>
                                </thead>
                                <tbody id="tbodyid1">


                                    <form>
                                        <?php

                                        require("Database_Connect.php");
                                        $sql = "select * from product ORDER BY  pro_name ASC";

                                        $result = $conn->query($sql);
                                        ?>





                                        <?php foreach ($result as $row) { ?>

                                            <tr data-categories="<?= $row["pro_type"] ?>">
                                                <th height="34" width="51" scope="row"><?= $row["pro_name"] ?></th>
                                                <th class="text-right" height="34" width="51" scope="row"><?= $row["pro_price"] ?> ฿</th>
                                                <th class="text-center" height="34" width="51" scope="row" style="font-size:12px; "><?= $row["pro_status"] ?><br><?= $row["recommend"] ?></th>


                                                </td>

                                                <th class="text-center">

                                                    <!--          <button type="button" class="btn btn-secondary" style="background-color: #28da52; "><span class="icon-plus-square"></button>  -->
                                                    <button type="button" class="btn-outline-warning" style="background-color:" data-toggle="modal" data-target="#menu_edit" data-proid="<?= $row["pro_id"] ?>">
                                                        <span class="icon-edit" style="color: #000000"></span></button>
                                                    <button type="button" class="btn-outline-danger" style="background-color:" data-toggle="modal" data-target="#menu_del" data-proid="<?= $row["pro_id"] ?>">
                                                        <span class="icon-delete" style="color: #000000"></span></button>

                                                </th>
                                            </tr>
                                        <?php } ?>

                        </div>

                        </table>
                        </form>


                        <!-- Start From New Menu -->
                        <form action="UpdateMenu.php" method="POST" enctype="multipart/form-data">
                            <div class="modal fade" id="menu_edit" tabindex="-1" role="dialog" aria-labelledby="menu_edit" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="menu_edit">Edit</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" size="">
                                            <div class="modal-body mx-3">
                                                <input id="proid" name="proid" style="display:none">
                                                <div class="md-form mb-3">
                                                    <!-- <input id="category" name="category"> -->
                                                    <label style="color: #000000">Select Category</label> <span style="color: #FF0004"> &ensp; </span>
                                                    <select name="category" id="category1" class="form-dropdown validate[required] dropdown filterElements">
                                                        <option type="text" value="Milk"> Milk </option>
                                                        <option type="text" value="Smoothie"> Smoothie </option>
                                                        <option type="text" value="Italian"> Italian soda </option>
                                                        <option type="text" value="Bingsu"> Bingsu </option>
                                                        <option type="text" value="Toast"> Toast </option>
                                                        <option type="text" value="Roti"> Roti </option>
                                                        <option type="text" value="Shaved ice &amp; Bread"> Shaved ice &amp; Bread </option>
                                                        <option type="text" value="Roasted Bread"> Roasted Bread </option>
                                                        <option type="text" value="Ice Cream Homemade"> Ice Cream Homemade </option>
                                                        <option type="text" value="Topping"> Topping </option>
                                                        <option type="text" value="Snack"> Snack </option>
                                                    </select>
                                                </div>

                                                <div class="md-form mb-3">
                                                    <i class="fas fa-user prefix grey-text"></i>
                                                    <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Name</label> <span style="color: #FF0004"> * </span><br>
                                                    <input type="text" id="txtname" name="txtname" class="form-control validate" data-type="input-textbox" class="form-textbox validate[required]" size="20" value="" data-component="textbox" aria-labelledby="label_12" required="">
                                                </div>
                                                <div class="md-form mb-3">

                                                    <i class="fas fa-user prefix grey-text"></i>
                                                    <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Price (THB.)</label> <span style="color: #FF0004"> * </span>
                                                    <input type="numbet" id="txtprice" name="txtprice" class="form-control validate" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:100px" size="10" value="" data-numbermin="0" data-numbermax="999" data-component="number" aria-labelledby="label_15" required="" step="any">
                                                </div>


                                                <div class="md-form mb-3">
                                                    <label class="form-label form-label-left form-label-auto" id="label_11" for="input_11" style="color: #000000">
                                                        Image
                                                        <span style="color: #FF0004"> * </span>
                                                    </label>
                                                    <div id="cid_11" class="form-input jf-required">
                                                        <img id="myImg" src="#" alt="your image" height=100 width=auto;>
                                                        <div data-wrapper-react="true">
                                                            <input type="file" name="fileToUpload" id="fileToUpload">
                                                        </div>
                                                        (*.jpg, *.png - Max file size: 5 MB)
                                                    </div>
                                                </div>


                                                <div class="md-form">
                                                    <i class="fas fa-pencil prefix grey-text"></i>
                                                    <label data-error="wrong" data-success="right" for="form8" style="color: #000000">Description</label>
                                                    <textarea type="text" id="txtDescription" name="txtDescription" class="md-textarea form-control" rows="3"></textarea>

                                                </div>

                                                <br>

                                                <div class="md-form mb-3">
                                                    <label style="color: #000000">Status</label> <span style="color: #FF0004"> * &ensp; </span>
                                                    <select name="status" id="status" class="form-dropdown validate[required] dropdown filterElements" tyle="width:200px" data-component="dropdown" required="active">
                                                        <option type="text" value="Available"> Available </option>
                                                        <option type="text" value="Unavailable">Unavailable </option>
                                                    </select>

                                                    <br>

                                                    <label style="color: #000000">Recommendation</label> <span style="color: #FF0004"> * &ensp; </span>
                                                    <select name="txtrec" id="txtrec" class="form-dropdown validate[required] dropdown filterElements" tyle="width:200px" data-component="dropdown" required="active">
                                                        <option type="text" value="Normal">Normal</option>
                                                        <option type="text" value="Recommended"> Recommended </option>
                                                    </select>

                                                </div>


                                                <!-- <div class="md-form">
                                                <br>
                                                <input type="checkbox" class="form-checkbox" id="txtrec" name="txtrec" value="Recommended" />
                                                <label id="label_input_12_0" for="input_12_0" style="color: #000000"> Recommended </label>

                                                <br>
                                                <input type="checkbox" class="form-checkbox" id="status" name="status" value="Available" />
                                                <label id="label_input_12_0" for="input_12_0" style="color: #000000"> Available </label>

                                            </div> -->
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
                        <!-- End From New Menu 	 -->



                        <!-- Delete -->
                        <div class="modal fade" id="menu_del" tabindex="-1" role="dialog" aria-labelledby="menu_del" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="DeleteMenu.php" method="POST">
                                        <div class="modal-header">
                                            <input type="text" id="proid1" name="proid" style="display:none">
                                            <h5 class="modal-title" id="menu_del">Delete Menu</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this Menu ?
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
                     
                                </form>


                        <!-- loader -->
                        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


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



                        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

                        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                        <script src="js/jquery-3.3.1.min.js"></script>

                        <!-- Include all compiled plugins (below), or include individual files as needed -->
                        <!-- <script src="js/bootstrap-4.3.1.js"></script> -->
                        <script src="js/axios.js"></script>
                        <script src="js/ddtf.js"></script>

                        <script>
                            // $('#myTable').ddTableFilter();

                            $(function() {
                                $('[data-target="#menu_del"]').click(function() {
                                    $('#proid1').val($(this).attr('data-proid'))
                                })
                            })

                            $(function() {
                                $("#fileToUpload").change(function() {
                                    if (this.files && this.files[0]) {
                                        var reader = new FileReader();

                                        reader.onload = imageIsLoadedEdit;
                                        reader.readAsDataURL(this.files[0]);
                                    }
                                });

                                function imageIsLoadedEdit(e) {
                                    $('#myImg').attr('src', e.target.result);
                                };

                                $("#fileUpload").change(function() {
                                    if (this.files && this.files[0]) {
                                        var reader = new FileReader();

                                        reader.onload = imageIsLoadedNew;
                                        reader.readAsDataURL(this.files[0]);
                                    }
                                });

                                function imageIsLoadedNew(e) {
                                    $('#myImgup').attr('src', e.target.result);
                                };
                                //   $('#table').filterRowsByValue( $('.filterElements') );
                                //   // $('.filterElements').change(); // uncomment to start with blank table
                                // });  


                                // jQuery.fn.filterRowsByValue = function(masterSelects) {
                                //   return this.each(function() {
                                //     var table = this;
                                //     var rows = [];
                                //     $(table).find('tr').each(function() {
                                //         var cells={};
                                //         $(this).find('td').each (function(i, e) {
                                //            cells['c'+i] = $(this).html();
                                //         });    
                                //       rows.push(cells);
                                //     });
                                //     $(table).data('tr', rows);

                                //     masterSelects.bind('change', function() {
                                //       var cur=this;
                                //       masterSelects.each(function(i,e){
                                //         if( e != cur ){
                                //           $(e).val("0");
                                //          }
                                //       });
                                //       var rows = $(table).empty().scrollTop(0).data('tr');

                                //       var search = '^'+$.trim($(this).val())+'$';
                                //       var regex = new RegExp(search,'gi');
                                //       var cel = $(this).data( "cell-to-filter" ); 
                                //       $.each(rows, function(i,e) {
                                //         var row = rows[i];
                                //         if(row[cel].match(regex) !== null) {
                                //           var cellArr=[];
                                //           for (var curCell in row) {
                                //               if(row.hasOwnProperty(cel)){
                                //                cellArr.push('<td>'+row[curCell]+'</td>');
                                //               }
                                //           }
                                //          $(table).append( '<tr>'+cellArr.join('')+'</tr>' );
                                //         }
                                //       });
                                //     });

                                //   });
                                // };

                                $('[data-target="#menu_edit"]').click(function() {
                                    axios.get('./getMenu.php?proid=' + $(this).attr('data-proid')).then(function(res) {
                                        console.log(res.data)
                                        $('#proid').val(res.data.pro_id)
                                        $('#category1').val(res.data.pro_type)
                                        $('#txtname').val(res.data.pro_name)
                                        $('#status').val(res.data.pro_status)
                                        $('#txtprice').val(res.data.pro_price)
                                        $('#txtrec').val(res.data.recommend)
                                        $('#txtDescription').val(res.data.Description)
                                        let path = './image1/'+res.data.picture
                                        $('#myImg').attr('src', path);


                                    })

                                })


                                $('#categoryselect').change(function() {
                                    console.log($(this).val())
                                    if ($(this).val() == "All") {
                                        $('#tbodyid1').find('tr').show();
                                    } else {
                                        $('#tbodyid1').find('tr').hide();
                                        $('#tbodyid1').find('[data-categories="' + $(this).val() + '"]').show();

                                    }
                                    // $('')
                                })

                            })
                        </script>
                        <!-- <script>
                                $(document).ready( function () {
                                $('#myTable').DataTable();
                            } );
                            </script> -->
</body>

</html>