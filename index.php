<?php
require 'vendor/autoload.php';
use Telegram\Bot\Api;
$telegram = new Api('262810724:AAF4sjm5EgN6WZvvueFu3SCvx8G65kKAIyE');
/*
$response = $telegram->getMe();
$botId = $response->getId();
$firstName = $response->getFirstName();
$username = $response->getUsername();
echo $response;
*/
//$updates = $telegram->getWebhookUpdates();
//$response = $telegram->getUpdates();
//$updateArray = json_decode($updates, TRUE);
//$chatId = $updateArray["result"][0]["message"]["chat"]["id"];
$content = file_get_contents("php://input");
$update = json_decode($content, true);
$texto = $update['message']['text'];
$chatId = $update['message']['chat']['id'];
if ($update) {
  switch ($update['message']['text']) {
    case '/hi':
      $response = $telegram->sendMessage([
        'chat_id' => $chatId,
        'text' => 'Oi, tudo bem?'
      ]);
     case '/test':
      $response = $telegram->sendMessage([
        'chat_id' => $chatId,
        'text' => 'teste feito'
      ]);
      
     default:
      $response = $telegram->sendMessage([
        'chat_id' => $chatId,
        'text' => 'texto invalido, apenas oi está disponivel'
      ]);
      
      break;
  }
}
echo 'testando';
