<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");

    if(isset($_GET['id']))
    {
        $id_get = $_GET['id']; 
    }
    if(isset($_POST['upCategory'])){
        $name = $_POST['tenloai'];
        if($name!="")
        {
        $query_up = "UPDATE loai set tenloai = '$name' where loai_id = ".$id_get;
        $rs = $db->prepare($query_up);
        $rs->execute();
        header("location:../Pages/Category.php");
        }
        else{
            echo'<script language="javascript">';
echo 'alert("PLEASE INPUT FULL!!")';
echo'</script>';

        }
    }
	 include($level.Head_path."HeadForm.php");
     include($level.Content_path."Form-up-category.php");
     include($level.Script_path."JavaScripts-Admin.php");
?>
