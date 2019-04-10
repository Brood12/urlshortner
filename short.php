<?php 
include_once("class/shortner.php");

global $gdb;
$url = $_POST['url'];
if(isset($url))
{
    $s = new shortner;

    if($code = $s->makeCode($url))
    {
        echo $code;
    }
    else
    {
        return false;
    }

}





?>