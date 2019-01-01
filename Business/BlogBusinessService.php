<?php
     require_once '../Data/BlogDataAccessService.php';

    /**
     * This function calls createBlog
     * in BlogDataAccessService
     * @param $t
     * @param $b
     * @param $uId
     * @return $blog[][]
     */
    function addBlog($t, $b, $uId)
    {
        createBlog($t, $b, $uId);
    }

    /**
     * This function calls findAllBlogs
     * in BlogDataAccessService
     * @return $blog[][]
     */
    function getAllBlogs()
    {
        return findAllBlogs();
    }
?>