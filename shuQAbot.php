<?php
include("Telegram.php");
include("functions.php");

date_default_timezone_set("asia/tehran");
$bot_id = "1053774492:AAG94Kf0eeNgNwTvKEPAWZmdGQeVmCwUtRw";
$telegram = new Telegram($bot_id);
$AmirAbbasId = '104889061';
$pes6onlineGroupId = '-1001143890480';
$text = $telegram->Text();
$username = $telegram->Username();
$name = $telegram->FirstName();
$family = $telegram->LastName();
$message_id = $telegram->MessageID();
$user_id = $telegram->UserID();
$chat_id = $telegram->ChatID();