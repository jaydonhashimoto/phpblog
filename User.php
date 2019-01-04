<?php 
    /**
     * @return $id
     * This method gets the current user id
     */
    function getId()
    {
        $id = $_SESSION["id"];
        if(isset($id))
        {
            return $id;
        }
        else
        {
            return null;
        }
    }

    /**
     * @param $i
     * This method sets the current user id
     */
    function setId($i)
    {
        $_SESSION["id"] = $i;
    }

    /**
     * @return $username
     * This method gets the current username
     */
    function getUsername()
    {
        return $_SESSION["username"];
    }

    /**
     * @param $u
     * This method sets the current username
     */
    function setUsername($u)
    {
        $_SESSION["username"] = $u;
    }

    /**
     * @return $password
     * This method gets the current password
     */
    function getPassword()
    {
        return $_SESSION["password"];
    }

    /**
     * @param $p
     * This method sets the current password
     */
    function setPassword($p)
    {
        $_SESSION["password"] = $p;
    }
    
?>