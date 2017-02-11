<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$time = date("h:i:s",time());
echo "data: The server time is: {$time}\n\n";
flush();