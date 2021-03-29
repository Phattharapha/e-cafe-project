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

                    <!--		 <li class="nav-item  dropdown ">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Member</a>
              <div class="dropdown-menu " aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="template/vegefoods/shop.html">Add</a>
              	<a class="dropdown-item " href="template/vegefoods/wishlist.html">Edit</a>
                <a class="dropdown-item" href="template/vegefoods/product-single.html">Remove</a>
              </div>
            </li>
	   -->
                    <li class="nav-item"><a href="#" class="nav-link" style="color:#f0747a;">Log-out</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- END nav -->


    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">

                <div>
                    <div class="">

                        <div class="d-flex justify-content-center">

                            <p class="h5 text-primary createShowP">
                                <h2>Menu &ensp;</h2>
                            </p>
                            <button type="button" class="btn btn-lg btn-info" data-toggle="modal" data-target="#newMenuModal">New</button>


                            <!-- Pop up From New Menu 
			   		<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="newMenuModalLabel">   </h5>			
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
		-->
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
                                                    <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Price</label> <span style="color: #FF0004"> * </span>
                                                    <input name="txtprice" type="numbet" id="form34" class="form-control validate" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:100px" size="10" value="" data-numbermin="0" data-numbermax="999" data-component="number" aria-labelledby="label_15" required="" step="any">
                                                </div>


                                                <div class="md-form mb-3">
                                                    <label class="form-label form-label-left form-label-auto" id="label_11" for="input_11" style="color: #000000">
                                                        Image
                                                        <span style="color: #FF0004"> * </span>
                                                    </label>
                                                    <div id="cid_11" class="form-input jf-required">
                                                        <div data-wrapper-react="true">
                                                            <input type="file" name="fileToUpload" id="fileToUpload">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="md-form">
                                                    <i class="fas fa-pencil prefix grey-text"></i>
                                                    <label data-error="wrong" data-success="right" for="form8" style="color: #000000">Description</label>
                                                    <textarea name="txtDescription" type="text" id="form8" class="md-textarea form-control" rows="3"></textarea>

                                                </div>

                                                <br>

                                                <div class="md-form mb-3">
                                                    <label style="color: #000000">Available Status</label> <span style="color: #FF0004"> * &ensp; </span>
                                                    <select name="status" id=" " class="form-dropdown validate[required] dropdown filterElements" tyle="width:200px" data-component="dropdown" required="active">
                                                        <option type="text" value="Available"> Available </option>
                                                        <option type="text" value=" "> </option>
                                                    </select>

                                                    <br>

                                                    <label style="color: #000000">Recommended Status</label> <span style="color: #FF0004"> * &ensp; </span>
                                                    <select name="txtrec" id=" " class="form-dropdown validate[required] dropdown filterElements" tyle="width:200px" data-component="dropdown" required="active">
                                                        <option type="text" value=" "> </option>
                                                        <option type="text" value="Recommended"> Recommended </option>
                                                    </select>

                                                </div>


                                                <!-- <div class="md-form">
                                                <br>
                                                <input name="txtrec" type="checkbox" class="form-checkbox" id="input_12_0"  value="Recommended" />
                                                <label   id="label_input_12_0" for="input_12_0" style="color: #000000"> Recommended </label>

                                                <br>
                                                <input name="status" type="checkbox" class="form-checkbox" id="input_12_0"  value="Available" />
                                                <label   id="label_input_12_0" for="input_12_0" style="color: #000000"> Available </label>

                                            </div> -->

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
						  </div>
						</div>
					  </div>
					</div>
				-->



                        </div>
                        <br>


                        <div class="d-flex justify-content-center">
                            <p class="h5 text-primary createShowP">
                                <h3>Choose &ensp;</h3>
                            </p>
                            <p> </p>
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


                        <div class="table-responsive-sm">
                            <table id="myTable" class="table-striped table-bordered" style="width: auto">
                                <thead>
                                    <tr>
                                        <!--	  <th class="th-sm">ID

        </th> -->


                                        <th scope="col" class="text-center">Name </th>
                                        <th scope="col" class="text-center">Price </th>
                                        <!--       <th class="text-lg">Description	

        </th>-->
                                        <th scope="col" class="text-center">Status </th>
                                        <th scope="col" class="text-center">Manage </th>
                                    </tr>
                                </thead>
                                <tbody id="tbodyid1">


                                    <form>
                                        <?php

                                        require("Database_Connect.php");
                                        $sql = "select * from product";
                                        $result = $conn->query($sql);
                                        ?>





                                        <?php foreach ($result as $row) { ?>

                                            <tr class="text-center" data-categories="<?= $row["pro_type"] ?>">
                                                <th height="34" width="51" scope="row"><?= $row["pro_name"] ?></th>
                                                <th height="34" width="51" scope="row"><?= $row["pro_price"] ?></th>
                                                <th height="34" width="51" scope="row"><?= $row["pro_status"] ?><br><?= $row["recommend"] ?></th>


                                                </td>

                                                <th width="150">

                                                    <!--          <button type="button" class="btn btn-secondary" style="background-color: #28da52; "><span class="icon-plus-square"></button>  -->
                                                    <button type="button" class="btn-outline-warning" style="background-color:" data-toggle="modal" data-target="#menu_edit" data-proid="<?= $row["pro_id"] ?>">
                                                        <span class="icon-edit" style="color: #000000"></span></button>
                                                        <button type="button" class="btn-outline-danger" style="background-color:" data-toggle="modal" data-target="#menu_del" data-proid="<?= $row["pro_id"] ?>">
                                                        <span class="icon-delete" style="color: #000000"></span></button>

                                                </th>
                                            </tr>
                                        <?php } ?>
                                </tbody>
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
                                                        <label data-error="wrong" data-success="right" for="form34" style="color: #000000">Price</label> <span style="color: #FF0004"> * </span>
                                                        <input type="numbet" id="txtprice" name="txtprice" class="form-control validate" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:100px" size="10" value="" data-numbermin="0" data-numbermax="999" data-component="number" aria-labelledby="label_15" required="" step="any">
                                                    </div>


                                                    <!-- <div class="md-form mb-3">
                                                <label class="form-label form-label-left form-label-auto" id="label_11" for="input_11" style="color: #000000">
											  Image
											   <span style="color: #FF0004" >  *  </span>
											</label>
                                                <div id="cid_11" class="form-input jf-required">
                                                    <div data-wrapper-react="true">
                                                        <div data-wrapper-react="true">

                                                            <input type="file" id="input_11" name="q11_image[]" multiple="" class="form-upload-multiple validate[required]" data-imagevalidate="yes" data-file-accept="pdf, doc, docx, xls, xlsx, csv, txt, rtf, html, zip, mp3, wma, mpg, flv, avi, jpg, jpeg, png, gif"
                                                                data-file-maxsize="10854" data-file-minsize="0" data-file-limit="" data-component="fileupload" required="" />
                                                            <br> PNG, JPEG, GIF [Maximum upload file size: 5 MB]
                                                        </div>
                                                        <span style="display:none" class="cancelText">
												  Cancel
												</span>
                                                        <span style="display:none" class="ofText">
												  of
												</span>
                                                    </div>
                                                </div>

                                            </div> -->

                                                    <div class="md-form mb-3">
                                                        <label class="form-label form-label-left form-label-auto" id="label_11" for="input_11" style="color: #000000">
                                                            Image
                                                            <span style="color: #FF0004"> * </span>
                                                        </label>
                                                        <div id="cid_11" class="form-input jf-required">
                                                            <div data-wrapper-react="true">
                                                                <input type="file" name="fileToUpload" id="fileToUpload">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="md-form">
                                                        <i class="fas fa-pencil prefix grey-text"></i>
                                                        <label data-error="wrong" data-success="right" for="form8" style="color: #000000">Description</label>
                                                        <textarea type="text" id="txtDescription" name="txtDescription" class="md-textarea form-control" rows="3"></textarea>

                                                    </div>

                                                    <br>

                                                    <div class="md-form mb-3">
                                                        <label style="color: #000000">Available Status</label> <span style="color: #FF0004"> * &ensp; </span>
                                                        <select name="status" id="status" class="form-dropdown validate[required] dropdown filterElements" tyle="width:200px" data-component="dropdown" required="active">
                                                            <option type="text" value="Available"> Available </option>
                                                            <option type="text" value=" "> </option>
                                                        </select>

                                                        <br>

                                                        <label style="color: #000000">Recommended Status</label> <span style="color: #FF0004"> * &ensp; </span>
                                                        <select name="txtrec" id="txtrec" class="form-dropdown validate[required] dropdown filterElements" tyle="width:200px" data-component="dropdown" required="active">
                                                            <option type="text" value=" "> </option>
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
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
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
                                                <h5 class="modal-title" id="menu_del">Delete</h5>
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
                            <!-- ----------------- -->
                            <!-- <form>
    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div>
        </div>
    </footer>
                                </form> -->


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
</body>

</html>