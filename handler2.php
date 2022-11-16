<?php
$user_email = htmlspecialchars($_POST["useremail"]);

$token = "5751970620:AAHa8zm0oD3wQplXv4T9zfGowQ_TFaNFvdg";
$chat_id = "-641282664";

$formData = array(
  "Почта: " => $user_email,
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}