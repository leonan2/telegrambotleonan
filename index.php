<?php

ini_set('error_reporting' , E_ALL);

$botToken = "262810724:AAELbOXZZext7xBrQoOXT7WJWdJQLUFwPjk";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update ["message"]["text"];

switch($message) {
  case "/test":
    sendMessage($chatId, "text");
    break;
  case "/hi":
    sendMessage($chatId, "hi");
    break;
  default:
    sendMessage($chatId, "default");
    
}

function sendMessage ($chatId, $message) {
  $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
  file_get_contents($url);
}

?>

<h2> Test </h2>
