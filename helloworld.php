<!doctype html>
<html>
<head>

    <title>Hello World and More</title>
    <meta charset='utf-8'>

</head>
<body>

<?php
  echo '<h1>Hello World!</h1>';
  echo '<h2>This is a canonical hello page to test my server.</h2>';
  echo '<h3> We are also going to do a few basic but more interesting things... </h3>';
?>

<?php
  echo 'The requesting browser is: ';
  echo $_SERVER['HTTP_USER_AGENT'];
  echo '<br/>';
  echo 'The remote port is: ';
  echo $_SERVER['REMOTE_PORT'];
  echo '<br/>';
?>

<!-- Make a comment about which browser is being used -->
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo 'You are using Internet Explorer.<br/>';
} else {
    echo 'You are not using Internet Explorer.<br/>';
}
echo '<br/>';
?>

<!-- Check some interesting variables-->
<?php
  echo 'Server name: ';
  echo $_SERVER['SERVER_NAME'] . '<br/>';
  echo 'Document root: ';
  echo  $_SERVER['DOCUMENT_ROOT'].'<br/>';
?>

<!-- Test form function sending variables to action.php -->
<form action="action.php" method="post">
 <p>Your name: <input type="text" name="name" /></p>
 <p>Your age: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>

</body>
</html>
