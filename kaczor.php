<?php

if (file_exists('daniel.txt'))
{
	$fileContents = file_get_contents('daniel.txt');
	file_put_contents('daniel.txt', strtoupper($fileContents));
	echo 'File processed successfully';
}
else
{
	echo 'File does not exist';
}

