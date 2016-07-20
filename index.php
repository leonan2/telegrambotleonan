<?php

$botToken = "262810724:AAELbOXZZext7xBrQoOXT7WJWdJQLUFwPjk";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

$updateArray = json_decode($update, TRUE);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

if ($update) {
  switch ($update['message']['text']) {
    case 'oi':
      $response = $telegram->sendMessage([
        'chat_id' => $chatId,
        'text' => 'Oi, tudo bem?'
      ]);
      $response = $telegram->sendMessage([
        'chat_id' => $chatId,
        'text' => 'qr tc?'
      ]);
      break;
    default:
      $response = $telegram->sendMessage([
        'chat_id' => $chatId,
        'text' => 'texto invalido, apenas oi está disponivel'
      ]);
      
      break;
  }
}

file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=test");
print_r($updateArray);
