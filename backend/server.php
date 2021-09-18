<?php
$db = mysqli_connect('localhost', 'root', '', 'finsensetask');

// Check connection
if ($db -> connect_errno) {
  echo "Failed to connect to MySQL: " . $db -> connect_error;
  exit();
}
?>