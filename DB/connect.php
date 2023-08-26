<?php
        $conn =("mysql:host=localhost;dbname=banhang");
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
			PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
		);
	
		$username = "admin";

		$pass="tinhoc@123$%^";
	
		try
		{
			$db = new PDO($conn,$username,$pass,$options);
		   
		}
		catch(PDOException $e)
		{
			echo $e->GetMessage();
			exit();
		} 
?>


