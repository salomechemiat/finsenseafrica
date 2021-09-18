<?php


include_once 'server.php';
include_once 'LoginRegister.php';

$username = "";
 
// Escape user inputs for security
//session_start();
//$id = $_SESSION['id'];
$id = $_SESSION["uid"];



if (isset($_POST['update'])) {
$uname = mysqli_real_escape_string($db, $_POST['uname']);
$blog = mysqli_real_escape_string($db, $_POST['blog']);
$Postid = mysqli_real_escape_string($db, $_POST['Postid']);





$sql="UPDATE `posts` SET `Post`='$uname',`blog`='$blog' WHERE Postid = '$Postid'  AND Portid ='$id' ";

if($db->query($sql) === true){

	unset($_SESSION['username']);
			$_SESSION['username']=$username;
			 header("location:../posts.php");
			//echo $sql;
			//echo $id;

			 
			 

			 }
		
	 else{
    echo "ERROR: Could not to execute $sql. " . $db->error;
}

}
// attempt insert query execution


 
// Close connection
$db->close();
?>
