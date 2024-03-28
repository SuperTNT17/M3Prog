<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style-associatief.css">
</head>
<body>
    <?php
        $verbruik = ["koelkast"=>170, "vaatwasser"=>220, "koffiezet"=>30, "wasmachine"=>200, "stofzuiger"=>80];
        foreach($verbruik as $key => $value){
            echo "<p>" . $key . " = " . $value . " kwh</p>";
        }
        $totaal = 0;
        foreach($verbruik as $key => $value){
            $totaal += $value;
        }
        echo "<h1>Totaal</h2>";
        echo "<p>" . $totaal . " kwh</p>";
    ?>
</body>
</html>