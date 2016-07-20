<?php

$botToken = "262810724:AAF4sjm5EgN6WZvvueFu3SCvx8G65kKAIyE";
$website = "https://api.telegram.org/bot".$botToken;

?>

<form action="<?php echo $website.'/sendPhoto' ?>" method="post" enctype="multipart/form-data">

  <input type="text" name="chat_id" value="239528113" />
  <input type="file" name="photo" />
  <input type="submit" value="Enviar" />

</form>
