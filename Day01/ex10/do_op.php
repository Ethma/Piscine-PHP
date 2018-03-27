#!/usr/bin/php
<?PHP
function error($i)
{
	echo "Incorrect Parameters\n";
	exit();
}
if ($argc != 4)
	error(1);
$value = 1;
while ($value < $argc)
$str .= " ".$argv[$value++]." ";
$strr = trim($str);
while (strpos($strr, "  ") == true)
$strr = str_replace("  ", " ", $strr);
$array = explode(" ", $strr);
if (count($array) != 3)
	error(1);
if ($array[1] == '+')
	echo $array[0] + $array[2]."\n";
else if ($array[1] == '-')
	echo $array[0] - $array[2]."\n";
else if ($array[1] == '*')
	echo $array[0] * $array[2]."\n";
else if ($array[1] == '/')
	echo $array[0] / $array[2]."\n";
else if ($array[1] == '%')
	echo $array[0] % $array[2]."\n";
?>