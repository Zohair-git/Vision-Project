<?php
include('../connection.php');

if (isset($_POST['submit'])) {
   $item_name = $_POST['name'];
   $item_price = $_POST['price'];
   $item_cat = $_POST['item_cat'];
   $item_picture = $_FILES['picture']['name'];
   $item_picture_tmp = $_FILES['picture']['tmp_name'];
   $path = 'pictures/' . $item_picture ;
   move_uploaded_file($item_picture_tmp , $path);
   $query = "INSERT INTO `components_category`(`cc_cat`, `cc_name`, `cc_pic`, `cc_price`)
    VALUES ('$item_cat','$item_name' ,'$item_picture' ,'$item_price')";
   $query_run = mysqli_query($con ,$query);
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>
<body>
 <?php include('navtopbar.php') ?>

 <div class="content-wrapper">
    <div class="container">

    <div class="row mt-3">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">ENTER COMPONENTS</div>
           <hr>
            <form method="post" enctype="multipart/form-data">
           <div class="form-group">
            <label for="input-1">Component Name</label>
            <input type="text" class="form-control" id="input-1" name="name" placeholder="Enter Component Name">
           </div>
           <div class="form-group">
            <label for="input-2">Comonent Picture</label>
            <input type="file" class="form-control" id="input-2" name="picture" placeholder="Enter Component Picture">
           </div>
           <div class="form-group">
            <label for="input-3">Components Price</label>
            <input type="text" class="form-control" name="price" id="input-3" placeholder="Enter Price">
           </div>
           <div class="form-group">
            <label for="input-3">Comonent Category</label>
           <select name="item_cat" class="form-control" >
            <?php $select_query = "SELECT * FROM `pizza_components`";
            $query_run = mysqli_query($con , $select_query);
            while ($cat = mysqli_fetch_array($query_run)) {   
            ?>
            <option value="<?php echo $cat['c_id'] ?>"><?php echo $cat['c_name'] ?></option>
            <?php }?>
           </select>
           </div>
          
           <div class="form-group">
            <button type="submit" name="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Submit</button>
          </div>
          </form>
         </div>
         </div>
      </div>

      
    </div><!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
</body>
</html>