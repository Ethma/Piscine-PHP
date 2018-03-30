<?PHP
session_start();
if ($_SESSION["logged_on_user"] != "" && $_SESSION["logged_on_user"] != NULL && $_SESSION != NULL)
	echo $_SESSION["logged_on_user"]."\n"; 
else
	echo "ERROR\n";
?>