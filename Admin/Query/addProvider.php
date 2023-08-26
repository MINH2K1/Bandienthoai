<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");
     if(isset($_POST['addprovider']))
     {
         
        $name= $_POST['providername'];
        $phone=$_POST['phone'];
        $address = $_POST['address'];
        $gmail = $_POST['gmail'];
       
if( $name!="" &&  $phone!="" &&   $address!="" &&  $gmail !="" ){
        $query_add_provider ="INSERT INTO `providers`(`provider_id`, `providername`, `phone`, `address`, `gmail`, `status`) VALUES (NULL,'$name','$phone', '$address','$gmail',0)";
       

        $result = $db->prepare($query_add_provider);
        $result->execute();
        header("location:../Pages/Providers.php");
}
else{

    echo'<script language="javascript">';
        echo 'alert("PLEASE INPUT FULL!!")';
        echo'</script>';

}
         

  
 }
 include($level.Head_path."HeadForm.php");
 include($level.Content_path."Bar.php");
 include($level.Content_path."Form-providers.php");
 include($level.Script_path."JavaScripts-Admin.php");
?>
