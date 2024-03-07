<?php
    $name = "Student";
    $location = "Nederland";
    $age = 19;
    $temperature = 5.5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- php -->
    <?php
        echo "Ik ben $name, woon in $location en ben $age jaar oud. De temperatuur is nu $temperature graden.";
    ?>
    <!-- html met de echo shortcut -->
    <p>Ik ben <?=$name?>, woon in <?=$location?> en ben <?=$age?> jaar oud. De temperatuur is nu <?=$temperature?> graden.<p>
</body>
</html>