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
     * @return findRegisterUser()
     */
    function loginUser($u, $p)
    {
        //call findRegisteredUser from UserDataAccessService
        //start session
        session_start();

        //set session user id and username
        $tmp = array();
        $tmp = findRegisteredUser($u, $p);
        //if login creds are correct
        if($tmp != false)
        {
            //set user id and username
            //session_start();
            setId($tmp[0]);
            setUsername($tmp[1]);

            //return true
            return true;
        }
        else
        {
            return false;;
        }

        
    }
    
?>