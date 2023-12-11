<?php
session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login </title>
</head>
<body>
    <form action="../controller/logincheck/logincheck.php" method="post">

     <fieldset style="width:30%;">
        <legend>login</legend>
        username: <input type="text" name="username" id="username" required><br><br>
        password: <input type="password" name="password" id="password"required><br><br>
        <?php
        if(isset($_SESSION['login'])){
            if($_SESSION['login']=="true"){
                echo "username or password incorrect <br><br>";
            }
            unset($_SESSION['login']);
        } else if (isset($_SESSION['hostlogin'])){
            if($_SESSION['hostlogin']=="true"){
                echo "Welcome Host but your username or password incorrect <br><br>";
            }
            unset($_SESSION['hostlogin']);
        } else if (isset($_SESSION['guestlogin'])){
            if($_SESSION['guestlogin']=="true"){
                echo "Welcome guest but your username or password incorrect <br><br>";
            }
            unset($_SESSION['guestlogin']);
        } else if (isset($_SESSION['adminlogin'])){
            if($_SESSION['adminlogin']=="true"){
                echo "welcome admin but your username or password incorrect <br><br>";
            }
            unset($_SESSION['adminlogin']);
        }




?>

       <input type="submit" name="login" value="login">||<a href="registation/chooseuser.html">Sign up</a>||
         <a href="forgotpassword.php">Forgot password</a>

     </fieldset>


    </form>
</body>
</html>