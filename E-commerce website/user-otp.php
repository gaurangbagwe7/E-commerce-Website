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
    <link rel="stylesheet" href="user-otp style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
                <form action="user-otp.php" method="POST" autocomplete="off" class="user-otp-form">
                    <h2 class="text-center">Code Verification</h2>
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
                        <input class="form-control" type="number" name="otp" required>
                        <span data-placeholder="Enter verification code"></span>
                    </div>
                    <div>
                        <input class="sbtbtn" type="submit" name="check" value="Submit">
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