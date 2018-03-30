<?PHP
function	search($array1, $string)
{
	foreach($array1 as $elem)
	{
		if ($elem['passwd'] == $string)
			return (true);
	}
	return (false);
}
function auth($login, $passwd)
{
	if ($login != NULL && $passwd != NULL && file_exists('../private/passwd') == TRUE)
	{
		$passwd = hash("whirlpool", $passwd);
		$content = file_get_contents("../private/passwd");
		$content = unserialize($content);
		if (search($content, $passwd) == true)
			return(TRUE);
	}
	else
		return (FALSE);
}
?>