<?php 
include('connection.php');
session_start();

?>

<?php
    if (isset($_POST['btn_insert'])) {
       if (isset($_SESSION['items'])) {
        $myitems = array_column($_SESSION['items'], 'item_name');
        if (in_array($_POST['item_name'] , $myitems)) {
           echo "<script>alert('item already added');
           window.location.href = 'menu.php';</script>
           ";  
        }
        else{
       $count  = count($_SESSION['items']);
       $_SESSION['items'][$count] = array('item_name' => $_POST['item_name'] , 'item_price' => $_POST['item_price'] , 'item_pic' => $_POST['item_pic']  ); 
      //  echo "<script>
      //  alert('item added to cart');
      //  window.location.href = 'menu.php';</script>
      //  ";   
      header('location:menu.php');

        }
    }
       else{
        $_SESSION['items'][0] = array('item_name' => $_POST['item_name'] , 'item_price' => $_POST['item_price'] , 'item_pic' => $_POST['item_pic']  );
        header("location:menu.php");
         
       }
    } 

  

?>
