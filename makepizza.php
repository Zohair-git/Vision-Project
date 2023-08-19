<?php
include('connection.php');

session_start();
$fetch_cat = "SELECT * FROM `pizza_components`";
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
        <!-- <div class="col-sm-12 col-md-7 col-lg-8 pb-30">
          <h4 class=" text-white mb-3"> Crust:</h4>
          <div class="row align-items-start">
            <div class="col">
              <button type="button" class="btn">primary</button>
            </div>
            <div class="col">
              <button type="button" class="btn ">primary</button>
            </div>
            <div class="col">
              <button type="button" class="btn">primary</button>
            </div>
          </div>


          <h4 class=" mt-5 text-white mb-3"> Sauce:</h4>
          <div class="row align-items-start main-carousel" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'>
            <div class="col carousel-cell  p-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col carousel-cell p-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col carousel-cell p-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col carousel-cell p-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col carousel-cell p-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>

          </div>




          <h4 class=" mt-5 text-white mb-3">Sauce Topping:</h4>
          <div class="row align-items-start main-carousel" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'>
            <div class="col carousel-cell  p-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col carousel-cell p-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col carousel-cell p-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col carousel-cell p-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col carousel-cell p-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>

          </div>


          <h4 class=" mt-5 text-white mb-3"> Sauce:</h4>
          <div class="row align-items-start main-carousel" data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false }'>
            <div class="col carousel-cell  p-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col carousel-cell p-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col carousel-cell p-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col carousel-cell p-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col carousel-cell p-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>

          </div>



        </div>
 -->
  <div class="col-lg-7 " >
    <?php while ($row = mysqli_fetch_array($query_fetch)) { ?>
  
      <button type="button" class="btn" id="<?php echo $row['c_id'] ?>"><?php echo $row['c_name'] ?> </button>
     
      <?php  } ?>
<div>
  <br>
  <div class="row">
  <?php while ($row = mysqli_fetch_array($query_fetch_pizza)) { ?>

    <div class="col-lg-3">
       <div class="card">
    <img src="<?php echo $row['cc_pic'] ?>" style="width: 50px;height:50px;border-radius:100px" alt="">
    <h5><?php echo $row['cc_name'] ?></h5>
    <button type="button" onclick="btnAddToList(<?php echo $row['cc_id'] ?>)" class="">ADD</button>
  </div>
    </div>
    <?php  } ?>

  </div>
 
</div>

  </div>



        <div class="col-sm-12 col-md-5 col-lg-4 pb-30">
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



  <?php
  include('modal.php'); ?>

  <script src="assets/js/jquery-ui.js"></script>
  <script>
    FetchData();
    function btnAddToList(id) {
      debugger
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