<?php

//session_start();
include ('server.php');
include('LoginRegister.php'); 


$id = $_SESSION['uid'];
$Post = mysqli_real_escape_string($db, $_REQUEST['Post']);
$blog = mysqli_real_escape_string($db, $_REQUEST['blog']);
$sql = "INSERT INTO posts (Post, Blog, Portid) VALUES ('$Post', '$blog', '$id')";

if(mysqli_query($db, $sql)){
     header('location: ../posts.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
?>