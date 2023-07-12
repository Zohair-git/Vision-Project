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

</div>
<div class="container">
<div class="header-page-content">
<h1>My Orders</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">My Orders</li>
</ol>
</nav>
</div>
</div>
</div>
</div>


<div class="account-page-section pt-100 pb-70 bg-black">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-4 pb-30">
<div class="account-sidebar around-border">
<ul class="account-sidebar-list">
<li><a href="my-account.php">My Account</a></li>
<li class="active"><a href="my-orders.php">My Orders</a></li>
<li><a href="my-addresses.php">My Addresses</a></li>
<li><a href="index.php">Sign Out</a></li>
</ul>
</div>
</div>
<div class="col-sm-12 col-md-8 col-lg-8 pb-30">
<div class="account-info">
<div class="my-order">
<div class="sub-section-title">
<h3 class="color-white">My Orders</h3>
</div>
<div class="product-list-form m-0">
<form>
<select>
<option value="all">All</option>
<option value="pending">Pending</option>
<option value="confirmed">Confirmed</option>
<option value="shipped">Shipped</option>
<option value="delivered">Delivered</option>
<option value="cancelled">Cancelled</option>
</select>
</form>
</div>
<div class="cart-table cart-table-dark mt-20">
<table>
<thead>
<tr>
<th></th>
<th>Product</th>
<th>Id</th>
<th>Unit Price</th>
<th>Quantity</th>
<th>Total</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="product-table-info">
<div class="product-table-thumb">
<img src="assets/images/product-1.png" alt="product">
</div>
</div>
</td>
<td class="td-product-name">Crispy Chicken Burger</td>
<td>FA-001-001</td>
<td>$4.50</td>
<td>
<div class="cart-quantity">
<button class="qu-btn inc">+</button>
<input type="text" class="qu-input" value="2">
<button class="qu-btn dec">-</button>
</div>
</td>
<td class="td-total-price">$9.00</td>
<td><a href="shop-details.php" class="btn btn-small">View Details</a></td>
</tr>
<tr>
<td>
<div class="product-table-info">
<div class="product-table-thumb">
<img src="assets/images/product-4.png" alt="product">
</div>
</div>
</td>
<td class="td-product-name">Red Sause Pizza</td>
<td>FA-001-002</td>
<td>$8.00</td>
<td>
<div class="cart-quantity">
<button class="qu-btn inc">+</button>
<input type="text" class="qu-input" value="1">
<button class="qu-btn dec">-</button>
</div>
</td>
<td class="td-total-price">$8.00</td>
<td><a href="shop-details.php" class="btn btn-small">View Details</a></td>
</tr>
</tbody>
</table>
</div>
</div>
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
<button class="btn" type="submit">Subscribe <i class="flaticon-right-arrow-sketch-1"></i></button>
</div>
<div id="validator-newsletter" class="form-result color-white"></div>
</form>
</div>
</div>
</div>
</div>
</section>


<?php include('footer.php'); ?>


<div class="cart-modal-wrapper">
<div class="cart-modal modal-item">
<div class="cart-modal-header">
<h3 class="color-white">Cart 2</h3>
<div class="cart-modal-close">
<i class="flaticon-cancel"></i>
</div>
</div>
<div class="cart-modal-body">
<h2 class="color-white">My Order</h2>
<div class="cart-modal-product">
<div class="cart-modal-thumb">
<a href="shop-details.php">
<img src="assets/images/product-1.png" alt="product">
</a>
</div>
<div class="cart-modal-content">
<h4><a href="shop-details.php">Crispy Chicken Burger</a></h4>
<div class="cart-modal-action">
<div class="cart-modal-action-item">
<div class="cart-modal-quantity">
<p>1</p>
<p>x</p>
<p class="cart-quantity-price">$ 4.50</p>
 </div>
</div>
<div class="cart-modal-action-item">
<div class="cart-modal-delete">
<a href="#"><i class="icofont-ui-delete"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="cart-modal-product">
<div class="cart-modal-thumb">
<a href="shop-details.php">
<img src="assets/images/product-2.png" alt="product">
</a>
</div>
<div class="cart-modal-content">
<h4><a href="shop-details.php">Red Sause Pizza</a></h4>
<div class="cart-modal-action">
<div class="cart-modal-action-item">
<div class="cart-modal-quantity">
<p>1</p>
<p>x</p>
<p class="cart-quantity-price">$ 3.50</p>
</div>
</div>
<div class="cart-modal-action-item">
<div class="cart-modal-delete">
<a href="#"><i class="icofont-ui-delete"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="cart-modal-total">
<p>Total</p>
<h3>$8.0</h3>
</div>
<div class="cart-modal-button">
<a href="checkout.php" class="btn full-width">Proceed To Checkout</a>
<a href="cart.php" class="btn btn-yellow full-width">View Shopping Cart</a>
</div>


</div>
</div>
</div>


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