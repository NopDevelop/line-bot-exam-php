<?php



require "vendor/autoload.php";

$access_token = 'rOdfE4RhbKdH03db+BEhdcMJ29f3TDys7A9xxZEagL5nsx7k/vSiiPvsjDgkfWkTkRlMO5UAV4ByJXzbB4fU/v7fFu2DVFyyQ/5e5lC8JLSh78g/5L3YQ+JSlK86d26PlPCddv/T01qRih5kBgGVLQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '164ded9fd4740e202ba5942a6bf22ed5';

$pushID = 'Ua2f6847c640a98dfa3e4d3d02da61bea';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







