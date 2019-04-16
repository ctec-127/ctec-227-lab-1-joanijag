<?php
// !start sessions
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php
session_destroy();

?>
  <p>Click <a href="create_session.php"><strong>here</strong></a> to go to the Create Sessions page.</p>

  <p>Click <a href="read_session.php"><strong>here</strong></a> to go to the Read Sessions page.</p>

  <p>Click <a href="destroy_session.php"><strong>here</strong></a> to go to the Destroy Sessions page.</p>

</body>
</html>