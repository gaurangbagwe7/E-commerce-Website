<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Online shopping site in India: Shop Online for Mobile, Laptop, Watches, Books, Grocery  </title>
    <link rel="shortcut icon" type="image/png" href="icon.png" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="new-password style.css">
</head>
<body>
                <form action="new-password.php" method="POST" autocomplete="off" class="new-password-form">
                    <h2 class="text-center">New Password</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
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
                        <input type="password" name="password" required>
                        <span data-placeholder="Create new password"></span>
                    </div>
                    <div class="txtb">
                        <input type="password" name="cpassword" required>
                        <span data-placeholder="Confirm your password"></span>
                    </div>
                    <div>
                        <input type="submit" name="change-password" value="Change" class="cngbtn">
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