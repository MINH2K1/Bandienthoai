<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");
     if(isset($_POST['addcart'])){
       $idcart= $_POST['id'];
        $email = $_POST['customer_email'];
        $date = $_POST['date'];
        $address = $_POST['address'];
        $product_id=$_POST['product_id'];
        $quantity=$_POST['quantity'];
        $pricetoltal=$_POST['pricetoltal'];
        if(  $address!=""&& $email!="" && $quantity!="" )
        {
        $query_add_cart ="INSERT INTO `cart`(`id`, `fullname`, `date`, `address`) VALUES ($idcart,'$email','$date','$address')";

        $result = $db->prepare($query_add_cart);
        $result->execute();
      

        $query_add_cartdetail ="INSERT INTO `cart_detail`(`id`, `cart_id`, `product_id`, `quantity`, `sta`, `pricetoltal`) 

        VALUES (null,$idcart,  $product_id,$quantity,3,$pricetoltal)";

        $result1 = $db->prepare($query_add_cartdetail);
        $result1->execute();
        
            header("location:../page/giohang.php?email=$email");
     }
     else{
      

        header("location:../page/single.php?id= $product_id");



     }
        
    }
?>