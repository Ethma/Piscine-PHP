<?PHP
print_r($_GET);
foreach($_GET as $name => $login)
	echo $name.": ".$login."\n"; 
?>