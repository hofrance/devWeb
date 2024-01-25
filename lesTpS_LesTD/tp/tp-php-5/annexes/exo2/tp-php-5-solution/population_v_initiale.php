<?php
function importerCSV(string $fileName, array &$villes)
{
    if ($id_file = fopen($fileName, "r")) {
        while ($city = fgetcsv($id_file, 200, ";")) {
            $ville = [];
            $ville["nom"] = (string) $city[0];
            $ville["region"] = (string) $city[1];
            $ville["population"] = (int) $city[2];
            if ($city[3] === "1") {
                $ville["prefecture"] = TRUE;
            }
            $villes[] = $ville;
        }
        fclose($id_file);
    } else {
        throw new Exception("fichier $fileName introuvable");
    }
}

$villes = [];
importerCSV("villes.csv", $villes);
$str = <<<HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>TP PHP 5.2 - Villes</title>
<style>
	table { border-collapse: collapse; }
	table, th, tr, td { border: 1px solid black;}
</style>
</head>
<body>
HEREDOC;
$str .= "<table>";
$str .= "<tr>" . "<th>" . "Nom" . "</th>" . "<th>" . "Region" . "</th>" . "<th>" . "Population" . "</th>" . "<th>" . "Préfecture" . "</th>" . "</tr>";
foreach ($villes as $key => $ville) {
    $str .= "<tr>" . "<td>" . $ville["nom"] . "</td>" . "<td>" . $ville["region"] . "</td>" . "<td>" . $ville["population"] . "</td>" . "<td>";
    if (array_key_exists("prefecture", $villes))
        $str .= "oui";
    else
        $str .= "non";
    $str .= "</td></tr>";
}
$str .= "</table>";
$str .= "</body></html>";
echo $str;
?>