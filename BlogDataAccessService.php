<?php
//echo getcwd();

    require_once 'DBConnection.php';

    /**
     * This function inserts a blog into blog table
     * @param $t
     * @param $b
     */
    function createBlog($t, $b, $uId)
    {
        //connect to db
        $conn = dbConnect();

        try
        {
            //this stmt inserts blog into db
            $insert = "INSERT INTO blogs (BLOG_TITLE, BLOG_BODY, USER_ID) 
                        VALUES ('" . $t . "' , '" . $b . "' , '" . $uId . "')";

             //query statement
             $result = $conn->query($insert);
        }
        //catch exception
        catch(Exception $e)
        {
            echo 'Message: ' .$e->getMessage();
        }
        finally
        {
            //close db connection
            $conn->close();
        }
    }

    /**
     * This function gets all blogs
     * @return $blog[][]
     */
    function findAllBlogs()
    {
        //connect to db
        $conn = dbConnect();

        try
         {
            //find all blogs
            $select = "SELECT * FROM blogs";
            //set query results to variable
            $result = $conn->query($select);
            $row = $result->fetch_assoc();

            //create a 2d array of blogs
            $blog = array();
            $index = 0;
            while($row = $result->fetch_assoc())
            {
                $blog[$index] = array($row["ID"], $row["BLOG_TITLE"], $row["BLOG_BODY"], $row["USER_ID"]);
                ++$index;
            }
            
            //return array of blogs
            return $blog;
         }
         //catch exception
         catch(Exception $e)
         {
            echo 'Message: ' .$e->getMessage();
         }
         finally
         {
            //close db connection
            $conn->close();
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
        $conn = dbConnect();

        try
         {
            //find blog by id
            $select = "SELECT * FROM blogs WHERE " . "ID = '" . $bId . "'";
            //set query results to variable
            $result = $conn->query($select);
            $row = $result->fetch_assoc();

            //create an array with blog attributes
            $blog = array();
            $blog[0] = $row["ID"];   
            $blog[1] = $row["BLOG_TITLE"];
            $blog[2] = $row["BLOG_BODY"];
            $blog[3] = $row["USER_ID"];

            //return array of blogs
            return $blog;
         }
         //catch exception
         catch(Exception $e)
         {
            echo 'Message: ' .$e->getMessage();
         }
         finally
         {
            //close db connection
            $conn->close();
         }
    }
?>