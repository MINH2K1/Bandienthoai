

<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");

    if(isset($_GET['id']))
    {
        $id_get = $_GET['id']; 
    }

    $query_dl_provider ="UPDATE `providers` SET `status`=1 WHERE `provider_id` = $id_get";
    $result = $db->prepare($query_dl_provider);
    $result->execute();
   
    header("location:../Pages/Providers.php");
    
?>