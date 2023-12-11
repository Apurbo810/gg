<?php

session_start();
// user name error show



if(isset($_SESSION['form_data'])){
    $username = isset($_SESSION['form_data']['username']) ? str_replace("Gu-","",$_SESSION['form_data']['username']) : '';
$email = $_SESSION['form_data']['email'] ;
$phone = isset($_SESSION['form_data']['phone']) ? $_SESSION['form_data']['phone'] : '';
$address = $_SESSION['form_data']['address'];
$gender = $_SESSION['form_data']['gender'] ;
$name= $_SESSION['form_data']['name'];
$password = isset($_SESSION['form_data']['password']) ? $_SESSION['form_data']['password'] : '';
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Registation</title>
</head>
<body>
    <form action="../../controller/signupcheck/signupcheckGuest.php" method="post">
        <fieldset style="Width:40%;">
       <legend>Guest Registation</legend>
         Name: <input type="text" name="name" id="name" placeholder="Please input name" value="<?php if(isset($name)){echo $name;} ?>" required><br><br>
         Email: <input type="email" name="email" id="email" placeholder="Please input email "value="<?php if(isset($email)){echo $email;} ?>" required><br><br>
         Phone: <input type="number" name="phone" id="phone" placeholder="Please input phone number " value="<?php if(isset($phone)){echo $phone;}  ?>"  required>
         <?php if (isset($_SESSION['phoneErr'])) {
    if( $_SESSION['phoneErr']=="true"){
      echo "phone number already exist";
    }
    
    unset($_SESSION['phoneErr']);

}?>
         
         <br><br>
         Address: <input type="textarea" name="address" id="address" placeholder="Please input address" value="<?php if(isset($address)){echo $address;}?>" required> <br><br>
         Gender:  <input type="radio" name="gender" value="male" <?php if(isset($gender)){if ($gender == 'male') echo 'checked';} ?> required>Male
                  <input type="radio" name="gender" value="female" <?php if(isset($gender)){if ($gender == 'female' ) echo 'checked';} ?>>Female<br><br>
        Username:  <input type="text" name="username" id="Username" value="Gu-<?php if(isset($username)){echo $username;} ?>" required>
        
        
        
        <?php if (isset($_SESSION['usernameErr'])) {
    if($_SESSION['usernameErr']=="true"){
      echo "username already exist";
    }
    
    unset($_SESSION['usernameErr']);

}?>
<br><br>
        
Password:  <input type="password" name="password" id="Password" placeholder="Please input password "value="<?php  if(isset($password)){echo $password;} ?>"required> 
        <?php if (isset($_SESSION['pass'])) {
    if($_SESSION['pass']== "empty"){
      echo "password must not be less than eight (8) character and must contain at least one of the special characters (@, #, $, %)";
    }
    
    unset($_SESSION['pass']);

}?>
        
        <br><br>
        <input type="submit" value="signup">||<input type="submit"name="reset" value="Reset">   || <a href="chooseuser.html">Change User</a><br><br>
       Already have an account?<a href="../login.php">login</a>       
    
    
    </fieldset>
    </form>
</body>
</html>