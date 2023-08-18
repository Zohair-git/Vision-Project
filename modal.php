<?php
session_start(); 
include("connection.php");


// if (isset($_POST['item_id'])) {
//    $id = $_POST['item_id'];
//    $select_query = "SELECT * FROM `tbl_menu` WHERE `menu_id` = '$id' ";
//    $select_query_run = mysqli_query($con , $select_query);
//    $item_fetch_query = mysqli_fetch_array($select_query_run);

//    if (isset($_SESSION['items'])) {
//     $myitems = array_column($_SESSION['items'], 'item_name');
//     if (in_array($item_fetch_query['food_name'] , $myitems)) {
//     //    echo "<script>alert('item already added');
//     //    </script>
//     //    ";  
//     }
//     else{
//    $count  = count($_SESSION['items']);
//    $_SESSION['items'][$count] = array('item_name' => $item_fetch_query['food_name'] , 'item_price' => $item_fetch_query['menu_price'] , 'item_pic' => $item_fetch_query['food_pic']  ); 
// //    echo "<script>
// //    alert('item added to cart');
// //    window.location.href = 'menu.php';</script>
// //    ";   
// //    header('location:menu.php');

//     }
// }
//    else{
//     $_SESSION['items'][0] = array('item_name' => $item_fetch_query['food_name'] , 'item_price' => $item_fetch_query['menu_price'] , 'item_pic' => $item_fetch_query['food_pic']  );
//    //  header("location:menu.php");
     
//    }
//    echo 1;
//    exit();
// } 


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="ID_table"></div>

    <div class="cart-modal-wrapper">
        <div class="cart-modal modal-item">
            <div class="cart-modal-header">
                <h3 class="color-white">Cart</h3>
                <div class="cart-modal-close">
                    <i class="flaticon-cancel"></i>
                </div>
            </div>
            <div class="cart-modal-body">
                <h2 class="color-white">My Order</h2>
                <?php
if (!empty($_SESSION['items'])) {
    
    foreach($_SESSION['items'] as $key => $value) { 

     
?>
                <div class="cart-modal-product">
                    <div class="cart-modal-thumb">
                        <a href="shop-details.php">
                            <img src="./admin/pictures/<?php echo $value['item_pic']; ?>" alt="product">
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
                </div>
                <div class="cart-modal-button">
                    <a href="checkout.php" class="btn full-width">Proceed To Checkout</a>
                    <a href="cart.php" class="btn btn-yellow full-width">View Shopping Cart</a>
                </div>


            </div>
        </div>
    </div>
    <!-- <script src="./js/jquery.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- <script src="./assets/js/jquery3.6.1.min.js"></script> -->





</body>

</html>