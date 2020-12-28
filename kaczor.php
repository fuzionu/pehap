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

function handleFileContents($file, $fileContents)
{
	if ($fileContents == false)
	{
		echo 'File is empty';
	}
	else if (is_numeric($fileContents))
	{
		echo 'File contains digits only, nothing to process';
	}
	else
	{
		file_put_contents($file, processToUppercase($fileContents));
		echo 'Contents of file processed to upper case';
	}
}


if (file_exists($file))
{
	$fileContents = getContents($file);
	handleFileContents($file, $fileContents);	
}
else
{
	echo 'File does not exist';
}

