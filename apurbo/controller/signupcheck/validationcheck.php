<?php
require '../../model/databasefunction.php';

if (isset($_POST['username'])  ) {
    $username = $_POST['username'];

    if (checkUsernameAvailability(str_replace("Ho-","",$username))) {
       
        echo "Username already exists";
    }
}
if (isset($_POST['phone']) ) {
    $phone = $_POST['phone'];

    if (checkUserphoneAvailability($phone)) {
       
        echo "number already exists";
    } 
}
?>
