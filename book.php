<?php 
include 'config.php';
$admin=new Admin();
$sid=$_GET['sid'];
$pid=$_GET['pid'];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>SANVI EVENT MANAGEMENT</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: SANVI EVENT MANAGEMENT
    Theme URL: https://bootstrapmade.com/SANVI EVENT MANAGEMENT-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
 <?php include 'header.php' ?>

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">SANVI<br><span>EVENT</span> MANAGEMENT</h1>
      <p class="mb-4 pb-0">NEAR SALUTE PLAZA, URWASTORE ,MANGALORE</p>
      
      <a href="#about" class="about-btn scrollto">About The Event</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Event</h2>
            <p>Event is something that happens , especially something important or unusual.It can be a planned or social occasion.
                            We at SANVI EVENT MANAGEMENT will try to give our best in making your important gatherings a special and budget friendly one.</p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>NEAR SALUTE PLAZA, URWASTORE ,MANGALORE</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Monday to sunday<br>9am-7pm</p>
          </div>
        </div>
      </div>
    </section>

 

  



   

   

    <!--==========================
      Subscribe Section
    ============================-->
   

    <!--==========================
      Buy Ticket Section
    ============================-->
    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h2>FOOD , DRINK AND MUSIC</h2>
          <p>MAKE EVERY EVENT COUNT.</p>
        </div>

        <div class="row">
            <?php $stmt=$admin->ret("SELECT * FROM `package` WHERE `sid`='$sid'");
        $row=$stmt->fetch(PDO::FETCH_ASSOC)
                
            ?>
    
     



        <div class="modal-dialog " role="document" >
          <div class="modal-content" style="width:700px">
            <div class="modal-header">
              <h4 class="modal-title">Book Now</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body ">
              <form method="POST" action="controller/booking.php">
              <input type="hidden" name="sid" value="<?php echo $sid ?>" id="">
                <input type="hidden" name="pid" value="<?php echo $pid ?>" id="">
                <div class="form-group">
                  <input type="date" class="form-control"  name="date" required placeholder="Date" min=<?php echo date('Y-m-d') ?>>
                </div>
                <div class="form-group">
                  <input type="time" class="form-control" name="time" required placeholder="Time" >
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="venue" required placeholder="Venue">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="address" required placeholder="Address">
                </div>
                <div class="row">
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" name="unit" required placeholder="Unit" id="units" onchange="shows()">
                </div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" readonly value="<?php echo $row['p_amount'] ?>" id="amount" name="amt"  required placeholder="Amount" >
                </div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" readonly name="tot" id="totals" required placeholder="Total">
                </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="city" required placeholder="City">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="state" required placeholder="State">
                </div>
              
                
              
                <div class="text-center">
                  <button type="submit" class="btn" name="booking">Order Now</button>
                </div>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
       
        </div>

      </div>


    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          

      </div>
    </section><!-- #contact -->

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo.jpg" alt="SANVI">
            <p>YOUR DAY OUR PLAY</p>
            <p>MAKING MEMORIES STAY</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
             
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
            NEAR SALUTE PLAZA, URWASTORE ,MANGALORE <br>
              <strong>Phone:</strong> +91 9611809644<br>
              <strong>Email:</strong> sanvi@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>SANVI EVENT MANAGEMENT</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SANVI EVENT MANAGEMENT
        -->
        Designed by <a href="https://bootstrapmade.com/">sanvi event management</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
<script>
  function show(){
   
    a=document.getElementById('unit').value;
    b=document.getElementById('amt').value;
    c=a*b;
    tot=document.getElementById('tot').value=c;

  }
</script>
<script>
  function shows(){
   
    d=document.getElementById('units').value;
    e=document.getElementById('amount').value;
    f=d*e;
    tot=document.getElementById('totals').value=f;

  }
</script>
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
