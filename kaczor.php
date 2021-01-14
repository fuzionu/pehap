<?php

require("vendor\autoload.php");

function countAndAdd($array)
{
	$faker = \Faker\Factory ::create();	
	
	if (count($array) % 2 === 0)
	{
		$array[] = $faker->name;		
		echo 'Added name to the file';
		
		return $array;
	}
	
	for ($i = 0; $i < 3; $i++)
	{
		$array[] = $faker->name;
	}
	
	echo 'Added three names to the file';
	return $array;
}

if (file_exists('daniel.json'))
{	
	$decodedJson = json_decode(file_get_contents('daniel.json'), true);	
	$innerArray = countAndAdd($decodedJson['names']);
	
	$decodedJson['names'] = $innerArray;
	file_put_contents('daniel.json', json_encode($decodedJson));
}

else
{
	echo 'File does not exist';
}