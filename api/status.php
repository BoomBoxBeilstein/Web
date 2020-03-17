<?php
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "http://boomboxbeilstein.de:8000/status-json.xsl");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);
$ar=json_decode($output,true);
print_r($ar['icestats']['source']['title']);
print_r("BoomBoxBeilstein - Bald wieder zurück")




 ?>
