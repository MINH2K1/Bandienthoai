<?php
    $level="../";
    include($level."config.php");
    include($level.DB_path."connect.php");
     if(isset($_POST['addnews'])){
       
       
        $email = $_POST['email'];
        $content = $_POST['noidung'];
       
        if( $email!="" && $content!="" )
        {
        $query_add_news ="INSERT INTO `tintuc`(`id_baiviet`, `email`, `noidung`) VALUES (null,'$email','$content')";

        $result = $db->prepare($query_add_news);
        $result->execute();
       
       
        }
      
    
    
    }
    header("location:../page/contact.php");
   
  
?>