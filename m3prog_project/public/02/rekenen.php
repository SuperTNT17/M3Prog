<?php
    $getal = 0.12345;
    $afgerond1 = ceil($getal);
    echo $afgerond1;
    echo "<br>";
    $getal2 = 0.12345;
    $afgerond2 = round($getal2);
    echo $afgerond2;
    echo "<br>";
    $rand1 = rand();
    $rand2 = rand();
    $rand3 = rand();
    $som = $rand1 + $rand2;
    $deel = $som / $rand3;
    echo $deel;