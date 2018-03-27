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
?>