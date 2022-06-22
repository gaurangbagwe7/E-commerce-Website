<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Online shopping site in India: Shop Online for Mobile, Laptop, Watches, Books, Grocery  </title>
    <link rel="shortcut icon" type="image/png" href="icon.png" />
    <link rel="stylesheet" href="login-user style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
      <form action="login-user.php" method="POST" autocomplete="" class="login-form">
        <img class="logo" src="logo.png" />
	<h3>EXPERIENCE SHOPPING <br /> LIKE NEVER BEFORE</h3><br />
        <?php
        if(count($errors) > 0){
            ?>
            <div class="alert alert-danger text-center">
            <?php
            foreach($errors as $showerror){
               echo $showerror;
            }
            ?> 
      </div>
      <?php
     }
     ?>
        <div class="txtb">
          <input type="email" name="email" required value="<?php if(isset($_COOKIE['emailcookie'])) { echo $_COOKIE['emailcookie']; } ?>" value="<?php echo $email ?>">
          <span data-placeholder="Email Address"></span>
        </div>

        <div class="txtb">
          <input type="password" name="password" required value="<?php if(isset($_COOKIE['passwordcookie'])) { echo $_COOKIE['passwordcookie']; } ?>">
          <span data-placeholder="Password"></span>
        </div>
        
	<input type="checkbox" class="checkMark" checked="checked" name="rememberme">
	<label class="checkBox"> Keep me signed in </label>
	
	<a href="forgot-password.php" class="forgotPassword">Forgotten your password?</a>
	
        <input type="submit" name="login" class="logbtn" value="Login">

        <div class="bottom-text">
          Don't have account? <a href="signup-user.php">Signup now</a>
        </div>

      </form>

      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>


  </body>
</html>
