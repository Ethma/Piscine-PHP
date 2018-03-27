#!/usr/bin/php
<?PHP
function error($i)
{
	if ($i == 1)
		echo "Incorrect Parameters\n";
	if ($i == 2)
		echo "Syntax Error\n";
	exit();
}
if ($argc != 2)
	error(1);
$str = $argv[1];
$strr = trim($str);
while (strpos($strr, "  ") == true)
	$strr = str_replace("  ", " ", $strr);
$test1 = $strr;
$test2 = $strr;
$test3 = $strr;
$test4 = $strr;
$test5 = $strr;
if ($array = explode("+", $test1))
{
	$test = count($array);
	if ($test > 2)
		error(2);
	if ($test == 2)
	{
		$arg0 = trim($array[0]);
		$arg1 = trim($array[1]);
		if (is_numeric($arg0) && is_numeric($arg1))
		{
			echo $arg0 + $arg1."\n";
			return (0);
		}
		else
			error(2);
	}
}
if ($array = explode("-", $test2))
{
	$test = count($array);
	if ($test > 2)
	{
		echo "Syntax Error\n";
		return (0);
	}
	if ($test == 2)
	{
		$arg0 = trim($array[0]);
		$arg1 = trim($array[1]);
		if (is_numeric($arg0) && is_numeric($arg1))
		{
			echo $arg0 - $arg1."\n";
			return (0);
		}
		else
			error(2);
	}
}
if ($array = explode("/", $test3))
{
	$test = count($array);
	if ($test > 2)
		error(2);
	if ($test == 2)
	{
		$arg0 = trim($array[0]);
		$arg1 = trim($array[1]);
		if (is_numeric($arg0) && is_numeric($arg1))
		{
			echo $arg0 / $arg1."\n";
			return (0);
		}
		else
			error(2);
	}
}
if ($array = explode("*", $test4))
{
	$test = count($array);
	if ($test > 2)
		error(2);
	if ($test == 2)
	{
		$arg0 = trim($array[0]);
		$arg1 = trim($array[1]);
		if (is_numeric($arg0) && is_numeric($arg1))
		{
			echo $arg0 * $arg1."\n";
			return (0);
		}
		else
			error(2);
	}
}
if ($array = explode("%", $test5))
{
	$test = count($array);
	if ($test > 2)
		error(2);
	if ($test == 2)
	{
		$arg0 = trim($array[0]);
		$arg1 = trim($array[1]);
		if (is_numeric($arg0) && is_numeric($arg1))
		{
			echo $arg0 % $arg1."\n";
			return (0);
		}
	}
}
if (1)
	error(2);
?>