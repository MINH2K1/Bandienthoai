
		    <div class="clear"> </div>

			
<div class="wrap">
<div class="content">
	<div class="top-3-grids">
	
		<div class="section group">
		<?php
						$sql_product = "SELECT product_image,product_title,cart_detail.product_id, sum(quantity) from cart_detail,cart,products where cart_detail.cart_id=cart.id and products.product_id=cart_detail.product_id GROUP by cart_detail.product_id ORDER by product_title ASC limit 3";
						$result = $db->prepare($sql_product);
						$result->execute();	
						$products_rowdata = $result->fetchAll();
						$i=0;
						foreach($products_rowdata as $data){
							$i++;
							$image = $data['product_image'];
							$id = $data['product_id'];
						
	?>
		
	<div class="grid_1_of_3 images_1_of_3">
		  <a href=<?php echo $level."page/single.php?id=$id"?>><img style="width:60%;background-color:white;"src="<?php echo $level.img_path."$image";?>"></a>
		  <h3>Top sale :<?php  echo $data['product_title'];?></h3>
		  <h3>Quantity sold:<?php  echo $data['sum(quantity)'];?></h3>
	</div>
	<?php
						}
	?>
	
</div>

	</div>
	

		    <div class="content-grids">
		    	
				<h1>KEYWORD SEARCH: </h1>	
				<?php 
				  if(isset($_GET['product_title']))
				  {
					  $id_get2 = $_GET['product_title']; 
				
				  echo "Name :$id_get2 -----------------------------------";
				  }
			
				  if(isset($_GET['product_price']))
				  {
					  $id_get1 = $_GET['product_price']; 
				
				  echo "Price :$id_get1" ;
				  }
			
				  ?>
			
		
		    	<div   class="section group"  >
			
				<div class="grid_1_of_4 images_1_of_4 products-info" style="width:100%" >
      
				<?php
              if(isset($_GET['product_title']) && isset($_GET['product_price']) )
              {
                  $id_get1 = $_GET['product_price']; 
				  $id_get2 = $_GET['product_title']; 
				  $sql_product = "Select * from products,hieu,loai where product_brand=hieu_id and product_cat=loai_id and products.status=0 and number>0 and product_title like'%$id_get2%' and product_price<= '$id_get1'";
				  $result = $db->prepare($sql_product);
				  $result->execute();	
				  $products_rowdata = $result->fetchAll();
				 

              }
			  if(isset($_GET['product_title']) && $_GET['product_price']=="" )
              {
                
				  $id_get2 = $_GET['product_title']; 
				  $sql_product = "Select * from products,hieu,loai where product_brand=hieu_id and product_cat=loai_id and products.status=0 and number>0 and product_title like'%$id_get2%'  ";
				  $result = $db->prepare($sql_product);
				  $result->execute();	
				  $products_rowdata = $result->fetchAll();
				 

              }
			
			  if(  $_GET['product_title']=="" && $_GET['product_price']=="" )
              {
                
				 
				  $sql_product = "Select * from products,hieu,loai where product_brand=hieu_id and product_cat=loai_id and products.status=0 and number>0   ";
				  $result = $db->prepare($sql_product);
				  $result->execute();	
				  $products_rowdata = $result->fetchAll();
				 

              }
			  foreach($products_rowdata as $data){
				$image = $data['product_image'];
				$id = $data['product_id'];

				
									
				?>
				<div  style="width:25%;float:left;">
				
					 <img style="width:100px;height:100px;padding-top:20px;"src=" <?php echo $level.img_path."$image";?>">
                     <h4 style="font-size:10pt;color:black;" href=<?php echo $level."page/single.php"?>><?php echo $data['product_title'];?></h4>
					 <h4 style="font-size:15pt;">Price: <?php echo $data['product_price'];?>$ </h4>
					 <h3 style="font-size:10pt;">Brand: <?php echo $data['tenhieu'];?></h3>
					 <h3 style="font-size:10pt;">Category: <?php echo $data['tenloai'];?></h3>
					 <ul>
					 
					 	<li><a  class="cart" href=<?php echo $level.page_path."single.php?id=$id"?>> </a></li>
					 	<li><a  class="i" href=<?php echo $level.page_path."single.php?id=$id"?>> </a></li>
					 	<li><a  class="Compar" href=<?php echo $level.page_path."single.php?id=$id"?>> </a></li>
					 	<li><a  class="Wishlist" href=<?php echo $level.page_path."single.php?id=$id"?>> </a></li>
						
					 </ul>
			
			
				 </div>
				 
					 <?php
										}
									
					?>
					
			</div>
			</div>
			</div>
		
			
</div>
	

</div>
		    