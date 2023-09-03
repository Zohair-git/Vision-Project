<?php
include('connection.php');
session_start();

 

if (isset($_SESSION['items'])) {
    $count = count($_SESSION['items']);
     echo $count;
    } 
else{
    echo "0";

}

 ?>