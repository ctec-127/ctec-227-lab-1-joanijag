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
// Display variable information.
if (isset($_SESSION['views'])) {
    echo "<P>You have made " . $_SESSION['views'] . " views.</P>";
} else {
    echo "<P>You have deleted your views.</p>";
}

if (isset($_SESSION['browser'])) {
    echo "<P>The version of your browser is " . $_SESSION['browser'] . ".</p>";
} else {
    echo "<P>You have deleted my ability to see your browser information.</p>";
}

if (isset($_SESSION['role'])) {
    echo "<P>Your role is set to " . $_SESSION['role'] . ".<p/>";
} else {
    echo "<P>You have deleted your role.</p>";
}

?>
<!-- Links to the other pages -->
<p>Click <a href="destroy_session.php"><strong>here</strong></a> to <strong>destroy</strong> your session information and go to the Destroy Sessions page.</p>

  <p>Click <a href="create_session.php"><strong>here</strong></a> to go to the Create Sessions page.</p>

  <p>Click <a href="destroy_all_session.php"><strong>here</strong></a> to go to the Destroy All Sessions page.</p>
</body>
</html>