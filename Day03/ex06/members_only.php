<?PHP
if ($_SERVER["PHP_AUTH_USER"] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
{
	$img = file_get_contents("../img/42.png");
	$img = base64_encode($img);
	echo "<html><body>
Bonjour Zaz<br />
<img src='data:image/png;base64,iVBORw0KGgoAAAA...
...
...
...6MIHnr2t+eeO4Fr+v/H80AmcVvzqAfAAAAAElFTkSuQmCC'>
</body></html>\n";
}
else
{
	header("HTTP/1.0 401 Unauthorized");
	header("WW-Authenticate: Basic realm=''Espace membres''");
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>
* Closing connection #0\n";
}
?>