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
        $errors[] = "All fields are required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    if(strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters";
    }
    if($password != $confirm_password) {
        $errors[] = "Passwords do not match";
    }

    if(count($errors) > 0) {
        $response = array(
            "status" => "error",
            "message" => $errors
        );
    } else {
        // Perform account creation logic here
        // Assuming $account_creation_successful represents the success of the account creation process
        // Set $signup_successful based on the success of the account creation process
        $signup_successful = $account_creation_successful; // Replace $account_creation_successful with your actual condition
        
        if ($signup_successful) {
            $response = array(
                "status" => "success",
                "message" => "Account created successfully"
            );
            require_once 'connect.php';
        } else {
            $response = array(
                "status" => "error",
                "message" => "Error occurred while creating account"
            );
        }
    }

    // Send the response back as JSON
    echo json_encode($response);
} else {
    // Handle case where signup form is not submitted
    echo json_encode(array("status" => "error", "message" => "Signup form not submitted"));
}
?>
