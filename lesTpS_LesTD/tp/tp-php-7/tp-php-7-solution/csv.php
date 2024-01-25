<?php
session_start();
if (isset($_SESSION['count'])) {
    $_SESSION['count'] = $_SESSION['count'] * 2;
} else {
    $_SESSION['count'] = 1;
}

// TODO Lire le fichier countries.csv
$fh = fopen(__DIR__ . '/countries.csv', 'r');
$i = 1;
$cgs = [];
while ($cg = fgetcsv($fh,0,';')) {
    if ($i++ <= $_SESSION['count']) {
        $cgs[] = $cg[1];
    }
}
fclose($fh);

// TODO Générer le fichier governments.csv
$gs = array_unique($cgs);
sort($gs);
$fh = fopen(__DIR__ . '/governments.csv', 'w');
foreach($gs as $g) {
    fputcsv($fh,[$g]);
}
fclose($fh);
var_export($gs);
?>
