<?php

require("vendor\autoload.php");

function fillList()
{	
	$faker = \Faker\Factory ::create();
	
	for ($x = 0; $x < 20; $x++)
	{
		$list[$x] = $faker->name;
	}
	
	return $list;
}
function showNames($list)
{
	foreach ($list as $name)
	{
		echo 'Name: '.$name."\n";
	}
}
showNames(fillList(20));
?>