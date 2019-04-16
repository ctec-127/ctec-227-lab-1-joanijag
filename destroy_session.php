<?php
// ! Starts the sesson
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<?php
// Ensure that your page starts with a session_start().
// Write PHP code to unset the 3 session variables you set.
// if (isset($_SESSION['views'])) {
//     unset($_SESSION['views']);
// }
unset($_SESSION['views']);
unset($_SESSION['role']);
unset($_SESSION['browser']);

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
<p>Please click <a href="create_session.php"><strong>here</strong></a> to <strong>create</strong> new session information.</p>
<p>Click <a href="read_session.php"><strong>here</strong></a> to go to the Read Sessions page.</p>
<p>Click <a href="destroy_all_session.php"><strong>here</strong></a> to go to the Destroy All Sessions page.</p>
</body>
</html>