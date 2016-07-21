<?php

$botToken = "262810724:AAF4sjm5EgN6WZvvueFu3SCvx8G65kKAIyE";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');

$updateArray = json_decode($update, TRUE);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];
$message = $update["message"]["text"];

switch($message) {
       
        case "/test":
                $texto = "teste";
                break;
        case "/hi":
                $texto = "hi";
                break;
        default:
                $texto = "default";
       
}

file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=$texto");

