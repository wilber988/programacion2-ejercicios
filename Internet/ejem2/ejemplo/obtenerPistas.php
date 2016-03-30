<?php
// Array with names
$a[] = "Ana";
$a[] = "Betsy";
$a[] = "Carmen";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fabiola";
$a[] = "Glenda";
$a[] = "Helen";
$a[] = "Iris";
$a[] = "Johanna";
$a[] = "Karla";
$a[] = "Linda";
$a[] = "Nadya";
$a[] = "Olga";
$a[] = "Patricia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eva";
$a[] = "Evita";
$a[] = "Sonia";
$a[] = "Tomasa";
$a[] = "Urania";
$a[] = "Vilma";
$a[] = "Lorena";
$a[] = "Elizabeth";
$a[] = "Esther";
$a[] = "Wendy";
$a[] = "Victoria";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?> 
