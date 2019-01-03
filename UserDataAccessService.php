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
        $link = dbConnect();
        try
        {
            //insert user and password into db
            $handle = $link->prepare("INSERT INTO users (USERNAME, PASSWORD) VALUES (?,?)");
            $handle->bindValue(1, $username);
            $handle->bindValue(2, $password);

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
     * @param $username
     * @return boolean
     * This method finds a user using their username
     * as a parameter and returns the results
     */
    function findUser($username)
    {
         //connect to db
         $link = dbConnect();

         try
         {
            //insert user and password into db
            $handle = $link->prepare("SELECT * FROM users WHERE USERNAME=?");
            $handle->bindValue(1, $username);

            //execute statement
            $handle->execute();

            //gets all rows returned
            $result = $handle->fetchAll(\PDO::FETCH_OBJ);

            //count number of rows returned
            $numRows = 0;
            foreach($result as $row)
            {
                ++$numRows;
            }
            //if no user is found return true
            //if user is found return false
            if($numRows == 1)
            {
                return true;
            }
            else
            {
                return false;
            }
         }
         //catch exception
         catch(\PDOException $e)
         {
            echo 'Message: ' .$e->getMessage();
         } 
    }

    /**
     * This method finds a user
     * using username and password
     * @param $u
     * @param $p
     * @return $user
     * @return false
     */
    function findRegisteredUser($u, $p)
    {
        //connect to db
        $link = dbConnect();
        try
        {
            //insert user and password into db
            $handle = $link->prepare("SELECT * FROM users WHERE USERNAME=?");
            $handle->bindValue(1, $u);

            //execute statement
            $handle->execute();

            //gets all rows returned
            $result = $handle->fetchAll(\PDO::FETCH_OBJ);

            //if no rows found, return false
            $rowCount = 0;
            foreach($result as $row)
            {   
                ++$rowCount;
            }
            if($rowCount == 0)
            {
                return false;
            }

            //set user attribuates
            $user = array();
            foreach($result as $row)
            {
                //check password
                if(password_verify($p, $row->PASSWORD))
                {
                    $user[0] = $row->ID;
                    $user[1]= $row->USERNAME;
                }
                else
                {
                    return false;
                }
            }
            return $user;
        }
        //catch exception
        catch(\PDOException $e)
        {
           echo 'Message: ' .$e->getMessage();
        }
    }
?>