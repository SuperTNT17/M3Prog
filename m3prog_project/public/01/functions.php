<?php
    // strtoupper
    $lowercaseString = "string";
    echo strtoupper($lowercaseString);

    // strpos
    $string = "dit is een lange string met meerdere woorden er in en zo";
    $stringToFind = "woorden";
    echo strpos($string, $stringToFind);

    // file_exists
    $filePath = "functions.md";
    echo file_exists($filePath);
?>