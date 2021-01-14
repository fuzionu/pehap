<?php

require("vendor\autoload.php");

function countAndAdd($array)
{
	$faker = \Faker\Factory ::create();	
	
	if (count($array) % 2 === 0)
	{
		echo 'Added name to the file';
		$array[] = $faker->name;		
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
	$innerArray = $decodedJson['names'];
	
	$innerArray = countAndAdd($innerArray);
	
	$decodedJson['names'] = $innerArray;
	file_put_contents('daniel.json', json_encode($decodedJson));
}

else
{
	echo 'File does not exist';
}