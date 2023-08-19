<?php
 session_start();
 include('connection.php');
 use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

//  if(isset($_GET['total'])){
//     $total = $_GET['total'];
//     // echo "<script>alert('". $_GET['total'] ."')</script>";
    
// }
if (isset($_POST['btn_checkout'])) {
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $country = $_POST['country'];
    $town = $_POST['town'];
    $street = $_POST['street'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $order = $_POST['order'];

    
    $date = date("Y-m-d-H-s");
    $query_i_order = "    INSERT INTO `tbl_order`( `order_time`, `f_name`, `l_name`, `country`, `town`, `street`, `phone`, `email`, `order_note`) VALUES ('$date','$f_name','$l_name','$country','$town','$street','$phone','$email','$order')";
    $query_i_order_run = mysqli_query($con,$query_i_order);
$last_row = mysqli_insert_id($con);
    //   echo $last_row;
    foreach($_SESSION['items'] as $value){
     $p_name =   $value['item_name'];
     $p_price =   $value['item_price'];
    

    $query_i_items = "INSERT INTO `checkout`( `p_name`, `p_price`, `order_id`) VALUES ('$p_name','$p_price','$last_row')";
    $query_i_items_run = mysqli_query($con,$query_i_items);
    if ($query_i_items_run) {
        session_destroy();
    }
   
    
}
try {
    //Server settings
    // $mail->SMTPDebug = 2; //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    // $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
    $mail->Host = 'mail.worldoftech.co'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = 'sarim@worldoftech.co'; //SMTP username
    // $mail->Password = 'eyffwjbomaknwdjy'; //SMTP password
    $mail->Password = 'admin_sarim_786$$$@';
    $mail->SMTPSecure = 'ssl'; //Enable implicit TLS encryption
    $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`



    //Recipients
    $mail->setFrom('sarim@worldoftech.co', 'PIZZA PALACE');
    $mail->addAddress($email , $l_name); //Add a recipient

    

    $body = "<p>Hello <b>" . $l_name . "!</b></p><br><p><b>Call: +923362100225</b></p><h4>Your Total Amount Of Order:  Rs ". $_GET['total'] ."</h4><br><br><p>Best Regards,<br>
     <b>Pizza Palace</b></p><h1>Thanks For Shopping</h1>";

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Order Details | Pizza Palace';
    $mail->Body = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
  

    echo 'Message has been sent';
    echo "<script>alert('Form submitted successfuly')</script>";
    header('location:index.php');
    exit();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }

    // if(isset($_POST['btn_checkout'])){
    // $user_name = $_POST['user_name'];
    // $user_email = $_POST['user_email'];
    // $amount_mail = $_POST['amount_mail'];
    // $discount = "<script>var abc = document.getElementById('value').value; document.write(abc)</script>";
    
    
    // }
    
    
 ?> 
<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="utf-8">
<meta name="description" content="Fafo">
<meta name="keywords" content="HTML,CSS,JavaScript">
<meta name="author" content="HiBootstrap">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<title>Fafo - Fast Food & Restaurant HTML Template</title>
<link rel="icon" href="assets/images/tab.png" type="image/png" sizes="16x16">

<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css" type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/animate.min.css" type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css" type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/slick.css" type="text/css" media="all" />
<link rel="stylesheet" href="assets/css/slick-theme.css" type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/jquery-ui.css" type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/jquery.timepicker.min.css" type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/magnific-popup.min.css" type="text/css" media="all" />

<link rel='stylesheet' href='assets/css/icofont.min.css' type="text/css" media="all" />

<link rel='stylesheet' href='assets/css/flaticon.css' type="text/css" media="all" />

<link rel='stylesheet' href='assets/css/settings.css' type="text/css" media="all" />
<link rel='stylesheet' href='assets/css/layers.css' type="text/css" media="all" />
<link rel='stylesheet' href='assets/css/navigation.css' type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all" />

<link rel="stylesheet" href="assets/css/theme-dark.css" type="text/css" media="all" />
<!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>
<body>

<?php include('navbar.php'); ?>


<div class="header-bg header-bg-page">
<div class="header-padding position-relative">
<div class="header-page-shape">
<div class="header-page-shape-item">
<img src="assets/images/header-shape-1.png" alt="shape">
</div>
<div class="header-page-shape-item">
<img src="assets/images/header-shape-2.png" alt="shape">
</div>
 <div class="header-page-shape-item">
<img src="assets/images/header-shape-3.png" alt="shape">
</div>
<div class="header-page-shape-item">
<img src="assets/images/header-shape-1.png" alt="shape">
</div>
<div class="header-page-shape-item">

</div>
<div class="header-page-shape-item">
<img src="assets/images/header-shape-1.png" alt="shape">
</div>
<div class="header-page-shape-item">

</div>
</div>
<div class="container">
<div class="header-page-content">
<h1>Checkout</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item"><a href="shops-grid.html">Shops</a></li>
<li class="breadcrumb-item active" aria-current="page">Checkout</li>
</ol>
</nav>
</div>
</div>
</div>
</div>


<div class="checkout-section pt-100 pb-70 bg-black">
<div class="container">
<div class="row">
<!-- <div class="col-sm-12 col-md-7 col-lg-8 pb-30"> -->
<div class="checkout-item">
<div class="sub-section-title">
<h3 class="color-white">Billing Details</h3>
</div>
<div class="checkout-form">
<form method="post">
<div class="row">
<div class="col-sm-12 col-md-6">
<div class="form-group mb-20">
<div class="input-group">
<input type="text" name="f_name" class="form-control" required placeholder="First Name*" />
</div>
</div>
</div>
<div class="col-sm-12 col-md-6">
<div class="form-group mb-20">
<div class="input-group">
<input type="text" name="l_name" class="form-control" required placeholder="Last Name*" />
</div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group mb-20">
<div class="input-group">
<select name="country" class="form-control">
<option value="1">Your Country*</option>
<option value="2">USA</option>
<option value="3">UK</option>
<option value="4">Germany</option>
</select>
</div>
 </div>
</div>
<div class="col-sm-12">
<div class="form-group mb-20">
<div class="input-group">
<select name="town" class="form-control">
<option value="1">Town*</option>
<option value="2">New York</option>
<option value="3">Florida</option>
</select>
</div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group mb-20">
<div class="input-group">
<input type="text" name="street" class="form-control" placeholder="Street" />
</div>
</div>
</div>


<div class="col-sm-12">
<div class="form-group mb-20">
<div class="input-group">
<input type="tel" name="phone" class="form-control" required placeholder="Phone No*" />
</div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group mb-20">
<div class="input-group">
<input type="email" name="email" class="form-control" required placeholder="Email*" />
</div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group mb-20">
<div class="input-group input-group-textarea">
<textarea name="order" class="form-control" rows="5" placeholder="Order Notes*"></textarea>
</div>
</div>
</div>
</div>
<button type="submit" name="btn_checkout"   class="btn full-width">Place Order</button>
</form>
</div>
</div>
</div>
<div class="col-sm-12 col-md-5 col-lg-4 pb-30">
<div class="checkout-item">
<div class="checkout-details cart-details mb-30">
<h3 class="cart-details-title color-white">Cart Totals</h3>
<div class="cart-total-box">
<div class="cart-total-item pt-0">
<h4 class="color-main">Crispy Chicken Burger</h4>
<p>$ 9.00</p>
</div>
<div class="cart-total-item">
<h4 class="color-main">Red Sauce Pizza</h4>
<p>$ 8.00</p>
</div>
<div class="cart-total-item">
<h4>Sub Total</h4>
<p>$ 45</p>
</div>
<div class="cart-total-item cart-total-bold">
<h4 class="color-white">Total</h4>
<p><?php
if (!empty($_GET['total'])) {
    echo "Rs " . $_GET['total'];
}
else{
    echo "Rs 0";
}
?></p>
</div>
</div>
</div>
<!-- <div class="checkout-payment-area">
<h3 class="color-white cart-details-title">Payment Method</h3>
<div class="checkout-form">
<form>
<div class="row">
<div class="col-sm-12">
<div class="cart-check-box">
<input type="radio" name="ship" id="checkout1">
<label for="checkout1">Direct Bank Transfer</label>
<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
</div>
</div>
<div class="col-sm-12">
<div class="cart-check-box">
<input type="radio" name="ship" id="checkout2">
<label for="checkout2">Cash On Delivery</label>
</div>
</div>
<div class="col-sm-12">
<div class="cart-check-box">
<input type="radio" name="ship" id="checkout3">
<label for="checkout3">Paypal</label>
</div>
</div>
<div class="col-sm-12">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="checkout4">
 <label class="custom-control-label" for="checkout4">I’ve read and accept the <a href="terms-conditions.html">Terms & Conditions</a> <span class="color-main">*</span></label>
</div>
</div>
</div>
</form>
</div>
</div> -->
</div>
</div>
</div>
</div>
</div>


<section class="subscribe-section mural-bg pt-100 pb-70 bg-main">
<div class="container">
<div class="subscribe-grid">
<div class="subscribe-item">
<div class="section-title text-center text-lg-start m-0">
<h2 class="color-white">Subscribe Our Newsletter</h2>
<p>Don't miss any upcoming event & Get your coupon via email.</p>
</div>
</div>
<div class="subscribe-item">
<div class="subscribe-form">
<form class="newsletter-form newsletter-form-white" data-bs-toggle="validator">
<div class="form-group">
<div class="input-group">
<input type="email" id="emails" class="form-control" placeholder="Enter Email Address*" name="EMAIL" required autocomplete="off">
</div>
<button class="btn btn-yellow" type="submit">Subscribe <i class="flaticon-right-arrow-sketch-1"></i></button>
</div>
<div id="validator-newsletter" class="form-result color-white"></div>
</form>
</div>
</div>
</div>
</div>
</section>


<?php include('footer.php'); ?>


<?php  
 include ('modal.php'); ?>


<div class="scroll-top" id="scrolltop">
<div class="scroll-top-inner">
<span><i class="flaticon-up-arrow"></i></span>
</div>
</div>


<script src="assets/js/jquery.min.js"></script>
 <script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery-ui.js"></script>

<script src="assets/js/jquery.timepicker.min.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/slick.min.js"></script>

<script src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/js/jquery.themepunch.tools.min.js"></script>

<script src="assets/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/js/extensions/revolution.extension.video.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/jquery.meanmenu.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>