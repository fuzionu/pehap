<?php

require("vendor\autoload.php");

if (file_exists('daniel.json'))
{	
	$faker = \Faker\Factory ::create();
	
	$names[] = $faker->name;
	
	$fileContents = file_get_contents('daniel.json');
	$tempArray = json_decode($fileContents, true);
	array_push($tempArray, $names);
	$jsonData = json_encode($tempArray);
	file_put_contents('daniel.json', $jsonData);
	
	echo 'Added name to the file';
}

else
{
	echo 'File does not exist';
}