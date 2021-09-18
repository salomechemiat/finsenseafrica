<?php include('backend/LoginRegister.php') ?>
<?php
    $status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
  // $id = $_SESSION['id'];
}else
if($status == PHP_SESSION_DISABLED){
    //Sessions are not available
}

?>
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
  <a href="home.php" class="w3-bar-item w3-button" >Home</a>
  <a href="logReg.php" class="w3-bar-item w3-button w3-hover-none w3-text-black w3-hover-text-white">login/Register</a>
  
  <a href="backend/logout.php" class="w3-bar-item w3-button w3-hover-none w3-text-black w3-hover-text-white" style=" float: right; color: red;"><i class="fa fa-sign-out w3-hover-white" style="font-size:24px;color:black"></i>Logout</a>  
</div>



<div style="margin-bottom: 1%;" >
 <?php

if(isset($_SESSION['uid'])){
?>
  <a style="margin-left: 45%;background-color: #d68f42; " href="index.php">Welcome <?php echo $_SESSION["username"]; ?></a>
 <?php
}else echo  "Please login to enjoy our services";
  
?>
  </div>

<!-- Retrive data. -->
<?php  
  //Include the connection file
  include ('backend/server.php');

// Check connection

  // $Category=$_POST['category'];

//$user=$_SESSION['username'];
$sql="SELECT FROM posts";
$result = mysqli_query($db,$sql);
$result = mysqli_query($db, "SELECT * FROM posts ");
if (mysqli_num_rows($result)> 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        $Post = $row["Post"];
        $Blog = $row["Blog"];
        $pdate = $row["pdate"];
        $Portid = $row["Portid"];
        $Postid = $row["Postid"];
        
?> 
<div class="container" style="background-color: #017af5;">
  
  <div class="row">
    <div class="col col-xs-12">



 
                        <div class="blog-grids">
                            <div class="grid">
                                
                                <div class="entry-body">
                                    <span class="cat"><?php echo $Post?></span>
                                    <h3><a href="http://csshint.com/beautiful-css3-buttons-with-hover-effects/" target="_blank"><?php echo $Blog?></a></h3>
                                    <p>Posted at:<?php echo $pdate?></p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<?php
}
?>
<?php

}
 else {
echo "No Current Blogs";
}



?> 
                           
</div>
</body>  
</html>