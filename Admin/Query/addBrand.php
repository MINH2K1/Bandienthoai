<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");
     if(isset($_POST['addbrand'])){
        $name = $_POST['tenhieu'];
        if($name!="")
       {
            $query_add_brand ="INSERT INTO hieu (hieu_id, tenhieu,status) VALUES (NULL, '$name',0)";
        $result = $db->prepare($query_add_brand);
        $result->execute();
        header("location:../Pages/Brand.php");

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
    include($level.Content_path."Form-Brand.php");
    include($level.Script_path."JavaScripts-Admin.php");
?>