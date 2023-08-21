<?php
include('../connection.php');

session_start();
if (isset($_SESSION['aemail']) || isset($_SESSION['apass'] )) {

} else {
    header('location:adminlogin.php');
    exit();
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
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
 
<?php include('navtopbar.php') ?>




<?php

$sq = "SELECT COUNT(*) AS `count` FROM `tbl_menu`  " ;
$run = mysqli_query($con , $sq);
$fetchdata = mysqli_fetch_array($run);

$sq1 = "SELECT COUNT(*) AS `count` FROM `food_categories` " ;
$run1 = mysqli_query($con , $sq1);
$fetchdata1 = mysqli_fetch_array($run1);

$sq2 = "SELECT COUNT(*) AS `count` FROM `checkout` " ;
$run2 = mysqli_query($con , $sq2);
$fetchdata2 = mysqli_fetch_array($run2);




    

     ?>




<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">



    <div class="card-group mt-5">
  <div class="card">
    <div class="card-body">
      <h2 class = "mb-3 counter"><?php echo $fetchdata['count']?></h2>
      <h5 class="card-title">Total Menu Item</h5>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 5 mins ago</small>
    </div>
  </div>
  <div class="card">
    
    <div class="card-body">
    <h2 class = "mb-3"><?php echo $fetchdata1['count'] ?></h2>
      <h5 class="card-title">Food Category</h5>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 1 mins ago</small>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <h2 class = "mb-3"><?php echo $fetchdata2['count'] ?></h2>
      <h5 class="card-title">Total Checkouts</h5>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 2 mins ago</small>
    </div>
  </div>
</div>






    
	


















	   </div>
	 </div>
	</div><!--End Row-->

      <!--End Dashboard Content-->
	  
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
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
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
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
</body>
</html>
