<?php 
    /**
     * @return $conn
     * 
     * This method establishes the connection
     * to the database
     */
    function dbConnect()
    {
        $server = "localhost";
        $username = "root";
        $password = "root";
        $dbName = "blogapp";

        //establish connection
        $conn = new mysqli($server, $username, $password, $dbName);

        //if connection failed, echo error
        if($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        //return connection
        return $conn;
    }
?>