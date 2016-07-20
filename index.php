<?php

$botToken = "262810724:AAF4sjm5EgN6WZvvueFu3SCvx8G65kKAIyE";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

$updateArray = json_decode($update, TRUE);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=$chatId");
print_r($updateArray);
