<?php

session_start();
if(isset($_SESSION['loginApprove'])){
    unset($_SESSION['loginApprove']);
    unset($_SESSION['afterlogin']);
        header("Location: ../view/login.php");
  }







?>




