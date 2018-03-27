#!/usr/bin/php
<?PHP
function trimUltime($str)
{
    $str = trim($str);
    $str = preg_replace ("/\s+/", " ", $str);
	return $str;
}
if ($argc == 2)
{
	$str = trimUltime($argv[1]);
	$array = explode(" ", $str);
	$str = array_shift($array);
	foreach($array as $e)
		echo "$e ";
	echo "$str\n";
}
?>