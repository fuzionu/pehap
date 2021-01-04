<?php

require("vendor\autoload.php");

if (file_exists('daniel.json'))
{	
	$fileContents = file_get_contents('daniel.json');	
	echo $fileContents;	
}

else
{
	echo 'File does not exist';
}