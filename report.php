<?php
include 'config.php';
$admin = new Admin();
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

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

            <div class="bg-light rounded h-100 p-4">
          <h6 class="mb-4">Report</h6>
          <form action="report.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >Start Date</label
              >
              <input
                type="date"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                name="date1"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >End Date</label
              >
              <input
                type="date"
                class="form-control"
                id="exampleInputPassword1"
                name="date2"
              />
            </div>

            <button type="submit" class="btn btn-primary" name="report">
              Submit
            </button>
            <button type="submit" class="btn btn-danger">Clear</button>
          </form>
        </div>


        <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
          <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Recent Salse</h6>
            <a href="">Show All</a>
          </div>
          <?php
        $start_date = 0;
        $end_date = 0;
        if (isset($_POST['report'])) {
            $start_date = $_POST['date1'];
            $end_date = $_POST['date2'];
        }

        ?>

          <div class="table-responsive">
            <table
              class="table text-start align-middle table-bordered table-hover mb-0"
            >
              <thead>
                <tr class="text-dark">
                  <th scope="col">SL.NO</th>
                  <th scope="col">Package Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Units</th>
                  <th scope="col">Total</th>
                  <th scope="col">date</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $i = 1;
                    $stmt = $admin->ret("SELECT * FROM `booking` INNER JOIN
                `package` ON package.p_id=booking.p_id WHERE `bdate`
                BETWEEN '$start_date' AND '$end_date' "); while ($row =
                $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                  <td><?php echo $i++ ?></td>
                  <td><?php echo $row['p_name'] ?></td>
                  <td><?php echo $row['p_amount'] ?></td>
                  <td><?php echo $row['units'] ?></td>
                  <td><?php echo $row['total'] ?></td>
                  <td><?php echo $row['bdate'] ?></td>
                </tr>
                <?php }  ?>
              </tbody>
            </table>
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


