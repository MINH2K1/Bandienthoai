<?php

session_start(); 





        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $db=mysqli_connect("localhost","admin","tinhoc@123$%^","banhang");

       
        if($email == "" || $pass== "")
        {
                   
                                      
            header("location:login.php");
            
        }else
        
        {
            $sql1 ="select * from customers where customer_email = '$email' and customer_pass = '$pass' and stat=0";
            $result = mysqli_query($db,$sql1);
            $row=mysqli_fetch_row($result);
            if(count($row))
            {
             
                $_SESSION["login"]=$row;
                $_SESSION["name"]=$email;
                  $id=$email;           header("location:giohang.php?email=$id");  
              
            }
         
            else{
                
           
              
                 echo'<script language="javascript">';
                echo 'alert("YOU ENTERED THE WRONG ACCOUNT OR PASWORD!")';
                echo'</script>';
               
          
        }
}
?>