<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");
   


    if(isset($_GET['id']))
    {
        $id = $_GET['id']; 
    }
 



    if(isset($_POST['upcart'])){
        $quantity = $_POST['quantitychange'];
        if($quantity!="")
        {
        $query_up = "UPDATE cart_detail set quantity= '$quantity' where cart_id = $id";
        $rs = $db->prepare($query_up);
        $rs->execute();
        
   
        }
        $address = $_POST['addresschange'];
        if($address!="")
        {
        $query_up = "UPDATE cart set address= '$address' where id = ".$id;
        $rs = $db->prepare($query_up);
        $rs->execute();
        
   
        }
      
      

    }   
    header("location:../page/store.php");
   
    
   
    
    
?>