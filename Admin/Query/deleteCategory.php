<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");

    if(isset($_GET['id']))
    {
        $id_get = $_GET['id']; 
    }

    $query_dl_category ="DELETE FROM `loai` WHERE `loai`.`loai_id` = $id_get";
    $result = $db->prepare($query_dl_category);
    $result->execute();
    header("location:../Pages/Category.php");
    
?>