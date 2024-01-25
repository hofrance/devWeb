<?php
function nombreVoyelle(string $file)
{
    $ch=file_get_contents($file);

   $table=[  "a"=> (preg_match_all("/a/",$ch)),
             "e"=> (preg_match_all("/e/",$ch)),
             "y"=> (preg_match_all("/y/",$ch)),
             "u"=> (preg_match_all("/u/",$ch)),
              "o" => (preg_match_all("/o/",$ch)),
             "i" => (preg_match_all("/i/",$ch)),z

        ];
return $table;
}
// A COMPLETER

// TEST
$vowels_count=nombreVoyelle("Latin-Lipsum.txt");
print_r($vowels_count);
?>