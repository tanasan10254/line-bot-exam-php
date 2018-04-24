<?php



require "vendor/autoload.php";

$access_token = 'euPm/280DWxqISBt4QH2LuZM3ySRQWNgVqB6pWCk9TQzo9564lJn3FzPNf/jnmteKMjVqkKmtQ2P67MyLUqsS/W0Qwr6ZT8TLw4nGg7moOX/FAuP+MKpbMx7iXzyZhRvr3407z7FYNhZwxwaWCTPuQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'd3f8893435dce20a236a58b6fa3d098a';

$pushID = 'Uc15a58d8d7d232605720f7e8b7c39731';


$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage('sssss', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







