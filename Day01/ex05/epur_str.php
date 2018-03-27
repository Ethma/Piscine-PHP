#!/usr/bin/php
<?PHP
function trimUltime($str)
{
    $str = trim($str);
    $str = preg_replace ("/\s+/", " ", $str);
	return $str;
}
if ($argc != 2)
	return (0);
$str = $argv[1];
$str = trimUltime($str);
print($str."\n");
?>