<?php 
include_once("config/database.php");

class shortner
{
    public function __contruct()
    {

    }

    public function generateCode($num)
    {

    }

    public function makeCode($url)
    {
       
        global $gdb;
        try {
            if($url!="")
            {
                $url = trim($url);
                $url = $gdb->con->escape_string($url);
                

            }
            
        } catch (\Throwable $th) {
            //throw $th;
        }

    }
    public function getUrl($code)
    {
        
    }
}




?>