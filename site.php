<?php
echo "Ping Loading";
echo Shell_Exec('powershell -ExecutionPolicy ByPass -NoProfile -Command ping www.google.com;ping www.facebook.com');
echo "Ping Complete";
?>
