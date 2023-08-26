<div class="clear"> </div>

<?php 				
if(isset($_GET['id']))
{
    $id_get = $_GET['id']; 
}
									$sql_product = "Select * from products,hieu,loai where product_brand=hieu_id and product_cat=loai_id and products.status=0 and product_id= ' $id_get' and number>0";
									$result = $db->prepare($sql_product);
									$result->execute();	
									$products_rowdata = $result->fetchAll();
									foreach($products_rowdata as $data){
										
										$id = $data['product_id'];
									
?>

		    	<div class="menu_container">
				
						<p class="menu_head">About Product<span class="plusminus">+</span></p>
							<div class="menu_body" style="display: none;">
							<p><?php echo $data['product_desc']?></p>
							</div>
					</div>

<?php
}
?>
			</div>
			
		    	</div>