
<?php
include 'config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);
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
                    <h1 class="auth-title">Sign-in</h1>
                    <center>
                    <?php
        if(isset($_SESSION['signup-success'])): 
        ?> 
            <div class="alert__message success">
            <p>
                <?= $_SESSION['signup-success'];
                unset($_SESSION['signup-success']);
                ?>
            </p>
            </div>
        <?php elseif(isset($_SESSION['signin'])): ?>
            <div class="alert__message error">
                <p>
                    <?=$_SESSION['signin'];
                    unset($_SESSION['signin']); 
                    ?>
                </p>
            </div>
        <?php endif; ?>
					</center>

                    <form method="post" action="<?= ROOT_URL ?>signin-logic.php">
                    
                    <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="username_email" id="username_email" placeholder="Email" autocomplete="off">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" name="password" id="password" placeholder="Password" autocomplete="off">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                                <small>Don't have an account? <a href="signup.php">Sign up</a></small>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
</body>

</html>