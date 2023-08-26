
		    <div class="clear"> </div>

			
		    <div class="wrap">
		    <div class="content">
		    	<div class="top-3-grids">
				
		    		<div class="section group">
					<?php
									$sql_product = "SELECT sum(quantity) as t ,product_title,products.product_id,product_image  from cart_detail,products where 
									cart_detail.product_id=products.product_id group by product_title,products.product_id,product_image having sum(quantity) ORDER by 
									sum(quantity) DESC LIMIT 3";

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
					  <h3>Top <?php echo $i?> best seller :<?php  echo $data['product_title'];?></h3>
					  <h3>Sold:<?php  echo $data['t'];?></h3>
				</div>
				<?php
									}
				?>
				
			</div>
			
		    	</div>
				
			
			
			
		    <div class="content-grids">
		    	<h4   >Products</h4>
			
		
		    	<div   class="section group"  >
			
				<div class="grid_1_of_4 images_1_of_4 products-info" style="width:100%" >
      
				<?php
									$sql_product = "Select * from products,hieu,loai where product_brand=hieu_id and product_cat=loai_id and products.status=0 and number>0 ";
									$result = $db->prepare($sql_product);
									$result->execute();	
									$products_rowdata = $result->fetchAll();
									foreach($products_rowdata as $data){
										$image = $data['product_image'];
										$id = $data['product_id'];
									
				?>
		
				<div  style="width:25%;float:left;">
				
					 <img style="width:100px;height:100px;padding-top:20px;"src=" <?php echo $level.img_path."$image";?>">
					 <a style="font-size:10pt;color:black;" href=<?php echo $level."page/single.php?id='$id'"?>><?php echo $data['product_title'];?></a>
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
		    