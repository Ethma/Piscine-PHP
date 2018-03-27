#!/usr/bin/php
<?
while (1)
{
	print("Entrez un nombre: ");
	$value = fgets(STDIN);
	$value = trim($value);
	if (feof(STDIN))
		break;
	if (is_numeric($value) == false)
	{
		print("'$value' n'est pas un chiffre\n");
		return(0);
	}
	if ($value % 2 != 0)
		print("Le chiffre $value est Impair");
	else
		print("Le chiffre $value est Pair");
	echo "\n";
	return (0);
}
?>