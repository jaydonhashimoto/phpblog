<?php
    require_once '../Business/BlogBusinessService.php';
    require_once '../Models/Blog.php';
    require_once '../Models/User.php';

    $title = $_POST["title"];
    $body = $_POST["body"];
    $user = new User;
    $userId = $user->getId();

    echo $title." ".$body." ".$userId;
    //echo $title." ".$body;

?>