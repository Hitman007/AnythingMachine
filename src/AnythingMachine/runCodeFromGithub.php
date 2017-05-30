<?php

$GithubRawURI= "https://raw.githubusercontent.com/Hitman007/AnythingMachine/master/src/AnythingMachine/HelloWorld.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $GithubRawURI);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
$data = substr($str, 5);
curl_close($ch);
eval ($data);