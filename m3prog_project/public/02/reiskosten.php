<?php
$afstand = 1082.00;
// 2.72 is min prijs om met de trein te gaan
$euro95Prijs = 1.89;
$kostenTrein = 60.00;
$tankInhoud = 50;
$afstandPerLiter = 15;
$gebruikt = $afstand / $afstandPerLiter;
echo "aantal liter euro 95 gebruikt over ".$afstand."km is ".round($gebruikt, 2)."<br>";
$aantalTanken = $gebruikt / $tankInhoud - 1;
echo "aantal keren tanken over deze afstand is ".round($aantalTanken,2)."<br>";
$kostenAuto = ($aantalTanken * $tankInhoud) * $euro95Prijs;
echo "deze reis met de auto kost €".round($kostenAuto,2)." aan euro 95<br>";
if ($kostenAuto > $kostenTrein) {
    echo "ik ga met de trein (trein kost €$kostenTrein)";
}
else {
    echo "ik ga met de auto (trein kost €$kostenTrein)";
}