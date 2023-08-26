<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");
    if(isset($_GET['id']))
    {
        $id_plu = $_GET['id']; 
    }

    $value = $_POST['value'];
    echo $value;

    $query_status = "UPDATE `detail_order` SET `status`='$value' WHERE plu = $id_plu";
    $rs = $db->prepare($query_status);
    $rs->execute();
    header("location:../Query/detailOrder.php?id=$id_plu");
?>