<?php 
include 'config.php';
$admin=new Admin();
$pid=$_GET['pid'];
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

    
    <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Add Package</div>
           <hr>
           <?php
    $stmt2=$admin->ret("SELECT * FROM `package` WHERE `p_id`='$pid'");
    $row2=$stmt2->fetch(PDO::FETCH_ASSOC);
    ?>
            <form action="controller\update_package.php" method="POST" enctype="multipart/form-data" >
                <input type="hidden" name="pid" value="<?php echo $pid ?>" id="">
                <div class="form-group">
  <label for="input-1">Select category</label>
  <select name="s_id" id="" class="form-control">
    <option value="" hidden>Select Services</option>
    <?php
    $stmt = $admin->ret("SELECT * FROM `service` GROUP BY `sname`");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $selected = ($row['sid'] == $selectedService) ? 'selected' : '';
      ?>
      <option value="<?php echo $row['sid'] ?>" <?php echo $selected ?>><?php echo $row['sname'] ?></option>
    <?php
    }
    ?>
  </select>
</div>

           <div class="form-group">
            <label for="input-2">Package Name</label>
            <input type="text" class="form-control" id="input-2" name="p_name" value="<?php echo $row2['p_name'] ?>" placeholder="Package Name">
           </div>
           <div class="form-group">
            <label for="input-3">Description</label>
            <input type="text" class="form-control" id="input-3" name="p_description" value="<?php echo $row2['p_description'] ?> placeholder="Enter description">
           </div>
           <div class="form-group">
            <label for="input-4">Package Image</label>
            <input type="file" class="form-control" id="input-4" name="p_image" accept="image/*" placeholder="Package image">
           </div>
           <div class="form-group">
            <label for="input-2">Package Amount</label>
            <input type="text" class="form-control" id="input-2" name="p_amount" value="<?php echo $row2['p_amount'] ?>" placeholder="Package Amount">
           </div>
           <div class="form-group">
            <label for="input-1">Unit</label>
          <select name="unit" id="" class="form-control">
            <option value="" hidden>Select Unit</option>
            
            <option value="Day">Day</option>
            <option value="Night">Night</option>
            <option value="Hour">Hour</option>
            <option value="Plate">Plate</option>
           
          </select>
           </div>
           <div class="table-responsive">
                      <table class="table " id="dynamic_field">

                        <label for="">Package Items</label>
                        <td class="col-sm-10"> 
                            <?php 
                            $ing=$row2['item'];
                            $eng=explode(',',$ing);
                            foreach($eng as $value){
                                echo "
                                <input type='text' required name='var[]' placeholder='Package Items' class='form-control name_list' value='$value'/>
                                ";
                            }
                            ?>
                           
                        
                        </td>
                        

                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>

                      </table>
                    </div>
           
          
           </div>
           <div class="form-group">
            <button type="submit" class="btn btn-light px-5" name="package"><i class="icon-lock"></i> Update service</button>
          </div>
          <div class="form-group">
            <a href="view_package.php"><button type="button" class="btn btn-light px-5" ><i class="icon-lock"></i> View Service</button></a>
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
  <script>
    $(document).ready(function() {
      var i = 1;
      $('#add').click(function() {
        i++;
        $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="var[]" placeholder="Package Items" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
      });

      $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
      });

      $('#submit').click(function() {
        $.ajax({
          url: "name.php",
          method: "POST",
          data: $('#add_name').serialize(),
          success: function(data) {
            alert(data);
            $('#add_name')[0].reset();
          }
        });
      });

    });
  </script>
</body>
</html>
