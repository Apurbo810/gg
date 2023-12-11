<?php

session_start();
require_once("../../model/postfunction.php");
if(!isset($_SESSION['loginApprove'])){
    header("Location: ../../view/login.php");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {


$_SESSION['post_data'] = $_POST;

//send user data to database
postadd($_POST);
if($_SESSION['postaddErr'] =="true"){
   
    unset($_SESSION['post_data']);
    header("Location: ../../view/host/hostprofile.php");
   }


}




?>