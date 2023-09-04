<?php
include('connection.php');
session_start();


//  if($_SERVER["REQUEST_METHOD"] == "POST"){


//  if (isset($_POST['btn_insert'])) {
//     if (isset($_SESSION['items'])) {
//      $myitems = array_column($_SESSION['items'], 'item_name');
//      if (in_array($_POST['item_name'] , $myitems)) {
//         echo "<script>alert('item already added');
//         window.location.href = 'menu.php';</script>
//         ";  
//      }
//      else{
//     $count  = count($_SESSION['items']);
//     $_SESSION['items'][$count] = array('item_name' => $_POST['item_name'] , 'item_price' => $_POST['item_price'] , 'item_pic' => $_POST['item_pic']  ); 
//     echo "<script>
//     alert('item added to cart');
//     window.location.href = 'menu.php';</script>
//     ";   
//    // header('location:menu.php');

//      }
//  }
//     else{
//      $_SESSION['items'][0] = array('item_name' => $_POST['item_name'] , 'item_price' => $_POST['item_price'] , 'item_pic' => $_POST['item_pic']  );
//      echo "<script>
//     alert('item added to cart');
//     window.location.href = 'menu.php';</script>
//     ";   

//     }
//  } 

// }  

if (isset($_POST['cart'])) {
   $id = $_POST['id'];
   $select_query = "SELECT * FROM `tbl_menu` WHERE `menu_id`='$id'";
   $select_query_run = mysqli_query($con, $select_query);
   $fetch_query = mysqli_fetch_array($select_query_run);

   if (isset($_SESSION['items'])) {
      $myitems = array_column($_SESSION['items'], 'item_name');
      if (in_array($fetch_query['food_name'], $myitems)) {
         echo "<script>alert('item already added');</script>";
      } else {
         $count = count($_SESSION['items']);
         $_SESSION['items'][$count] = array('item_name' => $fetch_query['food_name'], 'item_price' => $fetch_query['menu_price'], 'item_pic' => $fetch_query['food_pic']);
         echo "<script>
     alert('item added to cart')</script>
     ";
         // header('location:menu.php');

      }
   } else {
      $_SESSION['items'][0] = array('item_name' => $fetch_query['food_name'], 'item_price' => $fetch_query['menu_price'], 'item_pic' => $fetch_query['food_pic']);
      echo "<script>
     alert('item added to cart')</script>";

   }
}
?>




<h2 class="color-white">My Order</h2>
<?php
if (isset($_SESSION['items'])) {

   foreach ($_SESSION['items'] as $key => $value) {


      ?>
      <div class="cart-modal-product">
         <div class="cart-modal-thumb">
            <a href="shop-details.php">
               <img src="./admin/pictures/<?php echo $value['item_pic']; ?>" alt="product">
            </a>
         </div>
         <div class="cart-modal-content">
            <h4><a href="shop-details.php">
                  <?php echo $value['item_name']; ?>
               </a></h4>
            <div class="cart-modal-action">
               <div class="cart-modal-action-item">
                  <div class="cart-modal-quantity">
                     <p class="cart-quantity-price">Rs
                        <?php echo $value['item_price']; ?>
                     </p>
                  </div>
               </div>
               <div class="cart-modal-action-item">
                  <div class="cart-modal-delete">

                  </div>
               </div>
            </div>
         </div>

      </div>
   <?php }
} ?>
<div class="cart-modal-total">
   <p>Total</p>

   <h3>Rs
      <?php
      if (empty($_SESSION['items'])) {
         echo "0";
      } else {
         $myitems = array_column($_SESSION['items'], 'item_price');
         $sum = array_sum($myitems);
         print_r($sum);
      }
      ?>
   </h3>
</div>
<?php if (isset($_SESSION['items'])) { ?>
   <div class="cart-modal-button">
      <a href="checkout.php?validation=validation&&totall=<?php if (empty($_SESSION['items'])) {
         echo "0";
      } else {
         $myitems = array_column($_SESSION['items'], 'item_price');
         $sum = array_sum($myitems);
         print_r($sum);
      } ?>" class="btn full-width">Proceed To Checkout</a>
      <a href="cart.php" class="btn btn-yellow full-width">View Shopping Cart</a>
   </div>
<?php } ?>