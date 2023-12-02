<?php
require_once('../model/dbfunction.php');




    $username = $_POST['username'];
    $password = $_POST['password'];

    if(login($username,$password)){
        header('Location: ../view/profile.php');
        
    }
    else{
        header('Location: ../view/login.php');
    }

   

?>