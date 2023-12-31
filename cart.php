<?php 
session_start();

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
        <style>
            body{
                overflow-x: hidden;
            }
        </style>
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
<h1>Cart</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item"><a href="shops-grid.php">Shops</a></li>
<li class="breadcrumb-item active" aria-current="page">Cart</li>
</ol>
</nav>
</div>
</div>
</div>
</div>

  

<section class=" cart-section pt-100 pb-70 bg-black">
<div class="container">
<?php if (empty($_SESSION['items'])) {
    echo "<h2 class='text-center text-white'>Please add or buy somethig</h2>";
}
else{ ?>
<div class="cart-table cart-table-dark">
<table>
<thead>
<tr>
<th></th>
<th></th>
<th>Product</th>
<th>Id</th>
<th>Unit Price</th>
<th>Quantity</th>
<th>Total</th>
</tr>
</thead>
<tbody>
<?php
foreach ($_SESSION['items'] as $key => $value) {
    

?>
<tr>
    <form action="delete.php" method="post">
<td class="cancel"><button class = "bg-transparent text-white" type = "submit" ><i class='flaticon-cancel'></i></button></td>
<input type="hidden" name="item_name_ajax" value = "<?php echo $value['item_name'] ?>">
</form>
<td>
<div class="product-table-info">
<div class="product-table-thumb">
<img src="./assets/images/<?php echo $value['item_pic'] ?>" alt="product">
</div>
</div>
</td>
<td class="td-product-name"><?php echo $value['item_name'] ?></td>
<td>FA-001-<?php echo $key ?></td>
<td class ="">$ <?php echo $value['item_price'] ?>
<input type="hidden" class="get_price" value="<?php echo $value['item_price'] ?>" >
</td>

<td>
<div class="cart-quantity">
<!-- <button class="qu-btn dec">-</button>
<input type="text" class="qu-input" onchange="btnchange()" value="1">
<button class="qu-btn inc">+</button> -->
<!-- <input type="number" name="hh" class="quantity_get" onchange="btnchange()"> -->
<input class="input-group text-center get_quantity me-3 bg-white" type="number" min="1" max="10" onchange="subtotal()"
                                                                value="1" >
<!-- <input style="background-color:black;color:white; " type="number" name="" min="1" max="5" id="input_no.">
<script>document.getElementById("input_no.").placeholder = "1";
</script> -->
</div>
</td>
<td  class="total"><?php echo $value['item_price'] ?></td>
</tr>
<?php }} ?>

</tr>
</tbody>
</table>



</div>
<div class="row justify-content-between align-items-center mt-30">
<div class="col-sm-12 col-md-7 col-lg-5">
<div class="cart-coupon cart-info-item">
<!-- <form>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="Enter Coupon Code">
<button class="btn">Apply Coupon</button>
</div>
</form> -->
</div>
</div>
<div class="col-sm-12 col-md-4 col-lg-3">
<!-- <div class="cart-update cart-info-item">
<a href="#" class="btn full-width">
Update Cart
</a>
</div> -->
</div>
</div>
<form action="" method="post">
    <?php if(!empty($_SESSION['items'])){?>
<div class="row">
<div class="col-sm-12 col-md-8 col-lg-6 pb-30 offset-lg-3 offset-md-2">
<div class="cart-details mt-20">
<h3 class="cart-details-title color-white">Cart Totals</h3>
<div class="cart-total-box">
<div class="cart-total-item">
<h4>Sub Total</h4>

<p id ="g_total"></p>
</div>
<div class="cart-total-item">
<h4>Extra Charges</h4>
<div class="cart-total-checkarea">
<div class="cart-checkarea-item">
<div class="cart-check-box">
<label for="cart1">Delivery Fee</label>

</div>
<p id="delivery_fees" >Rs 150</p>

</div>
<div class="cart-checkarea-item">
<div class="cart-check-box">
<label for="cart2">Sale Tax </label>
</div>
<p id="sale_tax_fees">Rs 20</p>
</div>
<div class="cart-checkarea-item">
<div class="cart-check-box">
<label for="cart3">Discount</label>
</div>
<p id="Discount">Rs 50</p>

</div>
</div>
</div>
<div class="cart-total-item cart-total-bold">
<h4 class="color-white">Total</h4>
<p id="totalll" > 45</p>
</div>
</div>

<button type="button" class="btn" onclick="btn_send()">
      Proceed To Checkout
    </button>
</form>
</div>
</div>
</div>
</div>
</section>


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
<button class="btn btn-yellow" type="submit" >Subscribe <i class="flaticon-right-arrow-sketch-1"></i></button>
</div>
<div id="validator-newsletter" class="form-result color-white"></div>
</form>
</div>
</div>
<?php }?>
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
    <script>
        
        var price_get = document.getElementsByClassName('get_price');
        var quantity_get = document.getElementsByClassName('get_quantity');
        var total = document.getElementsByClassName('total');
        var gr_total = document.getElementById('g_total');
        // var sale_tax_fees = document.getElementById("sale_tax_fees");
        var totalll = document.getElementById("totalll");
    // var discount_display = document.getElementByClassName('discount');
    // var discount_mail = document.getElementByClassName('for_mail');
     
    
    
             function subtotal() {
            grand_total=0;
         for (let index = 0; index < price_get.length; index++) {
             total[index].innerText = "Rs." + (price_get[index].value)*(quantity_get[index].value);
             grand_total = grand_total + (price_get[index].value)*(quantity_get[index].value);
         }
         gr_total.innerText ='Rs.'+ grand_total;
         this.sales = (grand_total)+(20)+(150)+(50);
         totalll.innerText = "Rs "+ sales;
        }
        function btn_send(){
        let loc = "checkout.php?total="+ this.sales;
        // alert(loc);
           window.location.href= loc;
        }
         subtotal();
    
    </script>
    <script>
    FetchData();
    function FetchData() {

$.ajax({
  url: 'addtocart.php',
  type: 'POST',

  success: function (data) {
    console.log(data);
    $('#cart').html(data);
  }
})
//for navbar count
$.ajax({
  url: 'count.php',
  type: 'POST',

  success: function (data) {
    console.log(data);
    $('#nav').html(data);
  }
})
}
</script>
</body>
</html>