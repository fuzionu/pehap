<?php

require("vendor\autoload.php");
use Faker\Factory;

function fillFakeNames($namesAmount)
{	
	$faker = Factory::create();
	
	for ($i = 0; $i < $namesAmount; $i++)
	{
		$list[$i] = $faker->name;
	}
	
	return $list;
}
function printNames($list)
{
	foreach ($list as $name)
	{
		echo 'Name: '.$name."\n";
	}
}
printNames(fillFakeNames(7));