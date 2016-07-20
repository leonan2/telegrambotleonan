<?php

$botToken = "262810724:AAELbOXZZext7xBrQoOXT7WJWdJQLUFwPjk";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');
$updateArray = json_decode($update, TRUE);


$chatId = $updateArray["result"][0]["message"]["chat"]["id"];
$message = $update["message"]["text"];


switch($message) {
	
	case "/test":
		sendMessage($chatId, "test");
		break;
	case "/hi":
		sendMessage($chatId, "hi there!");
		break;
	default: 
		sendMessage($chatId, "default");
	
}

function sendMessage ($chatId, $message) {
	
	$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message);
	file_get_contents($url);
	
}
 

