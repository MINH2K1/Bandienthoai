<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");

    if(isset($_GET['id']))
    {
        $id_get = $_GET['id']; 
    }
    if(isset($_POST['up1Cus'])){
    

    
        $query_up = "UPDATE customers set stat= 0 where customer_id = ".$id_get;
        $rs = $db->prepare($query_up);
        $rs->execute();
        header("location:../Pages/Customers.php");
       
    }
	 include($level.Head_path."HeadForm.php");
     include($level.Content_path."Form-up1Cus.php");
     include($level.Script_path."JavaScripts-Admin.php");
?>
