<?php
session_start();

if(!isset($_SESSION['loginApprove'])){
    header("Location: ../../view/login.php");
}
if(isset($_SESSION['post_data'])){


   $houseNumber = $_SESSION['post_data']['housenumber']? $_SESSION['post_data']['housenumber']:'';
   $address= $_SESSION['post_data']['address']? $_SESSION['post_data']['address']:'';
    $numberofrooms= $_SESSION['post_data']['numberofrooms'];
    $gender= $_SESSION['post_data']['gender'];  
    $rent= $_SESSION['post_data']['rent'];

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make A Post</title>
    <script src="../../js/makeApost.js"></script>
</head>
<body>
   

    <form action="../../controller/postcheck/makeApostcheck.php" method="post" onsubmit="validateForm()">
        <fieldset style="width:30%;">
            <legend>Make A Post</legend>
            House Number:
            <input type="text" name="housenumber" id="housenumber" value="<?php if(isset($houseNumber)){echo $houseNumber;} ?>" required><br><br>
            Number of Rooms:
            <input type="number" name="numberofrooms" id="numberofrooms" value="<?php if(isset($numberofrooms)){echo $numberofrooms;} ?>" required><br><br>
            Prafareble Gender:
            <input type="radio" name="gender" value="male" <?php if(isset($gender)){if ($gender == 'male') echo 'checked';} ?> required>Male
                  <input type="radio" name="gender" value="female" <?php if(isset($gender)){if ($gender == 'female' ) echo 'checked';} ?>>Female
                  <input type="radio" name="gender" value="both" <?php if(isset($gender)){if ($gender == 'both' ) echo 'checked';} ?>>Both(male/female)<br><br>
            Rent:
            <input type="number" name="rent" id="rent" value="<?php if(isset($rent)){echo $rent;}?>"required><br><br>
            Address:
            <input type="textarea" name="address" id="address" value="<?php if(isset($address)){echo $address;}?>"required><br>
            <?php
             if (isset($_SESSION['postaddErr'])) {
    if( $_SESSION['postaddErr']=="true"){
      echo "You can't post with same address and house number because house number already exit with this address <br><br>"; 
    }
    
    unset($_SESSION['postaddErr']);

}?>
            
            
            
            <input type="hidden" name="username" value="<?php echo $_SESSION['afterlogin']['username'] ?>">
            <input type="hidden" name="bookingstatus" value="empty">
            <input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>">
            <input type="hidden" name="uniquepostid" value="<?php echo uniqid(); ?>">
            <input type="submit" name="submit" value="submit"> || <a href="hostprofile.php"?<?php unset($_SESSION['post_data']) ?>>Back</a>



        </fieldset>
</body>
</html>
