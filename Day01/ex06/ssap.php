#!/usr/bin/php
<?PHP
if ($argc == 1)
	return (0);
$value = 1;
while ($value < $argc)
	$str .= " ".$argv[$value++]." ";
$strr = trim($str);
while (strpos($strr, "  ") == true)
	$strr = str_replace("  ", " ", $strr);
$array = explode(" ", $strr);
sort($array);
foreach($array as $e)
	echo "$e\n";
?>