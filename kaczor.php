<?php

require("vendor\autoload.php");

if (file_exists('daniel.json'))
{	
	$faker = \Faker\Factory ::create();	
	$decodedJson = json_decode(file_get_contents('daniel.json'), true);
	$innerArray = $decodedJson['names'];
	$innerArray[] = $faker->name;
	$decodedJson['names'] = $innerArray;
	file_put_contents('daniel.json', json_encode($decodedJson));
		
	echo 'Added name to the file';
}

else
{
	echo 'File does not exist';
}