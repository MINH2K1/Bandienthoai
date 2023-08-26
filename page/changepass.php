<?php







        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $newpass = $_POST['newpass'];
        $db=mysqli_connect("localhost","admin","tinhoc@123$%^","banhang");

       
        if($email == "" || $pass== "")
        {
                   
                                      
            header("location:changeaccount.php");
            
        }else
        
        {
            $sql1 ="select * from customers where customer_email = '$email' and customer_pass = '$pass'";
            $result = mysqli_query($db,$sql1);
            $row=mysqli_fetch_row($result);
            if(count($row) &&  $newpass!="")
            {
             
                $queryup ="UPDATE `customers` SET customer_pass='$newpass' where customer_email='$email'";

        $result = $db->prepare($queryup);
        $result->execute();
      
              header("location:login.php");
            }
         
            else{
                
           
              
                 echo'<script language="javascript">';
                echo 'alert("YOU ENTERED THE WRONG ACCOUNT OR PASWORD AND FILL NEW PASSWORD")';
                echo'</script>';
               
          
        }
}
?>