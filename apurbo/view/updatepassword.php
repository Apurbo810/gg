<?php      

if(isset($_GET['username'])){
    if(str_starts_with($_GET['username'],"Gu-")){
        $username=str_replace("Gu-","",$_GET['username']);
        $table='guestregistation';
    }
    else if(str_starts_with($_GET['username'],"Ho-")){
        $username=str_replace("Ho-","",$_GET['username']);
        $table='hostregistation';
    }
    else if(str_starts_with($_GET['username'],"Ad-")){
        $username=str_replace("Ad-","",$_GET['username']);
        $table='admin';
    }
   
}



    ?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update password</title>
    <script>
    function ajax() {
        let username = document.getElementById('username').value;
        let password = document.getElementById('password').value;
        let table = document.getElementsByName('table')[0].value; 
        let xhttp = new XMLHttpRequest();

        xhttp.open('POST', 'update_password.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('h1').innerHTML = this.responseText;


                if (this.responseText.includes("Password updated successfully")) {
                    setTimeout(function () {
                        window.location.href = 'login.php';
                    }, 2000);
                }
            }
        };

        let data = "username=" + username + "&password=" + encodeURIComponent(password) + "&table=" + table;
        xhttp.send(data);
    }
</script>
</head>
<body>
    <form action="../controller/updatepasswordcheck.php" method="post" onsubmit="ajax(); return false;">
        <fieldset style="width: 30%;">
        <legend>update password</legend>
        username:
        <input type="text" name="username" id="username" value="<?php echo $_GET['username']?>" readonly><br>

        <input type="hidden" name="table"  value="<?php echo $table ?>" >
        new password:
        <input type="password" name="password" id="password" required><br><br>
        <?php if (isset($_GET['pass'])) {
            if($_GET['pass']== "empty"){
              echo "password must not be less than eight (8) character and must contain at least one of the special characters (@, #, $, %)";
            }
            
            unset($_GET['pass']);
        
        }?>



        <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
    
</body>
</html>