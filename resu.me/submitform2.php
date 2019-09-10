



<?php
// Initialize the session


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup_user";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
// Define variables and initialize with empty values
$usermail = $password = "";
$usermail_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["user_mail"]))){
        $usermail_err = "Please enter email.";
    } else{
        $usermail = trim($_POST["user_mail"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["user_password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["user_password"]);
    }
    
    // Validate credentials
    if(empty($usermail_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT user_id, user_mail, user_password FROM registered_user WHERE user_mail = ?";
        
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_usermail);
            
            // Set parameters
            $param_usermail = $usermail;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $usermail, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["user_id"] = $id;
                            $_SESSION["user_mail"] = $usermail;                            
                            
                            // Redirect user to welcome page
                            header("Location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            echo $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    echo $usermail_err = "No account found with that email.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
        
        //
    }
    
    // Close connection   
    mysqli_close($conn);
}
?>

