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
    echo "<h2>vliegkosten</h2>";
    echo "<p>€" . number_format(berekenVluchtKosten(3722, 2.05, 20, "economy"), 2, ",", ".") . "</p>";
    echo "<p>€" . number_format(berekenVluchtKosten(9276, 3.11, 10, "economy"), 2, ",", ".") . "</p>";
    echo "<p>€" . number_format(berekenVluchtKosten(803, 2.83, 0, "business"), 2, ",", ".") . "</p>";
    ?>
</body>
</html>