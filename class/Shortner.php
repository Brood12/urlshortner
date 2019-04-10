<?php 
include_once("config/database.php");
include_once("config/env.php");
class Shortner
{
    private $databaseConnection;
    public function __contruct()
    {

    }

    public function generateCode($num)
    {
        return base_convert($num, 10, 36);

    }

    private function checkUrlExsist($url)
    {
        $database = new CDatabase(DB_HOST,DB_USERNAME,DB_PSWD,DB_NAME);
        $database->connect();

        //Fetching the data from database using url
        $exists = $database->connection->query("Select code from links where url='".$url."'");
        return $exists;
    }

    public function insertRecoderWithOutCode($url)
    {   
        $database = new CDatabase(DB_HOST,DB_USERNAME,DB_PSWD,DB_NAME);
        $database->connect();

        //Insert a new Record without code
        $database->connection->query("INSERT INTO links (url,create_time) Values('{$url}',NOW())");
        return $database->connection->insert_id;


    }

    public function makeCode($url)
    {
       
        //Declaring Database variable 

        $database = new CDatabase(DB_HOST,DB_USERNAME,DB_PSWD,DB_NAME);
        $database->connect();
        try 
        {

            if($url!="")
            {
                $url = trim($url);

                //escaping the url string for any unwanted characters
                $url = $database->connection->escape_string($url); 

                //Check if url Exsists
                $urlExsist = $this->checkUrlExsist($url);

                if($urlExsist->num_rows)
                {
                    //return code
                    return $urlExsist->fetch_object()->code;
                }
                else
                {   
                    //insert a new record without code

                    $id = $this->insertRecoderWithOutCode($url);
                    if($id!='')
                    {
                        $code = $this->generateCode($id);

                        //Update Recode with Generated Code
                        $database->connection->query("Update links SET code = '{$code}' Where url = '{$url}'");
                        return $code;
                    }
                    

                }


            }

        } 
        catch (Exception $e) 
        {
            //returns if any exception occurs
            return $e->getMessage();     
        }

    }
    public function getUrl($code)
    {
        $database = new CDatabase(DB_HOST,DB_USERNAME,DB_PSWD,DB_NAME);
        $database->connect();

        $code = $database->connection->escape_string($code);

        //Return the url associated with the code

        try
        {
            if($code!="")
            {
                $url = $database->connection->query("select url from links where code = '{$code}'");
                if($url->num_rows)
                {
                    return $url->fetch_object()->url;
                }
            }

        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }



    }
}




?>