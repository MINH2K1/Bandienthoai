<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");
     if(isset($_POST['addcus'])){
       
        $name = $_POST['customer_name'];
        $email = $_POST['customer_email'];
        $pass = $_POST['customer_pass'];
        $country = $_POST['customer_country'];
        $city = $_POST['customer_city'];
        $contact = $_POST['customer_contact'];
        $address = $_POST['customer_address'];
        if( $name!="" && $email!="" && $pass!="" && $country!="" && $city!=""  && $contact!=""  && $address!="" )
        {
        $query_add_cus ="INSERT INTO `customers`(`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `stat`)
         VALUES ( null,'$name','$email', '$pass','$country', '$city', '$contact', '$address',0)";

        $result = $db->prepare($query_add_cus);
        $result->execute();
      
            header("location:../Pages/Customers.php");
     }
     else{
        echo'<script language="javascript">';
        echo 'alert("PLEASE INPUT FULL!!")';
        echo'</script>';

     }
        
    }
    include($level.Head_path."HeadForm.php");
    include($level.Content_path."Bar.php");
    include($level.Content_path."Form-customers.php");
    include($level.Script_path."JavaScripts-Admin.php");
?>