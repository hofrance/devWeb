<?php
function importerCSV(string $fileName, array &$villes)
{
	if ($file = fopen($fileName, 'r'))
	
	
	{
		while ($city = fgetcsv($file, 1000, ";") ) 
		{
			$ville = [];//on cree un tabelau pour cha<ue ville
			$ville["Nom"] = (string) $city[0];//on converti chaque elemnent du tableau en sting
			$ville["Région"] = (string) $city[1];
			$ville["Population"] = (string) $city[2];
			$ville ["Préfecture"]= ($city[3] === "1") ? "oui" : "non";

			




			$villes[] = $ville;


		}
		fclose($file);

	}
else
{
	throw new Exception("fichier $fileName introuvable");
}

}

$villes = [];
importerCSV("villes.csv", $villes);



// A MODIFIER
echo <<<HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>TP PHP 5.2 - Villes</title>
<style>
	table { border-collapse: collapse;
	 background-color:yellow; }
	table, th, tr, td { border: 1px solid black;}
</style>
</head>
<body>
HEREDOC;

echo "<table>";
echo"<tr> ";
	echo"<th> Nom </th>";
	echo"<th>Region </th>";
	echo"<th>  Population </th>";
	echo"<th>Préfecture  </th>";
echo"</tr>";
	foreach($villes as $key=> $val)
	{
		echo "<tr>";
		
		foreach($val as $k=> $v	)
		{
			
			echo"<td>$v</td>";
		}
		echo"<tr/>";
	}

echo "</table>";
// A COMPLETER

echo"</body>";
?>