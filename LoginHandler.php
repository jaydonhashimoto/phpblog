<?php 
    require_once 'UserBusinessService.php';

    //get user info from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    $loginSuccess = loginUser($username, $password);
    if($loginSuccess == true)
    {
        //echo 'success';
        //return index page
        header("Location: index.php");
        die();
    }
    else 
    {
        //echo 'failed';
        //return login page
        header("Location: login.php");
        die();
    }
    
?>