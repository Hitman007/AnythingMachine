<?php

$ch = curl_init();
//$header = array("Cache-Control: no-cache");
// $header = array("Cache-Control: max-age=0");
//curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_URL, 'https://raw.githubusercontent.com/Hitman007/AnythingMachine/master/src/AnythingMachine/HelloWorld.php');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
curl_close($ch);

echo "Hi<br />";
eval ($data);