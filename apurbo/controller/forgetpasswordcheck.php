<?php 

require_once '../model/databasefunction.php';


if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $lastpassword=$_POST['lastpassword'];
     
   

    if(str_starts_with($username,"Gu-")){
        
        if(forgetpassword(str_replace("Gu-","",$username),$email,$phone, $lastpassword,'guestregistation')){
        
            
            header("Location: ../view/updatepassword.php?username=$username");
          
           
        }
        else{
            
            header("Location: ../view/forgotpassword.php?matchinfo=true");
        }
       
        
    
   
    }
    else if(str_starts_with($username,"Ho-")){

        if(forgetpassword(str_replace("Ho-","",$username),$email,$phone, $lastpassword,'hostregistation')){
        
            header("Location: ../view/updatepassword.php?username=$username");
          

        }
        else{
            $_SESSION['matchinfo']="true";
            header("Location: ../view/forgotpassword.php?matchinfo=true");
        }
    }
      
   
    }


    ?>
    




