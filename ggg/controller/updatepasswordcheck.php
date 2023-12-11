<?php 

require_once("../model/databasefunction.php");
require_once("validation.php");

if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
    $table=$_POST['table'];
   
   if(validatePassword($password)){
  
   
    if(setpassword($username,$password,$table)){
        header("Location: ../view/login.php");
    }
}
    else{
        if($table== 'hostregistation'){
            $username="Ho-".$username;
        }
        else if($table== 'guestregistation'){
            $username="Gu-".$username;
        }
        else if($table== 'admin'){
            $username="Ad-".$username;
        }
       header("Location: ../view/updatepassword.php?username=$username&pass=empty");
    }
}













?>