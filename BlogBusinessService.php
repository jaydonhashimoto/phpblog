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
?>