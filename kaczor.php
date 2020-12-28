<?php

$file = './daniel.txt';

function getContents($file)
{
	$fileContents = trim(file_get_contents($file));
	
	if ($fileContents == false)
	{
		return false;
	}
	else
	{
		return $fileContents;
	}
}

function processToUppercase($fileContents)
{
	return strtoupper($fileContents);
}

if (file_exists($file))
{
	$fileContents = getContents($file);
	
	if ($fileContents == false)
	{
		echo 'File is empty';
	}
	else
	{
		file_put_contents($file, processToUppercase($fileContents));
		echo 'Contents of file processed to uppercase';
	}
}
else
{
	echo 'File does not exist';
}

