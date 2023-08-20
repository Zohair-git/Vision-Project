<?php
 include('connection.php');
 
   $cat_id = $_POST['abc'];
   $select_query = "SELECT * FROM `components_category` WHERE `cc_cat` = '$cat_id'";
   $select_query_run = mysqli_query($con , $select_query); ?>
   
   <?php while ($row = mysqli_fetch_array($select_query_run)) { ?>

<div class="col-lg-3">
   <div class="card">
<img src="<?php echo $row['cc_pic'] ?>" style="width: 50px;height:50px;border-radius:100px" alt="">
<h5><?php echo $row['cc_name'] ?></h5>
<button type="button" onclick="btnAddToList(<?php echo $row['cc_id'] ?>)" class="">ADD</button>
</div>
</div>
<?php  } ?>

