<?php
include("Telegram.php");
include("functions.php");

date_default_timezone_set("asia/tehran");
$bot_id = "1053774492:AAG94Kf0eeNgNwTvKEPAWZmdGQeVmCwUtRw";
$telegram = new Telegram($bot_id);
$AmirAbbasId = '104889061';
$pes6onlineGroupId = '-1001143890480';
$text = $telegram->Text(); // متنی که کاربر ارسال میکنه
$username = $telegram->Username(); // نام کاربری کاربر
$name = $telegram->FirstName();
$family = $telegram->LastName();
$message_id = $telegram->MessageID(); // هر پیغام در تلگرام یک آیدی یکتا دارد
$user_id = $telegram->UserID(); // آیدی یکتای کاربر
$chat_id = $telegram->ChatID(); // آیدی مکانی که چت صورت میگیرد، مثل خود بات یا آیدی گروه
