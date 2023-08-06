<?php 
 session_start();
 include("connection.php");

 if (isset($_POST['item_id'])) {
    $id = $_POST['item_id'];
    $select_query = "SELECT * FROM `tbl_menu` WHERE `menu_id` = '$id' ";
    $select_query_run = mysqli_query($con , $select_query);
    $item_fetch_query = mysqli_fetch_array($select_query_run);

    if (isset($_SESSION['items'])) {
     $myitems = array_column($_SESSION['items'], 'item_name');
     if (in_array($_POST['food_name'] , $myitems)) {
        echo "<script>alert('item already added');
        </script>
        ";  
     }
     else{
    $count  = count($_SESSION['items']);
    $_SESSION['items'][$count] = array('item_name' => $item_fetch_query['food_name'] , 'item_price' => $item_fetch_query['menu_price'] , 'item_pic' => $item_fetch_query['food_pic']  ); 
    echo "<script>
    alert('item added to cart');
    window.location.href = 'menu.php';</script>
    ";   
//    header('location:menu.php');

     }
 }
    else{
     $_SESSION['items'][0] = array('item_name' => $item_fetch_query['food_name'] , 'item_price' => $item_fetch_query['menu_price'] , 'item_pic' => $item_fetch_query['food_pic']  );
    //  header("location:menu.php");
      
    }
 } 
 
 
 ?>