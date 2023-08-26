<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");
  
   
    if(isset($_GET['id']))
    {
        $id_get = $_GET['id']; 
    }
 
    $query_dl_brand ="DELETE FROM `hieu` WHERE `hieu`.`hieu_id` = $id_get";
    $result = $db->prepare($query_dl_brand);
    $result->execute();
    header("location:../Pages/brand.php");
    
?>