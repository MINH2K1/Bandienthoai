

<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");

    if(isset($_GET['id']))
    {
        $id_get = $_GET['id']; 
    }

    $sqlcartdetail ="UPDATE cart_detail SET `sta`=0 WHERE `cart_id` = $id_get";
    $result = $db->prepare($sqlcartdetail);
    $result->execute();

    $sqlproduct ="UPDATE cart_detail,products SET `number`=`number`-`quantity` WHERE `cart_id` = $id_get and cart_detail.product_id=products.product_id";
    $result = $db->prepare($sqlproduct);
    $result->execute();
   
    header("location:../Pages/Cart.php");
    
?>

