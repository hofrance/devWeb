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

function cmp($a, $b)
{
    if ($a["region"] <=> $b["region"])
        return $b["region"] <=> $a["region"];
    else
        return $b["population"] <=> $a["population"];
}

function trier(array &$villes, bool $flag)
{
    function ncmp($a,$b) { return -cmp($a, $b);}
    $flag ? usort($villes, "cmp") : usort($villes, "ncmp");
}

$villes = [];
importerCSV("villes.csv", $villes);

if (isset($_GET['astuce'])) {
    trier($villes, false);
    $bkg = "orange";
} else {
    trier($villes, true);
    $bkg = "red";
}

$str = <<<HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>TP PHP 5.2 - Villes</title>
<style>
	table { background-color: $bkg; }
	table { border-collapse: collapse; }
	table, th, tr, td { border: 1px solid black;}
</style>
</head>
<body>
HEREDOC;
$str .= "<table>";
$str .= "<tr>" . "<th>" . "<a href=\"population_v_hyperlien.php?astuce=1\">Nom</a>" . "</th>" . "<th>" . "Region" . "</th>" . "<th>" . "Population" . "</th>" . "<th>" . "Préfecture" . "</th>" . "</tr>";
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
