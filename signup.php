


<?php

include "config/constants.php";

//get beck form DATA IF THERE IS A REGISTRATION ERROR
$firstname=$_SESSION['signup-data']['firstname'] ?? null;
$lastname=$_SESSION['signup-data']['lastname'] ?? null;
$username=$_SESSION['signup-data']['username'] ?? null;
$email=$_SESSION['signup-data']['email'] ?? null;
$createpassword=$_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;


//delete signup data session
unset($_SESSION['signup-data']);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IdaaxTools Resellers</title>
	<link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= ROOT_URL ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= ROOT_URL ?>assets/css/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= ROOT_URL ?>assets/css/app.css">
    <link rel="stylesheet" href="<?= ROOT_URL ?>assets/css/pages/auth.css">
    
    <style>
         body{
            height:100vh;
            background-image: url('<?= ROOT_URL ?>assets/back.jpg');
            background-position:bottom left;
            background-repeat:no-repeat;
            background-size: cover;
        }
 
 div > h1{
            color:white;
            font-variant: small-caps;
        }
 
        .alert__message {
  padding: 0.8rem 1.4rem;
  margin-bottom: 1rem;
  border-radius: 0.5rem;
}

.alert__message.error {
  background:  hsl(346, 87%, 46%, 15%);
  color: red;
}

.alert__message.success {
  background: hsl(156, 100%, 38%, 15%);
  color: green;
}

.alert__message.lg {
  text-align: center;
}


    </style>
    
</head>

<body>
    <div id="auth">

        <div class="row h-100" style="
    display: flex;
    align-items: center;
    justify-content: center;
">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <h1 class="auth-title">  Sign-up</h1>
                    <center>

        <?php
        if(isset($_SESSION['signup'])): ?> 
            <div class="alert__message error">
            <p>
                <?= $_SESSION['signup'];
                unset($_SESSION['signup']);
                ?>
            </p>
            
            </div>
        
        <?php endif ?>
					</center>

                    <form method="POST" action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data">
                    
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="firstname" id="username_email" placeholder="First Name" autocomplete="off" requireed>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="lastname" id="password" placeholder="Last Name" autocomplete="off" requireed>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="username" id="username_email" placeholder="Username" autocomplete="off" requireed>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" name="email" id="password" placeholder="Email" autocomplete="off" requireed>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="createpassword" id="username_email" placeholder="Password" autocomplete="off" requireed>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="confirmpassword" id="password" placeholder="Confirm Password" autocomplete="off" requireed>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
 

                        <div class="form-group position-relative has-icon-left mb-4">
                        <div class="form__control">
                            <input type="file" name="avatar" class="form-control form-control-xl"   id="avatar">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                                <small>You already Have an account an account? <a href="signin.php">Sign in</a></small>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign up</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
</body>

</html>