<?php
error_reporting(-1);
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email = $password = "";
$email_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate email
    // if(empty(trim($_POST["email"]))){
    //     $username_err = "Please enter a email.";
    // } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["email"]))){
    //     $username_err = "Username can only contain letters, numbers, and underscores.";
    // } else{
        // Prepare a select statement
        $sql = "SELECT id FROM user WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]); //ia valoarea email-ului din form
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    // }
    
    // Validate password
    // if(empty(trim($_POST["password"]))){
    //     $password_err = "Please enter a password.";     
    // } elseif(strlen(trim($_POST["password"])) < 6){
    //     $password_err = "Password must have atleast 6 characters.";
    // } else{
    //     $password = trim($_POST["password"]);
    // }
    $password = trim($_POST["password"]);
    
    // Validate confirm password
    // if(empty(trim($_POST["confirm_password"]))){
    //     $confirm_password_err = "Please confirm password.";     
    // } else{
    //     $confirm_password = trim($_POST["confirm_password"]);
    //     if(empty($password_err) && ($password != $confirm_password)){
    //         $confirm_password_err = "Password did not match.";
    //     }
    // }
    
    // Check input errors before inserting in database
    if(empty($email_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO user (email, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_password);
            
            // Set parameters
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
