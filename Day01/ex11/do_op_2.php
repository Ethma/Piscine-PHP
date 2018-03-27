#!/usr/bin/php
<?PHP
function error($i)
{
	if ($i == 1)
		echo "Incorrect Parameters\n";
	if ($i == 2)
		echo "Syntax Error";
	exit();
}
if ($argc != 2)
	error(1);
$str = $argv[1];
$strr = trim($str);
while (strpos($strr, "  ") == true)
	$strr = str_replace("  ", " ", $strr);
if ($array = explode("+", $strr))
{
	echo $array[0] + $array[1];
	return (0);
}
else if ($array = explode("-", $strr))
{
	echo $array[0] - $array[1];
	return (0);
}
else if ($array = explode("*", $strr))
{
	echo $array[0] * $array[1];
	return (0);
}
else if ($array = explode("/", $strr))
{
	echo $array[0] / $array[1];
	return (0);
}
else if ($array = explode("%", $strr))
{
	echo $array[0] % $array[1];
	return (0);
}
else
	error(2);
?>