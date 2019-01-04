<?php
    require_once 'BlogBusinessService.php';

    //attributes from updateblog.php
    $title = $_POST["title"];
    $body = $_POST["body"];
    $blog_id = $_POST["blog_id"];

    //call renewBlog() in BlogBusinessService.php
    renewBlog($title, $body, $blog_id);

    //return view blogs
    header("Location: viewblogs.php");
    die();
?>