<?php
session_start();

if(!isset($_SESSION['loginApprove'])){
    header("Location: ../../view/login.php");
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
            <legend>Add New Product</legend>
            Product name:
            <input type="text" name="name" id="name"  required><br><br>
            Id:
            <input type="number" name="id" id="productid"required><br><br>
            
            Price:
            <input type="number" name="price" id="price" required><br><br>
           
            
            
            <input type="hidden" name="username" value="<?php echo $_SESSION['afterlogin']['username'] ?>">
            
            <input type="submit" name="submit" value="submit"> || <a href="hostprofile.php"?<?php unset($_SESSION['post_data']) ?>>Back</a>



        </fieldset>
</body>
</html>
