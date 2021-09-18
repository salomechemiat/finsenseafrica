<?php include('backend/LoginRegister.php') ?>

<!DOCTYPE>  
<html>  
<head>  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="assets/img/icon.jpg" type="image/x-icon">
<link rel="stylesheet" href="assets/css/posts.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!------ Include the above in your HEAD tag ---------->

<title>Splash</title>  
</head>  
<body > 
<div class="w3-bar w3-border-blue w3-blue" style="margin-bottom:2%; ">
  <a href="posts.php" class="w3-bar-item w3-button" >Home</a>
  <a href="logReg.php" class="w3-bar-item w3-button w3-hover-none w3-text-black w3-hover-text-white">login</a>
  <a href="add.php" class="w3-bar-item w3-button w3-hover-none w3-text-black w3-hover-text-white">Add post</a>
  <a href="backend/logout.php" class="w3-bar-item w3-button w3-hover-none w3-text-black w3-hover-text-white" style=" float: right; color: red;"><i class="fa fa-sign-out w3-hover-white" style="font-size:24px;color:black"></i>Logout</a>  
</div>
<div style="margin-bottom: 1%;" >
 <?php

if(isset($_SESSION['uid']) ){
?>
  <a style="margin-left: 45%;color: #d68f42; font-size: 100%; " href="dashboard.html">Welcome <?php echo $_SESSION["username"]; ?></a>
 <?php
}else{ echo '<script language="javascript">';
  echo 'alert(Are you a new user? Please Login to enjoy our services)';  //not showing an alert box.
  echo '</script>';}
?>
  </div>



<div class="container" style="background-color: #017af5;">
  
  <div class="row">
    <form action="backend/insert.php" method="post">
      <h1>ADD BLOG</h1>
      <!-- <div class="icon">
        <i class="fa fa-user-circle"></i>
      </div> -->
      <div class="formcontainer">
      <div class="container">
        <input type="text"   name="Portid" hidden><br>
        <label for="uname"><strong>Portname</strong></label>
        <input type="text" placeholder="Enter Port name" name="Post" required>
        <label for="mail"><strong>Blog</strong></label>
        <input type="text" placeholder="Enter Blog" name="blog" required>
        <!-- <label for="psw"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="psw" required> -->
      </div>
      <button type="submit" name="add"><strong>Add blog</strong></button>
      
    </form>
    </div>
</div>
</body>  
</html>