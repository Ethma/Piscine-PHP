<?PHP
session_start();
if ($_GET["login"] != NULL && $_GET["passwd"] != NULL)
{
	$_SESSION["login"] = $_GET["login"];
	$_SESSION["passwd"] = $_GET["passwd"];
}
?>
<html><body>
<form action="index.php">
	Identifiant: <input type="login" name="login" value="<?PHP echo $_SESSION["login"]?>" />
	<br />
	Mot de passe: <input  type="password" name="passwd"value="<?PHP echo $_SESSION["passwd"]?>" />
<input type="submit" name="submit" value="OK"/>
</form>
</body></html>
