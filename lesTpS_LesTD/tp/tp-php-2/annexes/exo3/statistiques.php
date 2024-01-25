<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"/>
<title>TP PHP 2.3 - Statistiques</title>
<style type="text/css">
    div {position:fixed; top:10px; left:50%; border:1px black solid;}
    .hautsalaire {background-color:orange;}
    .bassalaire {background-color:lightblue;}
</style>
<body>
<?php
require("tabEmployees.php");

$ageMoyen = 0;// Age moyen des employés
$salaireMoyen = 0; // Salaire moyen des plus de 55 ans

$tenRichest = array(); // Tableau contenant les 10 employés ayant le plus haut salaire

// A COMPLETER
$ageTotale=0;
$argenttotale=0;
$nombreTotale=0;
foreach($employees as $key=> $val)
{
    $ageTotale+=$val['age']; 
    $argenttotale+=$val['salary'];
    $nombreTotale++;
}
// Q1 : age moyen de tous les employés
$ageMoyen=$ageTotale/$nombreTotale;




// Q2 : salaire moyen des employés de plus de 55 ans
$salaireMoyen=$argenttotale/$nombreTotale ;

// Q3 : Les 10 plus haut salaire
usort($employees, function( $y,$x) {
    return $x['salary'] <=> $y['salary'];
});

for ($i = 0; $i <10;++$i)
{
    $nom = $employees[$i]['name'];
    $emp = $employees[$i]['salary'];
    $tenRichest[] = " ($nom  $emp € )";
}




// Exemple : $tenRichest = ["Oren Dudley (9985 €)", "Jerome Flynn (9881 €)", ...]


// Affichage des 3 variables remplies dans les réponses aux questions 1 à 3
echo "<p>Age moyen des employés : ".round($ageMoyen,2)." ans</p>";
echo "<p>Salaire moyen des employés de plus de 55 ans : ".round($salaireMoyen,2)." €</p>";
echo "<p>Top 10 des plus haut salaire : <ol>";
foreach($tenRichest as $e) echo "<li>$e</li>";
echo "</ol></p>";
?>
</body>
</html>