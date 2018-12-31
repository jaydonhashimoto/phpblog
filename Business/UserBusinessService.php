<?php 
     require_once '../Data/UserDataAccessService.php';
    
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
        return findRegisteredUser($u, $p);
    }
    
?>