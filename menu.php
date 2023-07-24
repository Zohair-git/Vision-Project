<?php 
session_start();
include('connection.php');
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

<?php 
include('navbar.php');
?>

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
<img src="assets/images/header-shape-4.png" alt="shape">
</div>
<div class="header-page-shape-item">
<img src="assets/images/header-shape-1.png" alt="shape">
</div>
<div class="header-page-shape-item">
<img src="assets/images/header-shape-3.png" alt="shape">
</div>
</div>
<div class="container">
<div class="header-page-content">
<h1>Our Menu</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Our Menu</li>
</ol>
</nav>
</div>
</div>
</div>
</div>


<section class="menu-section bg-black p-tb-100">
<div class="container position-relative">
<div class="section-title">
<small>Menu</small>
<h2 class="color-white">Just Choose From The Best</h2>
</div>
<div class="menu-main-carousel-area">
<div class="menu-main-thumb-nav">
<div class="menu-main-thumb-item menu-main-thumb-black">
<div class="menu-main-thumb-inner">
<img src="assets/images/menu-2.png" alt="menu">
<p>PIZZA</p>
</div>
</div>

<div class="menu-main-thumb-item menu-main-thumb-black">
<div class="menu-main-thumb-inner">
<img src="assets/images/menu-3.png" alt="menu">
<p>SANDWITCH</p>
</div>
</div>
<div class="menu-main-thumb-item menu-main-thumb-black">
<div class="menu-main-thumb-inner">
<img src="assets/images/menu-4.png" alt="menu">
<p>SHAKE</p>
</div>
</div>
<div class="menu-main-thumb-item menu-main-thumb-black">
<div class="menu-main-thumb-inner">
<img src="assets/images/menu-5.png" alt="menu">
<p>ICE-CREAME</p>
</div>
</div>
<div class="menu-main-thumb-item menu-main-thumb-black">
<div class="menu-main-thumb-inner">
<img src="assets/images/menu-6.png" alt="menu">
<p>DESSERT</p>
</div>
</div>
</div>
<div class="menu-main-details-for">
<div class="menu-main-details-item">
<div class="receipe-grid receipe-grid-three">
<?php 
$select_query = "SELECT * FROM `tbl_menu` WhERE cat_foreign_id = 1";
$select_query_run = mysqli_query($con , $select_query);?>
<?php while ($fetch_query = mysqli_fetch_array($select_query_run)) { ?>
<div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
<div class="receipe-item-inner">
<div class="receipe-image">
<img src="<?php echo "./admin/pictures/".$fetch_query['food_pic'] ?>" alt="receipe">
</div>
<div class="receipe-content">
<div class="receipe-info">
<h3><a href="shop-details.php"><?php echo $fetch_query['food_name']?></a></h3>
<h4>$<?php echo $fetch_query['menu_price'] ?><del>$7.59</del></h4>
</div>
<form method = "post" action="menu.php">
<div class="receipe-cart">

<input type="hidden" name="item_name" value="<?php echo $fetch_query['food_name']  ?>">
    <input type="hidden" name="item_price" value="<?php echo $fetch_query['menu_price']  ?>">
    <input type="hidden" name="item_pic" value="<?php echo $fetch_query['food_pic']  ?>">
    <button type="submit" style="background-color:#FFCC00; border-radius:20px;" name="add_to_cart" >
<i class="flaticon-supermarket-basket"></i>
<i class="flaticon-supermarket-basket"></i>
</button>

</div>
</form>
</div>
</div>
</div>
<?php } 
?>
</div>
<div class="text-center">
<a href="pro" class="btn load-more-btn">
<span class="load-more-text">Load More</span>
<span class="load-more-icon"><i class="icofont-refresh"></i></span>
</a>
</div>
</div>

