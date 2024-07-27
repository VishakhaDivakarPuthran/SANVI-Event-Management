<?php 
include 'config.php';
$admin=new Admin();
$csid=$_GET['cs_id'];
$uid=$_GET['uid'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SANVI EVENT MANAGEMENT</title>
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <?php include 'sidebar.php' ?>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <?php include 'header.php' ?>
        <!--End topbar header-->
<?php 
$stmt=$admin->ret("SELECT * FROM `customize` INNER JOIN `user` ON user.uid=customize.uid WHERE `cs_id`='$csid'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row mt-3">
                    <div class="col-lg-4">
                        <div class="card profile-card-2">
                            
                            <div class="card-body pt-5">
                                <!-- <img src="controller/<?php echo $row['p_image'] ?>" alt="profile-image" class="profile"> -->
                                <h5 class="card-title">Name: <?php echo $row['uname'] ?></h5>
                                <h5 class="card-title">Email: <?php echo $row['uemail'] ?></h5>
                                <h5 class="card-title">Phone:<?php echo $row['uphoneno'] ?></h5>
                                <h5 class="card-title">Address: <?php echo $row['uaddress'] ?></h5>
                                
                               
                            </div>
<form action="controller/update_customize.php" method="POST">
    <input type="hidden" name="csid" value="<?php echo $csid ?>" id="">
    <input type="hidden" name="uid" value="<?php echo $uid ?>" id="">
                            <div class="card-body border-top border-light">
                                <div class="media align-items-center">
                                    
                                    <div class="media-body text-left ml-3">
                                        <div class="progress-wrapper">
                                        <select name="status" id="" required class="form-control">
            <option value="" hidden>Select Status</option>
            
            <option value="Accepted">Accepted</option>
            <option value="Rejected">Rejected</option>
            
           
          </select>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="media align-items-center">
                                    
                                    <div class="media-body text-left ml-3">
                                        <div class="progress-wrapper">
                                        <div class="form-group">
            <label for="input-2">Package Amount</label>
            <input type="text" class="form-control" id="input-2" name="tot" value="<?php echo $row['total'] ?>" placeholder="Package Amount">
           </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="media align-items-center">
                                
                                    <div class="media-body text-left ml-3">
                                        <div class="progress-wrapper">
                                        <div class="form-group">
            <label for="input-3">Description</label>
            <textarea name="disc" id="" cols="30" rows="10" class="form-control"></textarea>
           </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="media align-items-center">
                                    
                                    <div class="media-body text-left ml-3">
                                        <div class="progress-wrapper d-flex justify-content-center">
                                            <button class="btn btn-success w-50" type="submit" name="cus">Update</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            </form>
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                    
                                    
                                   
                                </ul>
                                <div class=" p-3">
                                    
                                   
                                    <div class="tab-pane" id="edit">
                                        <form>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Venue</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" readonly type="text" value="<?php echo $row['venue'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control"  readonly type="text" value="<?php echo $row['address'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">City</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" readonly type="text" value="<?php echo $row['city'] ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">State</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" readonly type="text" value="<?php echo $row['state'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Discription</label>
                                                <div class="col-lg-9">
                                                    <textarea name="" id="" readonly class="form-control" cols="30" rows="10"><?php echo $row['disc'] ?></textarea>
                                                    </div>
                                            </div>
                                            <div class="form-group row" style="margin-left:180px;">
                                            
                                                <div class="col-lg-6">
                                                <label class="col-form-label form-control-label">Unit</label>
                                                    <input class="form-control" readonly type="text" value="<?php echo $row['unit'] ?>" placeholder="Unit">
                                                </div>
                                                <div class="col-lg-3">
                                                <label class=" col-form-label form-control-label">amount</label>
                                                    <input class="form-control" readonly type="text" value="<?php echo $row['amt'] ?>" placeholder="Amount">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Total</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" readonly type="text" value="<?php echo $row['total'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Time</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" readonly type="text" value="<?php echo $row['time'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Date</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" readonly type="text" value="<?php echo $row['date'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <div class="col-lg-9">
                                                    <input type="reset" class="btn btn-secondary" value="Cancel">
                                                    <input type="button" class="btn btn-primary" value="Save Changes">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!--start overlay-->
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->

            </div>
            <!-- End container-fluid-->
        </div><!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
      
        <!--End footer-->

        <!--start color switcher-->
        <div class="right-sidebar">
            <div class="switcher-icon">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </div>
            <div class="right-sidebar-content">

                <p class="mb-0">Gaussion Texture</p>
                <hr>

                <ul class="switcher">
                    <li id="theme1"></li>
                    <li id="theme2"></li>
                    <li id="theme3"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>

                <p class="mb-0">Gradient Background</p>
                <hr>

                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                    <li id="theme13"></li>
                    <li id="theme14"></li>
                    <li id="theme15"></li>
                </ul>

            </div>
        </div>
        <!--end color switcher-->

    </div><!--End wrapper-->


    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>

</body>

</html>