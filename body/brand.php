
				<div class="content-sidebar">
<h4>Brand</h4>
                <?php
									$sql = "Select * from hieu where status=0";
									$result = $db->prepare($sql);
									$result->execute();	
									$brand_rowdata = $result->fetchAll();
									foreach($brand_rowdata  as $data){
						
										$id = $data['hieu_id'];
									
				?>
		    	
						<ul>
                        <li><a  href=<?php echo $level.page_path."SearchBrand.php?id=$id"?>><?php echo $data['tenhieu'];?></a></li>
						
						</ul>
				<?php 
						}
				?>
				
				<p>You have been on this page since: <?php  
				             date_default_timezone_set('Asia/Ho_Chi_Minh');
						
						echo $date=date('m/d/Y H:i:s',time())?></p>
		    	</div>


		    </div>
			
<div class="clear"> </div>
</div>
