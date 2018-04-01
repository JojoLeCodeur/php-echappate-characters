<?php
if (isset($_POST['form']))
{
	extract($_POST); //On extrait toutes les données de $_POST pour les mettres dans des variables correspondant à l'index du tableau $_POST
	if (!empty($text)) //L'input avec le name = text
	{
		$newText = htmlspecialchars($text); //On transforme les < en &lt;, les > en &gt;
		$newText = str_treplace('&', "&amp;", $newText); //On remplace & par &amp
		
		echo nl2br($newText);
	}
}
?>
