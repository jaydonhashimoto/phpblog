<?php 
     require 'DBConnection.php';

    /**
     * @param $username
     * @param $password
     * 
     * This method takes in a username and password
     * and checks and inserts them 
     */
    function createUser($username, $password)
    {
        //connect to db
        $conn = dbConnect();
        try
        {
            //insert user and password into db
            $insert = "INSERT INTO users (USERNAME, PASSWORD)
                        VALUES ('" . $username . "' , '" . $password . "')";
            
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
     * @param $username
     * @return $resultSelect
     * This method finds a user using their username
     * as a parameter and returns the results
     */
    function findUser($username)
    {
         //connect to db
         $conn = dbConnect();

         try
         {
            //find user
            $select = "SELECT *
            FROM users WHERE " . "USERNAME = '" . $username . "'";
            //set query results to variable
            $result = $conn->query($select);
            $row = $result->fetch_assoc();
            //if no user is found return true
            //if user is found return false
            if($result->num_rows == 1)
            {
                return true;
            }
            else
            {
                return false;
            }
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
         
         return NULL;
    }

    function findRegisteredUser($u, $p)
    {
        //connect to db
        $conn = dbConnect();
        try
        {
           //find user
           $select = "SELECT *
           FROM users WHERE " . "USERNAME = '" . $u . "'" . "AND PASSWORD = '" . $p . "'";
           //set query results to variable
           $result = $conn->query($select);
           //if user found return true
           $row = $result->fetch_assoc();
           if($result->num_rows == 1)
           {
               //set user attribuates
                $user = array();
                $user[0] = $row["ID"];
                $user[1]= $row["USERNAME"];
                return $user;
           }
           else
           {
               return false;
           }
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