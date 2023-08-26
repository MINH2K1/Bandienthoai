<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");

    if(isset($_GET['id']))
    {
        $id_get = $_GET['id']; 
    }
    if(isset($_POST['upProvider'])){
        $name = $_POST['providername'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $gmail = $_POST['gmail'];

if( $name!="" && $phone!="" &&  $address!="" &&  $gmail!=""){

        $query_up = "UPDATE providers set providername= '$name',`phone`='$phone',`address`='$address',`gmail`='$gmail' where provider_id = ".$id_get;

      
        $rs = $db->prepare($query_up);
        $rs->execute();
        header("location:../Pages/Providers.php");
}
else{
    echo'<script language="javascript">';
    echo 'alert("PLEASE INPUT FULL!!")';
    echo'</script>';
}
    }
	 include($level.Head_path."HeadForm.php");
     include($level.Content_path."Form-up-Provider.php");
     include($level.Script_path."JavaScripts-Admin.php");
?>
