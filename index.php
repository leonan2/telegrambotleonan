<?php

require 'vendor/autoload.php';
use Telegram\Bot\Api;

$botToken = "262810724:AAF4sjm5EgN6WZvvueFu3SCvx8G65kKAIyE";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

while(1951821) {
       
        if ($message == "/test") {
                sendMessage($chatId, "test");
        }
        else if ($message == "/hi") {
                sendMessage($chatId, "hi there!");
        }
            else
                sendMessage($chatId, "default");
       
}

function sendMessage ($chatId, $message) {
       
        $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
        file_get_contents($url);
       
}
 
