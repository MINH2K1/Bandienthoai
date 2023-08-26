<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");
    if(isset($_GET['id']))
    {
        $id = $_GET['id']; 
    }
    if(isset($_GET['email']))
    {
        $email = $_GET['email']; 
    }



       
        $query_delete_cart ="DELETE FROM `cart` WHERE id='$id'";

        $result = $db->prepare($query_delete_cart);
        $result->execute();
      
        header("location:../page/giohang.php?email=$email");
       
        
          
 
        
?>

