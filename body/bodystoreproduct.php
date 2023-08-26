<div   id="wrap" align="center"  >
		
		<a  id="show_cart" href="javascript:void(0)">View your cart</a>
		

		

		

<?php
									$sql_product = "Select  * from products,hieu,loai where product_brand=hieu_id and product_cat=loai_id and products.status=0 and number>0";
									$result = $db->prepare($sql_product);
									$result->execute();	
									$products_rowdata = $result->fetchAll();
									foreach($products_rowdata as $data){
										$image = $data['product_image'];
										$id = $data['product_id'];
									
				?>
				<ul   >
			<li   id="<?php echo $data['product_id'];?>">
				<img    src="<?php echo $level.img_path."$image";?>" class="items" alt="" />
				
				<br clear="all" />
				<div  style="font-weight:bold;color:GREEN;"><?php echo $data['product_title'];?></div>
			</li>
			
		
			
			
			<!-- Detail Boxes for above four li -->
			
			<div class="detail-view" id="detail-<?php echo $data['product_id'];?>">
			
				<div class="close" align="right">
					<a href="javascript:void(0)">x</a>
					
				</div>
				
				<img style="width:20%;"src="<?php echo $level.img_path."$image";?>" class="detail_images" alt="" />
				
				<div class="detail_info">
					
					<label class='item_name'  style="font-weight:bold;color:GREEN;font-size:50px;"><?php echo $data['product_title'];?></label>
					<br clear="all" />
					
					<p  style="font-weight:bold;color:GREEN;">Brand:
					<?php echo $data['tenhieu'];?>
					
						<br clear="all" /><br clear="all" />
						<span   style="font-weight:bold;color:GREEN;font-size:30px;"class="price"><?php echo $data['product_price'];?>$</span>
						
					</p>
					
					<br clear="all" />
					
					<button  class="add-to-cart-button"><a  style="font-weight:bold;color:GREEN;border:2px solid Green;background-color:gray;" href="<?php echo $level.page_path."single.php?id=$id"?>">Add to Cart</a></button>
					
				</div>
				
				
			</div>
		
		
			

		
			
			<br clear="all" />
			</ul>
			<?php
										}
									
					?>

		<br clear="all" />
	</div>
	
		
</div>

		    </div>
		    </div>