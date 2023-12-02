<?php
require_once('db.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if(adduser($_POST)){
    echo "user added";
   }
   else{
    echo "user not added";
   }



   
}
?>