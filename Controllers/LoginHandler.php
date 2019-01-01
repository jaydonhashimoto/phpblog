<?php 
     require_once '../Business/UserBusinessService.php';
     require_once '../Models/User.php'; 

    //get user info from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = new User;
    if($user->getId() != 0 || $user->getId() != NULL)
    {
        echo $user->getId()." ". $user->getUsername();
        //return index page
        //header("Location: ../index.php");
        //die();
    }
    else 
    {
        //return login page
        header("Location: ../login.php");
        die();
    }
?>