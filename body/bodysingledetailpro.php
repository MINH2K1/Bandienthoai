

<div class="detalis-image-details">
		    		<div class="details-categories">



<?php

if(isset($_GET['id']))
{
    $id_get = $_GET['id']; 

}




									$sql_product = "Select * from products,hieu,loai where product_brand=hieu_id and number>0 and product_cat=loai_id and products.status=0 and product_id= ' $id_get' and number>0";
									$result = $db->prepare($sql_product);
									$result->execute();	
									$products_rowdata = $result->fetchAll();


									foreach($products_rowdata as $data){
										
										$id = $data['product_id'];

									
  


									
?>




		    			<ul>
		    				<li><h3 style="padding-left:180px;">Category:</h3></li>
		    				<li  class="active1"><span ><?php echo $data['tenloai'];?></span></li>
							<li><h3 style="padding-left:180px;">Brand:</h3></li>
		    				<li  class="active1"><span><?php echo $data['tenhieu'];?></span></li>
							<li><h3 style="padding-left:180px;">Warehouse:</h3></li>
				
		    				<li  class="active1"><span><?php echo $data['number'];?></span></li>
		    				
		    			</ul>
		    		</div><br />
		    		<div class="brand-value">
		    			<h3 style="font-size:50px;color:Green;padding-left:180px;"><?php echo $data['product_title'];?></h3>
		    			<div class="left-value-details">
			    			<ul style="padding-left:180px;">
			    				<li >Price:</li>
			    				<li><span>$2000</span></li>
			    				<li><h5 style="font-size:30px;color:Green;"><?php echo $data['product_price'];?>$</h5></li>
			    				<br />
			    				
			    			</ul>
		    			</div>


		    			<div class="right-value-details">
			    	
						<div class="brand-history">
		    			
				
                        </form>

					
						<br><br>


					<form action=<?php echo $level.qr_path."addcart.php"?> method ="post">
					<input style="width:165px;margin-left:170px;margin-bottom:20px;" type="number"min=1 max="<?php echo $data['number'];?>" name="quantity" placeholder="quantity">
					<input style="margin-left:45%;" type="text" name="address" placeholder="Address">
					
						<input type="hidden" name="product_id" value="<?php echo $data['product_id'];?>"	>
						<input type="hidden" name="product_title" value="<?php echo $data['product_title'];?>"	>
						<input type="hidden" name="product_image" value="<?php echo $level.img_path."$image";?>"	>

						<?php  date_default_timezone_set('Asia/Ho_Chi_Minh');
						
						 $date=date('Y/m/d H:i:s',time())?>

						<input type="hidden" name="date" value="<?php echo $date ?>"	>
						<input type="hidden" name="id" value="<?php echo rand(10,10000) ?>"	>
						
						<?php
						if($a=="." )
						{
					   ?>
                          <input type="hidden" name="customer_email" value="<?php echo $b;?>"	>
		                <?php
						}
					else
					 {
						 ?>
					 <input type="hidden" name="customer_email" value=""	>
					 <?php
					 }
					 ?>

					
						
					
						<input type="hidden" name="pricetoltal" value="<?php echo $data['product_price'];?>"	>
						<input style="margin-left:45%;"type="submit" name="addcart"value="Add Cart" class="btn btn-primary">
						<a href="<?php 

						if($a==""){echo $level.page_path."login.php";}
						
						if($a=="." ){echo $level.page_path."giohang.php?email=$b";}
					 
						?>" style="margin-left:45%;" class="botton">
						View your cart</a>
				
					</form >			
		    			
		    		</div>
		    			</div>
		    			<div class="clear"> </div>
		    		</div>
		    	
<?php
}
?>