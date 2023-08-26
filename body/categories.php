<div class="content-sidebar">
<h4>Categories</h4>
                <?php
									$sql = "Select * from loai where status=0";
									$result = $db->prepare($sql);
									$result->execute();	
									$category_rowdata = $result->fetchAll();
									foreach($category_rowdata  as $data){
						
										$id = $data['loai_id'];
									
				?>
		    	
						<ul>
							<li><a  href=<?php echo $level.page_path."SearchCat.php?id=$id"?>><?php echo $data['tenloai'];?></a></li>
						
						</ul>
				<?php 
						}
				?>
		    	</div>