<div class="menu-main-details-item">
<div class="receipe-grid receipe-grid-three">
<?php include('connection.php');
$select_query = "SELECT * FROM `tbl_menu` WhERE cat_foreign_id = 2";
$select_query_run = mysqli_query($con , $select_query);?>
<?php while ($fetch_query = mysqli_fetch_array($select_query_run)) { ?>    
<div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
<div class="receipe-item-inner">
<div class="receipe-image">
<img src="<?php echo "./admin/pictures/".$fetch_query['food_pic'] ?>" alt="receipe">
</div>
<div class="receipe-content">
<div class="receipe-info">
<h3><a href="shop-details.php"><?php echo $fetch_query['food_name']?></a></h3>
<h4>$<?php echo $fetch_query['menu_price'] ?><del>$7.59</del></h4>
</div>
<form method = "post">
<div class="receipe-cart">
<a>
<input type="hidden" name="item_name" value="<?php echo $fetch_query['food_name']  ?>">
    <input type="hidden" name="item_price" value="<?php echo $fetch_query['menu_price']  ?>">
    <input type="hidden" name="item_pic" value="<?php echo $fetch_query['food_pic']  ?>">
    <button type="submit" style="background-color:#FFCC00; border-radius:20px;" name="add_to_cart" >
<i class="flaticon-supermarket-basket"></i>
<i class="flaticon-supermarket-basket"></i>
</button>
</a>
</div>
</form>
</div>
</div>
</div>
<?php }?>

</div>
<div class="text-center">
<a href="pro" class="btn load-more-btn">
<span class="load-more-text">Load More</span>
<span class="load-more-icon"><i class="icofont-refresh"></i></span>
</a>
</div>
</div>


<div class="menu-main-details-item">
<div class="receipe-grid receipe-grid-three">
<?php include('connection.php');
$select_query = "SELECT * FROM `tbl_menu` WhERE cat_foreign_id = 3";
$select_query_run = mysqli_query($con , $select_query);?>
<?php while ($fetch_query = mysqli_fetch_array($select_query_run)) { ?>    
<div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
<div class="receipe-item-inner">
<div class="receipe-image">
<img src="<?php echo "./admin/pictures/".$fetch_query['food_pic'] ?>" alt="receipe">
</div>
<div class="receipe-content">
<div class="receipe-info">
<h3><a href="shop-details.php"><?php echo $fetch_query['food_name']?></a></h3>
<h4>$<?php echo $fetch_query['menu_price'] ?><del>$7.59</del></h4>
</div>
<form method = "post">
<div class="receipe-cart">
<a>
<input type="hidden" name="item_name" value="<?php echo $fetch_query['food_name']  ?>">
    <input type="hidden" name="item_price" value="<?php echo $fetch_query['menu_price']  ?>">
    <input type="hidden" name="item_pic" value="<?php echo $fetch_query['food_pic']  ?>">
    <button type="submit" style="background-color:#FFCC00; border-radius:20px;" name="add_to_cart" >
<i class="flaticon-supermarket-basket"></i>
<i class="flaticon-supermarket-basket"></i>
</button>
</a>
</div>
</form>
</div>
</div>
</div>
<?php } ?>
</div>
<div class="text-center">
<a href="pro" class="btn load-more-btn">
<span class="load-more-text">Load More</span>
<span class="load-more-icon"><i class="icofont-refresh"></i></span>
</a>
</div>
</div>
<div class="menu-main-details-item">
<div class="receipe-grid receipe-grid-three">
<?php include('connection.php');
$select_query = "SELECT * FROM `tbl_menu` WhERE cat_foreign_id = 4";
$select_query_run = mysqli_query($con , $select_query);?>
<?php while ($fetch_query = mysqli_fetch_array($select_query_run)) { ?>  
<div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
<div class="receipe-item-inner">
<div class="receipe-image">
<img src="<?php echo "./admin/pictures/".$fetch_query['food_pic'] ?>" alt="receipe">
</div>
<div class="receipe-content">
<div class="receipe-info">
<h3><a href="shop-details.php"><?php echo $fetch_query['food_name']?></a></h3>
<h4>$<?php echo $fetch_query['menu_price'] ?><del>$7.59</del></h4>
</div>
<form method ="post">
<div class="receipe-cart">
<a>
<input type="hidden" name="item_name" value="<?php echo $fetch_query['food_name']  ?>">
    <input type="hidden" name="item_price" value="<?php echo $fetch_query['menu_price']  ?>">
    <input type="hidden" name="item_pic" value="<?php echo $fetch_query['food_pic']  ?>">
    <button type="submit" style="background-color:#FFCC00; border-radius:20px;" name="add_to_cart" >
<i class="flaticon-supermarket-basket"></i>
<i class="flaticon-supermarket-basket"></i>
</button>
</a>
</div>
</form>
</div>
</div>
</div>
<?php } ?>
</div>
<div class="text-center">
<a href="pro" class="btn load-more-btn">
<span class="load-more-text">Load More</span>
<span class="load-more-icon"><i class="icofont-refresh"></i></span>
</a>
</div>
</div>
<div class="menu-main-details-item">
<div class="receipe-grid receipe-grid-three">
<?php include('connection.php');
$select_query = "SELECT * FROM `tbl_menu` WhERE cat_foreign_id = 5";
$select_query_run = mysqli_query($con , $select_query);?>
<?php while ($fetch_query = mysqli_fetch_array($select_query_run)) { ?> 
<div class="receipe-item receipe-item-black pb-30 receipe-grid-item">
<div class="receipe-item-inner">
<div class="receipe-image">
<img src="<?php echo "./admin/pictures/".$fetch_query['food_pic'] ?>" alt="receipe">
</div>
<div class="receipe-content">
<div class="receipe-info">
<h3><a href="shop-details.php"><?php echo $fetch_query['food_name']?></a></h3>
<h4>$$<?php echo $fetch_query['menu_price'] ?><del>$7.59</del></h4>
</div>
<form method="post">
<div class="receipe-cart">
<a>
<input type="hidden" name="item_name" value="<?php echo $fetch_query['food_name']  ?>">
    <input type="hidden" name="item_price" value="<?php echo $fetch_query['menu_price']  ?>">
    <input type="hidden" name="item_pic" value="<?php echo $fetch_query['food_pic']  ?>">
    <button type="submit" style="background-color:#FFCC00; border-radius:20px;" name="add_to_cart" >
<i class="flaticon-supermarket-basket"></i>
<i class="flaticon-supermarket-basket"></i>
</button>
</a>
</div>
</form>
</div>
</div>
</div>
<?php } ?>
</div>
<div class="text-center">
<a href="pro" class="btn load-more-btn">
<span class="load-more-text">Load More</span>
<span class="load-more-icon"><i class="icofont-refresh"></i></span>
</a>
</div>
</div>
</div>
</div>
</div>
</section>

