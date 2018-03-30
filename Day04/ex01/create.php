<?PHP
function    search($array1, $array2)
{
	foreach($array1 as $i => $e)
	{
		if ($e['login'] === $array2['login'])
			return (TRUE);
	}
	return (FALSE);
}

if ($_POST["login"] != NULL && $_POST["login"] != "" && $_POST["passwd"] != NULL && $_POST["passwd"] != "" && $_POST["submit"] == "OK")
{
	$logs["login"] = $_POST["login"];
	$logs["passwd"] = hash("whirlpool", $_POST["passwd"]);
	if (file_exists('../private/passwd') == TRUE)
	{
		$content = file_get_contents("../private/passwd");
		$content = unserialize($content);
		if (search($content, $logs) == FALSE)
			$final[] = $logs;
	}
	else
		$final[0] = $logs;
	if ($final != NULL)
	{
		$content = serialize($final);
		if (file_exists('../private/') == FALSE)
			mkdir('../private/');
		file_put_contents("../private/passwd", $content);
		echo "OK\n";
	}
	else
		echo "ERROR\n";
}
else
	echo "ERROR\n";
?>