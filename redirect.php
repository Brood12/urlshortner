<?php 
include_once("class/Shortner.php");




if($_GET['code']!="")
{

	$shortner = new Shortner;
	$code = $_GET['code'];

	if($url = $shortner->getUrl($code))
	{
		header("Location: {$url}");
		die();
	}

}

header("Location:index.php");



?>