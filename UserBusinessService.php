<?php 
     require 'UserDataAccessService.php';
     require 'User.php';
    
    /**
     * @param $u
     * @return findUser($u)
     * @return NULL
     * This method calls findUser()
     * if findUser() is not NULL
     */
    function getUser($u)
    {
        //call findUser from UserDataAccessService
        return findUser($u);
    }
    
    /**
     * @param $u
     * @param $p
     * This method calls createUser()
     */
    
    function addUser($u, $p)
    {
        //call createUser from UserDataAccessService
        createUser($u, $p);
    }

    /**
     * This method calls findRegisteredUser
     * @param $u
     * @param $p
     * @return findRegisteredUser()
     */
    function loginUser($u, $p)
    {
        //call findRegisteredUser from UserDataAccessService
        //set session user id and username
        //$tmp = array();
        $tmp = findRegisteredUser($u, $p);
        error_log($tmp[1],0);
        //if login creds are correct
        if($tmp === false)
        {
            return false;
        }
        else if($tmp !== false)
        {
            //start session
            session_start();

            //set user id and username
            echo $tmp[0]." ".$tmp[1];
            setId($tmp[0]);
            setUsername($tmp[1]);

            //return true
            return true;
        }
    }
    
?>