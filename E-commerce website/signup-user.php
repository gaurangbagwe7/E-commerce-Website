<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Online shopping site in India: Shop Online for Mobile, Laptop, Watches, Books, Grocery </title>
    <link rel="shortcut icon" type="image/png" href="icon.png" />
    <link rel="stylesheet" href="signup-user style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
                <form action="signup-user.php" method="POST" autocomplete="" class="signup-form">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="txtb">
                        <input type="text" name="name" required value="<?php echo $name ?>">
                        <span data-placeholder="Full Name"></span>
                    </div>
                    <div class="txtb">
                        <input type="email" name="email" required value="<?php echo $email ?>">
                        <span data-placeholder="Email Address"></span>
                    </div>
                    <div class="txtb">
                        <input type="password" name="password" required>
                        <span data-placeholder="Password"></span>
                    </div>
                    <div class="txtb">
                        <input type="password" name="cpassword" required>
                        <span data-placeholder="Confirm password"></span>
                    </div>
                    <div>
                        <input type="submit" name="signup" value="Signup" class="sginbtn">
                    </div>
                    <div class="bottom-text">Already a member? <a href="login-user.php">Login here</a></div>
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