<?php

session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['admin'];
    $pass = $_POST['password'];

    

    if ($pass == 'admin123' && $email == 'admin') {
        $_SESSION['aemail'] = $email;
    $_SESSION['apass'] = $pass;

        header('location:index.php');
        exit();
    }
} else {
    echo "ADMIN ONLY";
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
<body class = "bg-dark">

<h1 class = "text-center text-white mt-5">ADMIN LOGIN</h1>


<div class="container mt-5">

                                    <form method="post">

                                        <div class="mt-5 ">
                                            <input type="text" name="admin" class=" form-control form-control-lg "
                                                placeholder="Enter your email">
                                        </div>
                                        <div class=" mt-3">
                                            <input type="password" name="password"
                                                class="form-control form-control-lg" placeholder="Password">
                                        </div>

                                        <button class="btn btn-danger form-control mt-4" type="submit"
                                            name="submit" value="submit">Submit</button>

                                    </form>
                                  

        
    </div>


    </section>


















 
    
</body>
</html>