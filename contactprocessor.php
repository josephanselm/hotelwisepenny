<?php 

/*Subject and email variables*/
$emailSubject = 'Hotel Wise Penny Message';
$webMaster = 'reservations@hotelwisepennysuites.com';

/*Gathering Data Variables*/

$Namefield = $_POST['name'];
$emailField = $_POST['email'];
$phoneField = $_POST['phone'];
$messageField = $_POST['message'];



$body =<<<EOD
<br><hr><br>
<b>Name:</b> $Namefield <br>
<b>Email:</b> $emailField <br>
<b>Phone number:</b> $phoneField <br>
<b>Message:</b> $messageField <br>
EOD;


	$header = "From: $Namefield\r\n";
	$header = "Content-type: text/html\r\n";
	$success = mail($webMaster, $emailSubject, $body, $header );  

/* Results Rendered as HTML */

$theResults = <<<EOD
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>WISE Penny Suites and Spa | Best hotel in Delta</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- uniform -->
<link type="text/css" rel="stylesheet" href="assets/uniform/css/uniform.default.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/wow/animate.css" />


<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">


<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<link rel="stylesheet" href="assets/style.css">

</head>

<body id="home">


<!-- top 
  <form class="navbar-form navbar-left newsletter" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter Your Email Id Here">
        </div>
        <button type="submit" class="btn btn-inverse">Subscribe</button>
    </form>
 top -->

<!-- header -->
<nav class="navbar  navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="images/logo.png"  alt="holiday crown"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav">        
        <li><a href="index.php">Home </a></li>
        <li><a href="rooms-tariff.php">Rooms & Tariff</a></li>        
        <li><a href="introduction.php">Introduction</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div><!-- Wnavbar-collapse -->
  </div><!-- container-fluid -->
</nav>
<!-- header -->
<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    <span class="sr-only">45% Complete</span>
  </div>
</div>
<div class="jumbotron">
  <h1>Hello, $Namefield !</h1>
  <p>Thanks for contacting Wise Penny Suites and Spa, we would get back to you in a moment through your email $emailField</p>
  <p><a class="btn btn-primary btn-lg" href="http://www.hotelwisepennysuites.com" role="button">Back to Home Page</a></p>
</div>








<footer class="spacer">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h4>Wise Penny Suites and Spa</h4>
                    <p>Wise Penny Suites and Spa is a Luxurious Hotel in Asaba Delta State Nigeria. its Situated in a serene and friendly vicinity. Wise penny offers you an hospitable atmosphere where you are given a royal treat, Our Services cuts across Spa, Gym, Hospitality in a most unique and friendly manner. Here in Wise Penny Suites and Spa, Your Comfort remains our quest. Offering a world class Hospitable Hotel Services here in Nigeria is our Goal. Our Highly Professional Staff and Attendants ensures you never have a reason to worry and our facility such as Internet enabled Wifi and Constant Electricity would keep you connected while you lodge with us. </p>
                </div>              
                 
                 <div class="col-sm-3">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="rooms-tariff.php">Rooms & Tariff</a></li>        
                        <li><a href="introduction.php">Introduction</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="tour.php">Tour Packages</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                 <div class="col-sm-4 subscribe">
                    <h4>Subscription</h4>
                    <form role="form" method="post" action="subscriptions.php" role="form" >                    
                    <div class="input-group">
                    <input type="email" class="form-control" name = "subscriptions"  placeholder="Enter email id here" required>
                    <span class="input-group-btn">
                    <button class="btn btn-default" >Get Notify</button>                    
                    </span>
                    </div>
                    </form>
                    <div class="social">
                    <a href="#"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"  data-toggle="tooltip" data-placement="top" data-original-title="instragram"></i></a>
                    <a href="#"><i class="fa fa-twitter-square" data-toggle="tooltip" data-placement="top" data-original-title="twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square" data-toggle="tooltip" data-placement="top" data-original-title="pinterest"></i></a>
                    <a href="#"><i class="fa fa-tumblr-square" data-toggle="tooltip" data-placement="top" data-original-title="tumblr"></i></a>
                    <a href="#"><i class="fa fa-youtube-square" data-toggle="tooltip" data-placement="top" data-original-title="youtube"></i></a>
                    </div>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container-->    
    
    <!--/.footer-bottom--> 
</footer>

<div class="text-center copyright">Powered by <a href="http://pointxt.com">PointX</a></div>

<a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>




<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>





<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>

<!-- uniform -->
<script src="assets/uniform/js/jquery.uniform.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>

<!-- jquery mobile -->
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>


<!-- custom script -->
<script src="assets/script.js"></script>










</body>
</html>

EOD;

echo "$theResults"

?>