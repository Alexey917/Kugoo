<?php
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "5780567825:AAHzEvu1zlHhpmuzopIjvI2eI9d1YOXQWt4";
$chat_id = "-641282664";

$formData = array(
  "Телефон: " => $user_phone
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