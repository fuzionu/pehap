<?php

require("vendor\autoload.php");

if (file_exists('daniel.json'))
{	
	$faker = \Faker\Factory ::create();			
	$fileContents = file_get_contents('daniel.json');
	$decodedJson = json_decode($fileContents, true);
	$innerArray = $decodedJson['names'];
	$innerArray[] = $faker->name;
	$decodedJson['names'] = $innerArray;
	$encodedJson = json_encode($decodedJson);
	file_put_contents('daniel.json', $encodedJson);
		
	echo 'Added name to the file';
}

else
{
	echo 'File does not exist';
}