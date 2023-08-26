<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");

    if(isset($_GET['id']))
    {
        $id_get = $_GET['id']; 
    }
    if(isset($_POST['upBrand'])){
        $name = $_POST['tenhieu'];
        if($name!="")
        {
        $query_up = "UPDATE hieu set tenhieu= '$name' where hieu_id = ".$id_get;
        $rs = $db->prepare($query_up);
        $rs->execute();
        header("location:../Pages/Brand.php");
        }
        else{
            echo'<script language="javascript">';
echo 'alert("PLEASE INPUT FULL!!")';
echo'</script>';

        }
    }
	 include($level.Head_path."HeadForm.php");
     include($level.Content_path."Form-up-Brand.php");
     include($level.Script_path."JavaScripts-Admin.php");
?>
