<?php

$fileURI = "";

$Url = "https://$site.craigslist.org/search/jjj?query=$keyword&sort=date";

$ch = curl_init();

// Set URL to download
curl_setopt($ch, CURLOPT_URL, $Url);
// User agent
curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");

// Include header in result? (0 = yes, 1 = no)
curl_setopt($ch, CURLOPT_HEADER, 0);

// Should cURL return or print out the data? (true = return, false = print)
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Timeout in seconds
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

// Download the given URL, and return output
$output = curl_exec($ch);

curl_close($ch);

echo $output;