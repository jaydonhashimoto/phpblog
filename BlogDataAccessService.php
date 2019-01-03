<?php
    require_once 'DBConnection.php';

    /**
     * This function inserts a blog into blog table
     * @param $t
     * @param $b
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
            $handle = $link->prepare("SELECT * FROM blogs");

            //execute statement
            $handle->execute();

            //gets all rows returned
            $result = $handle->fetchAll(\PDO::FETCH_OBJ);

            //set blogs to a 2D array
            $blog = array();
            $index = 0;
            foreach($result as $row)
            {
                $blog[$index] = array($row->ID, $row->BLOG_TITLE, $row->BLOG_BODY, $row->USER_ID);
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
           $handle = $link->prepare("SELECT * FROM blogs WHERE ID=?");
           $handle->bindValue(1, $bId);

           //execute statement
           $handle->execute();

           //gets all rows returned
           $result = $handle->fetchAll(\PDO::FETCH_OBJ);

            //create an array with blog attributes
            $blog = array();
            $blog[0] = $row->ID;   
            $blog[1] = $row->BLOG_TITLE;
            $blog[2] = $row->BLOG_BODY;
            $blog[3] = $row->USER_ID;

            //return array of blogs
            return $blog;
         }
         //catch exception
         catch(\PDOException $e)
         {
            echo 'Message: ' .$e->getMessage();
         }
    }
?>