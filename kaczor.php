<?php

$list = [
	'Kamil',
	'Daniel',
	'Mateusz',
	'Eryk',
	'Gieka',
	'Anna',
	'Maks',
	'Piotr',
	'Agnieszka',
	'Jakub',
	'Ryszard',
	'Kinga',
	'Karolina'
];
$listSize = count($list);

for ($x = 0; $x < $listSize; $x++)
{
	echo "Imie: ".$list[$x]." \n";
}
?>