<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");

    if(isset($_GET['id']))
    {
        $id_get = $_GET['id']; 
    }



    if(isset($_POST['upProduct'])){
          
        $category= $_POST['loai'];
        $brand=$_POST['hieu'];
        $title = $_POST['product_title'];
        $price = $_POST['product_price'];
        $desc = $_POST['product_desc'];
        $image = $_POST['product_image'];
        $keywords = $_POST['product_keywords'];
        $number = $_POST['number'];
        $provider = $_POST['providers'];
        if($image!= "" && $number!= "" && $title!= "" && $price!= "" && $keywords!="" && $desc!="" )
        {
        $query_up = "UPDATE `products` SET `product_cat`=' $category',`product_brand`='$brand',
        `product_title`=' $title',`product_price`='$price',`product_desc`=' $desc',`product_image`='$image',
        `product_keywords`='$keywords',`number`=' $number',product_provi='$provider'
        WHERE product_id = $id_get";
        $rs = $db->prepare($query_up);
        $rs->execute();
        header("location:../Pages/Product.php");
        }
        else
        {
            echo'<script language="javascript">';
echo 'alert("PLEASE INPUT FULL!!")';
echo'</script>';

        }
    }
    include($level.Head_path."Headform.php");
  
    include($level.Content_path."Form-up-product.php");
    include($level.Script_path."JavaScripts-Admin.php");
?>
