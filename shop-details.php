<?php session_start();
include('connection.php'); ?>
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
<h1>Shop Details</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Shop Details</li>
</ol>
</nav>
</div>
</div>
</div>
</div>

<div class="product-details-section pt-100 pb-70 bg-black">
<div class="container">
<?php 
$menu_id = $_GET['id'];
$select_query = "SELECT * FROM `tbl_menu` WHERE `menu_id` = '$menu_id'";
$select_query_run = mysqli_query($con , $select_query);
while ($details = mysqli_fetch_array($select_query_run)) {

?> 
<div class="row align-items-center">
<div class="col-sm-12 col-md-12 col-lg-5 pb-30">
<div class="product-details-item">
<div class="product-details-slider">
<div class="product-details-for popup-gallery">
<div class="product-for-item">
<a href="./admin/pictures/<?php echo $details['food_pic'] ?>"><img width="300" src="./admin/pictures/<?php echo $details['food_pic'] ?>" alt="product"></a>
</div>
<div class="product-for-item">
<a href="./admin/pictures/<?php echo $details['food_pic'] ?>"><img width="300" src="./admin/pictures/<?php echo $details['food_pic'] ?>" alt="product"></a>
</div>
<div class="product-for-item">
<a href="./admin/pictures/<?php echo $details['food_pic'] ?>"><img width="300" src="./admin/pictures/<?php echo $details['food_pic'] ?>" alt="product"></a>
</div>
</div>
<div class="product-details-nav">
<div class="product-nav-item">
<div class="product-nav-item-inner">
<img width="300" src="./admin/pictures/<?php echo $details['food_pic'] ?>" alt="product">
</div>
</div>
<div class="product-nav-item">
<div class="product-nav-item-inner">
<img width="300" src="./admin/pictures/<?php echo $details['food_pic'] ?>" alt="product">
</div>
</div>
<div class="product-nav-item">
<div class="product-nav-item-inner">
<img width="300" src="./admin/pictures/<?php echo $details['food_pic'] ?>" alt="product">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-6 pb-30">
 <div class="product-details-item">
<div class="product-details-caption">
<div class="product-status product-status-danger mb-20">
New
</div>
<h3 class="mb-20 color-white"><?php echo $details['food_name'] ?></h3>
<h4 class="mb-20 product-id">Id: FA-001- <?php echo $details['menu_id'] ?> </h4>
<div class="review-star mb-20">
<ul>
<li class="full-star"><i class="flaticon-star-1"></i></li>
<li class="full-star"><i class="flaticon-star-1"></i></li>
<li class="full-star"><i class="flaticon-star-1"></i></li>
<li class="full-star"><i class="flaticon-star-1"></i></li>
<li class="full-star"><i class="flaticon-star-2"></i></li>
</ul>
<p>(4 Reviews)</p>
</div>
<div class="product-details-price mb-20">
<h4>$ <?php echo $details['menu_price'] ?></h4>
</div>
<div class="product-details-para mb-20">
<p>After one hour pat the dough and roll into a big circle. Leave for 15 minute then bake for 15 minute at 180c or until dough starts changing color, take out from oven,spread pizza sauce & top with cheddar, mozzarella, onion, tomatoes, coriander leaves, capsicum and ChickenTikka.</p>
</div>

<div class="product-action-info mb-20">
<div class="d-flex flex-wrap align-items-center
                                    product-quantity">
<button class="btn btn-icon product-quantity-item" type="button"  onclick="function_ajax(<?php echo $details['menu_id'] ?>)">
Add To Cart
<i class="flaticon-shopping-cart-black-shape"></i>
</button>

</div>
</div>

</div>
</div>
</div>
</div>
<?php }?>

