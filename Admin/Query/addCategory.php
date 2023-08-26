<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");
     if(isset($_POST['addcategory'])){
        $name = $_POST['tenloai'];
        if($name!=""){
        $query_add_category ="INSERT INTO loai (loai_id, tenloai,status) VALUES (NULL, '$name',0)";

        $result = $db->prepare($query_add_category);
        $result->execute();
            header("location:../Pages/Category.php");
        }
        else
        {
            echo'<script language="javascript">';
            echo 'alert("PLEASE INPUT FULL!!")';
            echo'</script>';

        }
        
    }
    include($level.Head_path."HeadForm.php");
    include($level.Content_path."Bar.php");
    include($level.Content_path."Form-category.php");
    include($level.Script_path."JavaScripts-Admin.php");
?>