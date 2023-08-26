<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");
     if(isset($_POST['addproduct']))
     {
         
        $category= $_POST['loai'];
        $brand=$_POST['hieu'];
        $title = $_POST['product_title'];
        $price = $_POST['product_price'];
        $desc = $_POST['product_desc'];
       
        $keywords = $_POST['product_keywords'];
        $number = $_POST['number'];
        $image = $_POST['product_image'];
        $provider = $_POST['providers'];
    if($image!= "" && $number!= "" && $title!= "" && $price!= "" && $keywords!="" && $desc!="" )
    {

        $query_add_product ="INSERT INTO `products`(`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `number`,status,product_provi) 
        VALUES (NULL,'$category','$brand','$title','$price','$desc','$image','$keywords','$number',0,' $provider ')";

        $result = $db->prepare($query_add_product);
        $result->execute();
        header("location:../Pages/Product.php");

    }

    else
   
   { 
   /* header("location:../Pages/Product.php");*/

   
  

echo'<script language="javascript">';
echo 'alert("PLEASE INPUT FULL!!")';
echo'</script>';

  
   }

    
    
    
    
      

    
 }

 include($level.Head_path."HeadForm.php");
 include($level.Content_path."Bar.php");
 include($level.Content_path."Form-products.php");
 include($level.Script_path."JavaScripts-Admin.php");
?>
