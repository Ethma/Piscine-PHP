#!/usr/bin/php
<?
if ($argc == 1)
	return (0);
$value = 1;
while ($value < $argc)
{
	print($argv[$value++]);
	print("\n");
}
?>