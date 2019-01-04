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

    /**
     * This function calls updateBlog
     * in BlogDataAccessService
     * @param $t
     * @param $b
     * @param $bId
     */
    function renewBlog($t, $b, $bId)
    {
        updateBlog($t, $b, $bId);
    }

    /**
     * This function calls deleteBlogById
     * in BlogDataAccessService
     * @param $bId
     */
    function removeBlogById($bId)
    {
        return deleteBlogById($bId);
    }
?>