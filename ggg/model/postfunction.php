<?php


require_once("db.php");
function postadd($data){
    //$uniquepostid=$data['uniquepostid'];
    $id=$data['id'];
    $price=$data['price'];
    $name=$data['name'];
    $username=$data['username'];
   
    $conn=connection();
    $query="select * from product where Id='$id' and username='$username'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        $_SESSION['postaddErr']="true";
    }
    else{
        $query2="insert into product values( '$id','$name','$price','$username' )";
        mysqli_query($conn,$query2);
        
    }
}
 






?>