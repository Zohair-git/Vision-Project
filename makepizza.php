<?php
include('connection.php');

// session_unset();
// session_destroy();
session_start();
$fetch_cat = "SELECT * FROM `pizza_components` LIMIT 5";
$fetch_pizza_com = "SELECT * FROM `components_category`";

$query_fetch = mysqli_query($con,$fetch_cat);
$query_fetch_pizza = mysqli_query($con,$fetch_pizza_com);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

  <title>Document</title>

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
<style>
body {
  background-color: #000000;
}
.hover_btn{
  transition:.2s ease-out;
}
.hover_btn:hover{
  transform:scale(1.2);
}
</style>
</head>

<body>
  <?php
  include('navbar.php')


  ?>













  <!-- </div>
          <div class=" col-lg-4 text-center border mt-4">
           <img src="image/PIZZA-BASE-WITH-TOMATO..jpg" class = "w-50" alt="">
          </div>
        </div>
      </div> -->

  <div class="checkout-section pt-100 pb-70 bg-black">
    <div class="container">
      <div class="row">
      
  <div class="col-lg-8" >
  <button type="button" class="p-3 me-2 ms-2 ps-4 pe-4 rounded-start text-white hover_btn" style="background-color:red;" onclick="cat_func_default(6)">Dough </button>
    <?php

    while ($row = mysqli_fetch_array($query_fetch)) { ?>
  
      <button type="button" class="p-3 me-2 ms-2 ps-4 pe-4 rounded-start text-white hover_btn" style="background-color:red;" onclick="cat_func(<?php echo $row['c_id'] ?>)"><?php echo $row['c_name'] ?> </button>
     

      
      <?php  } ?>
<div>
  <br>
  <div class="row me-4" id="fetch_cat">


  </div>
 
</div>

  </div>



        <div class="col-sm-12 col-md-5 col-lg-4 pb-30 ">
          <div class="checkout-item">
            <div class="checkout-details cart-details mb-30">
              <h3 class="cart-details-title color-white">Cart Totals</h3>
              <div class="cart-total-box" id="ID_cartList">
              <!-- here php cart code -->

              <!-- end  -->
  </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>


<?php include('modal.php') ?>
<?php include('footer.php') ?>

  <script src="assets/js/jquery-ui.js"></script>
  <script>
    cat_func_default(6);
    FetchData();


//for default category dough
function cat_func_default(id) {

   $.ajax({
     url : 'default_cat.php',
     type : 'POST',
     data : {
      
      abc: id
     },
     success : function (data){
       // console.log(data);
       $('#fetch_cat').html(data);
     }
   })
   
 }

//for default category dough

// for category wise fetch

function cat_func(catid) {
   
      $.ajax({
        url : 'category_custom.php',
        type : 'POST',
        data : {
         
          catid : catid
        },
        success : function (data){
          // console.log(data);
          $('#fetch_cat').html(data);
        }
      })
      
    }

// for category wise fetch




    function btnAddToList(id) {

      $.ajax({
        url : 'custom_cart.php',
        type : 'POST',
        data : {
          cart : 'cart',
          id : id
        },
        success : function (data){
          console.log(data);
          $('#ID_cartList').html(data);
        }
      })
      
    }
    function FetchData(){
    
      $.ajax({
        url : 'custom_cart.php',
        type : 'POST',
        
        success : function (data){
          console.log(data);
          $('#ID_cartList').html(data);
        }
      })
    }
  </script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>



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



