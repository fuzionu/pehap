<?php

require("vendor\autoload.php");

function drawAndAdd(array $array): array
{
	$faker = \Faker\Factory ::create();
	$randNum = rand(0, count($array)-1);
	$fakeName = $faker->name;
	$array[$randNum] = $fakeName;
	
	$randNum += 1;
	echo 'Added name "'.$fakeName.'" at field '.$randNum;
	
	return $array;
}

if (file_exists('daniel.json'))
{
	$decodedJson = json_decode(file_get_contents('daniel.json'), true);
	$innerArray = drawAndAdd($decodedJson['names']);

	$decodedJson['names'] = $innerArray;
	file_put_contents('daniel.json', json_encode($decodedJson));
}

else
{
	echo 'File does not exist';
}
