<?PHP
if ($_GET["action"] == "get" && $_GET["value"] != NULL)
	setcookie($_GET["name"], $_GET["value"], time() + 31536000);
else if($_GET["action"] == "get" && $_COOKIE[$_GET["name"]] != NULL)
	echo $_COOKIE[$_GET["name"]];
else if ($_GET["action"] == "del" && $_COOKIE[$_GET["name"]] != NULL)
	setcookie($_GET["name"], NULL, -1);
?>