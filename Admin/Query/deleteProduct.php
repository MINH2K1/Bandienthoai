

<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");

    if(isset($_GET['id']))
    {
        $id_get = $_GET['id']; 
    }

    $query_dl_product ="UPDATE `products` SET `status`=1 WHERE `products`.`product_id` = $id_get";
    $result = $db->prepare($query_dl_product);
    $result->execute();
   
    header("location:../Pages/Product.php");
    
?>

