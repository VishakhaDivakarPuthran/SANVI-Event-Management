<?php
include 'config.php';
$admin = new Admin();
$uid = $_SESSION['u_id'];
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                            We at SANVI EVENT MANAGEMENT will try to give our best in making your important gatherings a special and budget friendly one.
                        </p>
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



        <div class="container mt-5 mb-5">
            
             
                    <?php
                    $stmt = $admin->ret("SELECT * FROM `booking`  WHERE `uid`='$uid'");
                   $row = $stmt->fetch(PDO::FETCH_ASSOC)
                    ?>


                        <!-- Modal -->
                     
                            <form action="controller/payment.php" method="POST">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">CHOOSE YOUR PAYMENT METHOD</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        <div class="form-group ">
                                            <label class="col-lg-3 col-form-label form-control-label">Total </label>
                                            <div class="col-lg-12">
                                                <input class="form-control" name="adv" readonly type="text" value="<?php echo $row['total']*30/100; ?>">
                                            </div>
                                        </div>
                                        <input class="form-control" name="tot" readonly type="hidden" value="<?php echo $row['total']; ?>">
                                        <input class="form-control" name="bid" readonly type="hidden" value="<?php echo $row['bid']; ?>">
                                        <input type="hidden"  name="amt" value="<?php echo $row['total'] ?>" id="">
                                        <div class="payment-methods mb-50">
                                            <div class="d-block my-3">
                                                <div class="custom-control custom-radio">
                                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" value="upi" id="upi" onclick="cardform(this.value)" required>
                                                    <label class="custom-control-label" for="credit">UPI/Netbanking</label>
                                                    <div style="display: none;" id="upi_div">
                                                        <b>scan and pay</b>
                                                        <img src="Admin\assets\images\qr_code1.jpg">

                                                        <!-- transaction id input form-->
                                                        <div class="col-md-6 mb-3">
                                                            <p><input type="text" placeholder="Enter Transaction id" class="form-control inputtxt" name="tans"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="custom-control custom-radio">
                                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" value="card" id="card" onclick="cardform(this.value)" required>
                                                    <label class="custom-control-label" for="paypal">Debit card/Credit card</label>
                                                    <div style="display: none;" id="card_div">
                                                        <!-- 🔴 card paymen  body starts -->
                                                        <div class="container d-flex  main">
                                                            <div class="card">
                                                                <!-- <div class="d-flex justify-content-between px-3 pt-4"> <span class="pay">Pay amount</span>
                                                                <div class="amount">
                                                                    <div class="inner"><span class="dollar">$</span><span class="total">32</span></div>
                                                                </div>
                                                            </div> -->

                                                                <!-- <form action=""> -->
                                                                <div class="px-3 pt-3">
                                                                    <label for="card number" class="d-flex justify-content-between"><span class="labeltxt">CARD NAME</span></label>
                                                                    <input type="text" class="form-control inputtxt" id="cc-name" name="card_name" placeholder="CARD NAME" minlength="16" maxlength="16">
                                                                    <div class="invalid-feedback">
                                                                        Name on card is required
                                                                    </div>
                                                                </div>
                                                                <div class="px-3 pt-3">
                                                                    <label for="card number" class="d-flex justify-content-between"><span class="labeltxt">CARD NUMBER</span><img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" width="25" class="image" /></label>
                                                                    <input type="text" class="form-control inputtxt" id="card_no" name="card_no" placeholder="0000 0000 0000 0000" minlength="16" maxlength="16">
                                                                    <div class="invalid-feedback">
                                                                        Credit card number is required
                                                                    </div>
                                                                </div>


                                                                <div class="d-flex justify-content-between px-3 pt-4">
                                                                    <div><label for="date" class="exptxt"> Expiry </label><input type="text" class="form-control expiry" placeholder="MM / YY" id="card_expiry" name="card_expiry" minlength="5" maxlength="5">
                                                                        <div class="invalid-feedback">
                                                                            Expiration date required
                                                                        </div>
                                                                    </div>
                                                                    <div><label for="cvv" class="cvvtxt">CVV / CVC</label><input type="text" name="cvv" class="form-control cvv" id="exp" minlength="3" maxlength="3">
                                                                        <div class="invalid-feedback">
                                                                            Security code required
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex justify-content-between px-3 pt-4 pb-4">
                                                                    <!-- <div><button type="reset" class="btn btn-light cancel">clear</button></div> -->

                                                                    <!-- <div><button type="button" class="btn btn-primary payment">Make Payment</button></div> -->
                                                                    <!-- <div><input type="submit" class="btn btn-primary payment" value="Make Payment"></div> -->
                                                                </div>
                                                                <!-- </form> -->
                                                            </div>
                                                        </div>
                                                        <!-- 🔴 card paymen  body ends -->

                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>

                                    <!-- Modal Footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="pay" class="btn btn-primary">Submit</button>
                                    </div>

                                </div>
                            </div>
                            </form>
                     
  



        </div>







    </main>


    <!--==========================
    Footer
  ============================-->
    <script>
        function cardform(myvalue) {

            if (myvalue == 'card') { //radio button id
                document.getElementById('card_div').style.display = 'block'; //div id
                document.getElementById('upi_div').style.display = 'none';

            } else if (myvalue == 'upi') {
                document.getElementById('card_div').style.display = 'none';
                document.getElementById('upi_div').style.display = 'block';

            } else {
                document.getElementById('card_div').style.display = 'none';
                document.getElementById('upi_div').style.display = 'none';

            }

        }
    </script>
    <?php include 'footer.php' ?>

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
></script>
</body>

</html>