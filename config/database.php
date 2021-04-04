<?php
class Database{
   
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "id16076549_as6";
    private $username = "id16076549_assign6";
    private $password = "Chang3TheP4ss+";
    public $conn;
   
    // get the database connection
    public function getConnection(){
   
        $this->conn = null;
   
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
   
        return $this->conn;
    }
}
?>
