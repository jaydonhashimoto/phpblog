<?php 
     require_once '../Data/DBConnection.php';
     require_once '../Models/User.php';

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

         $user = new User;
         try
         {
            //find user
            $select = "SELECT USERNAME
            FROM users WHERE " . "USERNAME = '" . $username . "'";
            //set query results to variable
            $result = $conn->query($select);
            $row = $result->fetch_assoc();
            //set user id
            $user->setId($row["ID"]);
            //set username
            $user->setUsername($row["USERNAME"]);
            //return user
            return $user;
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

        $user = new User;
        try
        {
           //find user
           $select = "SELECT *
           FROM users WHERE " . "USERNAME = '" . $u . "'" . "AND PASSWORD = '" . $p . "'";
           //set query results to variable
           $result = $conn->query($select);
           //if user found return true
           echo $result->num_rows;
           if($result->num_rows == 1)
           {
                //set user info
                $user = findUser($u);
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
    }
?>