<div class="related-product mt-50">
<div class="sub-section-title">
<h3 class="color-white">Related Items</h3>
</div>
<div class="receipe-grid receipe-grid-three">
<div class="receipe-item receipe-item-black pb-30">
<div class="receipe-item-inner">
<div class="receipe-image">
<img src="assets/images/pizza-receipe-1.png" alt="receipe">
</div>
<div class="receipe-content">
<div class="receipe-info">
<h3><a href="shop-details.php">Pepperoni Pizza</a></h3>
<h4>$4.59<del>$7.59</del></h4>
</div>
<div class="receipe-cart receipe-cart-main">
<a href="#">
<i class="flaticon-supermarket-basket"></i>
<i class="flaticon-supermarket-basket"></i>
</a>
</div>
</div>
</div>
</div>
<div class="receipe-item receipe-item-black pb-30">
<div class="receipe-item-inner">
<div class="receipe-image">
<img src="assets/images/pizza-receipe-2.png" alt="receipe">
</div>
<div class="receipe-content">
<div class="receipe-info">
<h3><a href="shop-details.php">Beefka Pizza</a></h3>
<h4>$5.12<del>$6.59</del></h4>
</div>
<div class="receipe-cart receipe-cart-main">
<a href="#">
<i class="flaticon-supermarket-basket"></i>
<i class="flaticon-supermarket-basket"></i>
</a>
</div>
</div>
</div>
</div>
<div class="receipe-item receipe-item-black pb-30">
<div class="receipe-item-inner">
<div class="receipe-image">
<img src="assets/images/pizza-receipe-3.png" alt="receipe">
</div>
<div class="receipe-content">
<div class="receipe-info">
<h3><a href="shop-details.php">Chicken Pizza</a></h3>
<h4>$6.57<del>$7.12</del></h4>
</div>
<div class="receipe-cart receipe-cart-main">
<a href="#">
<i class="flaticon-supermarket-basket"></i>
<i class="flaticon-supermarket-basket"></i>
</a>
</div>
</div>
</div>
</div>
<div class="receipe-item receipe-item-black pb-30">
<div class="receipe-item-inner">
<div class="receipe-image">
<img src="assets/images/pizza-receipe-4.png" alt="receipe">
</div>
<div class="receipe-content">
<div class="receipe-info">
<h3><a href="shop-details.php">Avocado Pizza</a></h3>
<h4>$5.12<del>$6.59</del></h4>
</div>
<div class="receipe-cart receipe-cart-main">
<a href="#">
<i class="flaticon-supermarket-basket"></i>
<i class="flaticon-supermarket-basket"></i>
</a>
</div>
</div>
</div>
</div>
<div class="receipe-item receipe-item-black pb-30">
<div class="receipe-item-inner">
<div class="receipe-image">
<img src="assets/images/pizza-receipe-5.png" alt="receipe">
</div>
<div class="receipe-content">
<div class="receipe-info">
<h3><a href="shop-details.php">Vegana Pizza</a></h3>
<h4>$7.45<del>$8.12</del></h4>
</div>
<div class="receipe-cart receipe-cart-main">
<a href="#">
<i class="flaticon-supermarket-basket"></i>
<i class="flaticon-supermarket-basket"></i>
</a>
</div>
</div>
</div>
</div>
<div class="receipe-item receipe-item-black pb-30">
<div class="receipe-item-inner">
<div class="receipe-image">
<img src="assets/images/pizza-receipe-6.png" alt="receipe">
</div>
<div class="receipe-content">
<div class="receipe-info">
<h3><a href="shop-details.php">Meat Pizza</a></h3>
<h4>$8.45<del>$9.24</del></h4>
</div>
<div class="receipe-cart receipe-cart-main">
<a href="#">
<i class="flaticon-supermarket-basket"></i>
<i class="flaticon-supermarket-basket"></i>
</a>
</div>
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
<script>

FetchData();

       function function_ajax(id) {

$.ajax({
  url: 'addtocart.php',
  type: 'POST',
  data: {
    cart: 'cart',
    id: id
  },
  success: function (data) {
    console.log(data);
    $('#cart').html(data);
  }
})}


  
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