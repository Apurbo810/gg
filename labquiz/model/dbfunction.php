<?php 

require_once('db.php');
function login($username,$password){
    $conn = connection();
    $sql = "select * from admin where username='{$username}' and password='{$password}'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        return true;
    }else{
        return false;
    }

}


function adduser($data){
    $name = $data['name'];
    $contact = $data['contact'];
    $username = $data['username'];
    $password = $data['password'];
    $conn = connection();
    $query = "INSERT INTO emp (name, contact, username, password) VALUES ('$name', '$contact', '$username', '$password')";
    $result = mysqli_query($conn, $query);

    if($result){
        return true;
    }else{
        return false;
    }
}














?>