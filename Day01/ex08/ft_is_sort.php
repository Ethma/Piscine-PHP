<?PHP
function ft_is_sort($tab)
{
	$array = $tab;
	sort($tab);
	if ($array == $tab)
		return (true);
	return (false);
}
?>
