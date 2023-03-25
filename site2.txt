<!DOCTYPE html>
<html>
<head>
  <title>Ping Results</title>
</head>
<body>
  <h1>Ping Results</h1>
  <pre>
  <?php

    $output = Shell_Exec('powershell -ExecutionPolicy ByPass -NoProfile -Command ping www.google.com;ping www.facebook.com');
    echo "<pre>$output</pre>";
  ?>
  </pre>
</body>
</html>
