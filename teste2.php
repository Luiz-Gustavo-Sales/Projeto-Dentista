<?php
$url = 'http://wise.no-ip.info:1418/Crown/app/dentistas/estados';

$ch = curl_init();
curl_setopt($ch, CURLOPT_GET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

// Will dump a beauty json :3
var_dump(json_decode($result, true));

?>