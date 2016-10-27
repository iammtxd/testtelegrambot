<?php

set_time_limit(0);

require_once 'PollBot.php';

define('BOT_TOKEN', '243977927:AAFYaTxEjr3UdKREGLH60FdV2SQUkuPJjX0');

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
