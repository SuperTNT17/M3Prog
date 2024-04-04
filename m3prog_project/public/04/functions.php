<?php

/**
 * echo de huidige datum en tijd 
 *
 * @return void
 */
function currentDateTime()
{
    echo date('d-m-Y H:i:s');
}

/**
 * deze functie telt twee gegeven getallen bij elkaar op
 *
 * @param int $getal1
 * @param int $getal2
 * @return int
 */
function add($getal1, $getal2)
{
    $som = $getal1 + $getal2;
    return $som;
}

/**
 * deze functie haalt twee gegeven getallen van elkaar af
 *
 * @param int $getal1
 * @param int $getal2
 * @return int
 */
function subtract($getal1, $getal2)
{
    $som = $getal1 - $getal2;
    return $som;
}

/**
 * deze functie deelt twee gegeven getallen door elkaar
 *
 * @param int $getal1
 * @param int $getal2
 * @return int
 */
function divide($getal1, $getal2)
{
    $som = $getal1 / $getal2;
    return $som;
}

/**
 * deze functie vermenigvuldigt twee gegeven getallen met elkaar
 *
 * @param int $getal1
 * @param int $getal2
 * @return int
 */
function multiply($getal1, $getal2)
{
    $som = $getal1 * $getal2;
    return $som;
}

/**
 * deze functie berekent de totale kosten van een autorit met de gegeven waardes
 *
 * @param int $afstand_km
 * @param float $km_per_liter
 * @param float $liter_prijs
 * @return float
 */
function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs)
{
    $kosten_euro = 0;
    $aantal_liters = $afstand_km / $km_per_liter;
    $kosten_euro = $aantal_liters * $liter_prijs;
    return $kosten_euro;
}

/**
 * deze functie berekent de totale kosten van een vlucht met de gegeven waardes
 *
 * @param int $afstand_km
 * @param float $liter_prijs
 * @param int $bagage_kilo
 * @param string $class
 * @return float
 */
function berekenVluchtKosten($afstand_km, $liter_prijs, $bagage_kilo, $class)
{
    $totaal = $liter_prijs * $afstand_km / 30;
    $totaal += $bagage_kilo * 5;
    if ($class == "business") {
        $totaal *= 1.5;
    }
    return $totaal;
}
