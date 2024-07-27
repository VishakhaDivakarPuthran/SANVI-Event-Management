<?php 
include 'config.php';
$admin=new Admin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>SANVI EVENT MANAGEMENT</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <!--Start sidebar-wrapper-->
 <?php
 include 'sidebar.php'
 ?>
   <!--End sidebar-wrapper-->
  

<!--Start topbar header-->
<?php
include  'header.php'
?>
<!--End topbar header-->
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Add category</div>
           <hr>
            <form action="controller/service_category.php" method="POST">
           <div class="form-group">
            <label for="input-1">Category</label>
            <input type="text" name="catname" class="form-control" id="input-1" required placeholder="Enter Category">
           </div>
        
           <div class="form-group">
            <button type="submit" name="category" class="btn btn-light px-5"><i class="icon-lock"></i> Add category</button>
          </div>
          </form>
         </div>
         </div>
      </div>

    
    </div><!--End Row-->
    <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Add Service</div>
           <hr>
            <form action="controller\service_category.php" method="POST" enctype="multipart/form-data" >
           <div class="form-group">
            <label for="input-1">Select category</label>
          <select name="cat_id" id="" class="form-control" required>
            <option value="" hidden>Select Category</option>
            <?php 
            $stmt=$admin->ret("SELECT * FROM `category`");
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
            <option value="<?php echo $row['catid']?>"><?php echo $row['catname']?></option>
            <?php } ?>
          </select>
           </div>
           <div class="form-group">
            <label for="input-2">Service name</label>
            <input type="text" class="form-control" id="input-2" required name="s_name" placeholder="Service name">
           </div>
           <div class="form-group">
            <label for="input-2">Service amount</label>
            <input type="text" class="form-control" id="input-2" required name="s_amount" placeholder="Enter service amount">
           </div>
        
           <div class="form-group">
            <label for="input-4">Service Image</label>
            <input type="file" class="form-control" id="input-4" required name="s_image" accept="image/*" placeholder="Service image">
           </div>
           <div class="form-group">
            <label for="input-3">Description</label>
            <input type="text" class="form-control" id="input-3" required name="s_description" placeholder="Enter description">
           </div>
          
           </div>
           <div class="form-group">
            <button type="submit" class="btn btn-light px-5" name="service"><i class="icon-lock"></i> Add service</button>
          </div>
          <div class="form-group">
            <a href="view_service.php"><button type="button" class="btn btn-light px-5" ><i class="icon-lock"></i> View Service</button></a>
          </div>
          </form>
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
