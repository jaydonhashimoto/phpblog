<?php 
    require_once 'BlogBusinessService.php';

    //get blog id from viewblog.php
    $blog_id = $_POST["blog_id"];

    //call removeBlogById() from BlogBusinessService.php
    removeBlogById($blog_id);

    //return view blogs
    header("Location: viewblogs.php");
    die();
?>