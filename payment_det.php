<?php
include 'config.php';
$admin = new Admin();
$payid = $_GET['payid'];
$uid = $_GET['uid'];

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
                                            $stmt=$admin->ret("SELECT * FROM `payment` INNER JOIN `booking` ON booking.bid=payment.bid INNER JOIN `user` ON user.uid=booking.uid
                                            ");
                                            $row=$stmt->fetch(PDO::FETCH_ASSOC);
                                            ?>
        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row mt-3">
                    

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">



                                </ul>
                                <div class=" p-3">


                                    <div class="tab-pane" id="edit">
                                        <form action="controller/update_payment.php" method="POST">
                                            <input type="hidden" name="payid" value="<?php echo $payid ?>" id="">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">USER NAME</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" readonly type="text" value="<?php echo $row['uname'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Venue</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" readonly type="text" value="<?php echo $row['venue'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Pay Method</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" readonly type="text" value="<?php echo $row['paymethod'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Transaction Id</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" readonly type="text" value="<?php echo $row['transid'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Card Name</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" readonly type="text" value="<?php echo $row['cardname'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Card Number</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" readonly type="text" value="<?php echo $row['cardno'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Total</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" name="tot" readonly type="text" value="<?php echo $row['total'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">ADVANCE</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" name="adv" readonly type="text" value="<?php echo $row['b_advance'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">BALANCE</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" readonly type="text" value="<?php echo $row['balanceamt'] ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">STATUS</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" readonly type="text" value="<?php echo $row['status'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">RECEIVED</label>
                                                <div class="col-lg-9">
                                                    <input class="form-control" readonly type="text" value="<?php echo $row['p_received'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Select Status</label>
                                                <select name="status" id="" class="form-control">
            <option value="" hidden>Select Status</option>
            
            <option value="Paid">Paid</option>
            <option value="Pending">Pending</option>
            
           
          </select>
                                            </div>
                                            
                                            

                                            
                                           
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <div class="col-lg-9">
                                                    <button type="submit" name="upadte_cus" class="btn btn-primary" >Save Changes</button>
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