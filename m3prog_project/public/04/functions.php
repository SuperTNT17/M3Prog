<?php
function currentDateTime(){
    echo date('d-m-Y H:i:s');
}

function add($getal1, $getal2){
    $som = $getal1 + $getal2;
    return $som;
}

function subtract($getal1, $getal2){
    $som = $getal1 - $getal2;
    return $som;
}

function divide($getal1, $getal2){
    $som = $getal1 / $getal2;
    return $som;
}

function multiply($getal1, $getal2){
    $som = $getal1 * $getal2;
    return $som;
}
?>