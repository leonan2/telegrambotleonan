<?php

$botToken = "262810724:AAF4sjm5EgN6WZvvueFu3SCvx8G65kKAIyE";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);


$chatId = $update["message"]["chat"]["id"];
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




?>
