<?php
include('connection.php');


if(isset($_POST['catid'])){
   $cat_id = $_POST['catid'];
   $select_query = "SELECT * FROM `components_category` WHERE `cc_cat` = '$cat_id'";
   $select_query_run = mysqli_query($con , $select_query); ?>
   
   <?php while ($row = mysqli_fetch_array($select_query_run)) { ?>

<div class="col-lg-3 text-center py-3 ">
   <div class="card bg-transparent">
<img src="./admin/pictures/<?php echo $row['cc_pic'] ?>" style = "height:150px;" alt="">
<h5 class = "text-white mt-3" ><?php echo $row['cc_name'] ?></h5>
<button type="button" onclick="btnAddToList(<?php echo $row['cc_id'] ?>)" class=" btn-danger mt-2 p-2 rounded-pill">ADD</button>
</div>
</div>
<?php  } ?>

 <?php  }?>


 
 