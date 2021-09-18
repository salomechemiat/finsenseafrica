
<?php
session_start();
unset($_SESSION["uid"]);
unset($_SESSION["name"]);
session_destroy();
header("Location:../index.php");

?>