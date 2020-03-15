<?php
$myFile = "views.json";
$strg = file_get_contents($myFile);
$json = json_decode($strg, true);
$json['views'] = $json['views'] + 1;
$newJsonString = json_encode($json);
file_put_contents($myFile, $newJsonString);
?>