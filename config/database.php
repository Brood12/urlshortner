<?php 

if(!isset($gdb))
{
    $gdb = new CDatabase();
    $gdb->Connect('localhost','root','123456','website');
}
class CDatabase{

    public function __construc()
    {
       
    }

    function Connect($host,$username,$password,$dbname)
    {
        $this->con = new mysqli($host, $username, $password)
        or exit("Could not connect to MySql Server : ".mysqli_error($this->con));

        mysqli_select_db($this->con,$dbname)
        or exit("Could not select Database - $dbname : ".mysqli_error($this->con));
    }
    



}



?>