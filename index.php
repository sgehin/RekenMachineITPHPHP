<?php

$getalurl1 = $_GET['getal1'];
$getalurl2 = $_GET['getal2'];
$operator = $_GET['operator'];

switch($operator){  
    case  "plus":
        optellen($getalurl1,$getalurl2);
        break;

    case  "min":
        aftrekken($getalurl1,$getalurl2);
        break;

    case  "keer":
        vermenigvuligen($getalurl1,$getalurl2);
        break;

    case  "delen":
        delen($getalurl1,$getalurl2);
        break;

    Defaul:
        echo "foute invoer";
    }

// optellen
function optellen($getal1,$getal2){
        $som = $getal1 + $getal2;
                echo $getal1."+".$getal2."=".$som."<br>";
                
}
// aftrekken
function aftrekken($getal1,$getal2){
        $som = $getal1 - $getal2;
                echo $getal1."-".$getal2."=".$som."<br>";
                
}
// delen
function delen($getal1,$getal2){
        $som = $getal1 / $getal2;
                echo $getal1.":".$getal2."=".$som."<br>";
                
}
// vermenigvuldigen
function vermenigvuligen($getal1,$getal2){
        $som = $getal1 * $getal2;
                echo $getal1."*".$getal2."=".$som."<br>";
                
}


//optellen($getalurl1,$getalurl2);
//aftrekken($getalurl1,$getalurl2);
//delen($getalurl1,$getalurl2);
//vermenigvuligen($getalurl1,$getalurl2);
        
?>
