<div class="header">
			<div class="search-bar">
			<form action=<?php echo $level.page_path."SearchProducts.php?product_title=product_title & product_price=product_price"?> method ="GET">
		        	<input type="number" name="product_price" placeholder="product_price <= input price">
					<input type="text" name="product_title" placeholder="Name products">

					<input type="submit" value="Search" />
				</form>
				
					
				
			</div>