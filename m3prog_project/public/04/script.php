<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/04script.css">
</head>
<body>
<?php
include_once 'functions.php';
echo currentDateTime() . "</br>";
echo add(1, 2) . "</br>";
echo subtract(1, 2) . "</br>";
echo divide(1, 2) . "</br>";
echo multiply(1, 2) . "</br>";

echo "<h2>ritkosten</h2>";
echo "<p>€" . number_format(berekenRitKosten(663, 15, 1.90), 2, ",", ".") . "</p>";
echo "<p>€" . number_format(berekenRitKosten(1438, 20, 1.46), 2, ",", ".") . "</p>";
echo "<p>€" . number_format(berekenRitKosten(1991, 18.47, 2.23), 2, ",", ".") . "</p>";
?>
</body>
</html>
