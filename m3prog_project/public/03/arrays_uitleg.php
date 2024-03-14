<?php
$games = ["roblox", "fortnite", "minecraft", "osu!", "GTAV"];
print_r($games);
echo "<br>";
echo "$games[2]<br>";
echo "$games[4]<br>";
print_r($games);
echo "<br>";
var_dump($games);
echo "<br>";
echo count($games)."<br>";
array_push($games, "valorant");
print_r($games);
echo "<br>";
sort($games);
echo implode(' ', $games);