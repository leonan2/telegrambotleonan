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
$texto =  $update['message']['text'];
$texto = strtolower($texto);
$chatId = $update['message']['chat']['id'];

if ($texto) {
  switch ($texto) {
    case '/start':
      $response = $telegram->sendMessage([
        'chat_id' => $chatId,
        'text' => 'Oi, tudo bem? / (responda com tudo e você?)'
       
       ]);
      break;
    case 'oi':
      $response = $telegram->sendMessage([
        'chat_id' => $chatId,
        'text' => 'Oi, tudo bem? / (responda com tudo e você?)'
      ]);
      break;
    case 'tudo e você?':
     $response = $telegram->sendMessage([
        'chat_id' => $chatId,
        'text' => 'to bem, o que está fazendo? (responda com nada)'
      ]);
      break;
    case 'nada':
      $response = $telegram->sendMessage([
        'chat_id' => $chatId,
        'text' => 'ah sim, obrigado pela sua conversa, fiquei feliz!'
      ]);
      break;
    
    
    default:
      $response = $telegram->sendMessage([
        'chat_id' => $chatId,
        'text' => 'texto invalido.'
      ]);
      
      break;
  }
}
