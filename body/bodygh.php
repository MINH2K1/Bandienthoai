



<?php

    if(isset($_GET['email']))
    {
        $id_get = $_GET['email']; 
    }
    $sql = " select DISTINCT cart_id,product_title,product_image,address,fullname, product_price,quantity,pricetoltal,date ,number from cart_detail,cart,products,customers where cart_detail.cart_id=cart.id and products.product_id=cart_detail.product_id and fullname='$id_get' and sta=3 ";

   
$run_query_sql = $db->prepare($sql);
    $run_query_sql->execute();
$row= $run_query_sql->fetchAll();
echo "Wellcom: $id_get";
?>


 <div >
<a href="<?PHP echo $level."index.php"?>"  style="border-radius: 20px 20px 20px 20px;background-color:Gray;color:green;margin-left:15%;font-weight:bold;">&#9756 HOME PAGE</a>
<a href="#"  style="border-radius: 20px 20px 20px 20px;background-color:Gray;color:green;margin-left:53.5%;font-weight:bold;">&#9758 PAY ALL PILL</a>
<a href="<?PHP echo $level.page_path."history.php?id=$id_get"?>"  style="border-radius: 20px 20px 20px 20px;background-color:Gray;color:green;margin-left:75%;font-weight:bold;">&#9758 ORDER HISTORY </a>
<H1 style="margin-left:45%;color:BLACK;font-weight:BOLD;font-size:200%;">PENDING</H1>

<?php
                        $i = 0;
                        foreach($row as $data){
                        $i++;
                        $id =$data['cart_id'];
                        $image=$data['product_image'];
                     
                        $email =$data['fullname'];
                      

       
?>

            <style>

.hoverimage img{
    -webkit-transform:scale(1); /* Thu nhỏ kích thước ảnh còn 0.8 so với ảnh gốc*/
   
   
    -webkit-transition-duration: 0.2s; /*Thời gian phóng to, nhỏ ảnh*/
   
   
    margin: 0 10px 5px 0; /*căn đều giữa ảnh*/
    }
    .hoverimage img:hover{
    -webkit-transform:scale(4); /* Tăng kích cỡ ảnh lên 1.5 lần*/

    box-shadow:0px 0px 60px Green; /*Đổ bóng bằng CSS3*/


    }
    
    table td p{
color:pink;
font-size:150%;
    }
table td {
font-weight:bold;
}
            </style>


<table style=" border-radius: 20px 20px 20px 20px;background-color:#0e87bb;width:90%;text-align:center;margin-left:5%;margin-top:2%;">




      

                        <td ><p >STT:</p><?php echo $i ?> </td>
                        <td style="padding-left:10%;" ><p>TITLE: </p><?php echo $data['product_title'] ?> </td>
                        <td style="padding-left:13%;"><p>CODE BILL:</p><?php echo $id?> </td>
                        <td  style="width:30%;padding-top:10%;padding-left:20%;"><div class="hoverimage">
                <img class="card-img-top" src="<?php echo $level.img_path."$image"?>" />
                </div>
      
                     </td>
                        <td ><p>ADDRESS:</p><?php echo $data['address'] ?> </td>
          
                        <td ><p>QUANTITY:</p><?php echo $data['quantity'] ?> </td>
                        <td><p>PRICE TOTAL:</p><?php echo $data['pricetoltal'] ?> </td>
                        <td><p>DATE ORDER:</p><?php echo $data['date'] ?> </td>

                        <td>
                        <form action=<?php echo $level.qr_path."upcart.php?id=$id" ?> method ="post">
                    
                        <input style="width:110px;" type="number"min=1 max="<?php echo $data['number'];?>" name="quantitychange" placeholder="quantity">
                        <input style="height:80px;margin-bottom:20px;" type="text" name="addresschange" placeholder="change address">
                        <input type="submit" style="font-size:270%;" name="upcart"value="&#8853" class="btn btn-primary">
                        </form>
</td>
                      
                      
        
                      

                                
                      



                        <td style="font-size:270%;">

                        <a   href="<?php echo $level.qr_path."delecart.php?id=$id & email=$email" ?>">&#8855 </a>

                   
                        </td>


           


</table>


         <?php
                                            }
        ?>


 </div>