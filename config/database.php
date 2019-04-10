<?php 

class CDatabase{
    private $host;
    private $username;
    private $password;
    private $dbname;
    public  $connection;


    public function __construct($host, $username, $password , $dbname)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }
    public function connect()
    {
        try
        {
            $this->connection = new mysqli($this->host, $this->username, $this->password , $this->dbname)
            or exit("Could not connect to MySql Server : ".mysqli_error($this->connection));
        }
        catch(Exception $e)
        {
            echo $e->getMessage();exit;
            throw $e->getMessage();
        }
    }

}



?>