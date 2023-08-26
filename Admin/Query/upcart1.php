<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");

    if(isset($_GET['id']))
    {
        $id_get = $_GET['id']; 
    }

    $sql ="UPDATE cart_detail SET `sta`=1 WHERE `cart_id` = $id_get";
    $result = $db->prepare($sql);
    $result->execute();
   
    header("location:../Pages/Cart.php");
    
?>