<?php

/* $botToken = "262810724:AAF4sjm5EgN6WZvvueFu3SCvx8G65kKAIyE";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

$updateArray = json_decode($update, TRUE);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=Oi, tudo bem?");
print_r($updateArray); */

ini_set('error_reporting', E_ALL);
 
$botToken = "262810724:AAF4sjm5EgN6WZvvueFu3SCvx8G65kKAIyE";
$website = "https://api.telegram.org/bot".$botToken;
 
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
 
 
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
 
 
/*switch($message) {
       
        case "/test":
               
                break;
        case "/hi":
                sendMessage($chatId, "hi there!");
                break;
        default:
                sendMessage($chatId, "default");
       
}*/

if ($message == "/test") {
   sendMessage($chatId, "test");
}
else {
   sendMessage($chatId, "hi there!");
}

 
function sendMessage ($chatId, $message) {
       
        $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
        file_get_contents($url);
       
}
