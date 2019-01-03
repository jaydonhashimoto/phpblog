<?php 
    /**
     * @return $conn
     * 
     * This method establishes the connection
     * to the database
     */
    function dbConnect()
    {

        //establish connection
        //set pdo option
        // \PDO::ATTR_ERRMODE enables exceptions for errors.
        // \PDO::ATTR_PERSISTENT disables persistent connections
        $link = new \PDO('mysql:host=localhost;dbname=phpblog;charset=utf8mb4',
                        'root', '',
                        array(
                            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                            \PDO::ATTR_PERSISTENT => false
                            )
                        );

        //return connection
        return $link;
    }
?>