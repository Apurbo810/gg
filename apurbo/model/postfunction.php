<?php


require_once("db.php");
function postadd($data){
    $uniquepostid=$data['uniquepostid'];
    $numberofrooms=$data['numberofrooms'];
    $gender=$data['gender'];
    $rent=$data['rent'];
    $username=$data['username'];
    $bookingstatus=$data['bookingstatus'];
    $date=$data['date'];
    $houseNumber=$data['housenumber'];
    $address=$data['address'];
    $conn=connection("localhost","root","","payin-guest-project");
    $query="select * from post where House_Number='$houseNumber' and Address='$address' and username='$username'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        $_SESSION['postaddErr']="true";
    }
    else{
        $query2="insert into post values( '$uniquepostid','$houseNumber','$numberofrooms','$gender','$rent','$address','$username','$bookingstatus','$date' )";
        $result2=mysqli_query($conn,$query2);
        
    }
}
 






?>