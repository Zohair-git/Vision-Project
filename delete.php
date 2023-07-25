<?php
session_start();
include('connection.php');
    if (isset($_POST['item_name_ajax'])) {
        foreach ($_SESSION['items'] as $key => $value) {
           if ($value['item_name'] == $_POST['hidden_name']) {
              unset($_SESSION['items'][$key]);
              $_SESSION['items'] = array_values($_SESSION['items']);
              // echo "<script>alert('items removed');</script>";
              header("location:modal.php");
           }
        }
      }


?>