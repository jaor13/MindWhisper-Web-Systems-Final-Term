<?php
    session_start();

    if(isset($_SESSION["user"])){
        header("Location: dashboard.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="assets/images/favicon_io/favicon.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Login Form</title>
    <meta name="description" content="Login Form for MindWhisper - Your platform for mental health support. Login to access our comprehensive services.">
    <meta name="keywords" content="login, MindWhisper, mental health, support, login form">

    <link rel="stylesheet" href="styles.css/login-signup/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <section class="container-fluid forms">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10 form login">
                <div class="form-content">
                    <header>
                        <div class="image-container">
                            <img src="assets/images/login/login-image.svg">
                        </div>
                        <h1 class="text-center">Login to your MindWhisper Account</h1>
                    </header>

                    <?php
                        if(isset($_POST["login"])){
                            $email = $_POST["email"];
                            $password = $_POST["password"];
                            require_once 'connect.php';
                            $sql = "SELECT * FROM users_db WHERE email = '$email'";

                            $result = mysqli_query($conn, $sql);
                            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                            if ($user) {
                                if (password_verify($password, $user['password'])) {
                                    session_start();
                                    $_SESSION["user"] = $user['email']; // Store the email in the session
                                    header("Location: dashboard.php");
                                    die();
                                } else {
                                    echo '<div class="alert alert-danger">Password is incorrect</div>';
                                }
                            } else {
                                echo '<div class="alert alert-danger">Email is not registered</div>';
                            }
                        }
                    ?>

                    <form action="login.php" method="post">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group"> 
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                            <i class="bx bx-hide eye-icon"></i>
                        </div>
                        <div class="form-group">
                            <a href="#" style="font-size: small; margin-left: 3px;" class="forgot-pass ">Forgot password?</a>
                        </div>
                        <div class="form-group">
                            <input type="submit" style="font-weight: 600;"  name="login" id="form-btn-1"  value="Login" ></input>
                        </div>
                    </form>
                    <div class="form-group text-center" style="font-size: small;">
                        <span>Don't have an account? <a href="signup.php" class="signup-link">Sign-up</a></span>
                    </div>
                </div>
                <div class="media-options" style="padding: 5px 30px 3px 30px;">
                    <a href="#" class="facebook">
                        <i class="bx bxl-facebook facebook-icon"></i>
                        <span>&nbsp;Continue with Facebook</span>
                    </a>
                </div>
                <div class="media-options" style="padding: 5px 30px 7px 30px;">
                    <a href="#" class="google">
                        <i class="bx bxl-google google-icon"></i>
                        <span>&nbsp;Continue with Google</span>
                    </a>
                </div>
            </div>
    </section>

    <script>
        pwShowHide = document.querySelectorAll(".eye-icon"),    
        pwShowHide.forEach(eyeIcon => {
            eyeIcon.addEventListener("click", () => {
                let pwField = eyeIcon.previousElementSibling; 
                
                if (pwField.type === "password") {
                    pwField.type = "text";
                    eyeIcon.classList.replace("bx-hide", "bx-show");
                } else {
                    pwField.type = "password";
                    eyeIcon.classList.replace("bx-show", "bx-hide");
                }
            });
        });  
    
        document.addEventListener("DOMContentLoaded", function() {
            document.addEventListener("keydown", function(event) {
                console.log("Key pressed at: " + new Date().toLocaleString());
            });

            document.addEventListener("click", function(event) {
                console.log("Clicked at: " + new Date().toLocaleString());
            });
        });
    </script>

</body>
</html>