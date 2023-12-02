<?php
$dbhost = "localhost";
$dbname = "emp";
$dbuser = "root";
$dbpass = "";

function connection(){
    global $dbhost;
    global $dbname;
    global $dbpass;
    global $dbuser;

    return   mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
}


?>
