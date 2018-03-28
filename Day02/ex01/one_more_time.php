#!/usr/bin/php
<?PHP
date_default_timezone_set('CET');
	function ft_split($str)
	{
	$array = explode(' ', $str);
	return ($array);
	}
	if ($argc == 2)
	{
		$str = $argv[1];
		$array = ft_split($str);
		if (preg_match("/[Ll]undi/", $array[0]))
			$array[0] = 1;
		if (preg_match("/[Mm]ardi/", $array[0]))
			$array[0] = 2;
		if (preg_match("/[Mm]ercredi/", $array[0]))
			$array[0] = 3;
		if (preg_match("/[Jj]eudi/", $array[0]))
			$array[0] = 4;
		if (preg_match("/[Vv]endredi/", $array[0]))
			$array[0] = 5;
		if (preg_match("/[Ss]amedi/", $array[0]))
			$array[0] = 6;
		if (preg_match("/[Dd]imanche/", $array[0]))
			$array[0] = 7;
		if (preg_match("/[Jj]anvier/", $array[2]))
			$array[2] = 1;
		if (preg_match("/[Ff]evrier/", $array[2]))
			$array[2] = 2;
		if (preg_match("/[Mm]ars/", $array[2]))
			$array[2] = 3;
		if (preg_match("/[Aa]vril/", $array[2]))
			$array[2] = 4;
		if (preg_match("/[Mm]ai/", $array[2]))
			$array[2] = 5;
		if (preg_match("/[Jj]uin/", $array[2]))
			$array[2] = 6;
		if (preg_match("/[Jj]uillet/", $array[2]))
			$array[2] = 7;
		if (preg_match("/[Aa]out/", $array[2]))
			$array[2] = 8;
		if (preg_match("/[Ss]eptembre/", $array[2]))
			$array[2] = 9;
		if (preg_match("/[Oo]ctobre/", $array[2]))
			$array[2] = 10;
		if (preg_match("/[Nn]ovembre/", $array[2]))
			$array[2] = 11;
		if (preg_match("/[Dd]ecembre/", $array[2]))
			$array[2] = 12;
		if ($array[2] < 1 || $array[2] > 12)
		{
			echo "Wrong Format\n";
			return (0);
		}
		if ($array[1] < 1  || $array[1] > 31)
		{
			echo "Wrong Format\n";
			return (0);
		}
		$time = explode(":", $array[4]);
		if (count($time) != 3)
		{
			echo "Wrong Format\n";
			return (0);
		}
		$array[4] = 1;
		foreach($array as $e)
		{
			if(is_numeric($e) == false)
			{
				echo "Wrong Format\n";
				return (0);
			}
		}
		foreach($time as $e)
		{
			if(is_numeric($e) == false)
			{
				echo "Wrong Format\n";
				return (0);
			}
		}
		$value = mktime($time[0], $time[1], $time[2], $array[2], $array[1], $array[3]);
		echo $value."\n";
		return (0);
	}
	echo "Wrong Format\n";
?>