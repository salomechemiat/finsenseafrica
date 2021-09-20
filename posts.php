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
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
  body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #d68f42;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

</style>
<title>Splash</title>  
</head>  
<body > 
<div class="w3-bar w3-border-blue w3-blue" style="margin-bottom:1%; ">
  <a href="index.php" class="w3-bar-item w3-button" >Home</a>
  <a href="logReg.php" class="w3-bar-item w3-button w3-hover-none w3-text-black w3-hover-text-white">login</a>
  <a href="add.php" class="w3-bar-item w3-button w3-hover-none w3-text-black w3-hover-text-white">Add Blog</a>
  <a href="backend/logout.php" class="w3-bar-item w3-button w3-hover-none w3-text-black w3-hover-text-white" style=" float: right; color: red;"><i class="fa fa-sign-out w3-hover-white" style="font-size:24px;color:black"></i>Logout</a>  
</div>

<div style="margin-bottom: 1%;" >
  <!-- Declaring session
 -->
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


 <?php  
  //Include the connection file
  include ('backend/server.php');

// Check connection

  // $Category=$_POST['category'];

$user=$_SESSION['uid'];
$sql="SELECT FROM posts";
$result = mysqli_query($db,$sql);
$result = mysqli_query($db, "SELECT * FROM posts ORDER BY pdate DESC limit 10 ");
if (mysqli_num_rows($result)> 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        $Post = $row["Post"];
        $Blog = $row["Blog"];
        $pdate = $row["pdate"];
        $Portid = $row["Portid"];
        $Postid = $row["Postid"];
        $uname = $row["uname"];
        

        
?>  
<div class="container" style="background-color: #017af5;">
 
  <div class="row">

    <div class="col col-xs-12">
                        <div class="blog-grids">

                            <div class="grid">


                              <div class="entry-body">
                               
<p style="margin-top: -2%; color: #d68f42;"><?php echo $uname?></p>  
<span class="cat" style="color: black;"><?php echo $Post?></span>

<p><?php echo $Blog?></p>
<div class="read-more-date">
<span class="date"> Posted at:<?php echo $pdate?></span>
</div>
<?php

if(isset($_SESSION['uid']) && $_SESSION['uid'] == $row["Portid"] ){
?>

<button onclick="openForm()" class="edit_btn" style="visibility: visible;"><i style='font-size:24px' class='far'>&#xf044;</i></button>


<a href="backend/delete.php?id=<?php echo $row["Postid"]; ?>" onclick="return confirm('Are you sure to delete?');" class="del_btn" style="visibility: visible;"><i class='fas fa-trash' style='font-size:24px;color:red'></i></a>

<div class="form-popup" id="myForm">
  <form action="backend/edit.php" class="form-container" method="post">
    
    <h1>Update</h1>

    <input type="text"  name="Postid" value="<?php echo $row["Postid"]; ?>" hidden >
    <input type="text"  name="username" value="<?php echo $row["uname"]; ?>" >
    <input type="text" name="uname" value = "<?php echo $row["Post"]; ?>">

    <input type="text" placeholder="Update Blog" name="blog" value=<?php echo $row["Blog"]; ?> >

    <button type="submit" class="btn" name="update" >Update</button>

    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<?php
}else echo "";
?>   

                                        
                                         

             

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





  <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>  
</html>