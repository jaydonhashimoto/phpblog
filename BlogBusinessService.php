<?php
    require 'BlogDataAccessService.php';
     
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
        //if blogs are found return them
        $blogs =  findAllBlogs();
        if(isset($blogs))
        {
            return findAllBlogs();
        }
        else
        {
            echo "no blogs found (add error page later)";
        }
    }

    /**
     * This function calls findBlogById
     * in BlogDataAccessService
     * @param $bId
     * @return $blog[]
     */
    function getBlogById($bId)
    {
        return findBlogById($bId);
    }
?>