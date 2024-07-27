<?php 
include 'config.php';
$admin=new Admin();
$uid=$_SESSION['u_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    body {
      background-image: url("img/luxurious-dinner-hall-with-large-crystal-chandelier.jpg");
      background-size: cover;
    }
  </style>
  <title>Profile Page</title>
</head>

<body>
  <?php 
  $stmt=$admin->ret("SELECT * FROM `user` WHERE `uid`='$uid'");
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
  ?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Profile</h5>
            <hr>
            
           
            <div class="mt-4">
              <h5>Contact Information</h6>
              <p>Name: <?php echo $row['uname'] ?></p>
              <p>Email: <?php echo $row['uemail'] ?></p>
              <p>Phone: <?php echo $row['uphoneno'] ?></p>
              <p>Address: <?php echo $row['uaddress'] ?></p>
              
            </div>
            <div class="text-center mt-4">
              <button class="btn btn-primary" data-toggle="modal" data-target="#editModal">Edit Profile</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Profile Modal -->
<!-- Edit Modal -->
<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controller/profile.php" method="POST">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['uname'] ?>" id="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="name">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $row['uemail'] ?>" id="name" placeholder="Enter your Email">
          </div>
          <div class="form-group">
            <label for="name">Phone</label>
            <input type="text" class="form-control" name="phone" value="<?php echo $row['uphoneno'] ?>" id="name" placeholder="Enter your Phone">
          </div>
          <div class="form-group">
            <label for="occupation">Address</label>
            <input type="text" class="form-control" name="address" value="<?php echo $row['uaddress'] ?>" id="occupation" placeholder="Enter your address">
          </div>
         
          <div class="text-center">
            <button type="submit" class="btn btn-primary" name="prof">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
