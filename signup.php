<?php
    session_start();
    if(isset($_SESSION["user"])){
        header("Location: dashboard.php");
        exit(); 
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
        <title>Sign-Up Form</title>
        <meta name="description" content="Sign-Up Form for MindWhisper - Your platform for mental health support. Sign up to access our comprehensive services.">
        <meta name="keywords" content="sign up, MindWhisper, mental health, support,sign-up form">

        <link rel="stylesheet" href="styles.css/login-signup/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <section class="container-fluid forms">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10 form signup">
                    <div class="form-content">
                        <header>
                            <div class="image-container">
                                <img src="assets/images/login/login-image.svg">
                            </div>
                            <h1 class="text-center">Create your MindWhisper Account</h1>
                        </header>

                        <?php  
                            if(isset($_POST['signup'])) {
                                $full_name = $_POST['full-name'];
                                $address = $_POST['address'];
                                $email = $_POST['email'];
                                $password = $_POST['password-signup'];
                                $confirm_password = $_POST['confirm-password'];

                                $password_hash = password_hash($password, PASSWORD_DEFAULT);
                                $errors = array();

                                if (empty($full_name) || empty($address) || empty($email) || empty($password) || empty($confirm_password)) {
                                    array_push($errors, "All fields are required");
                                }
                                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                    array_push($errors, "Invalid email format");
                                }
                                if(strlen($password) < 8) {
                                    array_push($errors, "Password must be at least 8 characters");
                                }
                                if($password != $confirm_password) {
                                    array_push($errors, "Passwords does not match");
                                }

                                require_once 'connect.php';
                                $sql = "SELECT * FROM users_db WHERE email = '$email'";
                                $result = mysqli_query($conn, $sql);
                                $rowCount = mysqli_num_rows($result);
                                if($rowCount > 0) {
                                    array_push($errors, "Email already exists");
                                }

                                if(count($errors) > 0) {
                                    foreach($errors as $error) {
                                        echo "<div class='alert alert-danger'>$error</div>";
                                    }
                                } else {
                                    require_once 'connect.php';

                                    $sql = "INSERT INTO users_db (full_name, address, email, password) VALUES (?,?,?,?)";
                                    $stmt =mysqli_stmt_init($conn);
                                    $prepare_stmt = mysqli_stmt_prepare($stmt, $sql);

                                    if($prepare_stmt) {
                                        mysqli_stmt_bind_param($stmt, "ssss", $full_name, $address, $email, $password_hash);
                                        mysqli_stmt_execute($stmt);
                                        echo "<div class= 'alert alert-success'>Account created successfully</div>";
                                    } else {
                                        echo "Something went wrong. Please try again later.";
                                    }
                                }  
                            }               
                        ?>

                        <form action="signup.php" method="post">
                            <div class="form-group">
                                <label for="full-name">Full Name</label>
                                <input type="text" class="form-control" name="full-name" id="full-name" required placeholder="Enter your full name">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" id="address" required placeholder="Enter your address">
                            </div>
                            <div class="form-group">
                                <label for="signup-email">Email</label>
                                <input type="email" class="form-control" name="email" id="signup-email" required placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="signup-password">Password</label>
                                <input type="password" class="form-control" id="signup-password" name="password-signup" required placeholder="At least 8 characters">
                                <i  id="second-eye-1" class="bx bx-hide eye-icon"></i>
                            </div>
                            <div class="form-group">
                                <label for="confirm-password">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Enter password again">
                                <i id="second-eye-2" class="bx bx-hide eye-icon"></i>
                            </div>
                            <div class="form-group">
                                <input type="submit" style="font-weight: 600;" name="signup"  id="form-btn-2" value="Signup"></input>
                            </div>
                        </form>
                        <div class="form-group text-center" style="font-size: small;">
                            <span>Already have an account? <a href="login.php" class="login-link">Login</a></span>
                        </div>
                    </div>
                    <div class="media-options" style="padding: 5px 30px 3px 30px;">
                        <a href="#" class="facebook">
                            <i class="bx bxl-facebook facebook-icon"></i>
                            <span>&nbsp;Signup with Facebook</span>
                        </a>
                    </div>
                    <div class="media-options" style="padding: 5px 30px 7px 30px;">
                        <a href="#" class="google">
                            <i class="bx bxl-google google-icon"></i>
                            <span>&nbsp;Signup with Google</span>
                        </a>
                    </div>
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
