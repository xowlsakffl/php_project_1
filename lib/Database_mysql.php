<?php
class Database2
{
    private $connection;

    public function __construct()
    {
        $this->open_db_connection();
    }

    public function open_db_connection()
    {
        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if(mysqli_connect_error()){
            die("Database connection failed badly".mysqli_connect_error());
        }
    }

    
}
?>