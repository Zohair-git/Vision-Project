<?php
include("connection.php");
session_start();

if(isset($_POST['cart'])){
    $id = $_POST['id'];
    $fetch_data = "SELECT * FROM components_category WHERE `cc_id`= '$id'";
    $run = mysqli_query($con,$fetch_data);
    $row = mysqli_fetch_array($run);
    $_SESSION['customlist'][] =array(
        'c_id' => $row['cc_id'],
        'c_name' => $row['cc_name'],
        'c_price' => $row['cc_price'],
        'c_pic' => $row['cc_pic'],

    );
    // print_r($_SESSION['customlist']);
 ?>

            <?php foreach ($_SESSION['customlist'] as $key => $value) { ?>
                <div class="cart-total-item pt-0">
                  <h4 class="color-main"><?php echo $value['c_name'] ?> </h4>
                  <p><?php echo $value['c_price'] ?> </p>
                </div>

                <?php }  ?>
               
                <div class="cart-total-item cart-total-bold">
                  <h4 class="color-white">Total
                    <?php
 $myitems = array_column($_SESSION['customlist'], 'c_price'); 
 $sum = array_sum($myitems) ;
 echo $sum;

?>
                  </h4>
                  
                </div>
        

  <!-- // session_unset();
    // session_destroy(); -->

<?php 

}
if(isset($_SESSION['customlist'])){
  
?>
 <?php foreach ($_SESSION['customlist'] as $key => $value) { ?>
                <div class="cart-total-item pt-0">
                  <h4 class="color-main"><?php echo $value['c_name'] ?> </h4>
                  <p><?php echo $value['c_price'] ?> </p>
                </div>

                <?php }  ?>
               
                <div class="cart-total-item cart-total-bold">
                  <h4 class="color-white">Total
                  <?php
 $myitems = array_column($_SESSION['customlist'], 'c_price'); 
 $sum = array_sum($myitems) ;
 echo $sum;

?>
                  </h4>
                  
                </div>
<?php

}
?>