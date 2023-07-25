<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="cart-modal-wrapper">
<div class="cart-modal modal-item">
<div class="cart-modal-header">
<h3 class="color-white">Cart</h3>
<div class="cart-modal-close">
<i class="flaticon-cancel"></i>
</div>
</div>
<div class="cart-modal-body">
<h2 class="color-white">My Order</h2>
<?php
foreach($_SESSION['items'] as $key => $value) { 
     
?>
<div class="cart-modal-product">
<div class="cart-modal-thumb">
<a href="shop-details.php">
<img src="./admin/pictures/<?php
echo $value['item_pic']; ?>" alt="product">
</a>
</div>
<div class="cart-modal-content">
<h4><a href="shop-details.php"><?php echo $value['item_name']; ?></a></h4>
<div class="cart-modal-action">
<div class="cart-modal-action-item">
<div class="cart-modal-quantity">
<p class="cart-quantity-price">$ <?php echo $value['item_price']; ?></p>
</div>
</div>
<div class="cart-modal-action-item">
<div class="cart-modal-delete">
    
<button id="delete_btn" type="button" onclick="btn_delete('<?php echo $value['item_name']?>')" name="btn_delete" ><i class="icofont-ui-delete"></i></button>
</div>
</div>
</div>
</div>

</div>
<?php } ?>
<div class="cart-modal-total">
 <p>Total</p>
 
<h3>$ </h3>
</div>
<div class="cart-modal-button">
<a href="checkout.php" class="btn full-width">Proceed To Checkout</a>
<a href="cart.php" class="btn btn-yellow full-width">View Shopping Cart</a>
</div>


</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
    function btn_delete(params) {
        var item_name = params;
    }
    $(document).ready(function() {
    $("#btn_delete").click(){
        var item_namess = item_name;
        alert(item_namess);
        $.ajax({
    url:'delete.php',
    type:'post',
    data:{
        click:1,
        item_name_ajax: item_namess,
    },
    success:function(data){
      alert("dataLoad")
     dataLoad()
    }

   }) 
}
});
    
</script>
</body>
</html>