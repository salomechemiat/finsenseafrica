<?php
include_once 'LoginRegister.php';
//session_start();

$id =  $_SESSION['uid'];
$Postid=$_GET['id'];



$sql = "DELETE FROM posts WHERE Postid = '$Postid'  AND Portid ='$id'";



//else echo "<h1>Acces denied.</h1>";
/*else  {
	
	 echo '<script language="javascript">';
     echo 'alert(Access denied)';  //not showing an alert box.
     echo '</script>';
}*/
   

if (mysqli_query($db, $sql)) {
    header('location: ../posts.php');
} else {

    echo $sql . mysqli_error($db);
}
mysqli_close($db);
?>