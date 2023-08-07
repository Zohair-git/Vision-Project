<?php 
include('connection.php');
// session_start();


    if($_SERVER["REQUEST_METHOD"] == "POST"){

      if (isset($_POST['item_id'])) {
         $id = $_POST['item_id'];
         $select_query = "SELECT * FROM `tbl_menu` WHERE `menu_id` = '$id' ";
         $select_query_run = mysqli_query($con , $select_query);
         $item_fetch_query = mysqli_fetch_array($select_query_run);
      
         if (isset($_SESSION['items'])) {
          $myitems = array_column($_SESSION['items'], 'item_name');
          if (in_array($item_fetch_query['food_name'] , $myitems)) {
          //    echo "<script>alert('item already added');
          //    </script>
          //    "; 
         //   print_r($_SESSION['items']);
          }
          else{
         $count  = count($_SESSION['items']);
         $_SESSION['items'][$count] = array('item_name' => $item_fetch_query['food_name'] , 'item_price' => $item_fetch_query['menu_price'] , 'item_pic' => $item_fetch_query['food_pic']  ); 
         // print_r($_SESSION['items']);
      
         //    echo "<script>
      //    alert('item added to cart');
      //    window.location.href = 'menu.php';</script>
      //    ";   
      //    header('location:menu.php');
      
          }
      }
         else{
          $_SESSION['items'][0] = array('item_name' => $item_fetch_query['food_name'] , 'item_price' => $item_fetch_query['menu_price'] , 'item_pic' => $item_fetch_query['food_pic']  );
         //  header("location:menu.php");
           
         }
         echo 1;
         // header("location:modal.php");
         exit();
      }

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
   //    //  echo "<script>
   //    //  alert('item added to cart');
   //    //  window.location.href = 'menu.php';</script>
   //    //  ";   
   //    header('location:menu.php');

   //      }
   //  }
   //     else{
   //      $_SESSION['items'][0] = array('item_name' => $_POST['item_name'] , 'item_price' => $_POST['item_price'] , 'item_pic' => $_POST['item_pic']  );
   //      header("location:menu.php");
         
   //     }
   //  } 

   }  


?>
 <?php
if (!empty($_SESSION['items'])) {
    
    foreach($_SESSION['items'] as $key => $value) { 

     
?>
                <div class="cart-modal-product">
                    <div class="cart-modal-thumb">
                        <a href="shop-details.php">
                            <img src="./admin/pictures/<?php
echo $value['item_pic']; ?>" alt="product">
                        </a>
                    </div>
                    <div class="cart-modal-content">
                        <h4><a href="shop-details.php"><?php echo $value['item_name']; ?></a></h4>
                        <div class="cart-modal-action">
                            <div class="cart-modal-action-item">
                                <div class="cart-modal-quantity">
                                    <p class="cart-quantity-price">$ <?php echo $value['item_price']; ?></p>
                                </div>
                            </div>
                            <div class="cart-modal-action-item">
                                <div class="cart-modal-delete">
                                    <form action="" method="post">
                                        <input type="hidden" class="delete_btn_val" value="">
                                        <button type="button"
                                            onclick="delete_array_element('<?php echo $value['item_name'] ?>')"><img
                                                class="" width="20px" src="./assets/images/dustbin.png" alt=""></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php } }?>
                <div class="cart-modal-total">
                    <p>Total</p>

                    <h3>$ <?php
if (empty($_SESSION['items'])) {
    echo "0";
}
else{
    $myitems = array_column($_SESSION['items'], 'item_price'); 
     $sum = array_sum($myitems) ;
     print_r($sum);
}
  ?></h3>