<?php
    if (isset($_POST['add_to_cart'])) {
       if (isset($_SESSION['items'])) {
        $myitems = array_column($_SESSION['items'], 'item_name');
        if (in_array($_POST['item_name'] , $myitems)) {
           echo "<script>alert('item already added');
           window.location.href = menu.php;</script>
           ";
        }
       }
       else{
        $_SESSION['items'][0] = array('item_name' => $_POST['item_name'] , 'item_price' => $_POST['item_price'] , 'item_pic' => $_POST['item_pic'] );
        print_r($_SESSION['items']);
       }
    } 
  

?>


<section class="step-section p-tb-100 bg-black">
<div class="container">
<div class="section-title">
<h2 class="color-white">3 Easy Steps To Enjoy</h2>
</div>
<div class="steps-box">
<div class="row">
<div class="col-sm-12 col-md-6 col-lg-4">
<div class="steps-item">
<h3>1. Choose</h3>
<p>Choose Your Best Combos From The Thousands Of Exciting Items.</p>
</div>
</div>
<div class="col-sm-12 col-md-6 col-lg-4">
<div class="steps-item">
<h3>2. Pay</h3>
<p>Pay Through Online Easily. We Use The Most Safe way In Payment.</p>
</div>
</div>
<div class="col-sm-12 col-md-6 col-lg-4 offset-md-3 offset-lg-0">
<div class="steps-item">
<h3>3. Enjoy</h3>
<p>Enjoy Your Meal From The Core Of Heart & Feel The Taste Inside.</p>
</div>
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
<?php fo ?>
<div class="cart-modal-product">
<div class="cart-modal-thumb">
<a href="shop-details.php">
<img src="./admin/pictures/<?php print_r($_SESSION['items'][0]['item_pic']) ?>" alt="product">
</a>
</div>
<div class="cart-modal-content">
<h4><a href="shop-details.php"><?php  print_r($_SESSION['items'][0]['item_name']) ?></a></h4>
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