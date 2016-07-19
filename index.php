<?php

$botToken = "262810724:AAELbOXZZext7xBrQoOXT7WJWdJQLUFwPjk";

$website = "https://api.telegram.org/bot".$botToken; 

$update = file_get_contents($website."/getupdates");

$update = json_decode($update, TRUE);

$chatId = $update ["message"]["chat"]["id"];
$message = $update ["message"]["text"];

switch ($message)
 {
    case "/test":
      sendMessage($chatId, "test");
      break;
    case "/hi":
      sendMessage($chatId, "hey there");
      break;
    default: 
      sendMessage($chatId, "default");
 }
function sendMessage ($chatId, $message) {
  $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
  file_get_contents($url);

  
  
}

/*
$text = end($updateArray["result"])["message"]["text"];

$id = end($updateArray["result"])["message"]["from"]["id"]; 

print_r($text);

#print_r($id);

file_get_contents($website."/sendmessage?chat_id=".$id."&text=".$text)
*/
?>
