<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for-loop</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php
        $pokemons = ["pikachu", "vaporeon", "charizard", "squirtle", "bulbasaur"];
        $images = ["https://assets.pokemon.com/assets/cms2/img/pokedex/detail/025.png",
                "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/134.png",
                "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/006.png",
                "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/007.png",
                "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/001.png"];
        
        for ($i=0; $i < count($pokemons); $i++) { 
            echo "<h1>$pokemons[$i]</h1>";
            echo "<img src=\"$images[$i]\">";
        }
    ?>
</body>
</html>