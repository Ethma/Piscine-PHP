#!/usr/bin/php
<?PHP
	if($argc > 1)
{
	$str = $argv[1];
    $str = trim($str);
	$str = preg_replace ("/\s+/", " ", $str);
	echo $str."\n";
}
?>