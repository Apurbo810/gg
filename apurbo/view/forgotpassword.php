<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forget password</title>
</head>
<body>
    <form action="../controller/forgetpasswordcheck.php" method="post">
        <fieldset style="width: 30%;">
        <legend>Forget password</legend>
        username:
        <input type="text" name="username" id="username" required><br><br>
        email:
        <input type="email" name="email" id="email" required><br><br>
        phone:
        <input type="text" name="phone" id="phone" required><br><br>
        last password firstword:
        <input type="text" name="lastpassword" id="lastpassword" maxlength="2" required><br><br>
        <?php if (isset($_GET['matchinfo'])) {
            if($_GET['matchinfo']== "true"){
              echo "username, email, phone or last password firstword not match";
            }
            unset($_GET['matchinfo']);
        
        }?>
        <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</body>
</html>