<?php 
session_start();
include_once("class/Shortner.php");

global $gdb;

if(isset($_POST['url']))
{
	$url = $_POST['url'];

	//shortner class object intialized
    $shorturl = new Shortner; 

    if($code = $shorturl->makeCode($url))
    {
    	//makeCode function returns the new generated code
        $_SESSION['feedback'] = "Generated Url is : <a href=\"http://local.urlshortner.com/{$code}\">http://local.urlshortner.com/{$code}</a>";
    }
    else
    {
        $_SESSION['feedback'] = "Ops Something went Wrong";
    }


}
header("Location:index.php");




?>