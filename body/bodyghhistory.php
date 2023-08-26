
<?php
    if(isset($_GET['id']))
    {
        $id_get = $_GET['id']; 
    }
    $sqlhis = " select DISTINCT cart_id,product_title,product_image,product_price,quantity,pricetoltal,date from cart_detail,cart,products,customers where cart_detail.cart_id=cart.id and products.product_id=cart_detail.product_id and fullname='$id_get' and sta!='3'";
$run_query_sql = $db->prepare($sqlhis);
    $run_query_sql->execute();
$row= $run_query_sql->fetchAll();
echo " Welcom:$id_get";
?>


 <div >
<a href="<?PHP echo $level."index.php"?>"  style="border-radius: 20px 20px 20px 20px;background-color:Gray;color:GREEN;margin-left:15%;font-weight:bold;">&#9756 HOME PAGE</a>
<a href="<?PHP echo $level.page_path."giohang.php?id=$id_get"?>"  style="border-radius: 20px 20px 20px 20px;background-color:Gray;color:green;margin-left:53%;font-weight:bold;">&#9756 BACK ALL BILL</a>
<H1 style="margin-left:40%;color:BLACK;font-weight:BOLD;font-size:200%;">ORDER HISTORY</H1>

<?php
                        $i = 0;
                        foreach($row as $data){
                        $i++;
                        $id =$data['cart_id'];
                        $image=$data['product_image'];
                  
            ?>

            <style>

.hoverimage img{
    -webkit-transform:scale(1); /* Thu nhỏ kích thước ảnh còn 0.8 so với ảnh gốc*/
   
   
    -webkit-transition-duration: 0.2s; /*Thời gian phóng to, nhỏ ảnh*/
   
   
    margin: 0 10px 5px 0; /*căn đều giữa ảnh*/
    }
    .hoverimage img:hover{
    -webkit-transform:scale(4); /* Tăng kích cỡ ảnh lên 1.5 lần*/

    box-shadow:0px 0px 60px Blue; /*Đổ bóng bằng CSS3*/


    }
    
    table td p{
color:pink;
font-size:150%;
    }
table td {
font-weight:bold;
}
            </style>


<table style=" border-radius: 20px 20px 20px 20px;background-color:Green;width:70%;text-align:center;margin-left:15%;margin-top:2%;margin-top:1%;">




      

                        <td ><p >STT:</p><?php echo $i ?> </td>
                        <td style="padding-left:10%;" ><p>TITLE: </p><?php echo $data['product_title'] ?> </td>
                        <td style="padding-left:13%;"><p>CODE BILL:</p><?php echo $data['cart_id'] ?> </td>
                        <td  style="width:30%;padding-top:10%;padding-left:20%;"><div class="hoverimage">
                <img class="card-img-top" src="<?php echo $level.img_path."$image"?>" />
                </div>
    
                     </td>
                        <td ><p>PRICE(1 product):</p><?php echo $data['product_price'] ?> </td>
          
                        <td ><p>QUANTITY:</p><?php echo $data['quantity'] ?> </td>
                        <td><p>PRICE TOTAL:</p><?php echo $data['pricetoltal'] ?> </td>
                        <td><p>DATE ORDER:</p><?php echo $data['date'] ?> </td>
                        
                      

           


</table>
         <?php
                                            }
        ?>


 </div>