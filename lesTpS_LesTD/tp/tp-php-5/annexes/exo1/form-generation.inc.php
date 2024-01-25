<?php

error_reporting(9);

// code HTML de champ texte mono-ligne
function text(string $libtexte, string $nomtexte): string
{
    // A COMPLETER
    $ch = <<<IDF
    <label for="$libtexte">$nomtexte</label><br>
   <input type="text"  name="$libtexte"><br>
IDF;

    return $ch;
}

// code HTML de bouton de soumission
function submit(string $libsubmit, string $libreset): string
{
    // A COMPLETER
    $ch=<<<IDF
    <input type="submit" value="$libsubmit">
    <input type="reset" value= $libreset>
    IDF;
    return $ch;
}


function boutonRadio(string $libBouton,string $nomBouton )
{
    $ch = <<<IDF
    <label for="$libBouton">$nomBouton</label>
   <input type="radio"  name="$$libBouton"><br>
IDF;

    return $ch;
}


// A ETENDRE
 /**

$bouton1 = boutonRadio("villE", " paris1");
$bouton2 = boutonRadio("ville", " paris2");
$bouton3 = boutonRadio("ville", " paris3");
$bouton4 = boutonRadio("ville", " paris4");
echo " $bouton1  </br> $bouton2 </br> $bouton3  </br> $bouton4  </br>  ";

*/

?>




