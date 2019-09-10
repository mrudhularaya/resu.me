 
<?php
// Include config file
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
$usermail = $password  = "";
$usermail_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["user_mail"]))){
        $usermail_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT user_mail FROM registered_user WHERE user_mail = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_usermail);
            
            // Set parameters
            $param_usermail = trim($_POST["user_mail"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $usermail_err = "This email is already taken.";
                } else{
                    $usermail = trim($_POST["user_mail"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
             mysqli_stmt_close($stmt);
        }
         
    }
    
    // Validate password
    if(empty(trim($_POST["user_password"]))){
        $password_err = "Please enter a password.";     
    }else{
        $password = trim($_POST["user_password"]);
    }
    
   
    // Check input errors before inserting in database
    if(empty($usermail_err) && empty($password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO registered_user (user_mail, user_password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_usermail, $param_password);
            
            // Set parameters
            $param_usermail = $usermail;
            $param_password = password_hash($password, PASSWORD_BCRYPT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("Location: details.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
}
?>