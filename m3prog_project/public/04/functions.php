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

function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs){
    $kosten_euro = 0;
    $aantal_liters = $afstand_km / $km_per_liter;
    $kosten_euro = $aantal_liters * $liter_prijs;
    return $kosten_euro;
}
?>