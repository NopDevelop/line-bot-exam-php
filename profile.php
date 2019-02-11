<?php


$access_token = 'rOdfE4RhbKdH03db+BEhdcMJ29f3TDys7A9xxZEagL5nsx7k/vSiiPvsjDgkfWkTkRlMO5UAV4ByJXzbB4fU/v7fFu2DVFyyQ/5e5lC8JLSh78g/5L3YQ+JSlK86d26PlPCddv/T01qRih5kBgGVLQdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

