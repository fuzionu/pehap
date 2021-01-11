<?php

require("vendor\autoload.php");

if (file_exists('daniel.json'))
{	
	$faker = \Faker\Factory ::create();
			
	$fileContents = file_get_contents('daniel.json');
	$decodedJson = json_decode($fileContents, true);
	var_dump($decodedJson);
	$innerArray = $decodedJson['names'];
	var_dump($innerArray);
	$innerArray[] = $faker->name;
	$decodedJson['names'] = $innerArray;
	var_dump($decodedJson);
	$encodedJson = json_encode($decodedJson);
	var_dump($encodedJson);
	file_put_contents('daniel.json', $encodedJson);
	
	
	echo 'Added name to the file';
}

else
{
	echo 'File does not exist';
}