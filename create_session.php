<?php
# !start sessions
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
# define 3 session varables
#looks to see if $_SESSION['views'] exists. If not, it creats the variable in the server.
if (!isset($_SESSION['views'])) {
    $_SESSION['views'] = 0;
}
#looks to see if $_SERVER['HTTP_USER_AGENT'] exists. If not, it creats the variable in the server.
if (!isset($_SESSION['browser'])) {
    $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
}
#looks to see if $_SESSION['role'] exists. If not, it creats the variable in the server.
if (!isset($_SESSION['role'])) {
    $_SESSION['role'] = 'admin';
}

#this increments the variable each time the page is viewed/resreshed in one session.
$_SESSION['views'] = $_SESSION['views'] + 1;
// Display variable information.
echo "<p>You have made " . $_SESSION['views'] . " views.</p>";

echo "<p>The version of your browser is " . $_SESSION['browser'] . ".</p>";

echo "<p>Your role is set to " . $_SESSION['role'] . ".</p>";

?>
<!-- Links to the other pages -->
  <P>Click <a href="read_session.php"><strong>here</strong></a> to go to the Read Sessions page.</p>
  <P>Click <a href="destroy_session.php"><strong>here</strong></a> to go to the Destroy Sessions page.</p>
  <P>Click <a href="destroy_all_session.php"><strong>here</strong></a> to go to the Destroy All Sessions page.</p>
  
</body>
</html>