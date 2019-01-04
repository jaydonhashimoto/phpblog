<?php
    require_once 'DBConnection.php';

    /**
     * This function inserts a blog into blog table
     * @param $t
     * @param $b
     * @param $uId
     */
    function createBlog($t, $b, $uId)
    {
        //connect to db
        $link = dbConnect();

        try
        {
            //this stmt inserts blog into db
             //insert user and password into db
             $handle = $link->prepare("INSERT INTO blogs (BLOG_TITLE, BLOG_BODY, USER_ID) VALUES (?,?,?)");
             $handle->bindValue(1, $t);
             $handle->bindValue(2, $b);             
             $handle->bindValue(3, $uId);
 
             //execute statement
             $handle->execute();
        }
        //catch exception
        catch(\PDOException $e)
        {
            echo 'Message: ' .$e->getMessage();
        }
    }

    /**
     * This function gets all blogs
     * @return $blog[][]
     */
    function findAllBlogs()
    {
        //connect to db
        $link = dbConnect();

        try
         {
            //find all blogs 
            //inner join to get username from users table
            $handle = $link->prepare("SELECT blogs.BLOG_ID, blogs.BLOG_TITLE, blogs.BLOG_BODY, blogs.USER_ID, users.USERNAME FROM blogs INNER JOIN users ON blogs.USER_ID = users.ID");

            //execute statement
            $handle->execute();

            //gets all rows returned
            $result = $handle->fetchAll(\PDO::FETCH_OBJ);

            //set blogs to a 2D array
            $blog = array();
            $index = 0;
            foreach($result as $row)
            {
                $blog[$index] = array($row->BLOG_ID, $row->BLOG_TITLE, $row->BLOG_BODY, $row->USER_ID, $row->USERNAME);
                ++$index;
            }
            
            //return array of blogs
            return $blog;
         }
         //catch exception
         catch(\PDOException $e)
         {
            echo 'Message: ' .$e->getMessage();
         }
    }

    /**
     * This function gets a blog 
     * by its id
     * @param $bId
     * @return $blog[]
     */
    function findBlogById($bId)
    {
        //connect to db
        $link = dbConnect();

        try
         {
            //find blog by id
           //find all blogs
           $handle = $link->prepare("SELECT blogs.BLOG_ID, blogs.BLOG_TITLE, blogs.BLOG_BODY, blogs.USER_ID, users.USERNAME FROM blogs INNER JOIN users ON blogs.USER_ID = users.ID WHERE BLOG_ID=?");
           $handle->bindValue(1, $bId);

           //execute statement
           $handle->execute();

           //gets all rows returned
           $result = $handle->fetchAll(\PDO::FETCH_OBJ);

            //create an array with blog attributes
            $blog = array();
            foreach($result as $row)
            {
                $blog[0] = $row->BLOG_ID;   
                $blog[1] = $row->BLOG_TITLE;
                $blog[2] = $row->BLOG_BODY;
                $blog[3] = $row->USER_ID;
                $blog[4] = $row->USERNAME;
            }

            //return array of blogs
            return $blog;
         }
         //catch exception
         catch(\PDOException $e)
         {
            echo 'Message: ' .$e->getMessage();
         }
    }

    /**
     * This function inserts a blog into blog table
     * @param $t
     * @param $b
     * @param $bId
     */
    function updateBlog($t, $b, $bId)
    {
        //connect to db
        $link = dbConnect();

        try
        {
            //this stmt inserts blog into db
             //insert user and password into db
             $handle = $link->prepare("UPDATE blogs SET BLOG_TITLE=? BLOG_BODY=? WHERE BLOG_ID=?");
             $handle->bindValue(1, $t);
             $handle->bindValue(2, $b);             
             $handle->bindValue(3, $bId);
 
             //execute statement
             $handle->execute();
        }
        //catch exception
        catch(\PDOException $e)
        {
            echo 'Message: ' .$e->getMessage();
        }
    }

    /**
     * This function deletes a blog 
     * by its id
     * @param $bId
     */
    function deleteBlogById($bId)
    {
        //connect to db
        $link = dbConnect();

        try
         {
            //find blog by id
           //find all blogs
           $handle = $link->prepare("DELETE FROM blogs WHERE BLOG_ID=?");
           $handle->bindValue(1, $bId);

           //execute statement
           $handle->execute();
         }
         //catch exception
         catch(\PDOException $e)
         {
            echo 'Message: ' .$e->getMessage();
         }
    }
?>