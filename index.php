<?php

$botToken = "262810724:AAELbOXZZext7xBrQoOXT7WJWdJQLUFwPjk";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");
$updateArray = json_decode($update, TRUE);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

file_get_contents($website."/sendmessage?chat=id=".$chatId."&text=test");


?>
