#!/usr/bin/php
<?
if ($argc == 1)
	echo "\n";
$value = 1;
while ($value < $argc)
{
	print($argv[$value++]);
	print("\n");
}
?>