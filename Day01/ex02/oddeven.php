#!/usr/bin/php
<?PHP
while (1)
{
	print("Entrez un nombre: ");
	$value = fgets(STDIN);
	$value = trim($value);
	if (feof(STDIN))
	{
		echo "\n";
		exit();
	}
	if (is_numeric($value) == false)
		print("'$value' n'est pas un chiffre\n");
	else if ($value % 2 != 0)
		echo "Le chiffre $value est Impair\n";
	else if ($value % 2 == 0)
		echo "Le chiffre $value est Pair\n";
}
?>