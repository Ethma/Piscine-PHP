#!/usr/bin/php
<?
function trimUltime($str)
{
    $str = trim($str);
    $str = preg_replace ("/\s+/", " ", $str);
	return $str;
}
function ft_split($str)
{
trimUltime($str);
$array = explode(' ', $str);
sort($array);
return ($array);
}
if ($argc == 1)
	echo "\n";
$value = 1;
while ($value < $argc)
{
	ft_split($argc[$value]);
	print($argv[$value++]);
}

?>