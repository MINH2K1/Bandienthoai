<div class="detalis-image">
		    		<div class="flexslider">

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
										$image=$data['product_image'];
										$id = $data['product_id'];
									
?>


						<ul class="slides">
							<li data-thumb="<?php echo $level.img_path."$image";?>">
								<div class="thumb-image" style="width:250pt;"> <img src=" <?php echo $level.img_path."$image";?>" data-imagezoom="true" class="img-responsive" alt="" /> </div>
							</li>
							
						</ul>
						<?php
									}
						?>
					</div>
		    	</div>