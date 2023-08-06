<?php
session_start();
include('connection.php');
print_r($_SESSION['items']);
// session_destroy()

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 id="total_items"></h1>
    <?php
    $select_query = "SELECT * FROM `tbl_menu` WhERE cat_foreign_id = 1";
    $select_query_run = mysqli_query($con, $select_query);
    while ($fetch_query = mysqli_fetch_array($select_query_run)) { ?>
        <div>

            <img src="./assets/images/<?php echo $fetch_query['food_pic'] ?>" alt="">
            <h1>
                <?php echo $fetch_query['food_name'] ?>
            </h1>
            <p>
                <?php echo $fetch_query['menu_price'] ?>
            </p>
            <button type="button" onclick="ajax(<?php echo $fetch_query['menu_id'] ?>)">ADD TO CART</button>

        </div>
        <?php
    }
    ?>
    <script src=".\assets\js\jquery-3.6.1.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->

    <script>
        function ajax(params) {


            alert(params);
            // alert(item_name);
            // alert(item_price);
            $.ajax({
                url: "practice_ajax.php",
                method: 'POST',
                data: {
                    item_id: params

                }, 
             success :function(response){
                document.getElementById("total_items").value=response;
             },
             error: function(data){
            console.error();
        }
            });
        }
    </script>

</body>

</html>