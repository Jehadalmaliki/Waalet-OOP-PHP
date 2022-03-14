<?php 

// namespace Classes\Connection;

class Connection {
    
     public const HOSTNAME = 'localhost';
     public const USERNAME = 'root';
     public const PASSWORD = '';
      public const DATABASE = 'wallet';

    public $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect(self::HOSTNAME, self::USERNAME, self::PASSWORD, self::DATABASE);
    }

    // close connectio
    public function __destruct(){
        $this->conn->close();
    }
}