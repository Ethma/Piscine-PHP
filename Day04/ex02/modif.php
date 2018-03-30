<?PHP

function    search($array1, $array2)
{
	foreach($array1 as $i => $e)
	{
		if ($e['login'] === $array2['login'] && $e['passwd'] === $array2['oldpw'])
			return ($i);
	}
	return (FALSE);
}

if ($_POST["login"] != NULL && $_POST["oldpw"] != NULL && $_POST["newpw"] != NULL && $_POST["submit"] == "OK")
{
	$logs["login"] = $_POST["login"];
	$logs["oldpw"] = hash("whirlpool", $_POST["oldpw"]);
	$logs["newpw"] = hash("whirlpool", $_POST["newpw"]);
	{
		$content = file_get_contents("../private/passwd");
		$content = unserialize($content);
		if (($i = search($content, $logs)) !== FALSE)
		{
			$content[$i]['passwd'] = $logs['newpw'];
			$content = serialize($content);
			file_put_contents("../private/passwd", $content);
			echo "OK\n";
		}
		else
			echo "ERROR\n";
	}
}
else
	echo "ERROR\n";

?>