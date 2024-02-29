<?php
    // strtoupper
    $lowercaseString = "string";
    echo strtoupper($lowercaseString);
    echo "<br>";

    // strpos
    $string = "dit is een lange string met meerdere woorden er in en zo";
    $stringToFind = "woorden";
    echo strpos($string, $stringToFind);
    echo "<br>";

    // file_exists
    $filePath = "functions.md";
    echo file_exists($filePath);
?>