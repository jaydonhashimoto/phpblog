<?php 
     require_once '../Business/UserBusinessService.php';
     require_once '../Models/User.php'; 

    //get user info from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(loginUser($username, $password))
    {
        echo "successful login";
    }
    else 
    {
        echo "failed to login";
    }
?>