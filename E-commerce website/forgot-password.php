<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Online shopping site in India: Shop Online for Mobile, Laptop, Watches, Books, Grocery </title>
    <link rel="shortcut icon" type="image/png" href="icon.png" />
    <link rel="stylesheet" href="forgot-password style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
                <form action="forgot-password.php" method="POST" autocomplete="" class="forgot-password-form">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="txtb">
                        <input type="email" name="email" required value="<?php echo $email ?>">
                        <span data-placeholder="Enter email address"></span>
                    </div>
                    <div>
                        <input button" type="submit" name="check-email" value="Continue" class="cntbtn">
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