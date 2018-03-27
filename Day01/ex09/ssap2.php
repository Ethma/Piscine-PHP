#!/usr/bin/php
<?PHP
if ($argc > 1)
{
while ($value < $argc)
	$str .= " ".$argv[$value++]." ";
$strr = trim($str);
while (strpos($strr, "  ") == true)
	$strr = str_replace("  ", " ", $strr);
$array = explode(" ", $strr);
sort($array);
$number = array();
$char = array();
$other = array();
$i = 0;
$k = 0;
$j = 0;
foreach($array as $e)
{
	if (is_numeric($e) == true)
		$number[$i++] = $e;
	else if (ctype_alpha($e) == true)
		$char[$k++] = $e;
	else
		$other[$j++] = $e;
}
sort($number, SORT_STRING);
sort($char, SORT_NATURAL | SORT_FLAG_CASE);
sort($other);
$aray = array_merge($char, $number, $other);
foreach($aray as $e)
	echo "$e\n";
}
?>