<?php
include("connection.php");
session_start();




  if (isset($_POST['cart'])) {
    $id = $_POST['id'];
    $fetch_data = "SELECT * FROM components_category WHERE `cc_id`= '$id'";
    $run = mysqli_query($con, $fetch_data);
    $row = mysqli_fetch_array($run);

    if (isset($_SESSION['customlist'])) {
      $myitems = array_column($_SESSION['customlist'], 'c_name');
      $myitems_cat = array_column($_SESSION['customlist'], 'c_cat');

      if (in_array($row['cc_name'], $myitems)) {
        echo "<script>alert('item already added')</script>";
            //  session_unset();
            //  session_destroy();
      } 
      elseif(in_array($row['cc_cat'],$myitems_cat)){
        echo "<script>alert('Item Replaced')</script>";
        foreach ($_SESSION["customlist"] as $key => $val) {

          if ($val["c_cat"] == $row['cc_cat']) {
              // $val["product_qty"] += $val["product_qty"];
              $_SESSION["customlist"][$key] = array(
                'c_id' => $row['cc_id'],
                'c_name' => $row['cc_name'],
                'c_price' => $row['cc_price'],
                'c_cat' => $row['cc_cat'],
             
              ); // Add this
          }
   
       }
      } 
      else {
        $_SESSION['customlist'][] = array(
          'c_id' => $row['cc_id'],
          'c_name' => $row['cc_name'],
          'c_price' => $row['cc_price'],
          'c_cat' => $row['cc_cat'],
       
        );

        // print_r($_SESSION['customlist']);
        ?>

        <?php

      }
    } 
    else {
      $_SESSION['customlist'][] = array(
        'c_id' => $row['cc_id'],
        'c_name' => $row['cc_name'],
        'c_price' => $row['cc_price'],
        'c_cat' => $row['cc_cat'],
     
      );

      // print_r($_SESSION['customlist']);
      ?>

      <?php

    }
  }
 

  if (isset($_SESSION['customlist'])) {

    ?>
    <?php foreach ($_SESSION['customlist'] as $key => $value) { ?>
      <div class="cart-total-item pt-0">
        <h4 class="color-main">
          <?php echo $value['c_name'] ?>
        </h4>
        <p>
          <?php echo $value['c_price'] ?>
        </p>
      </div>

    <?php } ?>

    <div class="cart-total-item cart-total-bold">
      <h4 class="color-white">Total
        <?php
        $myitems = array_column($_SESSION['customlist'], 'c_price');
        $sum = array_sum($myitems);
        echo $sum;

        ?>
      </h4>

    </div>
    <?php

  }

?>
