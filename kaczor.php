<?php

$file = './daniel.txt';

function splitString($string)
{
	$numbers = preg_replace('/[^0-9]/', '', $string);
	$letters = preg_replace('/[^a-zA-Z]/', '', $string);
	
	$splittedValuesArray = [$letters, $numbers];
	
	return $splittedValuesArray;
}

function isMixedString($string)
{
    return preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $string);
}

function getContents($file)
{
	$fileContents = trim(file_get_contents($file));
	
	if ($fileContents == false)
	{
		return false;
	}

	return $fileContents;
}

function processToUppercase($fileContents)
{
	return strtoupper($fileContents);
}

function saveUppercaseToFile($file, $fileContents)
{
	file_put_contents($file, processToUppercase($fileContents));
	echo 'Contents of the file processed to uppercase';	
}

function handleFileContents($file, $fileContents)
{
	if ($fileContents == false)
	{
		echo 'File is empty';
	}
	
	else if (ctype_upper($fileContents) == true)
	{
		echo 'File contents already in uppercase';
	}
	
	else if (is_numeric($fileContents))
	{
		echo 'File contains digits only';
	}
	
	else if (isMixedString($fileContents) == true)
	{
		$lettersAndDigits = splitString($fileContents);
		
		if (ctype_upper($lettersAndDigits[0]))
		{
			echo 'File contents already in uppercase';
		}
		
		else
		{
			saveUppercaseToFile($file, $fileContents);
		}
	}
	
	else
	{
		saveUppercaseToFile($file, $fileContents);
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

