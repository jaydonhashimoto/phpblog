<?php
    session_start();
    require 'BlogBusinessService.php';
    require 'User.php';

    $title = $_POST["title"];
    $body = $_POST["body"];
    $userId = getId();

    addBlog($title, $body, $userId);
    //return blog page
    header("Location: viewblogs.php");
    die();
?>