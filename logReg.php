<?php include('backend/LoginRegister.php') ?>
<!DOCTYPE>  
<html>  
<head>  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="assets/img/icon.jpg" type="image/x-icon">
<link rel="stylesheet" href="assets/css/login.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<title>Splash</title>  
</head>  
<body style="background-image: url(assets/img/splash.jpg);"> 


<div class="login-reg-panel">
    <div class="login-info-box">
      <h2>Have an account?</h2>
      <p>Please Click the Login button</p>
      <label id="label-register" for="log-reg-show">Login/Register</label>
      <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
    </div>
              
    <div class="register-info-box">
      <h2>Don't have an account?</h2>
      <p>Please Click the register button.</p>
      <label id="label-login" for="log-login-show">Register</label>
      <input type="radio" name="active-log-panel" id="log-login-show">
    </div>
              
    <div class="white-panel">
      <div class="login-show">
        <h2>LOGIN</h2>
        <form method="post" action="logReg.php">
          <?php include('errors.php'); ?>
        <input type="text" placeholder="username" name="username" value="<?php echo $username; ?>" required="required">
        <input type="password" placeholder="Password" name="psw" required="required">
        <input type="submit" name="login-user" value="Login">
        
        </form>
      </div>
      <div class="register-show">
        <h2>REGISTER</h2>
        <form action="logReg.php" method="post">
       
        <input type="text" placeholder="Register with username" name="username" required="required" value="<?php echo $username; ?>"><br>
        <!-- <input type="email" placeholder="Email" name="email" required="required" value="<?php echo $email; ?>"><br> -->
        <input type="password" placeholder="Password" name="psw1" required="required"><br>
        <input type="password" placeholder="Confirm Password" name="psw2" required="required"><br>
        <input type="submit" value="Register" name="reg-user">
        </form>
      </div>
    </div>
  </div>
  <!-- Declaring script
 -->
<script type="text/javascript">
   $(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});
  
</script>
</body>  
</html>