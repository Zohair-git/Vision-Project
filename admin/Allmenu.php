<?php
include('../connection.php');

$select_query = "SELECT * FROM `tbl_menu` ";
$s_q = mysqli_query($con , $select_query);

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

 <div class="content-wrapper text-center">
 <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All food Item</h5>
			  <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Food Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Delete</th>

                  </tr>
                </thead>
                <tbody>

                <?php while ($row = mysqli_fetch_array($s_q)) {
                    ?>
               
                  <tr>
                    <td><?php echo $row['menu_id']?></td>
                    <td><?php echo $row['food_name']?></td>
                    <td><?php echo $row['menu_price']?></td>

                  </tr>
             <?php   }?>
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
        </div>

      </div><!--End Row-->

 
    
</body>
</html>