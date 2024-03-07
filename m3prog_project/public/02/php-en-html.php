<?php
    $pageTitle = "Made in PHP";
    $url = "https://cdn.maxvandaag.nl/2024/08/2231oa66-Patat-of-friet-shutterstock-900-500-890x500.jpg";
    $imageTitle = "patat";
    $github = "SuperTNT17";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle?></title>
</head>
<body>
    <h1><?php echo $pageTitle;?></h1>
    <img src="<?php echo $url;?>" alt="<?php echo $imageTitle;?>"></img>
    <section>
        <h1>Auteur: <?= $github;?></h1>
    </section>
</body>
</html>