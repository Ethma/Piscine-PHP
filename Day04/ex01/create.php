<?PHP
session_start();
if ($_POST["login"] != NULL && $_POST["passwd"] != NULL)
{
	$_SESSION["login"] = $_GET["login"];
	$_SESSION["passwd"] = $_GET["passwd"];
}
else if (($_POST["login"] == NULL || $_POST["passwd"] == NULL)
	echo "ERROR\n";
else if ($_POST["submit"] != "OK")
	echo "ERROR\n";
?>