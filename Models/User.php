<?php 
    class User
    {
        //attributes
        private $id = 0;
        private $username = "";
        private $password = "";

        /**
         * @return $id
         * This method gets the current user id
         */
        public function getId()
        {
            return $id;
        }

        /**
         * @param $i
         * This method sets the current user id
         */
        public function setId($i)
        {
            $id = $i;
        }

        /**
         * @return $username
         * This method gets the current username
         */
        public function getUsername()
        {
            return $username;
        }

        /**
         * @param $u
         * This method sets the current username
         */
        public function setUsername($u)
        {
            $username = $u;
        }

        /**
         * @return $password
         * This method gets the current password
         */
        public function getPassword()
        {
            return $password;
        }

        /**
         * @param $p
         * This method sets the current password
         */
        public function setPassword($p)
        {
            $password = $p;
        }
}
    
?>