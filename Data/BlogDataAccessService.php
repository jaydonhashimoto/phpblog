<?php
    require_once '../Data/UserDataAccessService.php';
    require_once '../Models/Blog.php';

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

        $blog = new Blog;
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
?>