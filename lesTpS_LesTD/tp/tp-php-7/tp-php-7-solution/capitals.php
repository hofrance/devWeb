<?php
$tab = json_decode(file_get_contents('country-by-capital-city.json'), true, 3, JSON_OBJECT_AS_ARRAY);
$tab1 = [];
foreach ($tab as $v) {
    $tab1[$v['country']] = $v['city'];
}
// PHP >= 7.4 : uksort($tab1, fn($u, $v) => $v <=> $u);
uksort($tab1, function ($u, $v) {
    return $v <=> $u; });
array_walk($tab1, function ($v, $k) {
    echo $k . ' - ' . $v . '<br/>';
});
?>