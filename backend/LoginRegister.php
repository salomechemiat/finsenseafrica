<?php
$status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
    //$id = $_SESSION['id'];
    //cannot add session
}else
if($status == PHP_SESSION_DISABLED){
    //Sessions are not available
}

// initializing variables
$username = "";
$firstname = "";
$secondname = "";
$errors = array(); 
$_SESSION['success'] = "";

// connect to the database
include ('server.php');

$table = mysqli_query($db, "SELECT * FROM usertable ");

// REGISTER USER
if (isset($_POST['reg-user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['psw1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['psw2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  
  if (empty($password_1)) { array_push($errors, "Password is required"); }

  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM usertable WHERE username='$username'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  $users = mysqli_fetch_array($result,MYSQLI_ASSOC);

  
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
    

    
  }


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO usertable (username, password) 
  			  VALUES('$username', '$password')";
  	mysqli_query($db, $query);
    $_SESSION["uid"] = $users["Portid"];
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	//header('location: logReg.php');
    
    echo "<script type='text/javascript'>alert('You can now login');</script>";
    //echo "You can now login";
  }
  else
  {
    
  }
}

// ...
// LOGIN USER
if (isset($_POST['login-user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['psw']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
   // $_SESSION["Portid"] = $row["Portid"];
   // $_SESSION["username"] = $row["username"];
    $password = md5($password);
    $query = "SELECT * FROM usertable WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    $users = mysqli_fetch_array($results,MYSQLI_ASSOC);

    //$users = mysqli_fetch_assoc($results);

   
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION["uid"]  = $users['Portid'];
      $_SESSION['success'] = "You are now logged in";
      header('location: posts.php');
      //echo $users['Portid'];
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?> 