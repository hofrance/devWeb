<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<title>TP PHP 6.1 - Fichier de log</title>
</head>
<body>
<?php
// Définit le fuseau horaire par défaut à utiliser
date_default_timezone_set('Europe/Brussels');

// Ecriture des dates
$idfile = fopen(__DIR__ . "/connex.txt", "a");
$date = time();
flock($idfile, LOCK_EX); // verrou exclusif
fwrite($idfile, $date . "\n");
flock($idfile, LOCK_UN); // déverrouiller
fclose($idfile);
// Lecture des données
$idfile = fopen(__DIR__ . "/connex.txt", "r");
flock($idfile, LOCK_SH); // verrou partagé

while ($date = fgets($idfile))
{
    $tab[] = $date;
}
// Elimination des doublons
$tabstat = array_values(array_unique($tab));
// Affiche les dates et les heures des connexions
foreach ($tabstat as $valeur) {
    echo date("d/M H:i:s", substr($valeur,0,-1)) . "<br />";
}
flock($idfile, 3);
fclose($idfile);
?>
</body>
</html>
